<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioImage;

class PortfolioImageController extends Controller
{
    public function index()
    {
        return PortfolioImage::all();
    }

    public function show($id)
    {
        return PortfolioImage::findOrFail($id);
    }

    //
}
