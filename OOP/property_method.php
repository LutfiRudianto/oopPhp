<?php 

class User {

    public $nama = 'Moch Lutfi Rudianto',
           $hobbi = 'beban ortu';

    
    public function sapa($nama){
        return 'hello '.$nama;
    }
}

$User1 = new User;
var_dump($User1);

