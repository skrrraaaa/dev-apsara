<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $member = $_POST['member'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO pemesanan (nama, telepon, member, pesan) VALUES ('$nama', '$telp', '$member', '$pesan')";
    $query = mysqli_query($koneksi, $sql);

    //apakah query simpan berhasil?
    if ($query) {
        //kalau berhasil alihkan ke halaman index.php dengan status=sukses
?>
        <script type="text/javascript">
            alert('Data Berhasil di tambah');
            window.location = "index.php";
        </script>
    <?php
    } else {
        //kalau gagal alihkan ke halaman index.php dengan status=gagal
    ?>
        <script type="text/javascript">
            alert('Ada kesalahan');
            window.location = "index.php";
        </script>
<?php
    }
} else {
    echo "Akses Dilarang";
}
