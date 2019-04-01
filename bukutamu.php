<html>
<head>
    <title>MenggunakanFile</title>
</head>
<body>
<?php
    if(isset($_POST["kirim"])){
    $nama=$_POST["nama"];
    $email=$_POST["email"];
    $komentar=$_POST["komentar"];
    $file="c:\\xampp\\htdocs".
    "\\blog\\bukutamu.txt";
    if(!file_exists($file)){
        }else{
    $fp=fopen($file,"a");
    }
    $barisdata=$nama.";".$email.";".$komentar."\n";
    echo"Terima kasih <strong>$nama</strong>, ".
    "komentar Anda sudah tersimpan di server kami";
    }
    ?>
</body>
</html>