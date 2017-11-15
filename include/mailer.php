<?php

class Mailer {

    /**
     * sendWelcome - Sends a welcome message to the newly
     * registered user, also supplying the username and
     * password.
     */
    function sendWelcome($user, $email, $pass) {
        $headers = "From: " . EMAIL_FROM_NAME . " <" . EMAIL_FROM_ADDR . ">\r\n";
        $headers .= "Content-type: text; charset=UTF-8\r\n";
        $subject = "Elektroninio dienyno registracija";
        $body = $user . ",\n\n"
                . "Sveiki! Jūs užsiregistravote į Elektroninio dienyno sistemą "
                . "su šiais duomenimis:\n\n"
                . "Vartotojo vardas: " . $user . "\n"
                . "Slaptažodis: " . $pass . "\n\n";
        return mail($email, $subject, $body, $headers);
    }

    /**
     * sendNewPass - Sends the newly generated password
     * to the user's email address that was specified at
     * sign-up.
     */
    function sendNewPass($user, $email, $pass) {
        $headers = "From: " . EMAIL_FROM_NAME . " <" . EMAIL_FROM_ADDR . ">\r\n";
        $headers .= "Content-type: text; charset=UTF-8\r\n";
        $subject = "Elektroninio dienyno naujas slaptažodis";
        $body = $user . ",\n\n"
                . "Jūsų naujas slaptažodis:\n\n"
                . "Vartotojo vardas: " . $user . "\n"
                . "Naujas slaptažodis: " . $pass . "\n\n";
        return mail($email, $subject, $body, $headers);
    }

}

/* Initialize mailer object */
$mailer = new Mailer;
?>
