@extends('default.layouts._layout')

@section('content')	
	<section class="row">	
		<div class="col-md-8 col-md-offset-2">
			<form action="{{ route('find-data-excel') }}" method="post" enctype="multipart/form-data" class="form-horizontal">	 
			  @csrf
			  <div class="form-group">
			    <label for="file-excel" class="col-xs-1 control-label">Файл:</label>
			    <div class="col-xs-11">
			      <input type="file" class="form-control" id="file-excel" name="file-excel" placeholder="Выберите файл (xls;xlsx)">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <div class="col-xs-offset-2 col-xs-10">
			      <button type="submit" class="btn btn-success btn-outline pull-right">Обработать первичные данные</button>
			      <div class="clearfix"></div>
			    </div>
			  </div>
			</form>
			
			@if (!empty($message))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
			@endif
			
			@if (isset($error))
				<div class="alert alert-danger">
					<p>{{ $error }}</p>
				</div>
			@endif
		</div>
		
		@if (!empty($data))
		
			@foreach($data as $sheets)
				@foreach($sheets as $sheet => $fields)
				<div class="col-md-6">
					<div class="panel panel-default sheet" data-primary="secondery">
						<div class="panel-heading">{{ $sheet }}</div>
						<div class="panel-body">
						@foreach($fields as $key => $field)
						    <span class="label label-info field" name="sss">{{ $key.' - '.$field }}</span>
						@endforeach
						</div>		
					</div>
				</div>
				@endforeach
			@endforeach
		@endif
	</section>
@endsection

@section('scripts')
<script>

$('.sheet').on('click', function(e){
	
	if (e.target.nodeName == 'DIV'){
		$('div[data-primary]').each(function(){
			if ($(this).hasClass('panel-success')){
				$(this).removeClass('panel-success').addClass('panel-default').attr('data-primary', 'secondery');
			}
		});
		
		$(this).removeClass('panel-default').addClass('panel-success').attr('data-primary', 'primary');	
	}
	
})

$(".field").on("click", function(){
	
	if($(this).parent().parent().hasClass('panel-success')){
		$(this).removeClass('label-info').addClass('label-success');
	}
	else{
		$(this).removeClass('label-info').addClass('label-warning');	
	}	
})
</script>


@endsection