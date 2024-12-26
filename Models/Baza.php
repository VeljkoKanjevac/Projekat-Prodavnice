<?php

    class Baza
    {
        private const HOST = "localhost";
        private const DB_USER = "root";
        private const DB_PASSWORD = "";
        private const DB_NAME = "stores_project";

        protected $sql;

        public function __construct()
        {
            $this -> sql = mysqli_connect(self::HOST, self::DB_USER, self::DB_PASSWORD, self::DB_NAME);
        }
    }