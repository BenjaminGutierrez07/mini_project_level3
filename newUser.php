<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    
    header("Location: login.php");
    exit;
}

$usuario = $_SESSION["usuario"];
$email = $usuario["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <div class="profile">
        <div class="perfil">
            <p>photo</p>
            <a href="logout.php">Log out</a>
        </div>
        <div class="profileTi">
        <p class="titleProfile">Personal Info</p>
        <p class="subProfile">Basic info like your name and photo</p>
        </div>
        <div class="bigBox">
        <div class="subTiProfile">
            <div class="descript">
            <p class="userPro">Profile</p>
            <p class="userSub">Some info may be visible to other people</p>
            </div>
        <form action="changeNewUser.php" method="post">
        <button class="edit">Edit</button>
        </form>
        </div>
        <div class="photoProfile">
            <label class="img" for="img">PHOTO</label>
            <label>Photo</label>
        </div>
        <div class="nameProfile">
            <p class="nameOne">NAME</p>
            
        </div>
        <div class="bioProfile">
            <p class="nameTwo">BIO</p>
            
        </div>
        <div class="phoneProfile">
            <p class="nameThree">PHONE</p>
            
        </div>
        <div class="emailProfile">
            <p class="nameFour">EMAIL</p>
            <p> <?php echo $email; ?> </p>
        </div>
        <div class="passProfile">
            <p class="nameFive">PASSWORD</p>
            <p class="pass"> ********** </p>
        </div>
        </div>
    </div>
</body>
</html>