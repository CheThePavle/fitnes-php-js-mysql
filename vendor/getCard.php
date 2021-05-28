<?php
session_start();
if (!$_SESSION['token']){header("Location: ../auth");}
require_once 'db.php';

class registrationCard extends db{
    public function __construct(){
        parent::__construct();
        return $this->setParam();
    }

    private function getError(){
        return die('Не пытайтесь изменить данные на сайте) <a href="/"> Главная </a>');
    }

    private function setParam(){
        $phpLevel = $_POST['phpLevel'];
        $phpPrice = $_POST['phpPrice'];
        $phpProfit = $_POST['phpProfit'];
        $phpSum = $_POST['phpSum'];
        $phpType = $_POST['phpType'];

        $phpMonth = $_SESSION['phpMonth'];

        //сверка данных c бд
        $verification = $this->query("SELECT * FROM `type` WHERE name_type = ?", [$phpType]);
        if (!$verification){$this->getError();}
        $id_type = $verification[0]['id_type'];

        $verification = $this->query("SELECT * FROM `level` WHERE name_level = ?", [$phpLevel]);
        if (!$verification){$this->getError();}
        $id_level = $verification[0]['id_level'];

        $verification = $this->query("SELECT * FROM `type_level` WHERE discount_t_l = ?", [$phpProfit]);
        if (!$verification){$this->getError();}

        if ($phpType < 1 && $phpType > 20) {$this->getError();}

        //добавление контракта в бд
        $id_user = $_SESSION['id_user'];
        $date_open_cont = date("Y-m-d");
        $date_end_cont = date("Y-m-d", strtotime("+" . $phpMonth . "month"));;
        $summa_cont = $phpSum;

        $this->make("INSERT INTO `contracts` 
            (`id_user`, `date_open_cont`, `duration_cont`, `date_end_cont`, `summa_cont`, `id_type`, `id_level`) 
            VALUES (?, ?, ?, ?, ?, ?, ?)",
            [$id_user, $date_open_cont, $phpMonth, $date_end_cont, $summa_cont, $id_type, $id_level]);
        header("Location: /lk");
    }
}
new registrationCard;
