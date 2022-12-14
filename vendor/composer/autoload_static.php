<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7dbfb80222f9261244ed6ba0d65470b6
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mervick\\aesEverywhere\\tests\\' => 28,
            'mervick\\aesEverywhere\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mervick\\aesEverywhere\\tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/mervick/aes-everywhere/php/tests',
        ),
        'mervick\\aesEverywhere\\' => 
        array (
            0 => __DIR__ . '/..' . '/mervick/aes-everywhere/php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Format' => __DIR__ . '/../..' . '/application/libraries/Format.php',
        'REST_Controller' => __DIR__ . '/../..' . '/application/libraries/REST_Controller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7dbfb80222f9261244ed6ba0d65470b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7dbfb80222f9261244ed6ba0d65470b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7dbfb80222f9261244ed6ba0d65470b6::$classMap;

        }, null, ClassLoader::class);
    }
}
