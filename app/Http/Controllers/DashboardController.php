<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $anggota = DB::table('anggotas')->count();
        $divisi = DB::table('divisis')->count();
        $data = [$anggota, $divisi];
        return json_encode($data);
    }
}
