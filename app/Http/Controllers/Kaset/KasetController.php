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
            $kaset->where('nama', 'like', '%' . request()->input('search') . '%');
        }

        $kasetResults = $kaset->get(); // Ambil hasil query

        return view('kaset', ['kaset' => $kasetResults]);

    }

}
