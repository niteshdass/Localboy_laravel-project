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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
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
								  <th>Name </th>
								  <th> Gmail</th>
								  <th>Phone </th>
								  <th>Adress </th>
								  <th>description </th>
								  <th> Image</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	@foreach($donar as $cat)
							<tr>
								<td>{{$cat->name}}</td>
								<td>{{$cat->gmail}}</td>
								<td>{{$cat->phone}}</td>
								<td>{{$cat->address}}</td>
								<td class="center"><textarea cols="3" rows="4">{{$cat->desc}}</textarea></td>
								<td class="center"><img width="60" height="80" src="{{URL::to($cat->image)}}"></td>
								

				
								<td class="center">
									@if($cat->publication_status==0)
									<a class="btn btn-dengar" href="{{URL::to('/active_me/'.$cat->id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
										<a class="btn btn-success" href="{{URL::to('/unactive_me/'.$cat->id)}}">
											<i class="halflings-icon white thumbs-up"></i>  
										</a>

									@endif
									
									<a class="btn btn-danger" href="{{route('delete_donars',$cat->id)}}">
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