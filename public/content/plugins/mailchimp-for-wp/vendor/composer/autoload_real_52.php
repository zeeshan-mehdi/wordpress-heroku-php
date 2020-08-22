<?php

// autoload_real_52.php generated by xrstf/composer-php52

class ComposerAutoloaderInit7a62af1ae445205241966b117d9204ca {
	private static $loader;

	public static function loadClassLoader($class) {
		if ('xrstf_Composer52_ClassLoader' === $class) {
			require dirname(__FILE__).'/ClassLoader52.php';
		}
	}

	/**
	 * @return xrstf_Composer52_ClassLoader
	 */
	public static function getLoader() {
		if (null !== self::$loader) {
			return self::$loader;
		}

		spl_autoload_register(array('ComposerAutoloaderInit7a62af1ae445205241966b117d9204ca', 'loadClassLoader'), true /*, true */);
		self::$loader = $loader = new xrstf_Composer52_ClassLoader();
		spl_autoload_unregister(array('ComposerAutoloaderInit7a62af1ae445205241966b117d9204ca', 'loadClassLoader'));

		$vendorDir = dirname(dirname(__FILE__));
		$baseDir   = dirname($vendorDir);
		$dir       = dirname(__FILE__);

		$map = require $dir.'/autoload_namespaces.php';
		foreach ($map as $namespace => $path) {
			$loader->add($namespace, $path);
		}

		$classMap = require $dir.'/autoload_classmap.php';
		if ($classMap) {
			$loader->addClassMap($classMap);
		}

		$loader->register(true);

//		require $vendorDir . '/symfony/polyfill-ctype/bootstrap.php'; // disabled because of PHP 5.3 syntax
//		require $vendorDir . '/myclabs/deep-copy/src/DeepCopy/deep_copy.php'; // disabled because of PHP 5.3 syntax
//		require $vendorDir . '/brain/monkey/inc/api.php'; // disabled because of PHP 5.3 syntax
		require $baseDir . '/includes/functions.php';
		require $baseDir . '/includes/deprecated-functions.php';
		require $baseDir . '/includes/forms/functions.php';
		require $baseDir . '/includes/forms/admin-functions.php';
		require $baseDir . '/includes/integrations/functions.php';

		return $loader;
	}
}
