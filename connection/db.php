<?php

$connection = mysqli_connect("localhost", "root", "", "survey_db");

if (!$connection) {
    die("DB Connection Error: " . mysqli_connect_error());
}
?>

<?php
function getEnumValues($connection, $table, $column) {
    $sql = "SHOW COLUMNS FROM $table LIKE '$column'";
    $query = mysqli_query($connection, $sql);

    if (!$query) {
        die("SQL Error: " . mysqli_error($connection) . " | Query: $sql");
    }

    $row = mysqli_fetch_assoc($query);

    if (!$row) {
        die("Column '$column' not found in table '$table'");
    }

    $type = $row['Type'];

    preg_match("/^enum\('(.*)'\)$/", $type, $matches);

    return explode("','", $matches[1]);
}

?>
