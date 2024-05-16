<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/pages/auth.css">

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
    <div class="" style="width:100% ; margin-top :40px  ">
        <div class="card cardbr " style=" margin: auto; ">
        <h3 style="text-align: center; margin-bottom : 50px" >Add Menu's Page</h3>
     
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action ="{{route('insertpart' )}}">
                     @csrf
                     @method('POST')
                        <div class="form-body">
                            <div class="row">

                 <!-- select  -->
                            <div class="col-md-3">
                                    <label style="padding-top: 8px" >Select Language </label>
                                </div>
                                <div class="col-md-9">
                                    <fieldset class="form-group">
                                        <select class="form-select" name="lang"  id="basicSelect">
                                       @foreach($langs as $lang)
    
                                            <option value="{{$lang->id}}">{{$lang->name}}</option>

                                        @endforeach
                                        </select>
                                    </fieldset>
                                </div>


                                <div class="col-md-3">
                                    <label style="padding-top: 8px" >Part Name :</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <x-text-input class="form-control" id="first-name-icon"
                                            type="text" name="name"   required autofocus />

                                        </div>
                                    </div>
                                </div>
                         

                                <div class="col-8 d-flex justify-content-end" >
                                    <button class =" btn btn-primary me-1 mb-1 " >
                                            Add 
                                    </button>
                                    <a href="{{route('dashboard')}}" class =" btn btn-primary me-1 mb-1 "> black </a>
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
        <h3 style="margin-bottom : 50px" >All Menu's</h3>

   <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Menu Name</th>
                                        <th>Language Name</th>

                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($parts as $part)  
                                    <tr>
                                        <td class="text-bold-500">{{$part->name}}</td>
                                        <td class="text-bold-500">{{$part->Lang->name}}</td>
                                        <td>
                                            <a href="{{route('DeleteMenu' , $part->id)}}" class =" btn btn-primary me-1 mb-1 " style="background-color : red ; border-color : red" > Delete </a>
                                        </td>
                                        
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
