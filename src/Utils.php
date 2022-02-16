<?php

namespace App;

class Utils
{
    public static function randomKey(): string
    {
        return bin2hex(random_bytes(50));
    }
}
