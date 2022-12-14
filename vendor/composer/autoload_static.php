<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5e89bda958802979a3e1ea4ba5e5cf3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite5e89bda958802979a3e1ea4ba5e5cf3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5e89bda958802979a3e1ea4ba5e5cf3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite5e89bda958802979a3e1ea4ba5e5cf3::$classMap;

        }, null, ClassLoader::class);
    }
}
