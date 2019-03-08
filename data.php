<?php
    function debug_to_console( $data ) {
        $output = $data;
        if ( is_array( $output ) )
            $output = implode( ',', $output);
    
        echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
    }
    
    require_once 'dbconfig.php';

    $dsn = "pgsql:host=$host;dbname=$db;user=$username;password=$password";

    try{
        $conn = new PDO($dsn);

        if ($conn){
            //debug_to_console("Connected to the database successfully!");
            $result = $conn->query("SELECT * FROM xp WHERE id = 'botstats'");
            debug_to_console($result);
        }
    }catch (PDOException $e){
        echo $e->getMessage();
    }

    
    //debug_to_console("Test");
?>

