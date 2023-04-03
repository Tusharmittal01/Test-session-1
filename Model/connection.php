<?php
function connection(){
    $conn=new mysqli("localhost","tushar","Innoraft@123","todo");
    if($conn->connect_error){
        echo "Connection error:" ;$conn->connect_error;
    }
    return $conn;
}

function add($value){
    $con = connection();
    $query = "INSERT INTO checklist VALUES(NULL,'$value','0')";
    $result = mysqli_query($con,$query);
    return $result;
}
function get_items(){
    $con = connection();
    $query = "SELECT id,item FROM checklist WHERE status='0'";
    $result = mysqli_query($con,$query);
    return $result;
}
function get_items_checked(){
    $con = connection();
    $query = "SELECT id,item FROM checklist WHERE status='1'";
    $result = mysqli_query($con,$query);
    return $result;
}
function check($id){
    $con = connection();
    $query = "UPDATE checklist set status='1' WHERE id='$id'";
    $result = mysqli_query($con,$query);
}
function delete($id){
    $con = connection();
    $query = "DELETE FROM checklist WHERE id='$id'";
    $result = mysqli_query($con,$query);
}
?>
function check(){

}
function delete(){
    
}