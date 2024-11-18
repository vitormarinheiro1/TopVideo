<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb593faefe088d0d203c2d567b8b2f55f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb593faefe088d0d203c2d567b8b2f55f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb593faefe088d0d203c2d567b8b2f55f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb593faefe088d0d203c2d567b8b2f55f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}