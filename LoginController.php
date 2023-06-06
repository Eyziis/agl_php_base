<?php
include("Database.php");

function login(){

    if(isset($_POST["email"] ) && isset($_POST['password'])){

        $db = Database::getConnection();
        $email = $_POST["email"];
        $password = $_POST['password'];
        echo $email;
        $stmt = sqlsrv_query($db, "SELECT * FROM users where email='".$email."' AND password='".$password."'");

        //$row_count = sqlsrv_num_rows( $stmt );

        if (sqlsrv_has_rows($stmt) === false){
            echo "Error in retrieveing row count.";
        }
        else {
            header("Location: Signaletique/Locataire.php");
            die();
        }
    }
    else{
        return "non";
    }
    //header("Location: Views/Signaletique/Locataire.php");
    //die();
}

?>