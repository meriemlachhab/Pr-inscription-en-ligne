<?php

class Session {
    public static function status($type, $message) {
        setcookie($type, $message, time() + 5, '/');
    }
}


?>