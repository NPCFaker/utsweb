<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Mata Kuliah</h2>
            <font size=5>
                <pre class="">Mata Kuliah     : <?= $matkul['nm_mk']; ?></pre>
                <pre class="">Kode Mata Kuliah: <?= $matkul['kode_mk']; ?></pre>
                <pre class="">Semester        : <?= $matkul['sem']; ?></pre>
                <pre class="">SKS             : <?= $matkul['sks']; ?></pre>

                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
                <br>
                <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>