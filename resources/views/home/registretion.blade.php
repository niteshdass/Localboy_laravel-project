@extends('layout')


@section('category')
 <div class="site-section first-section" data-aos="fade">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
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
          
            <form action="{{route('registrestion_data')}}" method="post" class="p-5 bg-white" enctype="multipart/form-data">
             
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
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Password</label>
                  <input type="password" id="email" name="password" class="form-control" placeholder="Password">
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
                  <label class="font-weight-bold" for="message">Write Your Self</label> 
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

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
             <form action="{{route('user_login')}}" method="post" class="p-5 bg-white" enctype="multipart/form-data">
             
              {{csrf_field()}}

              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Email Address">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Login" class="btn btn-primary text-white px-4 py-2">
                </div>
              </div>

  
            </form>

            </div>
            
            
          </div>
        </div>
      </div>
    </div>



@endsection