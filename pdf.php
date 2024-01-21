<?php 

    session_start();
    if (!isset($_SESSION['id'])) { header("location: news.php"); }

    else{
        
        require_once "config/conn.php";

        $sql = $_SESSION['id'];
    
        $sql_1 = mysqli_query($conn, "SELECT * FROM appoinment WHERE id = '$sql' ");
    
        $no = mysqli_fetch_assoc($sql_1);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">

    <div class="antrian">
        
        <?php foreach($sql_1 as $nos) : ?>
        
        <table>
            <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nos["nama"] ?></td>
            </tr>
            <tr>
                <td>Klinik</td>
                <td>:</td>
                <td><?=  $nos["spesialis"]  ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><?= date("d F Y", strtotime($nos['tanggal']))  ?></td>
            </tr>
        </table>

        <hr>

        <h2 style="text-align :center !important">NO ANTRIAN</h2>

            <h1 style="text-align :center"><?= sprintf('%03d', $nos['no_antrian'])  ?></h1>

        <?php endforeach; ?>

        <p>NB : Jika anda tidak dapat hadir saat tanggal perjanjian wajib ada perwakilan keluarga untuk melakukan konfirmasi pembatalan.</p>
        <p>Poliklinik buka jam 08.00 WITA Mohon unutk datang lebih awal.</p>

        <hr>

        <p>Terimakasih</p>

    </div>

</div>
    
</body>
</html>

<script>
    window.print();
</script>