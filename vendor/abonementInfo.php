<?php
session_start();
require_once 'db.php';
    class abonementInfo extends db{
        public $getInfo;
        public $getMsg;

        public function __construct(){
            parent::__construct();
            return $this->getInfo();
        }

        private function getInfo(){
            $id_user = $_SESSION['id_user'];

            $this->getInfo = $this->query("
                SELECT * FROM `contracts` as c
                JOIN type as t ON t.id_type = c.id_type
                WHERE id_user = ?",
                [$id_user]);
            if (!$check){$this->getMsg = 'у вас ничего нет(';}
        }
    }
    new abonementInfo;