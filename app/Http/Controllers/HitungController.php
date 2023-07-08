<?php

namespace App\Http\Controllers;

use App\Models\DataTesting;
use Illuminate\Http\Request;
use App\Models\TrainingData;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Label;

class HitungController extends Controller
{
    public function index()
    {
        $loggedInUsers = User::where('id', Auth::id())->get();

        $resultHtml = ""; // Initialize the variable with an empty string

        // Check if there is a prediction result
        if (session()->has('resultHtml')) {
            $resultHtml = session('resultHtml');
            session()->forget('resultHtml'); // Clear the session data
        }

        return view('user.hitung', [
            "title" => "Perhitungan",
            "resultHtml" => $resultHtml, // Pass the resultHtml variable to the view
            "user" => $loggedInUsers,
        ]);
    }


    public function predict(Request $request)
    {
        $tabellabel = Label::select('label')->get();

        $labels =[];

        foreach ($tabellabel as $row) {
            $labels[] = $row->label;
        }

        if ($request->isMethod('POST')) {
            // Inisialisasi array kosong untuk menyimpan input dari checkbox
            $userInput = [];

            // Menentukan nilai $jumlahG (jumlah checkbox)
            $jumlahG = 15; // Ubah nilai ini sesuai dengan jumlah checkbox yang ada

            // Loop untuk mendapatkan nilai dari checkbox yang terpilih
            for ($i = 1; $i <= $jumlahG; $i++) {
                $checkboxName = 'G' . $i;
                // Cek apakah checkbox terpilih
                if (isset($_POST[$checkboxName]) && $_POST[$checkboxName] === '1') {
                    // Tandai nilai 1 untuk checkbox terpilih
                    $userInput[] = 1;
                } else {
                    // Tandai nilai 0 untuk checkbox tidak terpilih
                    $userInput[] = 0;
                }
            }
            // Naive Bayes Classifier

            // Data training
            $Training = TrainingData::all();

            $dataTraining = [];
            foreach ($Training as $data) {
                $dataTraining[] = [
                    $data->G1,
                    $data->G2,
                    $data->G3,
                    $data->G4,
                    $data->G5,
                    $data->G6,
                    $data->G7,
                    $data->G8,
                    $data->G9,
                    $data->G10,
                    $data->G11,
                    $data->G12,
                    $data->G13,
                    $data->G14,
                    $data->G15,
                    $data->label
                ];
            }

            // Jumlah fitur
            $jumlahFitur = $jumlahG;

            // Prior Probabilities
            $prior = Label::select('label', 'probabilitas')->get();

            $priorProbabilities = [];

            foreach ($prior as $prior) {
                $priorProbabilities[$prior->label] = $prior->probabilitas;
            }

            // Hitung jumlah kelas
            $jumlahKelas = TrainingData::count();

            // Hitung total data training
            $totalDataTraining = count($dataTraining);

            // Inisialisasi array kosong untuk menyimpan hasil perhitungan probabilitas
            $probabilities = [];

            // Loop untuk menghitung probabilitas
            foreach ($labels as $label) {
                // Inisialisasi array kosong untuk menyimpan probabilitas
                $probabilities[$label] = [];

                // Loop untuk menghitung probabilitas tiap fitur
                for ($i = 0; $i < $jumlahFitur; $i++) {
                    // Hitung jumlah data training dengan fitur i dan label label
                    $jumlahDataTrainingFiturLabel = 0;
                    foreach ($dataTraining as $data) {
                        if ($data[$i] == 1 && $data[$jumlahFitur] == $label) {
                            $jumlahDataTrainingFiturLabel++;
                        }
                    }

                    // Hitung probabilitas P(Gi=1 | Label)
                    $probabilities[$label][$i] = ($jumlahDataTrainingFiturLabel + 1) / ($totalDataTraining + $jumlahKelas);
                }
            }

            // Hitung probabilitas P(Label)
            $labelProbabilities = [];
            foreach ($priorProbabilities as $label => $prior) {
                $labelProbabilities[$label] = $prior / $totalDataTraining;
            }

            // Hitung probabilitas P(G | Label)
            $inputProbabilities = [];
            foreach ($userInput as $i => $value) {
                foreach ($labels as $label) {
                    if (!isset($inputProbabilities[$i])) {
                        $inputProbabilities[$i] = [];
                    }
                    $inputProbabilities[$i][$label] = $probabilities[$label][$i] ** $value;
                }
            }

            // Hitung probabilitas P(Label | G)
            $labelGivenInputProbabilities = [];
            foreach ($labels as $label) {
                $labelGivenInputProbabilities[$label] = $labelProbabilities[$label];
                foreach ($userInput as $i => $value) {
                    $labelGivenInputProbabilities[$label] *= $inputProbabilities[$i][$label];
                }
            }

            // Normalisasi probabilitas
            $totalProbabilities = array_sum($labelGivenInputProbabilities);
            foreach ($labelGivenInputProbabilities as $label => $probability) {
                $labelGivenInputProbabilities[$label] = ($probability / $totalProbabilities) * 100;
            }

            // Tampilkan hasil prediksi
            arsort($labelGivenInputProbabilities); // Urutkan probabilitas dari yang terbesar ke terkecil
            $totalProbability = array_sum($labelGivenInputProbabilities); // Hitung total probabilitas

            $count = 0; // Hitung jumlah prediksi yang telah ditampilkan

            // Array asosiatif untuk memetakan nilai label ke teks
            $labelMap = Label::select('label', 'deskripsi')->get();

            $labelMapping = [];

            foreach ($labelMap as $labelMap) {
                $labelMapping[$labelMap->label] = $labelMap->deskripsi;
            }

            $formData = $request->all();

            $resultHtml = '';

            $count = 1; // Menambahkan variabel untuk melacak nomor data

            foreach ($labelGivenInputProbabilities as $label => $probability) {
                if ($count > 3) {
                    break;
                }
                $percentage = round(($probability / $totalProbability) * 100);

                if (isset($labelMapping[$label])) {
                    $labelText = $labelMapping[$label];
                } else {
                    $labelText = $label;
                }

                $resultHtml .= "$labelText = $percentage% <br>"; // Menambahkan tag <br> untuk pemisah baris
                $count++;
            }

            $validatedData = [];

            $selectedLabel = array_key_first($labelGivenInputProbabilities); // Mengambil label pertama sebagai label yang dipilih
            $selectedPercentage = round(($labelGivenInputProbabilities[$selectedLabel] / $totalProbability) * 100);

            $dataToStore = [];
            for ($i = 1; $i <= $jumlahG; $i++) {
                $checkboxName = 'G' . $i;
                if (isset($userInput[$i - 1]) && $userInput[$i - 1] === 1) {
                    $dataToStore['G' . $i] = 1;
                } else {
                    $dataToStore['G' . $i] = 0;
                }
            }
            $dataToStore['label'] = $selectedLabel;

            $validatedData = array_merge($validatedData, $dataToStore);

            // dd($validatedData);

            DataTesting::create($validatedData);

            $resultHtml .= "<br><strong>Ini adalah hasil prediksi dari data yang anda masukkan: $labelMapping[$selectedLabel] dengan probabilitas $selectedPercentage%</strong>";
            $resultHtml .= "<br><br><strong>Saran : <br><em> Segera lakukan konsultasi ke bengkel AC mobil terdekat di kota anda untuk memastikan hasil predisksi yang lebih akurat</em></strong>";

            // Mengembalikan hasil prediksi ke tampilan
            return view('user.hitung', compact('resultHtml'));
        }
    }
}
