
<div id="main">
    <footer class="" style="padding : 10px"  >
        
        <div class="col-12 col-md-8 order-md-1 order-last">
            
            <h3 style="text-transform:capitalize ;">{{$data['name']}}   </h3>
            <p class="text-subtitle text-muted" style="padding-top:10px ; text-transform:capitalize ;">{{$data['explane']}}</p>

        </div>
    
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Code</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Photo</a>
                </li>
                
            </ul>
            <div class="col-12 col-md-10 order-md-1 order-last tab-content" id="myTabContent" >
                <div class="tab-pane active " id="home" role="tabpanel" aria-labelledby="home-tab" style="padding-top:20px ;">
                    <p class=" text-muted" style="padding-top:0px  ;">
                        <textarea class="form-control" style="padding: 10px; " id="exampleFormControlTextarea1" rows="13" readonly>{{$contents}}</textarea>
                    </p>
                </div>
                <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <img class="w-90"   style="border-radius: 10px;  max-width: 100%; max-height:400px;"
                    src="{{asset('images/'.$data['path'])}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                </div> 
            </div>
        </div>

    </footer>
</div>

