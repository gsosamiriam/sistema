<?php

    if(!function_exists('CSSBoot')){
        function CSSBoot(){
            return  '<link rel="stylesheet" href="'.base_url("assets/css/bootstrap.min.css").'">
              <link rel="stylesheet" href="'.base_url("assets/css/style.css").'">';
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