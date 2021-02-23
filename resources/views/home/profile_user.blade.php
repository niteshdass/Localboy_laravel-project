@extends('layout')
@section('category')
   <div class="slant-1"> </div>

  <div class="site-section first-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">

          @foreach($product as $pro)
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="media-image">
              <a href="single.html"><img src="{{URL::to($pro->image)}}" alt="Image" class="img-fluid"></a>
              <div class="media-image-body">
                <h2 class="font-secondary text-uppercase"><a href="single.html">{{$pro->name}}</a></h2>
                <h2 class="font-primary text-uppercase"><a href="">address-{{$pro->address}}</a></h2>
                <span class="d-block mb-3">{{$pro->phone}}</span>
                
              
              </div>
            </div>
          </div>
          <p>{{$pro->desc}}</p></hr>
                          <h4><a href="{{route('donarp',$pro->phone)}}">--My Donation--</a></h4>

          @endforeach
          
        </div>
      

        
      </div>
    </div>
@endsection