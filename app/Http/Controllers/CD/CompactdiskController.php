<?php

namespace App\Http\Controllers\CD;

use App\Http\Controllers\Controller;
use App\Models\Compactdisk;
use Illuminate\Http\Request;

class CompactdiskController extends Controller
{
    public function index()
    {
    $compactdisk = Compactdisk::query(); // Gunakan query() untuk memulai query builder

    if (request()->has('search')) {
        $searchTerm = '%' . request()->input('search') . '%';
        $compactdisk->where(function($query)use($searchTerm){
        $query->where('artist', 'like', $searchTerm)
        ->orWhere('album', 'like', $searchTerm);
        });
        $compactdiskResults = $compactdisk->get();

        // Returning the appropriate response
        if ($compactdiskResults->isEmpty()) {
            return view('compactdisk', ['compactdisk' => $compactdiskResults, 'searchNotFound' => true]);
        } else {
            return view('compactdisk', ['compactdisk' => $compactdiskResults, 'searchNotFound' => false]);
        }
    }

    // Fetching all compactdisk data when no search is performed
    $compactdiskResults = $compactdisk->get();
    return view('compactdisk', ['compactdisk' => $compactdiskResults, 'searchNotFound' => false]);
}
}
