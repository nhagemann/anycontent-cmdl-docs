<?php

namespace Application\Controller;

use AnyContent\Client\Repository;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class FormElementController
{

    public static function renderAction(Application $app, Request $request, $name)
    {
        /** @var Repository $repository */
        $repository = $app['repository'];

        $repository->selectContentType('formelement');

        $formElements = $repository->getRecords('name = '.$name);



        if (count($formElements)==1) {

            $formElement = array_shift($formElements);
            return $app['twig']->render('formelement.html.twig', ['formElement' => $formElement]);
        }

        die ('not found');

    }

}