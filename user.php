<?php
session_start();
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
            <p>name</p>
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
        <div>
        <button>Edit</button>
        </div>
        </div>
        <div class="photoProfile">
            <label class="img" for="img">PHOTO</label>
            <input type="file" name="img" id="img">
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