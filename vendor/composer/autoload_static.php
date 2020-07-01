<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a9bac3a8f90875c90321ed80047923f
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OpenCage\\Geocoder\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OpenCage\\Geocoder\\' => 
        array (
            0 => __DIR__ . '/..' . '/opencage/geocode/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a9bac3a8f90875c90321ed80047923f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a9bac3a8f90875c90321ed80047923f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
