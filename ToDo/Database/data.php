<?php

class checklist{

    private $conn;
    public $item,$id;
    function __construct($item,$conn,$id)
    {
        $this->conn = $conn;
        $this->item = $item;
        $this->id = $id;
    }
    function add(){
        $adding = "INSERT INTO checklist VALUE($this->id,'$this->item')";
        $query = mysqli_query($this->conn,$adding);
        $this->id++;
    }
    function delete(){
        $delete = "DELETE FROM checklist WHERE id=1";
        $query = mysqli_query($this->conn,$delete);
    }
}



// Database connection
$conn = new mysqli('localhost','tushar','Innoraft@123','todo');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $id =1;
    $item = $_POST['item'];
    $obj = new checklist($item,$conn,$id);
    if(isset($_POST["add_btn"])){
        $obj->add();
    }
    else if(isset($_POST["delete_btn"])){
        $obj->delete();
    }
    header("location:../index.php");
}
?>