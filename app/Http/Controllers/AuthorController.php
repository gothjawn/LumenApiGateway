<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\AuthorService;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the authors microservice
     * @var AuthorService
     */

    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * Return the list of authors.
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
       return $this->successResponse($this->authorService->obtainAuthors());
    }

    /**
     * Create one new author.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Obtain & show details of one author.
     *
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {

    }

    /**
     * Update existing author
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {

    }
    /**
     * Remove existing author
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($author)
    {

    }
}
