<?php
session_start();
if ($_SESSION['token']){header("Location: lk");}
require_once('vendor/db.php');
require_once('header.php')
?>
<hr><hr><hr><hr><hr><hr>
<div class="content auth_cont">
    

    <div>
        <div class="auth_img">
            <img src="img/auth_img1.png" alt="">
            <img src="img/auth_img2.png" alt="">
            <img src="img/auth_img3.png" alt="">
            <img src="img/auth_img4.png" alt="">
            <img src="img/auth_img5.png" alt="">
            <img src="img/auth_img6.png" alt="">
            <img src="img/auth_img7.png" alt="">
            <img src="img/auth_img8.png" alt="">
            <img src="img/auth_img9.png" alt="">
        </div>
    </div>
    
    <div class="form">
        <form action="vendor/signup.php" method="post">
            <h2>РЕГИСТРАЦИЯ</h2>
            <input name="login" type="text" placeholder="Придумайте логин">
            <br>
            <input name="fio" type="text" placeholder="ФИО">
            <br>
            <input name="email" type="email" placeholder="Введите ваш email">
            <br>
            <input name="password" type="password" placeholder="Придумайте пароль">
            <br>
            <input name="password2" type="password" placeholder="Повторите пароль">

            <?php
                echo '<b>'. $_SESSION['message'] .'</b>';
                $_SESSION['message'] = '';
            ?>

            <div class="btn btn_calc">
                <input type="submit" value="Регистрация">
            </div>

            <p>У вас уже есть аккаунт? <a href="auth"> Войти!</a></p>
        </form>
    </div>

    
</div>
<hr><hr><hr><hr><hr><hr>
<?php require_once('footer.php') ?>