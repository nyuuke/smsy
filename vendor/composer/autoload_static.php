<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27721c290261c4618020d755f6773a89
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit27721c290261c4618020d755f6773a89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27721c290261c4618020d755f6773a89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27721c290261c4618020d755f6773a89::$classMap;

        }, null, ClassLoader::class);
    }
}
