The UcoTwigExtensions
=====================

This bundle provides the following filters:

* ``dateage``: The date filter is able to format the age of a date::
  
   The post was sent {{ post.published_at | dateage }} ago.

   {# Returns 'The post was sent 5 days and 1 hour ago.' #}


Installation
------------

You need to install de submodule on the deps file::

    // deps
    [UcoTwigExtensionsBundle]
        git=git://github.com/sgomez/UcoTwigExtensionsBundle.git
        target=/bundles/Uco/TwigExtensionsBundle

And then::

    bash$ php bin/vendors install


Configuration
-------------

Add this to app/autoload.php::

    // app/autoload.php
    $loader->registerNamespaces(array(
      // ...
      'Uco'              => __DIR__.'/../vendor/bundles',
      // ...
    ));

And this to app/AppKernel.php::

    // app/AppKernel.php
    $bundles = array(
      // ...
      new Uco\TwigExtensionsBundle\UcoTwigExtensionsBundle(),
      // ...
    );

This filter uses the traslator service so, you need to activate it::

    // app/config/config.yml
    framework:
        translator:      { fallback: en }


Usage
-----

How to use::

* Filter ``dateage``

    {{ [datetime instance or string] | dateage }}

You can also specify the timezone, the message catalog and the locale for
translations::

    {{ [datetime instance or string] | dateage( *timezone*, *catalog*, *locale*) }}
    {{ [datetime instance or string] | dateage("Europe/Madrid", "admin")  }}

By default, the message catalog is "TwigExtensionsDate".