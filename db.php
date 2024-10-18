<?php


// Create connection
function viso_db_connect(){
    include 'config.php';

    $conn = mysqli_connect($CFG_DB_SERVERNAME, $CFG_DB_USERNAME, $CFG_DB_PASSWORD, $CFG_DB_NAME);

    // Check connection
    if (!$conn) {
        error_log("SQL connect die");
        die("Connection failed: " . mysqli_connect_error());
    }
//    error_log("connect success");
//    echo "Connected successfully";

    return $conn;
}

function viso_db_close($conn){
echo "<BR>DB CLOSED<BR>";
    $conn->close();
    $conn=NULL;
}

function viso_db_execute($conn, $sqlstring){
//    error_log("Sql to be excuted.\n".$sqlstring);
    if($conn==NULL){
        $conn = viso_db_connect();
    }

echo "<br>".$sqlstring."<BR>";
//    mysql_select_db($dbname, $conn);
    if (!mysqli_query($conn,$sqlstring))
    {
        die('Error: ' . mysqli_error($conn));
//        error_log("error execute sql\n".$sqlstring);
    }

    viso_db_close($conn);
}

function getObjectFromDB($table, $field, $condition){
    $sql = "SELECT ".$field." FROM ".$table;
//      print_r("SQL:".$sql."<br>");
    if($condition != ""){
        $sql = $sql. " WHERE ".$condition;
    }
    $conn = viso_db_connect();
    $result = $conn->query($sql);
    print_r($sql."<BR> No of results: ".$result->num_rows);

    if ($result->num_rows ==1) {
        while($row = $result->fetch_assoc()) {
            return $row;
        }
    }
    else if ($result->num_rows >0){
        $i=0;
        while($row = $result->fetch_assoc()) {
            $res[$i++] = $row;
        }
        return $res;
    }
    return -1;
}

function updateValueToDB($table, $fieldvalue, $condition){

        if($condition ==""){
                $sql = "update ".$table." set ".$fieldvalue;
        }else{
                $sql = "update ".$table." set ".$fieldvalue." where ".$condition;

        }

    $conn = viso_db_connect();
//    print_r($sql);
    $result = $conn->query($sql);
//      echo "<p>updateValueToDB Result=".var_dump($result)."<p>";
    return $result;
}

function insertValueToDB($table, $fields, $values){

        $sql = "insert into ".$table." (".$fields. ") VALUES (". $values.")";

    $conn = viso_db_connect();
    print_r($sql);
    $result = $conn->query($sql);
        echo "<p>insertValueToDB Result=".var_dump($result)."<p>";
    return $result;
}


function DBDelete($conn, $sqlstring)
{

}

?>
