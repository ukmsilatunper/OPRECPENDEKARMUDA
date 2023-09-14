@extends('layouts.main')

@section('container')
<div class="container mx-auto">
  <div class="row justify-content-center mb-5">
  <div class="col-lg-5"> 
    <main class="form-registration w-100 m-auto text-center">       
      <img src="img/silat.png" alt="silat" width="200" class="rounded-circle border border-3 border-dark mb-3" />
      <h1 class="h3 mb-3 fw-normal">Pendaftaran Calon Anggota Baru UKM Seni Bela Diri Pencak Silat</h1>
      <form action="/daftar" method="POST">
        @csrf
        <div class="form-floating mb-1">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Nama Lengkap</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-1">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
          <label for="username">Nama Panggilan</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-1">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-1">
          <input type="text" name="nohp" class="form-control rounded-bottom @error('nohp') is-invalid @enderror" id="nohp" placeholder="nohp" required value="{{ old('nohp') }}">
          <label for="nohp">Nomor Whatsapp Aktif</label>
          @error('nohp')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-1">
          <select class="form-select" id="floatingSelect" name="prodi_id">
            <option>- -</option>
            @foreach ($prodies as $prodi)
              @if(old('prodi_id') == $prodi->id)
                <option value="{{ $prodi->id }}" selected>{{ $prodi->prodi }}</option>
              @else  
              <option value="{{ $prodi->id }}">{{ $prodi->prodi }}</option>
              @endif
            @endforeach
          </select>
          <label for="floatingSelect">Pilih Program Studi</label>
        </div>
        {{-- <div class="mb-1">
          <label for="image" class="form-label @error('image') is-invalid @enderror">Upload Foto Formal</label>
          <img class="img-preview img-fluid mb-1 col-sm-5" alt="">
          <input class="form-control form-control-lg" type="file" id="image" name="image" onchange="previewImage()" placeholder="Upload Foto Formal">
          @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div> --}}
        <div class="form-floating mb-1">
          <input type="text" name="motiv" class="form-control rounded-bottom @error('motiv') is-invalid @enderror" id="motiv" placeholder="motiv" required value="{{ old('motiv') }}">
          <label for="motiv">Motivasi Masuk UKM</label>
          @error('motiv')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-1">
          <input type="text" name="perguruan" class="form-control rounded-bottom @error('perguruan') is-invalid @enderror" id="perguruan" placeholder="perguruan" value="{{ old('perguruan') }}">
          <label for="perguruan">Perguruan Sebelumnya (optional)</label>
          @error('perguruan')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg text-white mt-2" type="submit" style="background-color: #921f1b">Daftar</button>
      </form>
    </main>   
  </div>
</div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#921f1b" fill-opacity="1" d="M0,192L21.8,202.7C43.6,213,87,235,131,218.7C174.5,203,218,149,262,138.7C305.5,128,349,160,393,154.7C436.4,149,480,107,524,106.7C567.3,107,611,149,655,154.7C698.2,160,742,128,785,112C829.1,96,873,96,916,122.7C960,149,1004,203,1047,208C1090.9,213,1135,171,1178,176C1221.8,181,1265,235,1309,229.3C1352.7,224,1396,160,1418,128L1440,96L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
<script>
    function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) { 
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection