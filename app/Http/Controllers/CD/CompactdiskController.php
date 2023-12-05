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
    }

    $compactdiskResults = $compactdisk->get(); // Ambil hasil query

    return view('compactdisk', ['compactdisk' => $compactdiskResults]);
}
}
