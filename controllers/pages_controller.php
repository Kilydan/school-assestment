<?php
    class pagesController {
        public function home(){
            $first_name = 'Tim';
            $last_name = 'Hoenselaar';
            require_once('views/layout/home.php');
        }
        public function error() {
            require_once('views/layout/error.php');
        }
    }

