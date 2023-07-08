@extends('layout.main')
<?php
$title = 'Perhitungan';
?>

@section('container')
    <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="mb-3 text-start">Welcome Back</h2>
                    <p class="lead mb-6 text-start">Fill your email and password to sign in.</p>
                    <form class="text-start mb-3">
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                            <label for="loginEmail">Email</label>
                        </div>
                        <div class="form-floating password-field mb-4">
                            <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                            <label for="loginPassword">Password</label>
                        </div>
                        <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign In</a>
                    </form>
                    <!-- /form -->
                    <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
                    <p class="mb-0">Don't have an account? <a href="#" data-bs-target="#modal-signup"
                            data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign up</a></p>
                    <div class="divider-icon my-4">or</div>
                    <nav class="nav social justify-content-center text-center">
                        <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                        <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i
                                class="uil uil-facebook-f"></i></a>
                        <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                    </nav>
                    <!--/.social -->
                </div>
                <!--/.modal-content -->
            </div>
            <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
    </div>
    <br><br>
    <div class="container offset-md-2">
        <div class="card shadow-xl card-border-start border-primary">
            <div class="card-body">
                <div class="row gy-6">
                    <h1>Masukan Data Kerusakan Mesin AC Anda</h1><br>
                    <form id="data-form" action="/hitung" method="POST">
                        @csrf
                        <div class="form-check">
                            <label class="form-check-label" for="feature1">AC Tidak Mau Menyala Saat Dihidupkan</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature1" name="G1"
                                {{ isset($_POST['G1']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature2">AC Hidup Tapi Tidak Dingin</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature2" name="G2"
                                {{ isset($_POST['G2']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature3">AC Hidup dan Dingin</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature3" name="G3"
                                {{ isset($_POST['G3']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature4">Suhu AC Kurang Dingin</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature4" name="G4"
                                {{ isset($_POST['G4']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature5">Hembusan AC Mengeluarkan Bau Apek/Tidak
                                Sedap</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature5" name="G5"
                                {{ isset($_POST['G5']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature6">AC Hidup Tapi Kompresor Tidak Bekerja</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature6" name="G6"
                                {{ isset($_POST['G6']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature7">AC Hidup Tapi Extra Fan Tidak Hidup</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature7"
                                name="G7" {{ isset($_POST['G7']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature8">AC Hidup dan dingin Tapi kecepatan blower tidak
                                bisa
                                diatur</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature8"
                                name="G8" {{ isset($_POST['G8']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature9">AC Hidup Kompresor Mengeluarkan Suara
                                Berisik</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature9"
                                name="G9" {{ isset($_POST['G9']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature10">AC Dingin Tetapi Hembusan Angin Pelan</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature10"
                                name="G10" {{ isset($_POST['G10']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature11">Suhu AC Meningkat Saat Mobil Berhenti</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature11"
                                name="G11" {{ isset($_POST['G11']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature12">Putaran Mesin Drop Ketika AC
                                Dihidupkan</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature12"
                                name="G12" {{ isset($_POST['G12']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature13">Ada Bekas Rembesan Oli Pada Kondensor</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature13"
                                name="G13" {{ isset($_POST['G13']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature14">Ada Bekas Rembesan Pada Selang/Pipa AC
                            </label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature14"
                                name="G14" {{ isset($_POST['G14']) ? 'checked' : '' }}>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="feature15">Suhu AC Tiba-Tiba Tidak Dingin Saat
                                digunakan</label>
                            <input class="form-check-input" type="checkbox" value="1" id="feature15"
                                name="G15" {{ isset($_POST['G15']) ? 'checked' : '' }}>
                        </div>
                        <br>
                        <button class="btn btn-gradient gradient-7 rounded-pill" type="submit"
                            name="submit">Prediksi</button>
                        <a href="" class="btn btn-gradient gradient-2 rounded-pill">Reset</a>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <h1>Data Pengguna</h1>
        <h1 id="hasil-prediksi"></h1>
        <div class="card shadow-xl card-border-top border-green">
            <div class="card-body">
                <div class="row gy-6">
                    <div class="col-lg-5">
                        <div class="form-floating mb-4">
                            <input id="textInputExample" type="text" class="form-control" placeholder="Text Input"
                                value="{{ auth()->user()->name }}" readonly>
                            <label for="textInputExample">Nama</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input id="textInputExample" type="text" class="form-control" placeholder="Text Input"
                                value="{{ auth()->user()->pekerjaan }}" readonly>
                            <label for="textInputExample">Nama</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input id="textInputExample" type="text" class="form-control" placeholder="Text Input"
                                value="{{ auth()->user()->umur }}" readonly>
                            <label for="textInputExample">Nama</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input id="textInputExample" type="text" class="form-control" placeholder="Text Input"
                                value="{{ auth()->user()->alamat }}" readonly>
                            <label for="textInputExample">Nama</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h1>Hasil Prediksi</h1>
        <h1 id="hasil-prediksi"></h1>
        <div class="card bg-soft-yellow card-border-bottom border-soft-yellow">
            <div class="card-body">
                <div class="row gy-6">
                    <div class="col-lg-10">
                        {!! nl2br($resultHtml) !!}
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
@endsection

@push('footer')
@endpush
