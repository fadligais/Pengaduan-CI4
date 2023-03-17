<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<h2>Perubahan Data Masyarakat</h2>
<p>Silahkan gunakan form dibawah ini untuk merubah data masyarakat.</p>
<form method="POST" action="/masyarakat/update">
<div class="form-group">
<label class="font-weight-bold">NIK</label>
<input type="text" name="txtInputNik" class="form-control" placeholder="Masukan Nik" value="<?=$detail[0]['nik'];?>" readonly >
</div>
<div class="form-group">
<label class="font-weight-bold">Nama Lengkap</label>
<input type="text" name="txtInputNama" class="form-control" placeholder="Masukan nama lengkap" value="<?=$detail[0]['nama'];?>" autocomplete="off" autofocous reaquire >
</div>
<div class="form-group">
<label class="font-weight-bold">No Telphone</label>
<input type="text" name="txtInputTelp" class="form-control" placeholder="Masukan No Telphone" value="<?=$detail[0]['telp'];?>" autocomplete="off" autofocous reaquire >
</div>
<div class="form-group">
<button class="btn btn-primary"> Update </button>
</div>
</form>
<?= $this->endSection() ?>