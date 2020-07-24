<?php
    function print_name() {
        if(isset($_GET['name'])) {
            echo $_GET['name'];
        } else {
            echo "Guest";
        }
    }
?>