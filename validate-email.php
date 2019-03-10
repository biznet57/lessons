<?php

$this->_buf // for bulk check cache

function ValidateEmail($email)
    {
        list($user, $domain) = explode('@', $email);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) !== FALSE)
            return 0;

        if (isset($this->_buf[$domain]))
            return $this->_buf[$domain];

        if (checkdnsrr($domain) === FALSE) {
            $this->_buf[$domain] = 0;
            return 0;
        }
        $this->_buf[$domain] = 1;

        return 1;
    }
