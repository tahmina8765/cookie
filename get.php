<?php

echo 'Hello '.($_COOKIE['first_name']!='' ? $_COOKIE['first_name'] : 'Guest'); // Hello David!