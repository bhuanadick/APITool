<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73fc9bbb06a8432434a42bbb69179c55
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SkiddleSDK\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SkiddleSDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/skiddle/skiddle-php-sdk/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73fc9bbb06a8432434a42bbb69179c55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73fc9bbb06a8432434a42bbb69179c55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit73fc9bbb06a8432434a42bbb69179c55::$classMap;

        }, null, ClassLoader::class);
    }
}
