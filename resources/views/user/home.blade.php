@extends('layout.main')

@section('container')
<section class="wrapper bg-light">
    <div class="container pt-8 pt-md-14">
        <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
                <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1"
                    style="top: -1.7rem; left: -1.5rem;"></div>
                <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0"
                    style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
                <figure class="rounded"><img src="./assets/img/acmobil.jpg" srcset="./assets/img/acmobil.jpg 2x"
                        alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title"
                data-delay="600">
                <h1 class="display-1 mb-5">Platform Solusi Untuk Prediksi Kerusakan AC Mobil Anda</h1>
                <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0"></p>
                <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
                    data-group="page-title-buttons" data-delay="900">
                    <span><a href="/hitung" class="btn btn-lg btn-gradient gradient-7 rounded-pill me-2">Mulai</a></span>
                    <span><a href="/tutorial" class="btn btn-lg btn-outline-gradient gradient-6 rounded-pill">Tutorial</a></span>
                </div>
            </div>
            <!--/column -->
        </div>
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                <h2 class="fs-15 text-uppercase text-muted mb-3">What We Do?</h2>
                <h3 class="display-4 mb-10">The service we offer is specifically your needs.</h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-md-8 gy-8 text-center mb-14 mb-md-17">
            <div class="col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5"> <i class="uil uil-phone-volume"></i>
                </div>
                <h4>24/7 Support</h4>
                <p class="mb-3">Layanan Konsultasi Teknisi AC Mobil Berpengalaman dan Handal.</p>
                <a href="#" class="more hover">Learn More</a>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5"> <i
                        class="uil uil-shield-exclamation"></i> </div>
                <h4>Prediksi</h4>
                <p class="mb-3">Layanan Preediksi Kerusakan AC Mobil Anda.</p>
                <a href="#" class="more hover">Learn More</a>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5"> <i class="uil uil-laptop-cloud"></i>
                </div>
                <h4>Updates</h4>
                <p class="mb-3">Kami akan memberikan update untuk interval waktu perawatan AC Mobil Anda.</p>
                <a href="#" class="more hover">Learn More</a>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-5"> <i class="uil uil-chart-line"></i>
                </div>
                <h4>After Sales</h4>
                <p class="mb-3">Kami memberikan garansi setelah Anda melakukan perawatan dan perbaikan AC Mobil pada
                    kami.</p>
                <a href="#" class="more hover">Learn More</a>
            </div>

</section>
@endsection
