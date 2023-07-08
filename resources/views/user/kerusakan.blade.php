@extends('layout.main')

@section('container')
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-7 order-lg-5">
                    <figure><img class="w-auto" src="./assets/img/carakerjac.png" srcset="./assets/img/carakerjac.png"
                            alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="fs-15 text-uppercase text-line text-primary mb-3">Apa Saja Kerusakan Yang Umum Terjadi?
                    </h2>
                    <h3 class="display-5 mb-7">Sistem AC Mobil Memiliki Beberapa bagian penting agar dapat bekerja
                        secara optimal</h3>
                    <div class="accordion accordion-wrapper" id="accordionExample">

                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingOne">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">Modul Kontrol</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Modul kontrol AC berfungsi sebagai otak yang mengendalikan dari sistem AC mobil
                                        agar dapat berjalan secara optimal dan normal.</p>
                                </div>
                                <div class="card-body">
                                    <p>Kerusakan Umum :</p>
                                    <p>1. Kerusakan modul bahkan mati, Kemungkinan terjadi konsleting pada komponen</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingTwo1">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1"
                                    aria-expanded="false" aria-controls="collapseTwo1">Kompresor</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Kompresor AC bertugas untuk mengompresi refrigeran, yaitu zat pendingin, dan
                                        mendorongnya melalui sistem AC. Kompresor berfungsi untuk meningkatkan tekanan
                                        refrigeran sehingga dapat menghasilkan pendinginan yang efektif.</p>
                                    <p>Kerusakan Umum :</p>
                                    <p>1. Kompresor Macet, karena kekurangan pelumas</p>
                                    <p>2. Kompresor Tidak Bekerja, Kemungkinan terjadi Keruskan Pada MCP</p>
                                    <p>3. Kompresor Ngorok, karena terjadi keausan komponen.</p>
                                    <p>4. Kompresi Rendah, karena terjadi keausan komponen.</p>
                                    <p>5. Kebocoran Seal, karena terjadi keausan pada bagian seal.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingThree">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">Kondensor</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Kondensor terletak di depan kendaraan dan berfungsi untuk mendinginkan refrigeran
                                        yang telah dipanaskan oleh kompresor.</p>
                                    <p>Kerusakan Umum :</p>
                                    <p>1. Kondensor Bocor, karena terjadi korosi pada bagian kondensor</p>
                                    <p>2. Kondensor Mampet, karena terjadi Penyumbatan akibat kotoran</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingFour">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">Extra Fan</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Extra Fan Berfungsi untuk mendinginkan kondensor agar suhu dan takanan refigrand
                                        menurun.</p>
                                    <p>Kerusakan Umum :</p>
                                    <p>1. Motor Mati, karena terjadi kerusakan pada motor</p>
                                    <p>2. Motor Mati, karena terjadi kerusakan pada "Relay"</p>
                                    <p>3. Putaran Motor lambat, karena terjadi keasuan pada bagian motor</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingFive">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">Drier</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Dryer atau filter drier berfungsi untuk menyaring kelembaban dan kotoran yang
                                        mungkin ada dalam sistem AC mobil.</p>
                                    <p>Kerusakan Umum :</p>
                                    <p>1. Drier Mampet, Terjadi karena terlalu kotor dan perlu penggantian</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingSix">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">Expansi Valve</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Expansion valve berperan penting dalam mengatur aliran refrigeran yang masuk ke
                                        evaporator. Fungsinya adalah mengurangi tekanan refrigeran dari kondensor dan
                                        membatasi jumlah refrigeran yang mengalir ke evaporator. Hal ini memungkinkan
                                        refrigeran untuk menguap dengan cepat dan menciptakan pendinginan di dalam kabin
                                        mobil.</p>
                                    <p>Kerusakan Umum :</p>
                                    <p>1. Expansi Valve Mampet, Terjadi karena tersumbat kotoran dan peerlu penggantian
                                    </p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-collapse -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingSeven">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                    aria-expanded="false" aria-controls="collapseSeven">Evaporator</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Evaporator adalah komponen yang terletak di dalam kabin mobil. Tugas utamanya
                                        adalah menghilangkan panas dari udara di dalam mobil dengan menguapkan
                                        refrigeran cair yang melewati pipa-pipa kecil di dalamnya. Proses ini
                                        menghasilkan udara dingin yang kemudian ditiupkan ke dalam kabin mobil.</p>
                                    <p>Kerusakan Umum :</p>
                                    <p>1. Evaporator Bocor, Karena terjadi korosi pada bagian evaporator</p>
                                    <p>2. Evaporator Mampet, Karena terjadi penyumbatan yang disebabkan kotoran</p>
                                    <p>3. Evaporator Kotor, Terjadi karena telat pergantian filter kabin</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingTen">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                    aria-expanded="false" aria-controls="collapseTen">Motor Blower</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Berfungsi untuk Mendistribusikan udara dingin yang dihasilkan oleh evaporator ke
                                        berbagai saluran udara di dalam kabin mobil.</p>
                                    <p>Kerusakan Umum :</p>
                                    <p>1. Motor Blower Mati, Kemungkinan terjadi kerusakan pada bagian motor</p>
                                    <p>2. Hembusan Angin pelan, kemungkinan terjadi kerusakan pada bagian motor</p>
                                    <p>3. Hembusan Angin tidak bisa dikontrol, kemungkinan terjadi kerusakan pada
                                        "Resistor"</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingEight">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                    aria-expanded="false" aria-controls="collapseEight">LPS</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingeight"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Fungsi utama LPS adalah memutus aliran listrik ke kompresor ketika tekanan
                                        refrigeran terlalu rendah. Hal ini dilakukan untuk mencegah kerusakan pada
                                        kompresor akibat kerja berlebihan atau kekurangan pelumasan yang disebabkan oleh
                                        rendahnya tekanan refrigeran.</p>
                                    <p>Kerusakan Umum :</p>
                                    <p>1. LPS Mati, Kemungkinan Terjadi kerusakan</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingNine">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                    aria-expanded="false" aria-controls="collapseNine">Pipa Dan Selang</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p> Pipa dan selang menghubungkan semua komponen AC mobil dan mengalirkan refrigeran
                                        antara komponen tersebut.</p>
                                    <p>Kerusakan Umum :</p>
                                    <p>1. Pipa Bocor, Terjadi karena korosi pada bagian pipa</p>
                                    <p>2. Selang Bocor, Terjadi karena lapisan dan karet selang sudah lapuk.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                    <!--/.accordion -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
