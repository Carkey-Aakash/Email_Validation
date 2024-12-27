<?php
$email=$_POST['email'];
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "It is a valid email";
}
else
{
    echo "it is not a validate email";
}
?>