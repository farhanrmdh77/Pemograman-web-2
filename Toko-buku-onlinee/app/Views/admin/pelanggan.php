<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">pelanggan</h2>
<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nama</th>
                <th scope="col">no hp</th>
                <th scope="col">alamat</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th scope="row">M.FARHAN RAMADHAN</th>
                <th scope="row">0895606721625</th>
                <th scope="row">Kampung Bugis</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn 
                    btn-danger">hapus</a>
                </th>
            </tr>
            <tr>
                <th scope="row">1</th>
                <th scope="row">M.DINO SAPUTRA</th>
                <th scope="row">081275993525</th>
                <th scope="row">Kasang</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn 
                    btn-danger">hapus</a>
                </th>
            </tr>
            <tr>
                <th scope="row">1</th>
                <th scope="row">M.RISWAN ANSYAH</th>
                <th scope="row">0812333333</th>
                <th scope="row">Pattimura</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn 
                    btn-danger">hapus</a>
                </th>
            </tr>
            <tr>
                <th scope="row">1</th>
                <th scope="row">ARMAN SYAHRI</th>
                <th scope="row">089560674565</th>
                <th scope="row">Mendalo</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn 
                    btn-danger">hapus</a>
                </th>
            </tr>
            <tr>
                <th scope="row">1</th>
                <th scope="row">CUPANG</th>
                <th scope="row">0895606723456</th>
                <th scope="row">Kampung Bugis</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn 
                    btn-danger">hapus</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection();?>