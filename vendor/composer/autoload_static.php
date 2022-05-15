<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ddb9ec9154180c954aa7d321800f3b2
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ddb9ec9154180c954aa7d321800f3b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ddb9ec9154180c954aa7d321800f3b2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ddb9ec9154180c954aa7d321800f3b2::$classMap;

        }, null, ClassLoader::class);
    }
}