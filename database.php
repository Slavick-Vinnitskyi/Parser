<?php
        $host = "localhost";//127.0.0.1
        $user = "root";
        $password = "";
        $database = "habr";
        $port = 3306;
        $socket = "C:/xampp/mysql/mysql.sock";
        $connection = mysqli_connect($host, $user, $password, $database, $port, $socket);
        mysqli_set_charset($connection,'utf8');
        if($connection == false){
            echo mysqli_connect_error();
            exit();
        }
        echo "Connection is established";
        
        function make_articles () {
        
            //id
            //id_hub
            //title
            //short_text
            //text
            //image
                       
        }
        
        function hubs_table () {
           
            //id
            //hub сразу заполнить
        }
        
        function fill_articles () {
            
            
        }
        function update() {
        
        }
        
        
        
        
        