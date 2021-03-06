<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService {

    use ConsumesExternalService;

    /**
     * The base uri to consume the authors service
     * @var string
     */

     public $baseUri;

     public function __construct()
     {
         $this->baseUri = config('services.authors.base_uri');
     }

    /**
     * Obtain full list of authors from the author microservice
     * @return string
     */
    public function obtainAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }
}
