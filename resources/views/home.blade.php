@extends('layouts.main')

@section('container')
<section class="jumbotron text-center pt-2" style="background-color: #F4C400">
  <img src="img/silat.png" alt="Rifal Kurniawan" width="300" class="rounded-circle border border-3 border-dark mb-5" />
  <h1 class="display-4 fw-bold fs-3">UNIT KEGIATAN MAHASISWA SENI BELA DIRI PENCAK SILAT PADJAJARAN</h1>
  <h2 class="display-4 fs-3 fw-bold text-light mb-3">Universitas Perjuangan Tasikmalaya</h2>
  <div class="row justify-content-center mb-3">
    <div class="col-lg-6 text-center">
      @if(session()->has('toast_success'))
      <div class="alert alert-success" role="alert">
        {{ session('toast_success') }} ✓✓
      </div>
      <h6 class="fw-bold text-center">Silahkan klik tombol dibawah ini untuk masuk grup whatsapp <br> ⬇️⬇️⬇️⬇️⬇️⬇️</h6>
      <a href="https://chat.whatsapp.com/CbcD0JHM0vK875yLyTfTPE" class="btn btn-success mx-auto mb-3">Join Grup Whatsapp</a>
      @endif
    </div>
  </div>
  <div class="row justify-content-center mb-5">
    <div class="col">
      <a href="/daftar" class="btn btn-danger mx-auto mb-3">Daftar Sekarang!</a>
      <a href="/tentang" class="btn btn-danger mx-auto mb-3">Lihat Profile UKM</a>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#921f1b" fill-opacity="1" d="M0,160L21.8,144C43.6,128,87,96,131,85.3C174.5,75,218,85,262,96C305.5,107,349,117,393,128C436.4,139,480,149,524,133.3C567.3,117,611,75,655,48C698.2,21,742,11,785,16C829.1,21,873,43,916,74.7C960,107,1004,149,1047,144C1090.9,139,1135,85,1178,74.7C1221.8,64,1265,96,1309,101.3C1352.7,107,1396,85,1418,74.7L1440,64L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
  
</section>
@endsection