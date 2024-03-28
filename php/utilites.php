<?php
session_start();
include ("config.php");
    if(isset($_SESSION['unique_id'])){
    $sql = "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}";
    $query = mysqli_query($conn, $sql);
    $nome='';
    $nome2='';
    $id_bairro_chat='';
    $unique_id=$_SESSION['unique_id'];
    $row = mysqli_fetch_assoc($query);
    if(mysqli_num_rows($query) > 0){
        if($row['bairro_id']==1){
            $nome='chatSaoJose';
            $nome2='Bairro São José';
            $id_bairro_chat=1;
       } elseif($row['bairro_id']==2){
            $nome='ChatSantoAntonio';
            $nome2='Bairro Santo Antonio';
            $id_bairro_chat=2;
           }elseif($row['bairro_id']==3){
            $nome='chatSaoJose';
            $nome2='';
            $id_bairro_chat=3;
      }
    }else{
        header("location: ../login.php");
    }
}