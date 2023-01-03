<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return the list of books
     */
    public function index()
    {
        //
    }

    /**
     * Create one new book
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Obtains and show one book
     */
    public function show($book)
    {
        //
    }

    /**
     * Update an existing book
     */
    public function update(Request $request, $book)
    {
        //
    }

    /**
     * Remove an existing book
     */
    public function destroy($book)
    {
        //
    }
}
