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
			<div class="row-fluid sortable ui-sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div class="dataTables_length" id="DataTables_Table_0_length"><label><select aria-controls="DataTables_Table_0" size="1" name="DataTables_Table_0_length"><option selected="selected" value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search: <input aria-controls="DataTables_Table_0" type="text"></label></div></div></div><table aria-describedby="DataTables_Table_0_info" id="DataTables_Table_0" class="table table-striped table-bordered bootstrap-datatable datatable dataTable">
						  <thead>
							  <tr role="row"><th aria-label="Username: activate to sort column descending" aria-sort="ascending" style="width: 274px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting_asc">id</th><th aria-label="Date registered: activate to sort column ascending" style="width: 191px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting">Name</th><th aria-label="Role: activate to sort column ascending" style="width: 108px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting">Email</th><th aria-label="Status: activate to sort column ascending" style="width: 112px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting">Phone</th><th aria-label="Actions: activate to sort column ascending" style="width: 229px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="sorting">Actions</th></tr>
						  </thead>   
						  
					  <tbody aria-relevant="all" aria-live="polite" role="alert">

					  	@foreach($contact As $cont)
					  	<tr class="odd">
					  		<td class=" sorting_1">{{$cont->id}}</td>
								<td class=" sorting_1">{{$cont->name}}</td>
								<td class="center ">{{$cont->email}}</td>
								<td class="center ">{{$cont->phone}}</td>
							
								<td class="center ">
									<a class="btn btn-success" href="{{URL::to('show_contact/'.$cont->id)}}">
										<i class="halflings-icon white zoom-in"></i>                                            
									</a>
									<a class="btn btn-info" href="{{URL::to('edit_contact/'.$cont->id)}}">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" href="{{URL::to('delete_comtact/'.$cont->id)}}">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
</tr>
								@endforeach
							</tbody></table>
					</div>
				</div><!--/span-->
			
			</div>
		
		
			
			

	</div>
	

@endsection