 <?php

        session_start();

        $db_host="localhost";
        $db_user="emptori1_games";
        $db_pass="deathater2493";
        $db_name="emptori1_games";
        $db_table="users";

        mysqli_connect($db_host, $db_user, $db_pass) or die(mysql_error());
        mysqli_select_db($db_name) or die(mysql_error());