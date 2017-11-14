<?php
use Adldap\Laravel\Facades\Adldap;

// Finding a user.
$user = Adldap::search()->users()->find('Caceros Yat');
