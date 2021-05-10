<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Http\Resources\DrinkResource;
use Illuminate\Support\Facades\Cache;

class DrinkController extends Controller
{
    public function index()
    {
        return Cache::rememberForever('drinks', function () {
            return DrinkResource::collection(Drink::all());
        });
    }
}
