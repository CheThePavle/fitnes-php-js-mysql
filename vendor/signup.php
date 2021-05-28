<?php
session_start();
require_once('db.php');

    class Register extends db{
        private $login;
        private $fio;
        private $email;
        private $password;
        private $password2;

        public function __construct(){
            parent::__construct();
            return $this->getData();
        }

        private function getData(){
            $this->login = trim($_POST['login']);
            $this->fio = trim($_POST['fio']);
            $this->email = trim($_POST['email']);
            $this->password = trim($_POST['password']);
            $this->password2 = trim($_POST['password2']);

            if (!$this->login) {return $this->setStatus('Введите логин');}
            if (strlen($this->login) < 5) {return $this->setStatus('Введите логин от 5 символов');}

            if (!$this->fio) {return $this->setStatus('Введите ФИО');}
            if (strlen($this->fio) < 10) {return $this->setStatus('Введите ФИО от 10 символов');}

            if (!$this->email) {return $this->setStatus('Введите email');}
            if (!$this->password) {return $this->setStatus('Введите пароль');}
            if (!$this->password2) {return $this->setStatus('Введите повторно пароль');}

            if (strlen($this->password) < 8) {return $this->setStatus('Введите пароль от 8 символов');}
            if (strlen($this->password2) < 8) {return $this->setStatus('Введите пароль от 8 символов');}

            if ($this->password !== $this->password2) {return $this->setStatus('Пароли должны совпадать!');}
            $this->password = md5($this->password);

            return $this->setUser();
        }

        private function setStatus($message){
            header("Location: /register");
            return $_SESSION['message'] = $message;
        }

        private function setUser(){
            $check = $this->query("SELECT `login` FROM `users` WHERE `login` = ?", [$this->login]);

            if($check){
                return $this->setStatus('Такой логин уже занят :(');
            }

            $this->make("INSERT INTO `users` (`login`, `fio`, `email`, `password`) VALUES (?, ?, ?, ?)", [
                $this->login,
                $this->fio,
                $this->email,
                $this->password
            ]);

            $this->setStatus('Успешная регистрация!');

            header("Location: /auth");
        }
    }
new Register();