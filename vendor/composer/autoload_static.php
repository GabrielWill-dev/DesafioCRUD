<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf788f5ecf089d4f5f58f30d8e2f83236
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
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf788f5ecf089d4f5f58f30d8e2f83236::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf788f5ecf089d4f5f58f30d8e2f83236::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf788f5ecf089d4f5f58f30d8e2f83236::$classMap;

        }, null, ClassLoader::class);
    }
}