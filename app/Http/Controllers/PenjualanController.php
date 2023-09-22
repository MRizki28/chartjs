<?php

namespace App\Http\Controllers;

use App\Models\PenjualanModel;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function getAllData()
    {
        $data = PenjualanModel::all();
        return response()->json([
            'message' => 'success',
            'data' => $data
        ]);
    }
}
