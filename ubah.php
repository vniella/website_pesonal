<form action="" method="post">
    <input type="hidden" name="id" value="<?= $sws["id"]; ?>">
    <ul>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" required 
            value="<?= $sws["nama"]; ?>">
        </li>
        <li>
            <label for="nis">N i s : </label>
            <input type="text" name="nis" id="nis" required 
            value="<?= $sws["nis"]; ?>">
        </li>
        <li>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" required 
            value="<?= $sws["jurusan"]; ?>">
        </li>
        <li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email" required 
            value="<?= $sws["email"]; ?>">
        </li>
        <li>
            <label for="gambar">Gambar : </label>
            <input type="text" name="gambar" id="gambar" required 
            value="<?= $sws["gambar"]; ?>">
        </li>
        <li>
            <button type="submit" name="submit">Ubah Data</button>
        </li>