<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    *{
        padding: 0;
        margin:0;
        font-family: georgia;
        background-color:darkkhaki;
    }
    .container{
        display: flex;
        justify-content: center;
        height: 300px;
    }
    h1{
        text-align: center;
        padding-top: 10px;
        border: 5px double #000000;
    }
    p{
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    h2{
        text-align: center;
        padding-top: 10px;
        border: 5px double #000000;
    }
    ul{
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
</head>
<head>
    <body>
        <div class="container">
            <img src="idaayuputudiahwahyuni.jpeg" alt="Idaayuputudiahwahyuni">
        </div>
    </body>
</head>
<body>
    <?php include 'data.php'; ?>
    <h1>Curriculum Vitae</h1>
    <h2>Data</h2>
    <p>Nama: <?php echo $data['nama']; ?></p>
    <p>Alamat: <?php echo $data['alamat']; ?></p>
    <p>Telepon: <?php echo $data['telepon']; ?></p>
    <p>Email: <?php echo $data['email']; ?></p>
    
    <h2>Pendidikan</h2>
    <ul>
        <?php foreach($data['pendidikan'] as $pendidikan): ?>
            <li><?php echo $pendidikan['gelar']; ?> - <?php echo $pendidikan['institusi']; ?> (<?php echo $pendidikan['tahun']; ?>)</li>
        <?php endforeach; ?>
    </ul>

    <h2>Pengalaman Kerja</h2>
    <ul>
        <?php foreach($data['pengalaman'] as $pengalaman): ?>
            <li><?php echo $pengalaman['posisi']; ?> di <?php echo $pengalaman['perusahaan']; ?> (<?php echo $pengalaman['tahun']; ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>