<?php 
        include_once "utilites.php";
        $id=$unique_id;
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO {$nome} (id_bairro_chat,id_usu,msg_txt)
                                        VALUES ({$id_bairro_chat}, {$id}, '{$message}')") or die();
        }
?>