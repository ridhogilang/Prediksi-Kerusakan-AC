@extends('layout.main')

@section('container')
    <section class="wrapper bg-light">
        <div class="container pt-8 pt-md-14">
            <!-- /.row -->

            <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-17 mb-lg-19">
                <div class="col-md-8 col-lg-6 position-relative">
                    <div class="shape bg-line red rounded-circle rellax w-18 h-18" data-rellax-speed="1"
                        style="top: -2.2rem; left: -2.4rem;"></div>
                    <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0"
                        style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                    <figure class="rounded"><img src="./assets/img/photos/about9.jpg"
                            srcset="./assets/img/photos/about9@2x.jpg 2x" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 col-xl-4 offset-lg-1">
                    <h2 class="display-4 mb-3">Bagaimana Caranya ?</h2>
                    <p class="lead fs-lg mb-6">Berikut adalah langkah-langkah untuk melakukan prediksi pada kerusakan ac
                        mobil anda.</p>
                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-circle btn-primary pe-none me-5"><span
                                    class="number fs-18">1</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Klik Mulai</h4>
                            <p class="mb-0">Anda akan diarahkan ke halaman prediksi.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-circle btn-primary pe-none me-5"><span
                                    class="number fs-18">2</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Login/Register</h4>
                            <p class="mb-0">Sebelum melakukan prediksi, Anda diharuskan login terlebih dahulu. Jika belum punya akun maka register terlebih dahulu.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <span class="icon btn btn-circle btn-primary pe-none me-5"><span
                                    class="number fs-18">3</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Memilih Gejala</h4>
                            <p class="mb-0">Anda diharuskan memilih beberapa gejala yanga telah disediakan Pada halaman
                                prediksi.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div><br>
                            <span class="icon btn btn-circle btn-primary pe-none me-5"><span
                                    class="number fs-18">4</span></span>
                        </div>
                        <div><br>
                            <h4 class="mb-1">Prediksi</h4>
                            <p class="mb-0">Setelah itu klik button "prediksi" maka hasil prediksi kerusakan ac mobil anda
                                akan keluar berdasarkan hasil dari gejala yang anda pilih seblumnya.</p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>

        </div>

    </section>
@endsection
