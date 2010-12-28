Drupal Zend MVC module
======================

This module makes it easy to run Zend Framework MVC applications inside of
Drupal.

Zend Framework applications can be packaged as Drupal modules and integrate with
the Drupal menu system.

Features
--------

* Develop using standard ZF MVC patterns
* Integration of ZF routes with Drupal menu system
* Form errors display as Drupal (error) messages
* Integration of Zend_Translate with Drupal t()


Getting started
---------------
A ZF app within Drupal is a valid Drupal module. Therefore it must have
`modulename.info` and `modulename.module` files.

The `.module` file only needs to implement the `hook_zend_mvc_app`. This hook is used
for setting up the Drupal menu system en setting up the Zend Frontcontroller (when necessary).

Example `hook_zend_mvc_app()`:

    function myapp_zend_mvc_app() {
      return array(
        'myapp' => array(
          'title' => 'My Example ZF App',
          'embedded' => true,
          'autoload' => true,
        )
      );
    }

`hook_zend_mvc_app` should return an array with all relevant information for the app.

A quick rundown of the options

* *machinename* this is the array key, this **must** be the same as your Drupal module name.
* title: Drupal requires a title for menu options and url's, this is your applications default title
* embedded: if true Drupal will continue rendering after the ZF request finishes
* autoload: should zend_mvc setup the autoloader?
* autoload_namespaces: an array of namespaces zend_mvc should pass to the autoloader
* routes: the name of the routes config file, currently only .ini is supported

Some conventions you should know about.

* Your appname must be the same as your Drupal module name
* Your application can ship libraries in its own lib folder. This will be added to the include path automatically
* If you use a routes file you share the same baseUrl as Drupal otherwise your app will get it's own baseUrl inside Drupal.

Contributing
------------

I happily accept merge requests :-)


Known issues
------------

* Drupal theme functions do not work with ZF application content
* Zend MVC module only propagates the current URL and doesn't take URL-aliases into account
* Currently there are no integrations for the Drupal Node structure
* You cannot render ZF application content in a Block
* We don't support Bootstrap.php like stuff, special bootstrapping is a pain atm