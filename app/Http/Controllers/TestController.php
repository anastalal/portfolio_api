<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Analytics\Period;
use Spatie\Analytics\Facades\Analytics;

class TestController extends Controller
{
    public function index(){
        dd($this->myCustomMethod());

    }
    public function myCustomMethod($maxResults = 20)
{
    $response = Analytics::get(
        Period::days(7),
        ['sessions'], // metrics
        ['city'],
        //     'dimensions' => 'city',
        //     'sort' => 'region',
        //     'max-results' => $maxResults,
        // ],
    );
    return $response;

    // return collect($response['rows'] ?? [])->map(fn (array $pageRow) => [
    //     // Do something with the rows that are returned.
    //     // I'm not sure how they're returned from the main response.
    // ]);
}
}
