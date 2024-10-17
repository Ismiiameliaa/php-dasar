<?php
    session_start();
    //kondisi yang mengecek apakah username telah terisi ato login atau belum
    if(!empty($_SESSION['username'])){
        header('location:datapunyaeka.php');
    }
    
    
    $akun = [
    
        ["username" => "ekaway", "password" => "111"],
    ];
    
    // biar kalau di refresh tetap nol
    $kondisi = 0;
    
    if(isset($_POST ['submit'])){
        // diubah jadi kondisi 1 karena mau di submit dan mengarahkan ke dashbord php
                $kondisi = 1;
                foreach ($akun as $akn) {
                    if($akn['username']==$_POST['username']&& $akn ['password']==$_POST['password']){
                    header('location:datapunyaeka.php');
                        
                    $_SESSION['username']=$akn['username'];
                                        
                }else{
                    // diberikan peringatan ketika salah makanya di berikan kondisi 2
                    $kondisi = 2;
                }
            }
     }
        
       
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
    *{
    font-family: 'Poppins', sans-serif;
}
body{
  margin-top: 150px;
  /* background-color: rgb(134, 89, 6); */
  /* background: rgb(180,134,5);
  background: linear-gradient(90deg, rgba(180,134,5,1) 0%, rgba(255,255,255,1) 100%); */
  background-image: url('../assets/bg-body.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;

}

.card-form{
    display: flex;
    background-color: white;
    width: 800px;
    margin:auto;
    box-shadow: 24px 8px 24px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
}
.image{
    width: 50%;
    background-color: #e0f7ff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
}
.form{
    padding: 40px;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background-color: #fffaf0;
}

.image img{
    width: 100%;
    height: 100%;
    
}

h2{
    margin: 0;
    text-align: center;
    padding: 10px;
    box-sizing: border-box;
    color: #c7a468;
    width: 100%;
    border-radius: 10px 10px 0 0;
}
a{
    text-decoration: none;
    color: aliceblue;
    
    
}

form{
    width: 100%;
    margin: auto;
    margin-top: 0px;
    float: right;
    /* padding: 0 30px 30px 30px; */
    border-radius: 10px;
   
  

}

input{
    /* display: inline; */
    height: 40px;
    width: 80%;
    border: 1px solid gray;
    margin: auto;
    padding: 5px;
    box-sizing: border-box;
    margin-bottom: 20px;
    margin-left: 30px;
    background-color: none;
    
}
label{
    font-size: 12px;
    margin: 30px;
}

 input:focus {
    border-color: #DABF92;
    outline: none;
}
button{
    margin-top: 30px;
    height: 30%;
    width:80%;
    padding: 10px;
    border-radius: 10px;
    border: none;
    background-color: #DABF92;
    font-size: 18px;
   
    
}

button:hover{
    background-color: #b48605;
}

p{
    color: red;
    text-align: center;
}

.regist p{
    color: #8f8c8c;
    font-size: 14px;
}
</style>
</head>
<body>
    <h1 align="center">SELAMAT DATANG</h1>
    <h3 align="center">FORM LOGIN CRUD JSON</h3>

    <div class="card-form">
        <div class="image"><img src="./assets/login.jpg" alt=""></div>
        <div class="form">
            <form action="" method="post">
                
                <h2> <b>Get Started</b></h2>
                <label for="username">Username</label>
                <input type="username" name="username" placeholder="masukkan username"><br>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="masukkan password">
                <center>
                    <button type="submit" name="submit"><b>Login</b></button>
                </center>

                <div class="regist">
                    <p color="blue">Do yout have a account ? Sign Up</p>
                </div>
                <?php if( $kondisi ==2) { ?>
                        <script>alert('username atau password salah')</script>
                <?php } ?>
            </form>
        </div>
             
    </div>

        
        
    </div>

   
   
</body>
</html>