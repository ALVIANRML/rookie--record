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

        // ini merupakan codingan logika untuk search yang berdasarkan nama artist dan juga nama album
        if (request()->has('search')) {
            $searchTerm = '%' . request()->input('search') . '%';
            $kaset->where(function($query)use($searchTerm){
            $query->where('artist', 'like', $searchTerm)
            ->orWhere('album', 'like', $searchTerm);
            });
            $kasetResults = $kaset->get();

            // Returning the appropriate response
            if ($kasetResults->isEmpty()) {
                return view('kaset', ['kaset' => $kasetResults, 'searchNotFound' => true]);
            } else {
                return view('kaset', ['kaset' => $kasetResults, 'searchNotFound' => false]);
            }
        }

        // Fetching all kaset data when no search is performed
        $kasetResults = $kaset->get();
        return view('kaset', ['kaset' => $kasetResults, 'searchNotFound' => false]);
    }
}


