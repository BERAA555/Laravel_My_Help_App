<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson Add</title>
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
        <h3 style="text-align: center; margin-bottom : 40px" >Add Lessons Page</h3>
     
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action ="{{route('AddLesson2' , $id )}}" enctype="multipart/form-data">
                     @csrf
                     @method('post')
                        <div class="form-body">
                            <div class="row">

                 <!-- select lang -->
                <!--  -->
                                <div class="col-md-3">
                                    <label style="padding-top: 8px" >lesson Name :</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group ">
                                        <div class="position-relative">
                                            <x-text-input class="form-control" id="first-name-icon"
                                            type="text" name="name"   required autofocus />

                                        </div>
                                    </div>
                                </div>

                                <!--  -->
                                <div class="col-md-3">
                                    <label style="padding-top: 8px" >Explane :</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group ">
                                        <div class="position-relative">
                                            <x-text-input class="form-control" id="first-name-icon"
                                            type="text" name="explane"   required autofocus />

                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <label style="padding-top: 8px" >photo :</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group ">
                                        <div class="position-relative">
                                            <x-text-input class="form-control" id="formFileMultiple"
                                            type="file" name="path"  required autofocus />
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-md-3">
                                    <label style="padding-top: 8px" >Code :</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <!-- <x-text-input class="form-control" id="first-name-icon" type="text" name="code" required autofocus /> -->
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                             name="code" rows="4"  required autofocus ></textarea>
                                        </div>
                                    </div>
                                </div>
                                           <!--  -->
                              
                         

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
                </div>
            <h3 style=" margin-bottom : 50px" >All Lessons </h3>

                <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Language Name</th>
                                        <th>Menu Name</th>
                                        <th>Lesson Name</th>


                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contents as $content)  
                                    <tr>
                                        <td class="text-bold-500">{{$content->Part->Lang->name}}</td>
                                        <td class="text-bold-500">{{$content->Part->name}}</td>
                                        <td class="text-bold-500">{{$content->name}}</td>
                                        <td>
                                            <a href="{{route('DeleteLesson' , $content->id)}}" class =" btn btn-primary me-1 mb-1 " style="background-color : red ; border-color : red" > Delete </a>
                                            <a href="{{route('UpdateLesson2' , $content->id)}}" class =" btn btn-primary me-1 mb-1 "  > Update </a>
                                       
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
</body>

</html>
