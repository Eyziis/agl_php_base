<?php
include("Database.php");
function ReadData()
{
    try
    {
        $db = Database::getConnection();
        $result = sqlsrv_query($db, "SELECT * FROM locataires");

        return $result;
    }
    catch(Exception $e)
    {
        echo("Error!");
    }
}
?>