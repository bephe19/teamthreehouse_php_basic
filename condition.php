<?php

$tanya = readline("Pilih mana (yes/no) ?");

if($tanya=="yes") //jika memilih yes
{
    echo "Kamu memilih yes";
}elseif($tanya=="no") //jika memilih no
{
    echo "Kamu memilih no";
}
elseif($tanya=="maybe") //jika memilih maybe
{
    echo "Kamu memilih maybe";
}
else  //Jika Tidak memilih yes/no/maybe (tidak ada pilihan yang tersedia)
{
    echo "Kamu tidak memilih pilihan yang tersedia!!!!";
}

$menu=1;

switch($menu)
{
    case 1 :                        //jika usser menginput angka 1
        echo "Anda Memilih Angka 1";
        break;
    case 2 :                        //jika usser menginput angka 2
        echo "Anda Memilih Angka 2";
        break;
     case 3 :                        //jika usser menginput angka 3
        echo "Anda Memilih Angka 3";
        break;
    default;                        // jika usser tidak memilih pilihan yang tersedia
        echo "Anda Tidak memilih pilihan yang tersedia";

}