<?php 
include 'koneksi.php';

$nama_siswa = $_POST['nama_siswa'];
$nama_jurusan = $_POST['nama_jurusan'];
$kelas = $_POST['kelas'];
$jen_kel = $_POST['jen_kel'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$no_hp_ortu = $_POST['no_hp_ortu'];
$tanggal = date('y-m-d');
$waktu = date('h:i:s');


$gambar_produk = $_FILES['foto']['name'];
// upload foto
if($gambar_produk != "") {
 $ekstensi_diperbolehkan = array('png','jpg' ,'jpeg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya

if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
               move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO `tbl_kelas` (`id_kelas`,`nama_siswa`,`nama_jurusan`,`kelas`,`jen_kel`,`nama_ayah`,`nama_ibu`,`no_hp_ortu`,`tanggal`,`waktu`,`foto`) 
                            VALUES(NULL,'$nama_siswa','$nama_jurusan','$kelas','$jen_kel','$nama_ayah','$nama_ibu','$no_hp_ortu','$tanggal','$waktu','$nama_gambar_baru')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                 header("location:../list.data.kelas.xi.php?alert=berhasil");
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                header("location:../list.data.kelas.xi.php?alert=gagal_ukuran");
            }
} else {
    $query = "INSERT INTO `tbl_kelas` (`id_kelas`,`nama_siswa`,`nama_jurusan`,`kelas`,`jen_kel`,`nama_ayah`,`nama_ibu`,`no_hp_ortu`,`tanggal`,`waktu`,`foto`) 
                            VALUES(NULL,'$nama_siswa','$nama_jurusan','$kelas','$jen_kel','$nama_ayah','$nama_ibu','$no_hp_ortu','$tanggal','$waktu','$nama_gambar_baru')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    header("location:../list.data.kelas.xi.php?alert=berhasil");
                  }
}