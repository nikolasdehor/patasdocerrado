<?php

    class Model{
        use Database;
        /*
            No Core Model, será iniciada as funções CRUD que todos os Models irão ter
            C - insert()
            R - query() (Herdada do Trait Database)
            U - update()
            D - delete()
        */
        protected $table;
        protected $order_type = "desc";
        protected $order_column = "id";

        public function retornarPrimeiro($data = [], $data_not = []){
            $keys = array_keys($data);
            $query = "SELECT * FROM $this->table WHERE ";
            if(!empty($data)){
                foreach($keys as $key){
                    $query .= $key." = :".$key." && ";
                }
            }

            $query = trim($query, " && ");
            $query.= " LIMIT 1";
            return $this->query($query, $data);
        
        }

        public function execute($query,$params = []){
            $this->connect();
            try{
              $statement = $this->connection->prepare($query);
              $statement->execute($params);
              return $statement;
            }catch(PDOException $e){
              die('ERROR: '.$e->getMessage());
            }
        }

        public function select($join = null, $where = null, $order = null, $limit = null,$fields = '*'){
            @$join = strlen($join) ? 'INNER JOIN '.$join : '';
            @$where = strlen($where) ? 'WHERE '.$where : '';
            @$order = strlen($order) ? 'ORDER BY '.$order : '';
            @$limit = strlen($limit) ? 'LIMIT '.$limit : '';
        
            $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$join.' '.$where.' '.$order.' '.$limit;
            show($query);
            return $this->query($query);
        }

        public function insert($data){
            $fields = array_keys($data);
            $binds  = array_pad([],count($fields),'?'); 
            $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
            $this->execute($query,array_values($data));
            return $this->connection->lastInsertId();
          }

        public function update($id, $data, $id_column = 'ID'){
            $keys = array_keys($data);
            $query = "UPDATE $this->table SET ";
            foreach($keys as $key){
                $query .= $key." = :".$key.", ";
            }
            $query = trim($query, ", ");
            $query.= " WHERE $id_column = :$id_column";
            $data[$id_column] = $id;
            $this->query($query, $data);
        }
        public function delete($id, $id_column = 'ID'){
            $data[$id_column] = $id;
            $query = "DELETE FROM $this->table WHERE $id_column = :$id_column";
            $this->query($query, $data);
        }
    }