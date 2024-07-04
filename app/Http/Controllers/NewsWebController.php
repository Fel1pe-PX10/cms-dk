<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsWebController extends Controller
{
    public function create(Request $request)
    {
        return view('newsTest.create');
    }

    public function store(Request $request)
    {

        $response = Http::accept('application/json')->post('http://cms.test/api/news', [
            'targetId' => 1,
            'headline' => 'something',
            'description' => 'else'
        ]);
        dd($response);
        return 'store-web';
    }
}
