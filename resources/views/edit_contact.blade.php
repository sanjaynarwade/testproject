@extends('layouts.app')

@section('content')

<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="POST" action="{{url('update_contact/'.$single->id)}}">
							@csrf
						  <fieldset>
						
							<div class="control-group">
							  <label class="control-label" for="date01">Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" name="name"id="date01" value="{{$single->name}}" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Email</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="email" id="fileInput" value="{{$single->email}}" type="text">
							  </div>
							</div>          
							<div class="control-group">
							  <label class="control-label" for="fileInput">phone</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="phone" id="fileInput" value="{{$single->phone}}" type="text">
							  </div>
							</div>  
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">update changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

		
			
			

	</div><!--/.fluid-container-->
	

@endsection