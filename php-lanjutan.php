<?php 

$nama = "Ima";
/*
echo $nama;
echo "<br>";
echo $nama;
echo "<br>"; 
echo $nama;
echo "<br>"; 
echo $nama;
echo "<br>"; 
echo $nama;
echo "<br>"; 
*/

/*
$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n. " ".$nama."<br>"; 
}
*/

/*
$no = 10;
$i = 0;
while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;
do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

/*
$data = array('Mie', 'Nasgor', 'Bakso', 'Cilok', 'Siomay', 'Tahu Bulat');

//echo $data[5];

/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

// PERCABANGAN
/*
if ($nama == "Ima") {
    echo $nama." adalah orang Jawa";
} else if($nama == "Ayip") {
    echo $nama." bukan orang Jawa";
}else {
    echo $nama." Siapa kamu?";
}
*/
/*
switch($nama) {
    case "Ima";
        $pesan = $nama." adalah orang Jawa";
    break;
    case "Ayip";
        $pesan = $nama." bukan orang Jawa";
    break;
    default:
        $pesan = $nama." Siapa kamu?";
}
echo $pesan;
*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(!empty($_POST['submit'])) {

        switch($_POST['nama']) {
            case "Ima";
                $pesan = $_POST['nama']." adalah orang Jawa";
            break;
            case "Ayip";
                $pesan = $_POST['nama']." bukan orang Jawa";
            break;
            default:
                $pesan = $_POST['nama']." Siapa kamu?";
        }

        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
        }

        } else {
            echo "Anda belum input nama dan jumlah";
    }
    
    ?>
</body>
</html>