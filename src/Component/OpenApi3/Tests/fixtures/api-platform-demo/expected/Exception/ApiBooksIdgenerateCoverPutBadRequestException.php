<?php

namespace ApiPlatform\Demo\Exception;

class ApiBooksIdgenerateCoverPutBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}