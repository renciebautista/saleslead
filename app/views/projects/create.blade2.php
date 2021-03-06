@section('content')
<h1 class="page-header">New Project</h1>

@include('shared.error')

{{ Form::open(array('url' => 'projects/store', 'class' => 'form-horizontal', 'role' => 'form')) }}
	<div class="form-group">
		{{ Form::label('project_name', 'Project Name / Lcoation / Address',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('project_name', '', array('class' => 'form-control', 'placeholder' => 'Project Name / Lcoation / Address')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('no', 'Lot / Blk / House No. / Unit No.',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('no', '', array('class' => 'form-control', 'placeholder' => 'Lot / Blk / House No. / Unit No.')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('street', 'Street',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('street', '', array('class' => 'form-control', 'placeholder' => 'Street')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('brgy', 'Brgy. / Subdivision',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('brgy', '', array('class' => 'form-control', 'placeholder' => 'Brgy. / Subdivision')) }}
		</div>
	</div>

	<div id="area-select" class="form-group">
		{{ Form::label('city_id', 'Town / City',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::select('city_id', $cities,0, array('class' => 'form-control')) }}
		</div>
	</div>

	

	<!-- <div id="area-select" class="form-group">
		{{ Form::label('area_id', 'Area',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::select('area_id', $areas,0, array('class' => 'form-control')) }}
		</div>
	</div>
	<div id="region-select" class="form-group">
		{{ Form::label('region_id', 'Region',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			<select class="form-control" id="region_id" name="region_id">
				<option value="0">SELECT REGION</option>
			</select>
		</div>
	</div> -->

	<div class="form-group">
		{{ Form::label('project_address', 'Project Adress',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('project_address', '', array('class' => 'form-control', 'placeholder' => 'Project Adress')) }}
		</div>
	</div>
	

	<div id="area-select" class="form-group">
		{{ Form::label('project_classification_id', 'Project Classification',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::select('project_classification_id', $project_classifications,0, array('class' => 'form-control')) }}
		</div>
	</div>

	<div id="category-select" class="form-group">
		{{ Form::label('project_category_id', 'Project Category',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::select('project_category_id', $project_categories,0, array('class' => 'form-control')) }}
		</div>
	</div>
	<div id="subcategory-select" class="form-group">
		{{ Form::label('project_sub_category_id', 'Sub Category',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			<select class="form-control" id="project_sub_category_id" name="project_sub_category_id">
				<option value="0">SELECT SUB CATEGORY</option>
			</select>
		</div>
	</div>

	<div id="area-select" class="form-group">
		{{ Form::label('project_stage_id', 'Project Stage',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::select('project_stage_id', $project_stages,0, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('project_details', 'Project Details',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::textarea('project_details', '', array('class' => 'form-control', 'placeholder' => 'Project Details')) }}
		</div>
	</div>

	<div id="area-select" class="form-group">
		{{ Form::label('project_status_id', 'Project Status',array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::select('project_status_id', $project_statuses,0, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
		</div>
	</div>
{{ Form::close() }}
@stop