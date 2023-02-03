<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitda950f949b9f23349cab37a1024acfbb
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

        spl_autoload_register(array('ComposerAutoloaderInitda950f949b9f23349cab37a1024acfbb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitda950f949b9f23349cab37a1024acfbb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitda950f949b9f23349cab37a1024acfbb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
