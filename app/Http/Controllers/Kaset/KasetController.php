<?php

namespace App\Http\Controllers\Kaset;

use App\Http\Controllers\Controller;
use App\Http\Resources\Kaset\KasetResource;
use App\Models\Kaset;
use Illuminate\Http\Request;

class KasetController extends Controller
{
    public function index()
    {
        $kaset = Kaset::query(); // Gunakan query() untuk memulai query builder

        if (request()->has('search')) {
            $searchTerm = '%' . request()->input('search') . '%';
            $kaset->where(function($query)use($searchTerm){
            $query->where('artist', 'like', $searchTerm)
            ->orWhere('album', 'like', $searchTerm);
            });
        }

        $kasetResults = $kaset->get(); // Ambil hasil query

        return view('kaset', ['kaset' => $kasetResults]);

    }

}
