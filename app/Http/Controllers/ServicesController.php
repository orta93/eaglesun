<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Category::where('type', 'servicio')->get();
        return view('services', ['services' => $services]);
    }

    public function show($service_slug)
    {
        if ($category = Category::where('type', 'servicio')->where('slug', $service_slug)->first()) {
            $items = Item::where('category_id', $category->id)->get();
            return view('services-detail', ['service' => $category, 'items' => $items]);
        }

        return redirect()->to('/');
    }
}
