<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec867c4bb506dbbc228cfd4806c905d7
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\entity\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\entity\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitec867c4bb506dbbc228cfd4806c905d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec867c4bb506dbbc228cfd4806c905d7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec867c4bb506dbbc228cfd4806c905d7::$classMap;

        }, null, ClassLoader::class);
    }
}
