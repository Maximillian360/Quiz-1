<?php
    namespace conv;
    class Date {
        public static function dateConvert(){
                $day = $_POST['day'];
                $month = $_POST['month'];
                $year = $_POST['year'];
                $date = $month. "/".$day. "/".$year;
                strtotime($date);
                echo $date;
        }
    }