<?php
include("./connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["add_btn"])){
        if($_POST['item']!=NULL){
            add($_POST['item']);
        }
    }
    else if(isset($_POST["check_btn"])){
        // echo $_POST["check_btn"];
        check($_POST["check_btn"]);
    }
    else if(isset($_POST["delete_btn"])){
        delete($_POST["delete_btn"]);
    }
    header("location: ../View/checklist.php");
}