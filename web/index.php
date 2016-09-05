<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Silex\Application();

// debug mode during development

$app['debug']=true;

// register twig - no caching

$app->register(new \Silex\Provider\TwigServiceProvider(), array(
    'twig.path' =>  __DIR__ . '/../twig'
));

// connect to AnyContent repository

$repositoryFactory = new \AnyContent\Client\RepositoryFactory();
$repository = $repositoryFactory->createContentArchiveRepository('repository',__DIR__ . '/../repository');
$repository->registerRecordClassForContentType('formelement','\Application\Records\FormElement');
$app['repository'] = $repository;

// register routes

$app->get('/formelement/{name}','\Application\Controller\FormElementController::renderAction');


// run silex application
$app->run();
