<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc136060b3fe012a18f3d15c72d3be6aa
{
    public static $prefixLengthsPsr4 = array (
        'j' => 
        array (
            'jrobchin\\casperjsphp\\' => 21,
        ),
        'B' => 
        array (
            'Browser\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'jrobchin\\casperjsphp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Browser\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpcasperjs/phpcasperjs/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc136060b3fe012a18f3d15c72d3be6aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc136060b3fe012a18f3d15c72d3be6aa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}