<?php

class DB
{


    protected $dbhost;
    protected $dbType;
    protected $dbName;
    protected $userName;
    protected $password;
    protected $connection;

    function __construct($dbhost = "localhost", $dbType = "mysql", $dbName = "iti_sm_php_g3", $userName = "root", $password = "")
    {
        $this->dbhost = $dbhost;
        $this->dbType = $dbType;
        $this->dbName = $dbName;
        $this->userName = $userName;
        $this->password = $password;
        $this->connection = new PDO("$this->dbType:host=$this->dbhost;dbname=$this->dbName", $this->userName, $this->password);
    }

    function index($table)  // select all data from table 
    {
        $sql = "SELECT * from $table";  // string
        // var_dump($sql);
        // string --> sql 
        $sqlQuery = $this->connection->prepare($sql);
        // var_dump($sqlQuery);

        $sqlQuery->execute();
        $data = $sqlQuery->fetchAll(PDO::FETCH_ASSOC); // assoctiative array
        return ($data);
    }

    function show($table, $id)
    {
        $sql = "select * from $table where id=:id";
        $sqlQuery = $this->connection->prepare($sql);
        $sqlQuery->execute(
            [
                ":id" => $id,
                // ":password"=>$hashPassword
            ]
        );
        $data = $sqlQuery->fetch(PDO::FETCH_ASSOC);  //  name , email , password(hash poassword)
        return $data;
    }
    function delete($table, $id)
    {
        $sql = "delete from $table where id=:id";
        $sqlQuery = $this->connection->prepare($sql);
        $sqlQuery->execute(
            [
                ":id" => $id,
                // ":password"=>$hashPassword
            ]
        );
        $data = $sqlQuery->fetch(PDO::FETCH_ASSOC);  //  name , email , password(hash poassword)
        return [
            "data"=>$data,
            "message"=>"users Deleted susfully"
        ];
    }

    function create($table ,$data)
    {
          $tableColumns=array_keys($data); //[]
        // var_dump($tableColumns);
        $tableColumnsString=implode(',', $tableColumns);  // string
        //  var_dump($tableColumnsString);
                echo "<br> ***********************************  </br>";

        $values=array_values($data); // []
        // var_dump($values);

        // ? 
        //=================  placeholders
        $placeholders=array_fill(0,count($tableColumns),"?");   //[?,?,?]
        $placeholdersString=implode(',',$placeholders)  ;    // ? , ? ,? 
        var_dump($placeholders);
                $sql = "insert into $table($tableColumnsString) values($placeholdersString)";
                  $sqlQuery = $this->connection->prepare($sql); //  string ===> query string 

      
        $sqlQuery->execute($values);
        return [
            "message"=>"data added successfully"
        ];



    
}

function update($table,$id,$data)
{

// task

}
}

$db = new DB("localhost", "mysql", "iti_sm_php_g3", "root", "");


// var_dump($db);
// var_dump($db->index("users"))
// var_dump($db->show("users",3 ));
// // var_dump($db->delete("users", 1));
// $db->create("users",[
//     "name"=>"hossam",
//     "email"=>"hossam@gmail.com",
//     "password"=>"123456789",
// ]);
// $db->create("departments",[
//     "name"=>"electronics",
//     "description"=>"electronics department",
//     "address"=>"cairo",
// ]);