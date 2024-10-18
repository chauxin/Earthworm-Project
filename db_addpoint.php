<?php
if (($_GET["action"]) && ($_GET["action"]) == "points"){

    # 變量賦值    
    if (($_GET['id'])){
        $id = $_GET['id'];

            if (($_GET['card_sn'])) {
               $card_sn = $_GET['card_sn'] 

                   if (($_GET['user_name'])) {
                    $user_name = $_GET['user_name']
                        
                        if (($_GET['points'])) {
                            $points = $_GET['points']
                        }
                   }
            }
        }
    } 

    include "db.php";
    $conn = viso_db_connect();

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    else{
        echo "success<BR>";
    }
    $sql = "INSERT INTO `test_table`(`id`, `card_sn`, `user_name`, `points`) VALUES ($id, $card_sn, $user_name, $points)";
    //insert a new entry
    viso_db_execute($conn, $sql);

    $sql = "INSERT INTO 'sensor'('acid') VALUES (1)"
        //get results from DB
        $results = getObjectFromDB("test_table", "*", "");

    echo "<BR>".json_encode($results)."<BR>";

    $results = getObjectFromDB("sensor", "acid", "");

    echo "<BR>".json_encode($results)."<BR>";
}
?>
