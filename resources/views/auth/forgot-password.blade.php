<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
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
                            <img src="assets/images/faces/1.jpg" alt="Face 1" style="width:100px ;height :100px ; ">
                        </div>
                        <h3 style="margin-bottom: 0;margin-top: 10px ">Welcome Ms. Beraa Ceze</h3>
                    </div>
            </div>
            <div class="card-content">
                <div class="card-body">



                    <form class="form form-horizontal" action="component/navication.html"  method="POST" action="{{ route('password.email') }} ">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">
                                    <h3 style="text-align: center; padding-top : 0">Forget Your Password!</h3>
                                    <p class="text-subtitle text-muted" style=" padding-bottom:50px ">
                                    That's okay , it happens! Write your Email and click on the button bellow to reset your password                                        
                                    </p>
                                </div>
                                <div class="col-md-2">
                                </div>  
                                <!-- Email -->
                                <div class="col-md-2">
                                   
                                </div>
                                <div class="col-md-1 " style="padding-top: 8px">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                             <x-text-input id="first-name-icon" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                             <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>  
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-2 d-flex " >
                                    
                                    <x-primary-button   class="btn btn-primary ">
                                        Reset 
                                    </x-primary-button>

                                </div>
                                <div class="col-md-2"></div>  
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
