Kohana Google Translation API
====================

This module provides GoogleTranslateWrapper originaly developed by Sameer Borate as Kohana module.

Using Cache
-----------

To use Kohana Google Translation API, download and extract the latest stable release of Kohana Google Translation API
from [Github](https://github.com/gingo/kohana-google-translation-api). Place the module into your Kohana instances modules 
folder. Finally enable the module within the application bootstrap within the section entitled _modules_.

It is highly recomeneded to create config file with your Google API creditials. Sample config file is 
in _\<KohanaGoogleTranslationAPI\>/config/gtapi.php_.

Quick test
----------

To test if your Kohana Google Translation API works properly try this small test in your controller:

	$gt = new GTApi();
	$gt->selfTest();

Quick example
-------------

The following is a quick example of how to use Kohana Google Translation API.

	/* Initialize the class translate class */
	$gt = new GTApi();
	$sampleText = "Bonjour de cette partie du monde";
	 
	/* translate(string, to_language, from_language) */
	echo $gt->translate($sampleText , "en", "fr");


More examples can be found at [CodeDiesel](http://www.codediesel.com/php/google-translation-php-wrapper/) 
and [GoogleCode](http://code.google.com/p/google-translate-php-wrapper/). In this examples you must replace GoogleTranslateWrapper
by GTApi and ignore creditials methods.
