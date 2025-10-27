<?php

class Login {
}

$login = new Login();

var_dump($login::class); // php 8
var_dump(Login::class);
var_dump(get_class($login));
