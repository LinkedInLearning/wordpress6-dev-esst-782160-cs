<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitacd4c7e114a343ab0ab2d4769878b99c
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

        spl_autoload_register(array('ComposerAutoloaderInitacd4c7e114a343ab0ab2d4769878b99c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitacd4c7e114a343ab0ab2d4769878b99c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitacd4c7e114a343ab0ab2d4769878b99c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
