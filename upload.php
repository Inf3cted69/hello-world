<?php 
//Load the settings
require_once("opcje.php");
 
$message = "";
if(isset($_FILES['file']))
{
$target_path = Settings::$uploadFolder;
$target_path = $target_path . time() . '_' . basename( $_FILES['file']['name']);

if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
            $message = "Plik ".  basename( $_FILES['file']['name']). 
            " zosta� wstawiony";
        } else{
            $message = "Wyst�pi� b��d, spr�buj ponownie";
        }
}
