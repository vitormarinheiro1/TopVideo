<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb593faefe088d0d203c2d567b8b2f55f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Mvc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Mvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb593faefe088d0d203c2d567b8b2f55f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb593faefe088d0d203c2d567b8b2f55f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb593faefe088d0d203c2d567b8b2f55f::$classMap;

        }, null, ClassLoader::class);
    }
}