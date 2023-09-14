@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Calon Pendekar Muda</h1>
  </div>

  @if(session()->has('toast_success'))
  @endif
  

  <div class="table-responsive">
    {{-- <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a> --}}
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Nama Panggilan</th>
          <th scope="col">Email</th>
          <th scope="col">No WA</th>
          <th scope="col">Program Studi</th>
          <th scope="col">Motivasi</th>
          <th scope="col">Perguruan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($Calon as $calon)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $calon->name }}</td>
            <td>{{ $calon->username}}</td>
            <td>{{ $calon->email }}</td>
            <td>{{ $calon->nohp }}</td>
            <td>{{ $calon->prodi }}</td>
            <td>{{ $calon->motiv }}</td>
            <td>{{ $calon->perguruan }}</td>
            <td>
              <form action="/dashboard/calon/{{ $calon->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger border-0" type="submit" data-confirm-delete="true">Hapus</button>
              </form>
              {{-- <a href="/dashboard/calon/{{ $calon->id }}" class="btn btn-danger border-0">Hapus</a> --}}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection