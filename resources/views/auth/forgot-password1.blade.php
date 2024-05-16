<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login</title>
</head>
<body >

    <div class="px-4 py-5  text-center" >
        <p class="display-6 fw-bold" style="padding-bottom: 20px">Forgot Password</p >
        <div >
            <p style="max-width :50% ;margin: auto; "  >
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
            </p>
       </div>
    </div>   

<form  class="container" style="width :40% ; " method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <x-input-label class="form-label" for="email" :value="__('Email')" />

        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />

        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        
        <x-primary-button   class="btn btn-primary btn-block mb-4">
            {{ __('Reset Password ') }}
        </x-primary-button>
        <a class="btn btn-primary btn-block mb-4" href="{{ route('login') }}">
            {{ __('Login') }}
        </a>

    </div>
</form>




</body>
</html>

