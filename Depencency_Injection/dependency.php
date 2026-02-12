<?php
class Database{
 public function execute($sql){
     echo $sql;
 }
}


class BuildQuery{

    public function DataObj(){
        $db= new Database;
    }
    
    public function insert(){
        $db= new Database;
        $sql= 'insert into table...';
        $db->execute($sql);
    }

    public function update(){
        $db= new Database;
        $sql= 'insert into table...';
        $db->execute($sql);
    }
   }

   $q= new BuildQuery;
   $q->insert();