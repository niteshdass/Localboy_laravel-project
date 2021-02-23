@extends('layout')


@section('category')
 <div class="site-section first-section" data-aos="fade">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-12 mb-12">
          
            <?php
    $id=Session::get('user_id');?>
          <?php
              $messege=Session::get('messege');

              if($messege){
                ?><h5><?php
                echo $messege;
                ?></h5><?php
                Session::put('messege',NULL);
              }


            ?>
            <form action="{{route('donar_data',$id)}}" method="post" class="p-5 bg-white" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Title</label>
                  <input type="text" id="fullname" name="name" class="form-control" placeholder="Describe about Your Product">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone"> Product Category</label>
                   <select name="category" class="form-control">

                      <option value="" disabled selected>Select Product Category</option>
                      
                      
                      <option value="7">book</option>
                      <option value="8">Cloth</option>
                      <option value="9">food</option>
                      
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Num Of Product</label>
                   <select name="num_pro" class="form-control">

                      <option value="" disabled selected>Select Product Number</option>
                      
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Write About Your Product</label>
                  <input type="text" id="phone" name="desc" class="form-control" placeholder="Address">
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
                  <input type="submit" value="Donate" class="btn btn-primary text-white px-4 py-2">
                </div>
              </div>

  
            </form>
          </div>

         
        </div>
      </div>
    </div>



@endsection