<?php

namespace App\Http\Controllers;

use App\Models\Guide;
namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Guide::where('public', true);

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $guides = $query->paginate(10);

        return view('guides.index', compact('guides'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Guide $guide)
    {
        return view('guides.show', compact('guide'));
    }
}

