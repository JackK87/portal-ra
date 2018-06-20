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

var primary = {
	sheet: null,
	fields: {}	
};

var secondory = {};

var secondoryFields = [];

$('.sheet').on('click', function(e){
	
	var div = $(this);
	
	if (e.target.nodeName == 'DIV'){
		setPanelClass('panel-success', div);
		
		primary.sheet = div.children('.panel-heading').text();	
		
		if (primary.sheet in secondory)
			delete secondory[primary.sheet];
			
		clearFields(primary);	
	}	
})

$(".field").on("click", function(){
	
	var span = $(this);
	var key = span.text().split(' - ')[1];
	var value = span.text().split(' - ')[0];
	var sheetName = span.parent().parent().children('.panel-heading').text();
	
	if(span.parent().parent().hasClass('panel-success')){
		setLabelClass('label-success', span);
		
		setFields(primary, key, value);				
	}
	else{		
		setLabelClass('label-warning', span);		
		
		setSeconoryField(sheetName, span);
	}	
	
	console.log(secondory);
})

function clearPanels(panels){
	
	panels.each(function(){
		
		if ($(this).hasClass('panel-success'))
			$(this).removeClass('panel-success').addClass('panel-default').attr('data-primary', 'secondery');
			
			$(this).find('.label-success').each(function(){
				$(this).removeClass().addClass('label label-info field');
			});
	});
}

function setPanelClass(panel_class, div){
		
	if (div.hasClass(panel_class)){				
		div.removeClass(panel_class).addClass('panel-default').attr('data-primary', 'secondery');	}
	else{		
		clearPanels($('div[data-primary]'));
		div.removeClass('panel-default').addClass(panel_class).attr('data-primary', 'primary');					
	}
	
	div.find('span').each(function(){
		$(this).removeClass().addClass('label label-info field');
	});
}

function setLabelClass(lable_class, span){	
	
	if (span.hasClass('label-info')){	
		span.removeClass('label-info').addClass(lable_class);	
	}
	else{
		span.removeClass(lable_class).addClass('label-info');
	}	
}

function setFields(obj, key, value){
	if (key in obj.fields)
		delete obj.fields[key];
	else
		obj.fields[key] = value;
}

function setSeconoryField(sheetName, span){
	
	if (sheetName in secondory){
			
			var arr = secondory[sheetName];
			var field = span.text();
			
			if (arr.length > 0){
				
				for (var i = 0; i < arr.length; i++){
					if (arr[i] == field){						
						arr.splice(i,1);
						
						if (arr.length < 1)
							delete secondory[sheetName];
						
						return;
					}	
				}
			}
			
			secondory[sheetName].push(field);
		}
	else{
		secondory[sheetName] = [];
		secondory[sheetName].push(span.text());
	}
	
}

function clearFields(obj){
	for (var key in obj.fields)
		delete obj.fields[key];	
}

</script>


@endsection