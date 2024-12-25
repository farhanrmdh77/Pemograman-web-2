<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<div class="container">
    <h2>REVIEW ORDER</h2>
    <hr />
    <h5>KITAB PESANTREN</h5>
    <h5>Rp300,000</h5>

    <h2 class="mt-3">Alamat Pengiriman</h2>
    <hr />
    <h5>Jl. Muaro Jambi - Muaro Bulian Km 16, Sungai Duren.</h5>

    <h2 class="mt-3">METODE BAYAR</h2>
    <hr />
    <h5>Transfer Dana</h5>
    <h5>An. M.Farhan Ramadhan</h5>
    <h5>No. 0895604060870</h5>

    <div class="mt-4">
  <form action="<?= base_url('submit')?>" method="POST">
<button type="submit" class="btn btn-success mb-5">Submit Order</button>
</form>
</div>

</div>
<?= $this->endSection()?>