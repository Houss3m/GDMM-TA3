<?php

class User{
    public function getdata($id){
        $query="SELECT * FROM users WHERE user_id='$id' limit 1";
        $DB=new Database();
        $result=$DB->read($query);
        if($result){
            $row = $result[0];
            return $row;
        }else 
            return false;
    }
}

?>