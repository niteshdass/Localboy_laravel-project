@extends('admin_layout')

@section('content')
	<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Donation Products</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Person-Name </th>
								 
								  <th>Person-phone</th>
								  <th>Person-Adress</th>
								  <th>Why Need</th>
								  <th>Desc Himself</th>
								  <th> Image</th>
								  <th>Product-Name</th>
								  <th>Product-Image</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	@foreach($product as $cat)
							<tr>
								<td>{{$cat->name}}</td>
								<td>{{$cat->phone}}</td>
								<td>{{$cat->present_address}}</td>
								<td class="center"><textarea cols="3" rows="4">{{$cat->desc_problem}}</textarea></td>
								<td class="center"><textarea cols="3" rows="4">{{$cat->say_about_yourself}}</textarea></td>

								<td class="center"><img width="60" height="80" src="{{URL::to($cat->image)}}"></td>

		
								<td>{{$cat->pro_name}}</td>

								<td class="center"><img width="60" height="80" src="{{URL::to($cat->pro_image)}}"></td>

								
								

				
								<td class="center">
									@if($cat->aprouch_status==0)
									<a class="btn btn-dengar" href="{{URL::to('/make_donar/'.$cat->id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
										<a class="btn btn-success" href="{{URL::to('/dhide_me/'.$cat->id)}}">
											<i class="halflings-icon white thumbs-up"></i>  
										</a>

									@endif
									
									<a class="btn btn-danger" href="{{route('delete_products',$cat->id)}}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							@endforeach
							
					
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

@endsection