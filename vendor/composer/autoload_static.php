<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

<<<<<<< HEAD
class ComposerStaticInit99eae926a35f67459a0249497d2c5303
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'aitsydney\\' => 10,
=======
class ComposerStaticInit3dd65f2bd5d963496184dffaaa6a47ad
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        ),
    );

    public static $prefixDirsPsr4 = array (
<<<<<<< HEAD
        'aitsydney\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
=======
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
<<<<<<< HEAD
            $loader->prefixLengthsPsr4 = ComposerStaticInit99eae926a35f67459a0249497d2c5303::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99eae926a35f67459a0249497d2c5303::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit99eae926a35f67459a0249497d2c5303::$prefixesPsr0;
=======
            $loader->prefixLengthsPsr4 = ComposerStaticInit3dd65f2bd5d963496184dffaaa6a47ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3dd65f2bd5d963496184dffaaa6a47ad::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3dd65f2bd5d963496184dffaaa6a47ad::$prefixesPsr0;
>>>>>>> 5784ff225e0936923e865fd418aab2eda72985f9

        }, null, ClassLoader::class);
    }
}
