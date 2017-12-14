<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita435c345d3a4b82a0bb46fa2136e030e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/Controllers/Controller.php',
        'App\\Core\\Load' => __DIR__ . '/../..' . '/app/Core/Load.php',
        'Router' => __DIR__ . '/../..' . '/app/Core/router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita435c345d3a4b82a0bb46fa2136e030e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita435c345d3a4b82a0bb46fa2136e030e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita435c345d3a4b82a0bb46fa2136e030e::$classMap;

        }, null, ClassLoader::class);
    }
}