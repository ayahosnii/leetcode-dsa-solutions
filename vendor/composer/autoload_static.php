<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1af0cddf06b4625001b141e41b33e6ea
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1af0cddf06b4625001b141e41b33e6ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1af0cddf06b4625001b141e41b33e6ea::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1af0cddf06b4625001b141e41b33e6ea::$classMap;

        }, null, ClassLoader::class);
    }
}
