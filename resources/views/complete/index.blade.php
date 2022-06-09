@extends('layout.main_template')

@section('content')
    <section class="content-header">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <div class="row d-inline-flex">
                                    <h3 class="card-title">Complete Selular</h3>
                                </div>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">

                                    </div>
                                </div>
                            </div>

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <div class="containier col-sm-12 mt-3 font-weight-bold text-center">
                                    <p class="p-3">Mengenal Perusahaan</p>
                                </div>
                                <div class="containier col-sm-6 mt-3 text-center mx-auto">
                                    <p>Complete Selular merupakan perusahaan penyedia jasa layanan telekomunikasi yang
                                        terbaik, terlengkap dan berkualitas.</p>
                                </div>
                                <div class="containier col-sm-6 text-center mx-auto">
                                    <p>Sejak didirikan pada tahun 2009, Complete Selular telah tumbuh menjadi salah satu
                                        perusahaan penyedia jasa layanan Telekomunikasi & Aksesoris Handphone terkemuka yang
                                        telah tersebar di lebih dari 60 cabang toko seluruh wilayah Indonesia. Complete
                                        Selular telah menemani masyarakat Indonesia melalui berbagai produk smartphone dan
                                        aksesoris berkualitas dengan harga yang kompetitif.</p>
                                </div>
                                <div class="containier mt-3 col-sm-12 font-weight-bold text-center">
                                    <p class="p-3">Complete Selular memiliki visi :</p>
                                </div>
                                <div class="containier mt-3 col-sm-6 font-italic text-center text-bold text-primary rounded bg-secondary border border-primary mx-auto">
                                    <p class="mt-3">“Menjadi perusahaan penyedia jasa layanan telekomunikasi yang terbaik dan berkualitas
                                        pelayanannya di seluruh dunia.”</p>
                                </div>
                                <div class="containier mt-3 col-sm-12 font-weight-bold text-center">
                                    <p class="p-3">Dengan misi :</p>
                                </div>
                                <div class="containier col-sm-6 mt-3 text-center mx-auto">
                                    <ul class="list-group mb-5">
                                        <li class="list-group-item list-group-item-info text-dark">Menjadikan kerja sebagai ibadah ikhlas</li>
                                        <li class="list-group-item list-group-item-info text-dark">Menjual produk yang berkualitas dengan harga kompetitif untuk kepuasan konsumen</li>
                                        <li class="list-group-item list-group-item-info text-dark">Memberikan pelayanan yang terbaik dan memuaskan bagi pelanggan dan mitra perusahaan</li>
                                        <li class="list-group-item list-group-item-info text-dark">Memberikan keuntungan yang berkesinambungan bagi perusahaan</li>
                                        <li class="list-group-item list-group-item-info text-dark">Mengembangkan SDM yang unggul dan berkualitas yang berkarakter positif, jujur, cerdas, disiplin dan bertanggung jawab</li>
                                        <li class="list-group-item list-group-item-info text-dark">Menciptakan budaya organisasi yang unggul</li>
                                        <li class="list-group-item list-group-item-info text-dark">Memberikan manfaat bagi masyarakat , bangsa dan negara</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
