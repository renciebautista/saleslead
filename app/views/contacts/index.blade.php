@section('content')

{{ HTML::linkRoute('contacts.create', 'New Contact', array(), array('class' => 'btn btn-primary')) }}

<div class="widget widget-table action-table">
	<div class="widget-header"> <i class="icon-th-list"></i>
	  	<h3>A Table Example</h3>
	</div>
	<!-- /widget-header -->
	<div class="widget-content">
	  	<table class="table table-striped table-bordered">
			<thead>
			  	<tr>
					<th> Free Resource </th>
					<th> Download</th>
					<th class="td-actions"> </th>
			  	</tr>
			</thead>
			<tbody>
			  	<tr>
					<td> Fresh Web Development Resources </td>
					<td> http://www.egrappler.com/ </td>
					<td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
			  	</tr>
			</tbody>
	  	</table>
	</div>
	<!-- /widget-content --> 
</div>
@stop
