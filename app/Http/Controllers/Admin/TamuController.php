<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class TamuController extends Controller
{
    public function index() {
        $data = User::all();
        return view('Admin.Tamu.index', compact('data'));
    }

    public function formTambah() {
        return view('Admin.Tamu.formTambah');
    }

    public function simpanData(Request $request) {
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

        return redirect('admin/tamu')->with('status', 'Data Berhasil Disimpan');
    }

    public function formEdit($id) {
        $data = User::find($id);
        return view('Admin.Tamu.formEdit', compact('data'));
    }

    public function updateTamu(Request $request) {
        $id = $request->id;
        $sekolah_almamater = $request->sekolah_almamater;
        $pelaksanaan = $request->pelaksanaan;
        $jumlah_peserta = $request->jumlah_peserta;
        $mulai_kegiatan = $request->mulai_kegiatan;

        $data = User::find($id);
        $data->sekolah_almamater = $sekolah_almamater;
        $data->pelaksanaan = $pelaksanaan;
        $data->jumlah_peserta = $jumlah_peserta;
        $data->mulai_kegiatan = $mulai_kegiatan;
        $data->update();

        return redirect('admin/tamu')->with('status', 'Data Berhasil Diupdate');
    }

    public function hapusTamu(Request $request) {
        $id = $request->id;
        $data = User::find($id);
        $data->delete();

        return redirect('admin/tamu')->with('status', 'Data Berhasil DiHapus');
    }
}
