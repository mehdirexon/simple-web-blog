<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba7f4c1f71c261e2b7e29a450e75c9af
{
    public static $files = array (
        'd1dec60d5c215c3ac308295d9c49eee1' => __DIR__ . '/../..' . '/helper.php',
    );

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
            $loader->prefixLengthsPsr4 = ComposerStaticInitba7f4c1f71c261e2b7e29a450e75c9af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba7f4c1f71c261e2b7e29a450e75c9af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba7f4c1f71c261e2b7e29a450e75c9af::$classMap;

        }, null, ClassLoader::class);
    }
}
