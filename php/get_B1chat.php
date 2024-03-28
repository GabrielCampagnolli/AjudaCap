<?php 
        include_once "utilites.php";
        $outgoing_id = $_SESSION['unique_id'];
        $output = "";
        $sql2="SELECT * FROM {$nome} ORDER BY msg_id";
        $query2 = mysqli_query($conn, $sql2);
        if(mysqli_num_rows($query2) > 0){
        while($row2 = mysqli_fetch_assoc($query2)){
            if($row2['id_usu'] == $outgoing_id){
                $output .= '<div class="chat outgoing">
                            <div class="details">
                                <p>'. $row2['msg_txt'] .'</p>
                            </div>
                            </div>';
            }else{
                $sql3="SELECT * FROM users WHERE unique_id={$row2['id_usu']}";
                $query3 = mysqli_query($conn, $sql3);
                $row3=mysqli_fetch_assoc($query3);
                $output .= '<div class="chat incoming">
                            <img src="php/images/'.$row3['img'].'" alt="">
                            <div class="details">
                                <div>'.$row3['fname'].$row3['lname'].'</div>
                                <p>'. $row2['msg_txt'] .'</p>
                            </div>
                            </div>';
            }
        }
        
        }else{
            $output .= '<div class="text">Seja o primeiro a Enviar uma mensagem!</div>';
        
      
        }
    echo $output;

     ?>