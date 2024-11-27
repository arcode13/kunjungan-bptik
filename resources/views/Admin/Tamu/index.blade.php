@extends('app')
@section('content')
<div class="card">
    <div class="card-header">
      @if (session ('status'))
					<div class="alert alert-success">
						{{session('status')}}
					</div>
					@endif
      Data Kunjungan BPTIK <a href="{{ url('admin/form-tambah') }}" class="btn btn-success">Tambah Data</a>
    </div>
    <div class="card-body">
        <table class="table" id="myTable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">NO</th>
                <th scope="col">SEKOLAH ALMAMATER</th>
                <th scope="col">PELAKSANAAN</th>
                <th scope="col">JUMLAH PESERTA</th>
                <th scope="col">MULAI KEGIATAN</th>
                <th scope="col" style="width: 15%">AKSI</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->sekolah_almamater }}</td>
                <td>{{ $item->pelaksanaan }}</td>
                <td>{{ $item->jumlah_peserta }}</td>
                <td>{{ $item->mulai_kegiatan }}</td>
                <td>
                  <div class="row">
                    <div class="col-5"><a href="{{ url('admin/form-edit', $item->id) }}" class="btn btn-primary">EDIT</a></div>
                    <div class="col-5">
                      <form action="{{ url('admin/hapus-data') }}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{ $item->id }}">
                      <button type="submit" class="btn btn-danger">HAPUS</button>
                    </form>
                  </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
  </div>
@endsection
@section('script')
  <script>
    let table = new DataTable('#myTable');
  </script>
@endsection