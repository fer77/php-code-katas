<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbde988b63dc00844e66b9f09d6a991ae
{
    public static $files = array (
        '578d079de5cdba2b05d0af0a658c50d4' => __DIR__ . '/..' . '/crysalead/kahlan/src/init.php',
        '4e227d66516912dac35f90e94e531ef5' => __DIR__ . '/..' . '/crysalead/box/src/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kahlan\\spec\\' => 12,
            'kahlan\\' => 7,
        ),
        'j' => 
        array (
            'jit\\spec\\' => 9,
            'jit\\' => 4,
        ),
        'f' => 
        array (
            'filter\\spec\\' => 12,
            'filter\\' => 7,
        ),
        'd' => 
        array (
            'dir\\spec\\' => 9,
            'dir\\' => 4,
        ),
        'c' => 
        array (
            'code\\spec\\' => 10,
            'code\\' => 5,
        ),
        'b' => 
        array (
            'box\\spec\\' => 9,
            'box\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kahlan\\spec\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/kahlan/spec',
        ),
        'kahlan\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/kahlan/src',
        ),
        'jit\\spec\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/jit/spec',
        ),
        'jit\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/jit/src',
        ),
        'filter\\spec\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/filter/spec',
        ),
        'filter\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/filter/src',
        ),
        'dir\\spec\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/dir/spec',
        ),
        'dir\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/dir/src',
        ),
        'code\\spec\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/code/spec',
        ),
        'code\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/code/src',
        ),
        'box\\spec\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/box/spec',
        ),
        'box\\' => 
        array (
            0 => __DIR__ . '/..' . '/crysalead/box/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbde988b63dc00844e66b9f09d6a991ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbde988b63dc00844e66b9f09d6a991ae::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}