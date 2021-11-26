<?php

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false)
    echo "false";
else
    echo "true";

?>