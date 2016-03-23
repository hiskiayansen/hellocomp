<?php

class mahasiswa{
var $Nama;

//methode
function SetNama($parameter)
$this->Nama=$parameter;
}
function GetNama(){
echo $this->Nama. "<br/>";

}}

$Yansen = new mahasiswa;
$Yansen->SetNama("Nama saya Yansen");
$Yansen->GetNama();

?>
