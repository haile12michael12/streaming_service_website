<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit324281f1912047c2befbb2ba65615511
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Michael\\StreamingServiceWebsite\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Michael\\StreamingServiceWebsite\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit324281f1912047c2befbb2ba65615511::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit324281f1912047c2befbb2ba65615511::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit324281f1912047c2befbb2ba65615511::$classMap;

        }, null, ClassLoader::class);
    }
}
