<?php

namespace ApiPlatform\Demo\Exception;

class ApiReviewsPostBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}