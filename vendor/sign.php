<?php
session_start();
require_once('db.php');

class Authorization extends db{
    private $login;
    private $password;
    private $getId;

    public function __construct(){
        parent::__construct();
        return $this->getData();
    }

    private function getData(){
        $this->login = trim($_POST['login']);
        $this->password = trim($_POST['password']);

        if (!$this->login) {return $this->setError('Введите логин');}
        if (!$this->password) {return $this->setError('Введите пароль');}

        $this->password = md5($this->password);
        return $this->checkUser();
    }

    private function setError($error){
        header("Location: /auth");
        return $_SESSION['message'] = $error;
    }

    private function checkUser(){
        $this->getId = $this->query("SELECT `id_user`, `login`, `password`, `fio`, `email` FROM `users` WHERE `login` = ? AND `password` = ?", [
            $this->login,
            $this->password
        ]);

        header("Location: /lk");
        if($this->getId){return $this->setToken();} else {return $this->setError('Неверный логин или пароль!!!');}
    }

    private function setToken(){
        $token = uniqid();

        $id_user = $this->getId[0]['id_user'];
        $login = $this->getId[0]['login'];
        $fio = $this->getId[0]['fio'];
        $email = $this->getId[0]['email'];

        $_SESSION['id_user'] = $id_user;
        $_SESSION['login'] = $login;
        $_SESSION['fio'] = $fio;
        $_SESSION['email'] = $email;

        $_SESSION['token'] = $token;
        return $this->make("UPDATE `users` SET `token` = ? WHERE `users`.`id_user` = ?", [$token, $id_user]);
    }
}
new Authorization();