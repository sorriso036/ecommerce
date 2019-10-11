<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43090da9531e8e7b1fbafeb33d2672c6
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit43090da9531e8e7b1fbafeb33d2672c6::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit43090da9531e8e7b1fbafeb33d2672c6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
