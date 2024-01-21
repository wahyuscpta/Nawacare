<?php

    session_start();
    if (!isset($_SESSION['id'])) { header("location: indx.php"); }

    require_once "config/conn.php";

    $sql = $_SESSION['id'];

    $sql_1 = mysqli_query($conn, "SELECT * FROM appoinment WHERE id = '$sql' ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawacare</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nota.css">
</head>
<body>

<div class="antrian">

    <div class="nota" id="capture">

        <?php foreach($sql_1 as $sql) : ?>
        
        <table cellpadding="3">
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><?= $sql['nama'] ?></td>
            </tr>
            <tr>
                <td>Spesialist</td>
                <td>:</td>
                <td><?= $sql['spesialis'] ?></td>
            </tr>
            <tr>
                <td>Date</td>
                <td>:</td>
                <td><?= date("F, d Y", strtotime($sql['tanggal'])) ?></td>
            </tr>
        </table>

        <hr>

        <h5>NO ENTRY</h5>

        <h1><?= sprintf('%03d', $sql['no_antrian']) ?></h1>

        <?php endforeach; ?>

        <p>NB: If you cannot attend the date of the agreement there must be a family representative to confirm the cancellation to our call center.</p>
        <p>Polyclinic opens at 8:00 a.m. Please come earlier.</p>

        <hr>

        <p style="text-align :center">Thank You</p>

    </div>

    <div class="btn-nota">
        <a href="index.php" class="btn btn-outline-success w-50">Back To Home</a>
        <a href="pdf.php" class="btn btn-success tombol tombol-2 print">Save</a>
    </div>

</div>
    
</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
