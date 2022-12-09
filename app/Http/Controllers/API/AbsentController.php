<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Models\Absent;

class AbsentController extends Controller
{
    public function checkAbsent(Request $request)
    {
    // user cal api param date -> check table absent -> kalo ada -> return error -> balik ke mobile itu false
    // kalo misal tidak ada data di table absent -> create data -> return ok -> balik ke mobile itu true
        try {
            $absen = Absent::where('user_id',auth()->id())->whereDate('created_at',$request->date)->get();
            if (count($absen)) {
                return ResponseFormatter::error(null, "Anda sudah absen hari ini");
            }

            return ResponseFormatter::success(null, 'Anda belum absen hari ini');

        } catch (Exception $e) {
            return ResponseFormatter::error(null, $e->getMessage());
        }
    }

    public function create(Request $request){
        try {
            $insert_absent = Absent::create([
                'user_id' => auth()->id(),
                'keterangan' => ''
            ]);
            return ResponseFormatter::success(null, 'Selamat anda telah absen');
        } catch (Exception $e) {
            return ResponseFormatter::error(null, $e->getMessage());
        }
    }
}
