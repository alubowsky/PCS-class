<?php
    class db {
        private $cs;
        private $user;
        private $password;
        private $options;

        public function __construct($cs, $user, $password, $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]) {
            $this->cs = $cs;
            $this->user = $user;
            $this->password = $password;
            $this->options =  $options;
        }

        public function getDB() {
            try {
                $db = new PDO($this->cs, $this->user, $this->password, $this-> options);
            } catch (PDOException $e) {
                $error = "Something went wrong " . $e->getMessage();
            }
            return $db;
        }
    }
?>