<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = [
        [
            "title"            => "London Trip",
            "creation_date"    => "2023-02-24",
            "description"      => "Simply travel page",
            "technologies"        => [1],
            "link_github"      => "https://github.com/vincenzodivita/html-london-trip",
            ""
        ],
        [
            "title"            => "Boolando",
            "creation_date"    => "2023-03-08",
            "description"      => "A clone of Zalando Site",
            "technologies"        => [1,2],
            "link_github"      => "https://github.com/vincenzodivita/html-css-boolando",
        ],
        [
            "title"            => "Password generator Wannabe",
            "creation_date"    => "2023-04-04",
            "description"      => "Funny generator of password",
            "technologies"        => [1, 4],
            "link_github"      => "https://github.com/vincenzodivita/js-pwdgen-wannabe",
        ],
        [
            "title"            => "PHP DISCHI JSON",
            "creation_date"    => "2023-06-10",
            "description"      => "A Spotify Clone that shows some of the greatest albums of all the time",
            "technologies"        => [1, 2, 4, 7],
            "link_github"      => "https://github.com/vincenzodivita/php-dischi-json",
        ]
    ];
    
        return response()->json($projects);
    }

   
    public function show(Project $project)
    {
        //
    }

}
