<?php 
class Page{
    public static function display(string $page) {
     switch ( $page) {
            case 'dashboard':
                include "modules/dashboard.php";
                break;
            case 'students':
                include "modules/student.php";
                break;
            case 'grades':
                include "modules/grades.php";
                break;
            default:
                echo "Page not include in condition";
                break;
        }
    }
}