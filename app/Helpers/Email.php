<?php

namespace App\Helpers;

class Email {

    public static function validate(string $email){
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }

}