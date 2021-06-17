<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Api extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    /**
     * Fetch all movies information from external API.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_movies_list(Request $request)
    {
        return ["message"=>"success"];
    }
}
