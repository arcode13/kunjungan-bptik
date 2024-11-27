<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class TamuController extends Controller
{
    public function simpanTamu(Request $request) {
        $sekolah_almamater = $request->sekolah_almamater;
        $pelaksanaan = $request->pelaksanaan;
        $jumlah_peserta = $request->jumlah_peserta;
        $mulai_kegiatan = $request->mulai_kegiatan;

        $data = new User();
        $data->sekolah_almamater = $sekolah_almamater;
        $data->pelaksanaan = $pelaksanaan;
        $data->jumlah_peserta = $jumlah_peserta;
        $data->mulai_kegiatan = $mulai_kegiatan;
        $data->password = Hash::make('rahasia');
        $data->save();

        return redirect('/')->with('status', 'Data Berhasil Disimpan');
    }
}
