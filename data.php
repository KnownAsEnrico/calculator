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
// echo "connected\n" . "<br>";

    $dataSQL = "SELECT * FROM calc_hist";
    $result = mysqli_query($con, $dataSQL);
    $resultCheck = mysqli_num_rows($result);
    $arrGiv = [];
    
    if($resultCheck > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $one = $row['input'];
            // $two = $row['result'];
            array_push($arrGiv, $one);
        }
        echo json_encode($arrGiv);
    }


    if(isset($_POST["input"]) && isset($_POST["result"])) {

    $input_f = $_POST["input"];
    $result_f = $_POST["result"];
    
    //IMPORT
    $sql = "INSERT INTO calc_hist (input, result) VALUES ('$input_f', $result_f)";

    if ($con->query($sql) === TRUE) {
        // echo "registriert";
    } else {
        echo "broken";
    }

    // pushList($input_f, $result_f);
    }


    // function pushList($calc, $res) {
    //     echo "<p>" . $calc . "=" . $res . "</p>";         
    // }






    // $sql_input = "SELECT input FROM calc_hist";
    // $sql_result = "SELECT result FROM calc_hist";

    //IMPORT
    // $sql = "INSERT INTO calc_hist (input, result) VALUES ($sql_input, $sql_result)";
    // if ($con->query($sql) === TRUE) {
    //     echo "registriert";
    // } else {
    //     echo "broken";
    // }

















$con->close();




die();


?>
