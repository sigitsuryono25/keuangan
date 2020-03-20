<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Master</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Input Data</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="<?php echo site_url('dashboard/input_klien_proses') ?>" method="POST">
                        <div class="form-group">
                            <label>Data Klien</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama Perusahaan</label>
                            <div class="col-xs-8">
                                <input name="nama_perusahaan" class="form-control" type="text" placeholder="Nama Perusahaan..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama Klien</label>
                            <div class="col-xs-8">
                                <input name="nama_klien" class="form-control" type="text" placeholder="Nama Klien..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Alamat</label>
                            <div class="col-xs-8">
                                <input name="alamat_klien" class="form-control" type="text" placeholder="Alamat Klien..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Email</label>
                            <div class="col-xs-8">
                                <input name="email_klien" class="form-control" type="text" placeholder="Email Klien..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Telepon</label>
                            <div class="col-xs-8">
                                <input name="telepon_klien" class="form-control" type="number" placeholder="Telepon Klien..." required>
                            </div>
                        </div>

                        <div class="from-group text-right">
                            <input type="submit" class="btn btn-success" value="Simpan" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->