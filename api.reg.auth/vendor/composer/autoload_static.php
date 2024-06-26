<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9fc3771a8687fdd430da29bd814c87ca
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9fc3771a8687fdd430da29bd814c87ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9fc3771a8687fdd430da29bd814c87ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9fc3771a8687fdd430da29bd814c87ca::$classMap;

        }, null, ClassLoader::class);
    }
}
