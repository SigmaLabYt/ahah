<?php
    function getCurrentPage(){
        $current_page = explode("/", $_SERVER['REQUEST_URI']);
        return $current_page[1];
    }
?>