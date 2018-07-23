<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10cecc0c8ae5bb1af07832f6f831d257
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'DatabaseAccessObject' => __DIR__ . '/../..' . '/libraries/mysql.php',
        'Request' => __DIR__ . '/../..' . '/libraries/Request.php',
        'Router' => __DIR__ . '/../..' . '/libraries/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10cecc0c8ae5bb1af07832f6f831d257::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10cecc0c8ae5bb1af07832f6f831d257::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10cecc0c8ae5bb1af07832f6f831d257::$classMap;

        }, null, ClassLoader::class);
    }
}
