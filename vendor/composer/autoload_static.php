<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57764f46d8a9d7063897b3a2d0fecdc8
{
    public static $files = array (
        '60799491728b879e74601d83e38b2cad' => __DIR__ . '/..' . '/illuminate/collections/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
        'H' => 
        array (
            'Http\\' => 5,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/macroable',
            1 => __DIR__ . '/..' . '/illuminate/conditionable',
            2 => __DIR__ . '/..' . '/illuminate/collections',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Http\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Http',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit57764f46d8a9d7063897b3a2d0fecdc8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57764f46d8a9d7063897b3a2d0fecdc8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit57764f46d8a9d7063897b3a2d0fecdc8::$classMap;

        }, null, ClassLoader::class);
    }
}
