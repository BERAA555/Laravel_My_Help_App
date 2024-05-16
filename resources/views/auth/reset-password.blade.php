<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>register</title>
</head>
<body >


<div class="px-4 py-4  text-center">
    <img class="d-block mx-auto mb-1" src="/images/icon.png " alt="" width="72" height="57">
    <p class="display-6 fw-bold">Beraa  Store</p >
</div>  

<form  class="container" style="width :40% ; " method="POST" action="{{ route('password.update') }}">
    @csrf


  <!-- Password Reset Token -->
  <input  class="form-control" type="hidden" name="token" value="{{ $request->route('token') }}">

  <!-- Email Address -->
  <div>
      <x-input-label  class="form-label"  for="email" :value="__('Email')" />

      <x-text-input  class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />

      <x-input-error :messages="$errors->get('email')" class="mt-2" />
  </div>


     <div class="mt-4">
        <x-input-label   class="form-label" for="password" :value="__('Password')" />

        <x-text-input id="password"  class="form-control"  type="password" name="password" required />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label  class="form-label"  for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation"  class="form-control" 
                            type="password"
                            name="password_confirmation" required />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>


<div class="flex items-center justify-end mt-4">
    <x-primary-button  class="btn btn-primary btn-block mb-4" >
        {{ __('Reset Password') }}
    </x-primary-button>

    <a class="btn btn-primary btn-block mb-4" href="{{ route('login') }}">
        {{ __('Login') }}
    </a>


</div>


</form>

@if($errors -> any() )
<div class="alert alert-danger">
    <ul>
        @foreach ($errors -> all() as $error )
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif



</body>
</html>


