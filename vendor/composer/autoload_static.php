<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a80e816c4bfaebf088208192ea5ace1
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'douggonsouza\\etl\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'douggonsouza\\etl\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a80e816c4bfaebf088208192ea5ace1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a80e816c4bfaebf088208192ea5ace1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a80e816c4bfaebf088208192ea5ace1::$classMap;

        }, null, ClassLoader::class);
    }
}
