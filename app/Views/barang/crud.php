<!-- Custom fonts for this page -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this  -->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<?= $this->extend('layout/defaultheadfoot'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Program CRUD CodeIgniter with Bootstrap 5</h1>
            <a href="/barang/create" class="btn btn-primary mt-3">Tambah data baru</a>
            <?php if (session()->getFlashdata('Message')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('Message') ?>
                </div>

            <?php endif ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Bootstrap Tables</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jenis Barang</th>
                                    <th scope="col">Jumlah Stok</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($databarang as $o) : ?>

                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $o['nama']; ?></td>
                                        <td><?= $o['jenis']; ?></td>
                                        <td><?= $o['stok']; ?></td>
                                        <td>
                                            <?php $i++ ?>
                                            <a href="/barang/detail/<?= $o['id']; ?>" class="btn btn-success">Detail</a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>

<?= $this->endSection(); ?>