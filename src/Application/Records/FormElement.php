<?php

namespace Application\Records;

use AnyContent\Client\Record;

class FormElement extends Record
{
    public function getDescription()
    {
        return $this->getProperty('description');
    }
}