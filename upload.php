<?php 
$ftp_server = "192.168.1.12";
$ftp_nazwa = "win7";
$ftp_haslo = "chceloda1";

$polaczenie = ftp_connect($ftp_server) or die("Nie mogłem połączyć się z serwerem");

if(@ftp_login($polaczenie,$ftp_nazwa,$ftp_haslo))
{
	echo "Połączono z bazą";
}
else
{
	echo "Nie mogłem połączyć się z serwerem";
}
$plik=$_FILES["fileToUpload"]["name"];
$miejsce = "/".$plik;
ftp_put($polaczenie,$miejsce,$_FILES["fileToUpload"]["tmp_name"],FTP_ASCII);
ftp_close($polaczenie);
echo "Koniec Połączenia";
?>
