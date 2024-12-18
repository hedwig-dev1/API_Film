<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film; 
use App\Models\Category;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $films = Film::with('category')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('category_id', $request->category);
            })
            ->get();

        return view('index', compact('categories', 'films'));
    }
}

