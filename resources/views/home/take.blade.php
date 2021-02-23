@extends('layout')

@section('category')
   <div class="slant-1"></div>

    
    
  <div class="site-section first-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          @foreach($order as $or)
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="media-image">
              <a href="single.html"><img src="{{URL::to($or->image)}}" alt="Image" class="img-fluid"></a>
              <div class="media-image-body">
                <h2 class="font-secondary text-uppercase">Product-name:<a href="#">{{$or->pro_name}}</a></h2>

                <span class="d-block mb-3">Name:{{$or->name}}</span>
                <span class="d-block mb-3">Adress:{{$or->present_address}}</span>
                <p>{{$or->desc_problem}}</p>
                
              </div>
            </div>
          </div>
          @endforeach
          
        </div>

         <div class="pagination">
        {{$order->links()}}
      </div>
      </div>
    </div>
@endsection