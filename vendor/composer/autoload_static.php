<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42143fb816614252f93050f3361a6d3b
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BarcodeEngine\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BarcodeEngine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42143fb816614252f93050f3361a6d3b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42143fb816614252f93050f3361a6d3b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
