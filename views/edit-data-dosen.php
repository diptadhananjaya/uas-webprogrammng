<?php
include "./model/Dosen.php";
$dosen = new dosen();
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $data = $dosen->editData($id);
}
?>

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Data Dosen</h4>
    </div>
    <div class="card-body">
        <form action="index.php?page=update-dosen&id=<?php echo $data['nidn'] ?>" method="post">
            <div class="form-group mb-3">
                <label for="">NIDN</label>
                <input type="text" required readonly value="<?php echo $data['nidn'] ?>" name="nidn" class="form-control" placeholder="Masukkan NIDN" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Nama Dosen</label>
                <input type="text" required value="<?php echo $data['nama'] ?>" name="nama" class="form-control" placeholder="Masukkan Nama Dosen" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Pendidikan Dosen</label>
                <select class="form-control" required name="pendidikan" id="exampleSelectGender">
                    <option value="0" selected>Silahkan Pilih Pendidikan Dosen</option>
                    <option value="S1" <?php if ($data['pendidikan'] == 'S1') {
                                            echo 'selected';
                                        } ?>>Sarjana 1</option>
                    <option value="S2" <?php if ($data['pendidikan'] == 'S2') {
                                            echo 'selected';
                                        } ?>>Sarjana 2</option>
                    <option value="S3" <?php if ($data['pendidikan'] == 'S3') {
                                            echo 'selected';
                                        } ?>>Sarjana 3</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Lahir Dosen</label>
                <input type="date" value="<?php echo $data['tgl_lahir'] ?>" required name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir Dosen" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Jenis Kelamin Dosen</label>
                <div class="d-flex gap-4">
                    <div class="form-check">
                        <input class="form-check-input" <?php if ($data['gender'] == 1) {
                                                            echo 'checked';
                                                        } ?> type="radio" name="jenis_kelamin" value="1" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki - Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" <?php if ($data['gender'] == 0) {
                                                            echo 'checked';
                                                        } ?> type="radio" name="jenis_kelamin" value="0" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="">Alamat Dosen</label>
                <input type="text" value="<?php echo $data['alamat'] ?>" required name="alamat" class="form-control" placeholder="Masukkan Alamat Dosen" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Nomor HP Dosen</label>
                <input type="number" value="<?php echo $data['no_hp'] ?>" required name="no_hp" class="form-control" placeholder="Masukkan No HP Dosen" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Email Dosen</label>
                <input type="email" required value="<?php echo $data['email'] ?>" name="email" class="form-control" placeholder="Masukkan No HP Dosen" id="">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            <button type="reset" class="btn btn-warning">Reset</button>
            <a href="index.php?page=data-dosen" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>