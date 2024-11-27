@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Tambah Buku Tamu Kunjungan
        </div>
        <div class="card-body">
            <form action="{{ url('admin/simpan-data') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="sekolah_almamater">Sekolah Almamater</label>
                  <input type="text" class="form-control" name="sekolah_almamater" id="sekolah_almamater" aria-describedby="sekolah_almamater">
                </div>
                <div class="form-group">
                  <label for="pelaksanaan">Pelaksanaan</label>
                  <input type="date" class="form-control" name="pelaksanaan" id="pelaksanaan" aria-describedby="pelaksanaan">
                </div>
                <div class="form-group">
                  <label for="jumlah_peserta">Jumlah Peserta</label>
                  <input type="text" class="form-control" name="jumlah_peserta" id="jumlah_peserta" aria-describedby="jumlah_peserta">
                </div>
                <div class="form-group">
                  <label for="mulai_kegiatan">Mulai Kegiatan</label>
                  <input type="text" class="form-control" name="mulai_kegiatan" id="mulai_kegiatan" aria-describedby="mulai_kegiatan">
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
        </div>
      </div>
</div>
@endsection