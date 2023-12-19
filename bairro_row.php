<?php
include("php/config.php");
                    try {
                        $sth = $dbh->prepare('SELECT * FROM bairro');
                        $sth->execute();
                        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                        if(!empty($result)) {
                            foreach($result as $row) {
                                echo "<option value='".$row["id"]."'>" . $row["name"] . "</option>";
                            }
                        } 
                        $dbh = null;
                    } catch (PDOException $e) {
                        print "Error!: " . $e->getMessage();
                        die();
                    }
          ?>    