<?php

    require_once "Baza.php";

    class Store extends Baza
    {
        private $name;
        private $location;
        private $type;


        /*public function __construct($name, $location, $type)
        {
            $this -> name = $name;
            $this -> location = $location;
            $this -> type = $type;
        }

        public function save()
        {
            $name = $this -> sql -> real_escape_string($this->name);
            $location = $this -> sql -> real_escape_string($this->location);
            $type = $this -> sql -> real_escape_string($this->type);

            $this -> sql -> query(" INSERT INTO stores (store_name, store_location, store_type)
                            VALUES ('$name', '$location', '$type') ");
        }*/

        public function getStoreByLocation($location): array
        {
            $location = $this -> sql -> real_escape_string($location);
            
            $result = $this -> sql -> query(" SELECT * FROM stores WHERE store_location LIKE '%$location%' ");
            $stores = $result -> fetch_all(MYSQLI_ASSOC);

            return $stores;
        }

        public function getStoreByType($type): array
        {
            $type = $this -> sql -> real_escape_string($type);
            
            $result = $this -> sql -> query(" SELECT * FROM stores WHERE products_type LIKE '%$type%' ");
            $stores = $result -> fetch_all(MYSQLI_ASSOC);

            return $stores;
        }

        public function storeLocationExists($location): bool
        {
            $location = $this -> sql -> real_escape_string($location);

            $result = $this -> sql -> query(" SELECT * FROM stores WHERE store_location LIKE '%$location%' ");
            if($result -> num_rows > 0)
            {
                return true;
            }
            else 
            {
                return false;
            }
        }

        public function storeTypeExists($type): bool
        {
            $type = $this -> sql -> real_escape_string($type);

            $result = $this -> sql -> query(" SELECT * FROM stores WHERE products_type LIKE '%$type%' ");
            if($result -> num_rows > 0)
            {
                return true;
            }
            else 
            {
                return false;
            }
        }
    }