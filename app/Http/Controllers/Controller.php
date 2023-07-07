<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {

        /**
         * ASSIGNMENT:
         * The dump and die below returns all the episodes in the database where watched is false
         * alter the query so it returns only first episode (ordered by season first and by number second) of each show
         * where watched is false
         */

        $episodes = Episode::query()
            ->whereWatched('false')
            ->get();

        dd($episodes);

        return view('welcome');
    }
}
