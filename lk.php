<?php
session_start();
if (!$_SESSION['token']){header("Location: /index");}
require_once 'vendor/abonementInfo.php';
require_once 'header.php';
?>
    <div class="lk">
        <a href="vendor/out">Выход</a>
        <br><br>
        <a href="calculator">Расчитать и оформить карту!</a>
        <h2>Логин</h2>
        <p><?= $_SESSION['login'] ?></p>
        <h2>ФИО</h2>
        <p><?= $_SESSION['fio'] ?></p>
        <h2>Email</h2>
        <p><?= $_SESSION['email'] ?></p>

        <br><br>
        <h2><u>Мои абонементы</u></h2>
        <?php
            $info = new abonementInfo();
            if ($info->getInfo){
                $arr = $info->getInfo;
                foreach ($arr as $key){
                    echo '<h3>Абонемент # <span>' . $key['id_contract'] . '</span> </h3>';
                    echo '<h3>ФИО <span>' . $_SESSION['fio'] . '</span> </h3>';
                    echo '<h3>Тариф <span>' . $key['name_type'] . '</span> </h3>';
                    echo '<h3>Длительность <span>' . $key['duration_cont'] . '</span> мес. </h3>';
                    echo '<h3>Действителен с <span>' . $key['date_open_cont'] . ' до ' . $key['date_end_cont'] . '</span></h3>';
                    echo '<hr>';
                }
            } else {echo 'нету абонементов(';}
        ?>
        <hr><hr><hr><hr><hr><hr>
    </div>
<?php
require_once 'footer.php';
?>