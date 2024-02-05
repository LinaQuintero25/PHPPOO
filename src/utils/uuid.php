<?php

namespace Cursophp\Poo\utils;

class UUID
{

    public static function generate()
    {
        return uniqid();
    }
}
