<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4acca15ad2a7c625cfc400909e7b26e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cursophp\\Poo\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cursophp\\Poo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4acca15ad2a7c625cfc400909e7b26e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4acca15ad2a7c625cfc400909e7b26e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4acca15ad2a7c625cfc400909e7b26e::$classMap;

        }, null, ClassLoader::class);
    }
}
