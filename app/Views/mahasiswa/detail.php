<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Mahasiswa</h2>
            <font size=5>
                <pre class="">Nama            : <?= $mahasiswa['nama']; ?></pre>
                <pre class="">NIM             : <?= $mahasiswa['nim']; ?></pre>
                <pre class="">Alamat          : <?= $mahasiswa['alamat']; ?></pre>
                <pre class="">Jenis Kelamin   : <?= $mahasiswa['jk']; ?></pre>
                <pre class="">Tanggal Lahir   : <?= $mahasiswa['tgl_lahir']; ?></pre>
                <pre class="">Telepon         : <?= $mahasiswa['telp']; ?></pre>

                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
                <br>
                <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>