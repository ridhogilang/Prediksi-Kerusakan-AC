@extends('layout.main')

@section('container')
    <section class="wrapper bg-light">
        <!-- /.container -->

        <!-- /.container-fluid -->
        <div class="container">
            <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-17 mb-lg-19">
                <div class="col-md-8 col-lg-6 position-relative">
                    <a href="./assets/media/movie.mp4"
                        class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute"
                        style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i
                            class="icn-caret-right"></i></a>
                    <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0"
                        style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                    <figure class="rounded"><img src="./assets/img/photos/about12.jpg"
                            srcset="./assets/img/photos/about12@2x.jpg 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 offset-lg-1">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Who Are We?</h2>
                    <h3 class="display-4 mb-6">Platform Yang Menyediakan Fitur Prediksi Kerusakan AC Mobil</h3>
                    <p class="mb-6">Hasil Prediksi kami berdasrkan riwayat data gejala-gejala keruskan ac mobil yang telah
                        kami daptkan dari bengkel dan teknisi terpercaya. Tetapi, hasil yang kami berikan mungkin saja bisa
                        berbeda dan tidak 100% benar karena faktor lainya.</p>>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-16 mb-md-17 mb-xl-20 align-items-center">
                <div class="col-lg-4">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Meet the Team</h2>
                    <h3 class="display-5 mb-5">Kami adalah team yang telah mengembangkan paltform ini.</h3>
                    {{-- <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac,
                        vestibulum at eros tempus porttitor.</p> --}}
                    <!-- <a href="#" class="btn btn-primary rounded-pill mt-3">See All Members</a> -->
                </div>
                <!--/column -->
                <div class="col-lg-8">
                    <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3"
                        data-items-md="2" data-items-xs="1">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="rounded-circle w-20 mx-auto mb-4" src="./assets/img/adi.jpeg"
                                        srcset="./assets/img/adi.jpeg 2x" alt="" />
                                    <h4 class="mb-1">Wahyu Raffli Adikusuma</h4>
                                    <div class="meta mb-2">Developer</div>
                                    <!-- <p class="mb-2">Etiam porta sem magna malesuada mollis.</p> -->
                                    <nav class="nav social justify-content-center text-center mb-0">
                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                        <a href="#"><i class="uil uil-slack"></i></a>
                                        <a href="#"><i class="uil uil-linkedin"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <img class="rounded-circle w-20 mx-auto mb-4" src="./assets/img/jihan.jpg"
                                        srcset="./assets/img/jihan.jpg 2x" alt="" />
                                    <h4 class="mb-1">Jihan Cahyani</h4>
                                    <div class="meta mb-2">Developer</div>
                                    <!-- <p class="mb-2">Aenean eu leo quam. Pellentesque ornare lacinia.</p> -->
                                    <nav class="nav social justify-content-center text-center mb-0">
                                        <a href="#"><i class="uil uil-youtube"></i></a>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                        <a href="#"><i class="uil uil-dribbble"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <img class="rounded-circle w-20 mx-auto mb-4" src="./assets/img/budosen.jpg"
                                        srcset="./assets/img/budosen.jpg 2x" alt="" />
                                    <h4 class="mb-1">Yumarlin MZ.</h4>
                                    <div class="meta mb-2">Lecture</div>
                                    <!-- <p class="mb-2">Donec ornare elit quam porta gravida at eget.</p> -->
                                    <nav class="nav social justify-content-center text-center mb-0">
                                        <a href="#"><i class="uil uil-linkedin"></i></a>
                                        <a href="#"><i class="uil uil-tumblr-square"></i></a>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                            </div>
                            <!--/.swiper-wrapper -->
                        </div>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <!-- <div class="card bg-soft-primary">
            <div class="card-body p-md-10 py-xxl-16 position-relative">
              <div class="position-absolute d-none d-lg-block" style="bottom:0; left:10%; width: 28%; z-index:2">
                <figure><img src="./assets/img/photos/co2.png" srcset="./assets/img/photos/co2@2x.png 2x" alt=""></figure>
              </div>
              <div class="row gx-md-0 gx-xl-12 text-center">
                <div class="col-lg-7 offset-lg-5 col-xl-6">
                  <span class="ratings five mb-3"></span>
                  <blockquote class="border-0 fs-lg mb-0">
                    <p>“Fusce dapibus tellus ac cursus commodo, tortor mauris condimentum nibh ut fermentum massa, justo sit amet vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed”</p>
                    <div class="blockquote-details justify-content-center text-center">
                      <div class="info p-0">
                        <h5 class="mb-1">Coriss Ambady</h5>
                        <div class="meta mb-0">Financial Analyst</div>
                      </div>
                    </div>
                  </blockquote>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <!--/.container -->
    </section>
@endsection
