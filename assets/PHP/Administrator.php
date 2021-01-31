<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> 

    <title>Login Form</title>
</head>

<style>
    body {
        background-color: #06BF80;
        font-family: 'Nunito', sans-serif;
    }
    h3 {
        color:white;
        font-family: 'Nunito',sans-serif;
    }
    div{
        margin-top: 12%; 
        margin-bottom:20%;
        margin-right: 500px; 
        margin-left: 500px; 
        text-align: center; 
        font-weight: 600;
        letter-spacing: 0.25px;
        border-radius: 30px; 
        padding: 40px 20px 50px;
        background-color: #2E343C;
        box-shadow:  3px 50px 60px #30373e96;
    }
    .submit {
        
        align-items:center !important;
        margin-top: 2rem;
        margin-bottom: 1rem;
        margin-left:8px;
        color: black;
        padding: 6px 48px;
        font-family: 'Nunito', sans-serif;
        text-align: center;
        text-decoration: none;
        border-radius: 8px;
        border: none !important;
        display: inline-block;
        font-size: 13px;
        font-weight: 600;
        color:white;
        letter-spacing: 0.5px;
        transition-duration: 0.2s;
        background-color: #06BF80;
        cursor: pointer;
    }
    .submit:hover{
        background-color: #05d38e;
    }

    table,td{
        display: block;
       
    }
    table, input{
        border-radius: 4px;
        padding: 2px 20px 6px;
    }
    tr, td {
        color: #777777;
        font-weight: 400;
        font-size:14px;
    }
</style>

<body>
    
    <?php $teks=""; ?>
    <div mtehod="post" action="login.php">
    <tr><h3>Login</h3></tr>
    <form style="margin-top : 20px; margin-right: 50px; margin-left: 40px" method="post" action="login.php">
    <table>
    <tr><td style="float:left;">Id User: </td><td><input type="text" name="iduser"></td></tr>
    <tr><td style="float:left;">Password: </td><td><input type="password" name="password"></td></tr>
    </table>
    <input class="submit" type="submit"name="login" value="Submit">
    </form>

    <?php
    if(isset($_POST['login'])){
        include("config.php");
        $iduser = $_POST['iduser'];
        $password = $_POST['password'];

        $hasil = mysqli_query($mysqli, "SELECT * FROM password WHERE iduser='".$iduser."' AND password='".$password."'");
        while($user_data = mysqli_fetch_array($hasil)) {
            $status=$user_data['status'];
        }
        if(empty($status)){
            $teks="Id Anda belum terdaftar atau password salah";
        }
        else if ($status=="user") {header("Location:LihatData.php");}
        else if ($status=="admin") {header("Location:LihatDataAdmin.php");}

    }
    ?>

    <p style="color: red;  font-size 12px; font-weight: 400; height: 20px;">  <?php echo "$teks"; ?></p>


    </div>

</body>
</html>