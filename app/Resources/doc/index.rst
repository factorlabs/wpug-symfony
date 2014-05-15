This project aims to provide a samples of some major Symfony2 features:

* Bundle structure
* Routing configuration
* ORM configuration
* Entities and Repositories
* Doctrine Assotiations
* YML and XML Configuration
* CRUD
* Thin Controllers
* Twig extension
* Services configuration
* Events, Events Dispatchers, Event Listeners
* Voters
* Basic configuration of FOSUserBundle
* Testing

Learn with tasks:

* Symfony2 basics
 - Install Symfony2 with composer
 - Try to describe the directory structure (app/, src/, web/, vendor/)
 - Check .gitignore configuration and try to explain it
 
* Bundles
 - Generate new Bundle with name of your company in namespace
 - Use XML as configuration
 - Try to describe the directory structure and how it follow PSR standard
 - Check application routing and AppKernel.php

* Entities assotiations
 - Create two Entities - Post, Category - with one-to-many assotiation (I think you gues how)
 - Assotiation should be bidirectional
 - Use XML as configuration

* CRUD
 - For Entities created in previous step generate CRUD
 - Use XML as configuration
 - Try to describe created folders and files (views, controllers,forms, routing)
 
* Services I
 - Create Twig extension which will power the number
 - Try to describe services.xml configuration
 
* Events
 - Create an event which will terminate the flow (use die or exit) when the post is being save
 - Where Event should be placed?
 - Where to define event name and pass custom Event?
 - Where to create Listener?
 - How to inform Dispatcher to bind Listener with event?

* Servces II
 - Following knowledge from previous step, create new Event, Event Listener which will log the title of updated posts
 - Use logger service
 - Find out some features how to work with logger

* Documentation
 - In your Bundle create sample documentation following Symfony2 convention (ReStructuredText, http://docutils.sourceforge.net/docs/user/rst/quickstart.html)
 - Find out some information on Symfony2 page: http://symfony.com/doc/current/contributing/documentation/format.html
 - Find out some information on Sphinx page: http://sphinx-doc.org/tutorial.html

* Testing I
 - Create Unit Test for previously created Twig extension
 - Where it should be placed and how to use testing framework?
 - To test class, use PHPUnit data providers