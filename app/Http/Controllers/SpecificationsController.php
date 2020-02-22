<?php

namespace App\Http\Controllers;

use App\Specification;
use Illuminate\Http\Request;

class SpecificationsController extends Controller
{
    public function __invoke()
    {
        return view('specifications', [
            'specifications' => Specification::all()
        ]);
    }
}
