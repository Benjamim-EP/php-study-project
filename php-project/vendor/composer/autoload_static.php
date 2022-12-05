<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7301ecdab7e67fbe7ad8a5c76e112fa7
{
    public static $files = array (
        '284fa40cd2b2cf1f0ce379bb5c0a39a5' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        'd2e4023369cdf1e0248a66c217008fb1' => __DIR__ . '/../..' . '/app/router/router.php',
        '7f72221d610ee53c10d97fec33742165' => __DIR__ . '/../..' . '/app/core/controller.php',
        '6f2dbab363b031a275761e447bb5b0a6' => __DIR__ . '/../..' . '/app/database/connect.php',
        '30212b23cd6d7f0a7df2a95fc9205378' => __DIR__ . '/../..' . '/app/database/fetch.php',
        '012f8d212b3ec3584186a8aecb6f7cf6' => __DIR__ . '/../..' . '/app/helpers/redirect.php',
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
        'app\\controllers\\Home' => __DIR__ . '/../..' . '/app/controllers/Home.php',
        'app\\controllers\\User' => __DIR__ . '/../..' . '/app/controllers/User.php',
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
