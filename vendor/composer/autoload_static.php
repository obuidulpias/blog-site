<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb83db24e53c4037aadd9dc8c704ef8e
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb83db24e53c4037aadd9dc8c704ef8e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb83db24e53c4037aadd9dc8c704ef8e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}