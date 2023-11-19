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
        $kaset = Kaset::get();
        return KasetResource::collection($kaset);

    }

}
