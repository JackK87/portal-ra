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
			      <button type="submit" class="btn btn-success btn-outline pull-right">Обработать данные</button>
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
		
	</section>
@endsection