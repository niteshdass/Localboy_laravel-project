@extends('layout')

@section('category')
    <div class="slant-1"></div>

    
    
    <div class="site-section first-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <span class="caption d-block mb-2 font-secondary font-weight-bold">A Great Person</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">Donar</h2>
          </div>
        </div>
        <div class="row">
          
          @foreach($donar as $don)
          
          <div class="col-md-6 col-lg-6 mb-4">
            <div class="d-block block-testimony mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="{{URL::to($don->image)}}" alt="Image" class="img-fluid rounded-circle w-100 mx-auto">
              </div>
              <div>
                <h2 class="h5 mb-4">{{$don->name}}</h2>
                <blockquote>{{$don->desc}}</blockquote>
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