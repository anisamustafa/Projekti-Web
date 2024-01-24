<?php
function testGet(){
if(isset($_GET['submit'])){
$perdoruesi =$_GET['username'];
$fjalkalimi =$_GET['password'];
echo 'Perdoruesi: ', $perdoruesi,
'<br> Fjalkalimi: ', $fjalkalimi;
} else{
echo 'Ju nuk keni shtyp butonin RUAJ!';
}
}
?>