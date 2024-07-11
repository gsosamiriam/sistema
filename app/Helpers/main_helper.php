<?php

    if(!function_exists('CSSBoot')){
        function CSSBoot(){
            return  '<link rel="stylesheet" href="'.base_url("assets/css/bootstrap.min.css").'">
           
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
             rel="stylesheet">
              <link rel="stylesheet" href="'.base_url("assets/css/style.css").'">';
            
           // return '<link href="'.base_url().'public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">';
        }
    }

    if(!function_exists('JSBoot')){
        function JSBoot(){
            return  '
            <script
  src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
  integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
  crossorigin="anonymous"></script>
            <script src="'.base_url("assets/js/bootstrap.min.js").'"></script>
            <script src="'.base_url("assets/js/main.js").'"></script>
            ';
        }
    }

?>