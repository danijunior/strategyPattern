<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit618cc03e0e99f15a77f961c3e6a12da4
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit618cc03e0e99f15a77f961c3e6a12da4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit618cc03e0e99f15a77f961c3e6a12da4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit618cc03e0e99f15a77f961c3e6a12da4::$classMap;

        }, null, ClassLoader::class);
    }
}
