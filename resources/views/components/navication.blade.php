<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <title>Dashboard</title>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">

            <div class="d-flex align-items-center">
                <div class="avatar avatar-xl logo " >
                    <img style="width : 60px ; height:60px" src="../assets/images/faces/arch.png" alt="Logo">
                </div>
                <div class="ms-2 name">
                    <h5 class="font-bold">{{auth()->User()->name}}</h5>
                    <p  style="font-size: 13px;" class="text-muted mb-0">{{auth()->User()->email}}</p>
                </div>
            </div>
            
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
        <li class="sidebar-item">
                <a href="{{ route('AddPart') }} " class='sidebar-link'>
                    <svg class="bi" width="1em" height="1em" fill="currentColor">
                        <use xlink:href="../assets/vendors/bootstrap-icons/bootstrap-icons.svg#plus-circle"></use>
                    </svg>
                    <span>Add Menu</span>
                </a>
            </li>
            <li class="sidebar-title">Menu</li>
    <!--  foreach         -->

            @foreach($parts as $part)
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <svg class="bi" width="1em" height="1em" fill="currentColor">
                        <use xlink:href="../assets/vendors/bootstrap-icons/bootstrap-icons.svg#file-code"></use>
                    </svg>
                    <span style="text-transform:capitalize;"  > {{$part->name}}</span>
                </a>
                <ul class="submenu ">

                    
                    @foreach($part->contents as $content)
                    
                    <li class="submenu-item ">
                        <a href="{{route('footer', $content->id )}}">{{$content->name}}</a>
                    </li>
                    
                    @endforeach
                    <li class="sidebar" >
                        <a href="{{ route('AddLesson' , $part->id ) }} " style="width : 100% ; border : none;"  class='btn btn-outline-primary'  >
                            <svg class="bi" width="1em" height="1em" fill="currentColor">
                                <use xlink:href="../assets/vendors/bootstrap-icons/bootstrap-icons.svg#plus-circle"></use>
                            </svg>
                            <span>Add lesson </span>
                        </a>
                    </li>       
                </ul>
            </li>
       
            @endforeach
            <li class="sidebar-item">
                <p style="border:1px #7C8DB5 solid ;"></p>
            </li>

            <li class="sidebar-item">
                
                <form method="POST"action="{{ route('logout') }}">
                    @csrf
                    <button href="{{route('logout')}}"  style="background :red ;border :red ; color:#fff;
                        padding: 10px; border-radius: 10px; width :100%; "
                    onclick ="event.preventDefault();this.closest('form').submit();"> 
                    <svg  class="bi" width="1em" height="1em" fill="currentColor" style="color :#fff" > 
                    <use xlink:href="../assets/vendors/bootstrap-icons/bootstrap-icons.svg#box-arrow-in-right"></use>
                    </svg>
                        Log Out
                    </button>
                </form>
            </li>
            
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>

        <div id="main" style="padding: 0;" >
            <div  style="background-color :#fff   ;">
                <header >
                    <div class="card-body">
                        <ul class="nav nav-pills">

                            <li class="nav-item " style="padding-right: 10px;">
                                <a href="#" class="burger-btn d-block nav-link d-xl-none" >
                                    <i class="bi bi-justify fs-3"></i>
                                </a>
                            </li>
                            @foreach($langs as $lang)
                            <li class="nav-item" style="padding-right: 10px;">
                                <a  href="{{route('dashboard2' , $lang->id )}}" class="nav-link active" id="v-pills-home-tab" style="text-transform:capitalize ;"  aria-current="page">{{$lang->name}}  </a>
                            </li>
                            @endforeach                                                   
                            <li class="nav-item">
                                <a href="{{route('langAdd')}}" class='nav-link 'id="v-pills-home-tab" >
                                    <svg class="bi" width="1em" height="1em" fill="currentColor">
                                        <use xlink:href="../assets/vendors/bootstrap-icons/bootstrap-icons.svg#plus-circle"></use>
                                    </svg>
                                    <span>Add Language</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </header>
            </div>

            @extends('components.footer')

    
            
        </div>


    </div>
    <script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="../assets/js/pages/dashboard.js"></script>
    <script src="../assets/js/mazer.js"></script>

</body>

</html>
