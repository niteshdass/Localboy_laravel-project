@extends('layout')

@section('category')
   <div class="slant-1"></div>

    
    
  <div class="site-section first-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          @foreach($product as $pro)
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="media-image">
              <a href="single.html"><img src="{{URL::to($pro->pro_image)}}" alt="Image" class="img-fluid"></a>
              <div class="media-image-body">
                <h2 class="font-secondary text-uppercase"><a href="single.html">{{$pro->pro_name}}</a></h2>
                <h2 class="font-primary text-uppercase"><a href="{{route('donarp',$pro->phone)}}">DONAR-{{$pro->name}}</a></h2>
                <span class="d-block mb-3">number of product-{{$pro->num_product}}</span>
                <p>{{$pro->desc}}</p>
                <p><a href="{{route('online_orde',$pro->p_id)}}">Request For</a></p>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
        <div class="pagination">
        {{$product->links()}}
      </div>

        
      </div>
    </div>
@endsection