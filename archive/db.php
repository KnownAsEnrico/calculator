<?php
ini_set('display_errors', 1);
$host_ip = "192.168.50.199";
$user = "ext-com";
$pw = "Ext-Com089";
$db = "lehrling";

$con = new mysqli($host_ip, $user, $pw, $db);


if($con->connect_error) {
    die("end" . $con->connect_error);
}
echo "connected\n";


    // $sql_input = "SELECT input FROM calc_hist";
    // $sql_result = "SELECT result FROM calc_hist";

    //IMPORT
    // $sql = "INSERT INTO calc_hist (input, result) VALUES ('2+2', '4')";
    
    // if ($con->query($sql) === TRUE) {
    //     echo "registriert";
    // } else {
    //     echo "broken";
    // }

    $con->close();




        function pushList($calc, $res) {
            if(empty($calc) || empty($res)){
            echo "<li>error</li>";
            }else {
            echo "<li>" . $calc . "=" . $res ."</li>";        
            }
        }





?>