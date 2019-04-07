<?php

/* https://codecourse.com/watch/php-security?part=96-directory-listing

1.SQL Injection

2.Error reporting off

3.Include File extensions

4.XSS
function e($value){
$value = strip_tags($value);
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

11. File uploads???

12. 
Output escaping:
htmlentities($i, ENT_QUOTES, "UTF-8") - более ресурсоемкий, но работает без глюков с особенными буквами (напр.шведскими)
htmlspecialchars($i, ENT_QUOTES, "UTF-8") - быстрее, но обрабатывает меньшее количество символов (всего 5: &,",<,> и ' при включенном флаге ENT_QUOTES)

Form inputs validation: Ctype Functions, stripos, preg_match (нагрузка)

Form fields atributes min, max, telephone?

Session hijacking: session_regenerate_id() // сразу после старта сессии
LogOut: $_SESSION = array(); cookie; session_destroy();
Autoload: белый список подключаемых файловж

*/
