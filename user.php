<?php
session_start();

if(!isset($_SESSION["usuario"])) {
    echo "Session ended";
    die();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500&family=Raleway:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="profile">
        <div class="perfil">
            <p>Photo</p>
            <a class="logout" href="logout.php">Logout</a>
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
        <form action="changeOldUser.php" method="post">
        <button class="edit">Edit</button>
        </form>
        </div>
        <div class="photoProfile">
            <label class="img" for="img">PHOTO</label>
            <label>Photo</label>
        </div>
        <div class="nameProfile">
            <p class="nameOne">NAME</p>
            <p class="nombre"> <?= $_SESSION["usuario"]["name"] ?></p>
        </div>
        <div class="bioProfile">
            <p class="nameTwo">BIO</p>
            <p class="bio"> <?= $_SESSION["usuario"]["bio"] ?> </p>
        </div>
        <div class="phoneProfile">
            <p class="nameThree">PHONE</p>
            <p class="phone"> <?= $_SESSION["usuario"]["phone"] ?> </p>
        </div>
        <div class="emailProfile">
            <p class="nameFour">EMAIL</p>
            <p class="email"> <?= $_SESSION["usuario"]["email"] ?> </p>
        </div>
        <div class="passProfile">
            <p class="nameFive">PASSWORD</p>
            <p class="pass"> ********** </p>
        </div>
        </div>
    </div>
</body>
</html>