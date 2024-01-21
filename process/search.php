<?php

    require_once "../config/conn.php";
    
    if(!isset($_GET['keyword'])){header("location: ../news.php");}

    $a = $_GET['keyword'];
    
    $query = mysqli_query($conn, "SELECT * FROM berita WHERE judul LIKE '%$a%' ORDER BY id DESC");


?>

<?php foreach($query as $sql):?>

<div class="post">
    <div class="row">
        <div class="col-lg-4">
            <div class="img-post">
                <img src="admin/blog/gambar/<?=$sql['gambar']?>" alt="">
            </div>
        </div>

        <div class="col-lg-8">
            <div class="text-post">
                <h2><a href="view.php?id=<?=$sql['id']?>"><?=$sql['judul']?></a></h2>
                <p><?= substr($sql['isi'],0,150)." . . . ";?></p>
                <p class="date"><i class="fas fa-clock"></i> <?= date("F, d Y", strtotime($sql['tanggal'])) ?> </p>
            </div>
        </div>
    </div>
</div>

<?php endforeach;?>