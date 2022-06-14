<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1d4d6e93fd48743e4a9b0e8d60bd820
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Finance\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Finance\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1d4d6e93fd48743e4a9b0e8d60bd820::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1d4d6e93fd48743e4a9b0e8d60bd820::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1d4d6e93fd48743e4a9b0e8d60bd820::$classMap;

        }, null, ClassLoader::class);
    }
}
