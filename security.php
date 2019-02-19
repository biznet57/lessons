<?php

/* https://codecourse.com/watch/php-security?part=96-directory-listing

1.SQL Injection

2.Error reporting

3.Include File extensions

4.XSS
function e($value){
return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

5.Password hashing

6.Directory listing
.htaccess
Options -Indexes

7.HttpOnly Cookies

8. No ids and personal information stored in cookies

9.CSRF
Check user session and priveleges on editing and deleting data in DB

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     if(!isset($_POST['_token']) || $_POST['_token'] !== $_SESSION['_token']){
     die('Invalid token');
     }
}

$_SESSION['_token'] = bin2hex(random_bytes(16)); //or openssl_random_pseudo_bytes(16)//

<form action="" method="post">
    
    <input type="hidden" name="_token" value="<?= $_SESSION['_token']; ?>">
    <input type="submit" value="Delete my account">

</form>

10.User defined file includes


*/
