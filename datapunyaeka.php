<?php 

session_start();
if(empty($_SESSION['username'])){
    header('location:loginpunyaeka.php');
}

    $json_data = file_get_contents('anggotanyaeka.json');
    $anggota = json_decode($json_data, true);

    $i= 1;
    $indeks = 0;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Data Anggota</title>
    <style>
    *{
    margin: 0;
    font-family: 'Poppins', sans-serif;
}
body{
   background-color: #ddd;
}
.container{
    width: 80%;
    margin: auto;
    margin-top: 100px;
    border-radius: 10px;
    background-color: white;
    box-shadow: 1px 1px 1px rgb(167, 171, 177);
    background-color: white;
}
h2{
    text-align: center;
    background-color: #DABF92;
    padding: 20px;
    border-radius: 10px 10px 0 0;
}

table {
    border-collapse: collapse;
    width: 90%;
    margin: auto;
    margin-top: 50px;
}
  
th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}
  
th {
    background-color: #DABF92;
    text-align: center;
}
tr:nth-child(odd){
    background-color: rgb(233, 230, 227);
}


.aksi{
    text-align: center;
    border-radius: 10px;
}

button{
    border-radius: 10px;
    /* background-color: #b48605; */
    
}
.edit{
    background-color: cadetblue;
    padding: 10px;
    box-sizing: border-box;
}

.delete{
    background-color: rgb(214, 48, 48);
    padding: 10px;
    box-sizing: border-box;
}
a{
    text-decoration: none;
    padding: 10px;
    box-sizing: border-box;
    height: 10px;
    border: none;
    color: white ;
    
}
.button{
    margin-top: 80px;
    margin-left: 65px;
    
}
.tambah{
    background-color: #05b41c;
    border-radius: 10px;
    color: rgb(255, 255, 255);
}

.logout{
    background-color: #DABF92;
    border-radius: 10px;
    color: rgb(255, 255, 255);
}
</style>
</head>
<body>
    <div class="container">
        
        <h2>Data Anggota GenBI</h2>
        <div class="button">
            <a href="logoutpunyaeka.php" class="logout">logout</a>
            <a href="createpunyaeka.php" class="tambah">Add New</a>
        </div>
                   
        <table >
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($anggota as $ang) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $ang["nim"] ?></td>
                    <td><?= $ang["nama"] ?></td>
                    <td><?= $ang["jabatan"] ?></td>
                    <td><?= $ang["jurusan"] ?></td>
                    <td class="aksi">
                        <button class="edit">
                        <a href="editpunyaeka.php?indeks=<?= $indeks ?>">Edit</a>
                        </button>
                       
                        <button class="delete">
                            <a href="deletepunyaeka.php?indeks=<?= $indeks++ ?>">Delete</a>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </table><br><br>

    </div>


</body>
</html>