<?php
try{
$connection = mysqli_connect("localhost", "root", "", "survey_db");
} catch(Exception $e){
    echo "Database error: " . $e->getMessage(); 
}
?>