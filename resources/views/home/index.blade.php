
@extends('layout')


@section('category')
 <?php
              $messege=Session::get('messege');

              if($messege){
                ?><h5><?php
                echo $messege;
                ?></h5><?php
                Session::put('messege',NULL);
              }


            ?>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	<div class="slant-1"></div>

    <div class="site-section first-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center" data-aos="fade">
          
            
            <h2 class="site-section-heading text-uppercase text-center font-secondary">Our Activites</h2>
          </div>
        </div>
        <div class="row border-responsive">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="">
            <div class="text-center">
              <span class="flaticon-money-bag-with-dollar-symbol display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">Food Donation</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center">
              <span class="flaticon-bar-chart display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">Book Donation</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center">
              <span class="flaticon-medal display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">Cloth Donation</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?</p>
            </div>
          </div>
         
        </div>
      </div>
    </div>

@endsection


@section('about')

<div class="site-half bg-secondary">
    <div class="img-bg-1" style="background-image: url('images/info.jpg');" data-aos="fade"></div>
    <div class="container">
      <div class="row no-gutters align-items-stretch">
        <div class="col-lg-5 ml-lg-auto py-5">
          
          <h2 class="site-section-heading text-uppercase font-secondary mb-5">How Can Use The Website</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquid eius facilis voluptatem eligendi magnam accusamus vel commodi asperiores sint rem reprehenderit nobis nesciunt veniam qui fugit doloremque numquam quod.</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora distinctio ipsam nesciunt recusandae repellendus asperiores amet.</p>  
        </div>
      </div>
    </div>
  </div>

  <div class="site-half block bg-secondary">
    <div class="img-bg-1 right" style="background-image: url('images/team.jpg');" data-aos="fade"></div>
    <div class="container">
      <div class="row no-gutters align-items-stretch">
        <div class="col-lg-5 mr-lg-auto py-5">
          
          <h2 class="site-section-heading text-uppercase font-secondary mb-5">About Us</h2>
          <p>There are many talented and helpless individuals who can not reach the pinnacle of success for little support.
There are many people who want to help them but cannot help

Our purpose is to build the communication relationship between these two people




We will convert this website to the Android app later and make the website more interesting.And we will trace the location through Google Maps.</p>  
        </div>
      </div>
    </div>
  </div>

@endsection




























@section('top_donar_year')
 <div class="site-section bg-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
           
            <h2 class="site-section-heading text-uppercase text-center font-secondary">Top Donar Of the Month</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-13 nav-direction-white">
            <div class="nonloop-block-13 owl-carousel">
              <?php
              $donr=DB::table('donars')->where('publication_status',1)->limit(6)->get();

              
          ?>
          @foreach($donr as $ddd)
              <div class="media-image">
                <img src="{{URL::to($ddd->image)}}" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2 class="font-secondary text-uppercase">{{$ddd->name}}</h2>
                  <p>{{$ddd->desc}}</p>
                  <p><a href="#" class="btn btn-primary text-white px-4">Profile</a></p>
                </div>
              </div>
            @endforeach

          
             
        
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection

@section('total_collection')
<div class="site-section section-counter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <p class="mb-5"><img src="images/hero7.jpg" alt="Image" class="img-fluid"></p>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="site-section-heading mb-3 font-secondary text-uppercase">Total Donation We Recived And Delivary</h2>
            <p class="mb-5">The system is most important receive and delevery project </p>
            <?php $tot=DB::table('products')->where('publication_status',1)->count();

            $tota=DB::table('orders')->where('aprouch_status',1)->count();
              
            ?>
           


            <div class="row">
              <div class="col-lg-6">
                <div class="counter">
                  <span class="caption">Current Recived </span>
                  <span class="number" data-number="{{$tot}}">0</span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="counter">
                  <span class="caption">Current Suply</span>
                  <span class="number" data-number="{{$tota}}">0</span>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
@endsection

@section('pepole_review')


	 <div class="site-section block-14 nav-direction-white" style="background-color:#E5ECF9;">

      <div class="container">
        
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="site-section-heading text-center text-uppercase">User Review</h2>
          </div>
        </div>

        <div class="nonloop-block-14 owl-carousel">
          
          <?php 
              $data=DB::table('halp_posts')->orderBy('id','desc')->get();

          ?>

          @foreach($data as $dat)
            <div class="d-block block-testimony mx-auto text-center">
              <div class="person w-25 mx-auto mb-4">
                <img src="{{URL::to($dat->image)}}" alt="Image" class="img-fluid rounded-circle w-250 mx-auto">
              </div>
              <div>
                <h2 class="h5 mb-4">{{$dat->name}}</h2>

                <blockquote>{{$dat->desc_problem}}</blockquote>
              </div>
            </div>

           @endforeach

        </div>

      </div>
      
    </div>

@endsection

@section('blog')
 <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12" data-aos="fade">
            <h2 class="site-section-heading text-center text-uppercase">Recent Product</h2>
          </div>
        </div>
        <div class="row">
          <?php
              $product=DB::table('products')->join('donars','products.donar_id','=','donars.id')->orderBy('id','desc')->select('products.*','donars.name','donars.phone')->where('products.publication_status',1)->limit(6)->get();

              
          ?>
          @foreach($product as $pro)
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="media-image">
              <a href="{{route('online_orde',$pro->p_id)}}"><img src="{{URL::to($pro->pro_image)}}" alt="Image" class="img-fluid"></a>
              <div class="media-image-body">
                <h2 class="font-secondary text-uppercase"><a href="{{route('online_order')}}">{{$pro->pro_name}}</a></h2>
                <h2 class="font-secondary text-uppercase">donar-<a href="{{route('donarp',$pro->phone)}}">{{$pro->name}}</a></h2>
                <span class="d-block mb-3">num of product-{{$pro->num_product}}</span>
                <p>{{$pro->desc}}</p>
                <p><a href="{{route('online_orde',$pro->p_id)}}">Request For</a></p>
              </div>
            </div>
          </div>
          @endforeach
      
        </div>
      </div>
    </div>

    <div class="py-5 bg-primary">
      <div class="container">


        <h2 class="text-uppercase text-white mb-4" data-aos="fade-up">Write Your Advice Please , And Halp us give for Your Information</h2>



        <div class="row align-items-center justify-content-center">

          <form action="{{route('information')}}" method="post" class="p-5 bg-white" enctype="multipart/form-data">
             
              {{csrf_field()}}

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="fullname" name="name" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" name="gmail" class="form-control" placeholder="Email Address">
                </div>
              </div>

              


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Phone</label>
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone #">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Address</label>
                  <input type="text" id="phone" name="address" class="form-control" placeholder="Address">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Profile Image</label>
                  <input type="file" id="phone" name="image" class="form-control" >
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Write Your Comment</label> 
                  <textarea  name="about_us" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Registretion" class="btn btn-primary text-white px-4 py-2">
                </div>
              </div>

  
            </form>
        </div>
      </div>
    </div>
    @endsection



