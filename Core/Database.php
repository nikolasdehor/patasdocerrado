<?php

    Trait Database{ 
        # Database é um Trait, o qual permitirá que classes herdam suas características de forma que ainda seja possível herdar também os de outros Traits ou Classes

        private $connection;
        private function connect(){
            try{
                $db = "mysql:hostname=".DB_host.";dbname=".DB_name;
                $this->connection = new PDO($db, DB_user, DB_password);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
              }catch(PDOException $e){
                die('ERROR: '.$e->getMessage());
              }
        }
        public function query($query, $data = []){
            $this->connect();
                $stm = $this->connection->prepare($query);
                $check = $stm->execute($data);
                if($check){
                    $result = $stm->fetchAll(PDO::FETCH_OBJ);
                    if(is_array($result) && count($result)){
                        return $result;
                    }
                }
            return [];
        }
    }