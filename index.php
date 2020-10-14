<?php include('config/koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Online</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Pendaftaran Online</h1>
        </div>
        <div class="main">
            <?php

            if(empty($_GET['page']) OR $_GET['page'] == NULL) {
                include('content/home.php');
            }
            elseif(!empty($_GET['page']) && $_GET['page'] == 'tambah') {
                include('content/tambah.php');
            }

            ?>
        </div>
    </div>
</body>
</html>
