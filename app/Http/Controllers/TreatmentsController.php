<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class TreatmentsController extends Controller
{
    public function index()
    {
        $treatments = Category::where('type', 'tratamiento')->get();
        return view('treatments', ['treatments' => $treatments]);
    }

    public function show($treatment_slug)
    {
        if ($category = Category::where('type', 'tratamiento')->where('slug', $treatment_slug)->first()) {
            $items = Item::where('category_id', $category)->get();
            return view('treatments-detail', ['treatment' => $category, 'items' => $items]);
        }

        return redirect()->to('/');
    }
}
