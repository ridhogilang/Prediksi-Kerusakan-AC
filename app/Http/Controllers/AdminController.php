<?php

namespace App\Http\Controllers;

use App\Models\DataTesting;
use App\Models\Label;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\TrainingData;


class AdminController extends Controller
{
    public function datatraining()
    {
        return view('admin.datatraining', [
            "title" => "Data Training",
            "data" => TrainingData::all()
        ]); 
    }

    public function tambahdata()
    {
        return view('admin.tambahdata', [
            "title" => "Tambah Data Training",
            "label" => Label::all()
        ]); 
    }

    public function adddata(Request $request)
    {
        $validatedData =  $request->validate([
            'G1' => ['required'],
            'G2' => ['required'],
            'G3' => ['required'],
            'G4' => ['required'],
            'G5' => ['required'],
            'G6' => ['required'],
            'G7' => ['required'],
            'G8' => ['required'],
            'G9' => ['required'],
            'G10' => ['required'],
            'G11' => ['required'],
            'G12' => ['required'],
            'G13' => ['required'],
            'G14' => ['required'],
            'G15' => ['required'],
            'label' => ['required'],
        ]);

        TrainingData::create($validatedData); 

        return redirect('/datatraining')->with('status', 'success');
    }

    public function deletedata($id)
    {
        $data = TrainingData::find($id);

        TrainingData::destroy($data->id);
        return redirect('/datatraining')->with('success', 'Relawan sudah berhasil dihapus');
    }

    //datalabel
    public function datalabel()
    {
        return view('admin.datalabel', [
            "title" => "Data Label",
            "data" => Label::all()
        ]); 
    }
    public function tambahlabel()
    {
        return view('admin.tambahlabel', [
            "title" => "Data Label",
            "data" => Label::all()
        ]); 
    }

    public function addlabel(Request $request)
    {
        $validatedData =  $request->validate([
            'label' => ['required'],
            'deskripsi' => ['required'],
            'probabilitas' => ['required'],
        ]);

        Label::create($validatedData); 

        return redirect('/datalabel')->with('status', 'success');
    }

    public function deletelabel($id)
    {
        $data = Label::find($id);

        Label::destroy($data->id);
        return redirect('/datalabel')->with('success', 'Relawan sudah berhasil dihapus');
    }

    public function datatesting()
    {
        return view('admin.datatesting', [
            "title" => "Data Testing",
            "data" => DataTesting::all()
        ]); 
    }

    public function registrasiadmin()
    {
        return view('admin.registrasi', [
            "title" => "Registrasi",
            "role" => Role::all()
        ]); 
    }
}
