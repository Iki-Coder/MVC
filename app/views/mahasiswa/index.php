<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3>Daftar Mahasiswa</h3>
                <?php foreach( $data ['mhs'] as $mhs ) : ?>
            <ul>
                <li><?= $mhs['nama']?></li>
                <li><?= $mhs['NIS']?></li>
                <li><?= $mhs['email']?></li>
                <li><?= $mhs['jurusan']?></li>
            </ul>
            <?php endforeach;?>
        </div>
    </div>

</div>