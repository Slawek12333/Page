<?php

        $servername = "localhost";
        $username = "usr";
        $password = "haslo";
        $database = "autokomis"; // Dodaj nazwę swojej bazy danych

        // Tworzenie połączenia
        $conn = new mysqli($servername, $username, $password, $database);

        // Sprawdzenie połączenia
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "nie dzial";
        }
       
    ?>