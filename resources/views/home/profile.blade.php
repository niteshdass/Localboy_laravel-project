
  @extends('layout')
@section('category')
   <div class="slant-1"></div>

    
    
  <div class="site-section first-section" data-aos="fade">
      <div class="container">
        
        <div class="row mb-5">
          @foreach($donar as $don)
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="media-image">
              <a href="single.html"><img src="{{URL::to($don->pro_image)}}" alt="Image" class="img-fluid"></a>
              <div class="media-image-body">
                <h2 class="font-secondary text-uppercase"><a href="single.html">{{$don->pro_name}}</a></h2>
                <h2 class="font-primary text-uppercase">DONAR-{{$don->name}}</h2>
                <p>{{$don->gmail}}</p>
                <p>{{$don->phone}}</p>
                <p>{{$don->address}}</p>
                
                <p>{{$don->desc}}</p>

                @if($don->stock==1)
                <p><a href="{{route('online_orde',$don->p_id)}}">Request For</a></p>
                @endif

              </div>
            </div>
          </div>
          @endforeach
         
         

          
        </div>
        <div class="pagination">
        {{$donar->links()}}
      </div>

        
      </div>
    </div>
@endsection
     
