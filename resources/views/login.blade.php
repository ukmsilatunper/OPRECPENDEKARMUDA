@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-4"> 
    @if (session()->has('toast_success'))

    @endif

    @if (session()->has('toast_error'))

    @endif
    

    <main class="form-signin w-100 m-auto text-center mb-5">       
      <img src="img/silat.png" alt="Rifal Kurniawan" width="300" class="rounded-circle border border-3 border-dark mb-3" />
      <h1 class="h3 mb-3 fw-bolder">Admin Login</h1>
      <form action="/login" method="POST">
        @csrf
        <div class="form-floating mb-1">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control" id="Password" placeholder="Password" required>
          <label for="Password">Password</label>
        </div>
        <button class="w-100 btn btn-lg text-light" type="submit" style="background-color: #921f1b">Login</button>
      </form>
    </main>   
  </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#921f1b" fill-opacity="1" d="M0,224L21.8,224C43.6,224,87,224,131,202.7C174.5,181,218,139,262,138.7C305.5,139,349,181,393,197.3C436.4,213,480,203,524,192C567.3,181,611,171,655,138.7C698.2,107,742,53,785,69.3C829.1,85,873,171,916,213.3C960,256,1004,256,1047,218.7C1090.9,181,1135,107,1178,106.7C1221.8,107,1265,181,1309,181.3C1352.7,181,1396,107,1418,69.3L1440,32L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
@endsection