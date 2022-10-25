<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_siswa=mysqli_query($conn,"select * from siswa where id_siswa = '".$_GET['id_siswa']."'");

//cara menampilkan webnya, dengan cara membuka tampil siswa, klik button ubah
//baru bisa masuk kedalam web ubah siswa
    //get, post. 
//Post: ngambil data, posting. 
//Form tidak ada ?id.siswa.12 dikarenakan tidak terlihat
//get: data dari url. 
//contoh: localhost/perpus/ubahsiswa?id.siswa.12
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Tambah Siswa</h3>
    <form action="proses_ubah_siswa.php" method="post">
        <input type="hidden" name="id_siswa" value="<?=$dt_siswa['id_siswa']?>">
        nama siswa :
        <input type="text" name="nama_siswa" value=   "<?=$dt_siswa['nama_siswa']?>" class="form-control">
       Username : 
        <input type="text" name="username" value="<?=$dt_siswa['username']?>" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">

        
        <input type="submit" name="simpan" value="Ubah User" class="btn btn-primary">
       </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>