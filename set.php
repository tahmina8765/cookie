<?php

$first_name = 1;
setcookie('first_name', $first_name, time() + (86400 * 7), '/', 'localhost');
// setcookie('first_name',$first_name,time() + (86400 * 7)); // 86400 = 1 day