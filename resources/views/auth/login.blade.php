<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">

    <style>

        
        @media only screen and (max-width:2000px) {
            .cardbr {
                width: 60%;
            }
        }
        @media only screen and (max-width:800px) {
            .cardbr {
                width: 90%;
            }
        }
        
        @media only screen and (max-width:400px) {
            .cardbr {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="" style="width:100% ; ">
        <div class="card cardbr " style=" margin: auto; ">
            <div class="card-header"  >
                 <div class="card-body py-4 px-5" style="padding-top:100px ; text-align: center;" >
                        <div class="avatar avatar-xl"  >
                            <img src="../assets/images/faces/arch.png" alt="Face 1" style="width:100px ;height :100px ; ">
                        </div>
                        <h3 style="margin-bottom: 0;margin-top: 30px ">Welcome Ms. Beraa Ceze</h3>
                    </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{ route('login') }}">
                     @csrf
                        <div class="form-body">
                            <div class="row">

                                <!-- Email -->

                                
                                <div class="col-md-2">
                                    <label style="padding-top: 8px" >Email</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <x-text-input class="form-control" id="first-name-icon"  type="email" name="email" :value="old('email')" required autofocus />

                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Password -->


                                <div class="col-md-2">
                                    <!-- <label>Password</label> -->
                                </div>
                              
                                <div class="col-md-2">
                                    <label style="padding-top: 8px" >Password</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <x-text-input id="password" class="form-control"
                                            type="password"
                                            name="password"
                                            placeholder="Password"
                                            required autocomplete="current-password" />

                                            <div class="form-control-icon">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>


                                <!-- Remember -->

                                <div class="col-md-2"></div>  

                                <div class="form-group col-md-4 d-flex ">
                                    <div class="form-check">
                                        <div class="checkbox ">
                                        <input id="checkbox2" type="checkbox" class="form-check-input" name="remember">

                                            <label for="checkbox2">Remember Me</label>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    @if (Route::has('password.request'))
                                    <a class="justify-content-end" href="{{ route('password.request') }}">
                                        Forgot your password?
                                    </a>
                                    @endif

                                </div>  

                                <div class="col-md-2"></div>  

                                <!-- Submit -->
                                <div class="col-md-2"></div>  
                                <div class="col-8 d-flex justify-content-end" >


                                @if (Route::has('login'))
           
                                        @auth
                                            <a href="{{ url('/dashboard') }}" style="margin:auto ; width : 100% ; margin-top : 30px" 
                                            class="btn btn-primary btn-lg px-4 gap-3">Dashboard</a>
                                        @else
                                            <x-primary-button class="btn btn-primary me-1 mb-1">
                                               Log in
                                            </x-primary-button>
                                        @endauth

                                @endif  
                            
                                </div>
                                <div class="col-md-2"></div>  
                            </div>
                        </div>
                    </form>
                    @if($errors -> any() )
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors -> all() as $error )
                                <li style="text-align: center ; list-style: none;   ">{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>
