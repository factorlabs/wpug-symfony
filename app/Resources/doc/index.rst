This project aims to provide a samples of some major Symfony2 features:

* Bundle structure
* Routing configuration
* ORM configuration
* Entities and Repositories
* Doctrine Assotiations
* YAML and XML Configuration
* CRUD
* Thin Controllers
* Twig extension
* Validations
* Services configuration
* Events, Events Dispatchers, Event Listeners
* Voters
* Basic configuration of FOSUserBundle
* REST
* Translations
* Testing

Learn with tasks:

* Symfony2 basics
 - Install Symfony2 with composer
 - Try to describe the directory structure (app/, src/, web/, vendor/)
 - Check .gitignore configuration and try to explain it
 
* Bundles [@bundle]
 - Generate new Bundle with name of your company in namespace
 - Use XML as configuration
 - Try to describe the directory structure and how it follow PSR standard
 - Check application routing and AppKernel.php

* Entities associations [@entity, @association, @doctrine]
 - Create two Entities - Post, Category - with one-to-many assotiation (I think you gues how)
 - Assotiation should be bidirectional
 - Use XML as configuration

* CRUD [@crud]
 - For Entities created in previous step generate CRUD
 - Use XML as configuration
 - Try to describe created folders and files (views, controllers,forms, routing)
 
* Services [@service-container]
 - Create Twig extension which will power the number
 - Try to describe services.xml configuration
 
* Routing (`Ref <http://symfony.com/doc/current/book/routing.html#advanced-routing-example>`_) [@routing]
 - Create new Controller and name it "Varia"
 - Add new action: testTwigExtensionAction
 - configure the routing to route test-twig-extension/<number> calls to previously created action
 - <number> parameter should accept only digits (min length is 2, max length is 10)
 - You can use http://rubular.com to check your expression
 - In Twig call your extension
 
* Events [@event, @event-dispatche, @event-listener]
 - Create an event which will terminate the flow (use die or exit) when the post is being save
 - Where Event should be placed?
 - Where to define event name and pass custom Event?
 - Where to create Listener?
 - How to inform Dispatcher to bind Listener with event?

* Services and Events [@service-container, @event, @event-dispatche, @event-listener]
 - Following knowledge from previous step, create new Event, Event Listener which will log the title of updated posts
 - Use logger service
 - Find out some features how to work with logger
 
* Translations [@i18n, @translation, @l10n]
 - In app/config.yml configure translator and default locale
 - Add new controller action and routing with _locale parameter
 - Add new translations file under your bundle
 - Add sample string that should be translated
 - Clear cache
 - Find some console commands that you can use for I18n

* Documentation [@documentation]
 - In your Bundle create sample documentation following Symfony2 convention (`ReStructuredText  <http://docutils.sourceforge.net/docs/user/rst/quickstart.html>`_)
 - Find out some information on `Symfony2 page <http://symfony.com/doc/current/contributing/documentation/format.html>`_
 - Find out some information on `Sphinx page <http://sphinx-doc.org/tutorial.html>`_
 
* Thin controllers, Services [@thin-controllers, @services]
 - Propose the functionalities in auto-generated CRUD which can be moved from controllers
 - Refactor form handling in controllers, by moving it out to service

* Testing [@testing, @unit-testing]
 - Create Unit Test for previously created Twig extension
 - Where it should be placed and how to use testing framework?
 - To test class, use PHPUnit data providers

* Simple REST [@rest, @simple-rest]
 - Using cURL or your favourite client  try to request PostController with GET and POST methods
 - To call your controller (POST, PUT, DELETE) from remote (the easiest, not recommended way) you must disable CSRF protection
 - To call a service: If you are using Firefox RESTClient plugin, set header: "Content-Type: application/x-www-form-urlencoded"
 - Add request body: "wpug_postbundle_post[title]=Title of post sent over REST&wpug_postbundle_post[body]=Text&wpug_postbundle_post[submit]=&wpug_postbundle_post[private]=&wpug_postbundle_post[category]="
 - (Remember to check HTTP method of endpoint that you call)
 - The recommended way to created REST service is to use FOSRestBundle 