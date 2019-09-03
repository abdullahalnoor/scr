<?php 

class BaseClass extends DB {

    private $query;

    public function normalQuery($sql,$param=null){

        if(is_null($param)){
            $this->query = $this->connect->prepare($sql);
            return $this->query->execute();
        }else {
           

            $this->query = $this->connect->prepare($sql);
            // var_dump($param);
             $this->query->execute($param);
            //  var_dump('<br>ok');
        }
       
    }

    public function countRow(){
        return $this->query->rowCount();
    }

    public function emailExists($email){

        $this->query  =  "SELECT email FROM users WHERE email = ? ";
        $this->query = $this->connect->prepare($this->query);
        $this->query->bindValue(1, $email);
        $this->query->execute();
        if($this->query->rowCount() < 0){
            return true;
        }else{
            return false;
        }
       
    }


}


?>