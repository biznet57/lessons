parse_url('https://www.biznet.ru/');
filter_var('dfgd@mail.ru', FILTER_VALIDATE_EMAIL);
usleep(2000000); // sleep for 2 seconds

function getRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';

    for ($i = 0; $i < $length; $i++) {
        $string .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $string;
}
