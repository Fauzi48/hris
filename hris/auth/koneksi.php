<?php 
class koneksi {
     public function get_koneksi()
    {
        $conn = mysqli_connect ("localhost","root","","hris");
        //Cek Koneksi
        if (mysqli_connect_errno()){
            echo "Koneksi ke Database Gagal : " . mysqli_connect_errno();
        }
        return $conn;
    }
}
    $konek =new koneksi();
    $koneksi=$konek->get_koneksi();
     ?>