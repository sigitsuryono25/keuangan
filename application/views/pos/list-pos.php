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
                    <h6 class="m-0 font-weight-bold text-primary">Data Klien</h6>
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
                    <form action="<?php echo site_url('dashboard/klien') ?>" method="POST">
                        <div class="form-group">
                            <div style="float:right">
                                <a href="<?php echo site_url('dashboard/input_klien_proses') ?>" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-md-12">
                                    <di class="table-responsive">
                                        <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="dataTables_length" id="datatable_length">
                                                        <label>Show</label>
                                                        <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>
                                                        <label>entries</label>

                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                <thead>
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="20%">ID Kategori</th>
                                        <th width="15%">Nama Pos</th>
                                        <th width="12%">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                </tbody>
                                </table>
                            </div>
                        </div>
                </div>
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