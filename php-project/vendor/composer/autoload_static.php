<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7301ecdab7e67fbe7ad8a5c76e112fa7
{
    public static $files = array (
        '284fa40cd2b2cf1f0ce379bb5c0a39a5' => __DIR__ . '/../..' . '/app/helpers/constants.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7301ecdab7e67fbe7ad8a5c76e112fa7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7301ecdab7e67fbe7ad8a5c76e112fa7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7301ecdab7e67fbe7ad8a5c76e112fa7::$classMap;

        }, null, ClassLoader::class);
    }
}
