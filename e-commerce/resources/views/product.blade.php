@extends('master')

@section('content')

<div class="container" >
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($products as $item)



                <div class="carousel-item {{ $item['id']==1?'active':'' }} ">

                    <a href="detail/{{ $item['id']}}">
                        <img class="d-block imges " src="{{ $item['gallery'] }}" alt="First slide">

                    </a>
                </div>

  
                
            @endforeach
            </div>

           
         
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

         


      </div>
      <div class="trending-wrapper" >
        <h3>Trending Product</h3>
        @foreach ($products as $item)
            
        <div class="trending-item">
            <a href="detail/{{ $item['id']}}">

            <img class="trending-image " src="{{ $item['gallery'] }}" alt="First slide">
            <h3 > {{ $item['name'] }} </h3>
            </a>
          </div>
            
        @endforeach
    </div>
</div>

<style>
   body {
        background:url(https://s1.1zoom.me/big0/519/Men_Two_Sitting_Winter_hat_Singlet_Black_and_white_554996_1280x853.jpg) ;
        background-repeat: no-repeat;
        background-size: cover;
    }
  

    .formlogin {
        padding: 30px;
        box-shadow: 4px 4px 8px 8px rgba(0, 0, 0, 0.348);        transition: 0.3s;
        background-color: rgba(81, 81, 81, 0.704);
        border-radius :20px;
        color:  white;
    }
    .formlogin input {
        opacity: 0.7;
    }
    .imges {
       margin-top: 30px;
        height: 500px !important;
        width: 500px;
        display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius: 20px;
  transition: 1s;
  box-shadow: 4px 4px 8px 0px rgba(138, 138, 138, 0.348);        transition: 0.3s;
  opacity: 0.9;
    }

 
    }
</style>
@endsection