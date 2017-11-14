<?php
use Adldap\Laravel\Facades\Adldap;

// Finding a user.
$search = Adldap::search()->where('uid', '=', 'T20120336')->get();
var_dump($search);

?>