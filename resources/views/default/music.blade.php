@extends('default.layouts._layout')

@section('content')
	<section class="row">
		<div class="col-xs-8 col-md-9">
			<ul class="list-group list-unstyled">
			    <li class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-pause"></span>CAVO - Circles</li>
			    <li class="list-group-item"><span class="glyphicon glyphicon-pause"></span>Nickelback - Gotta Be Somebody</a>
			    <li class="list-group-item list-group-item-info"><span class="glyphicon glyphicon-pause"></span>HIM - Heartache Every Moment</a>
			    <li class="list-group-item"><span class="glyphicon glyphicon-pause"></span>Young Guns - Bones</a>
			    <li class="list-group-item list-group-item-warning"><span class="glyphicon glyphicon-pause"></span>Lifehouse - First Time</a>
			    <li class="list-group-item"><span class="glyphicon glyphicon-pause"></span>Saliva - 1000 Eyes</a>
			    <li class="list-group-item list-group-item-danger"><span class="glyphicon glyphicon-pause"></span>Halestorm - Daughters of Darkness</a>
			    <li class="list-group-item"><span class="glyphicon glyphicon-pause"></span>Guano Apes - Close to the Sun</a>
			</ul>
		</div>		
		<div class="col-sm-4 col-md-3 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
	</section>
@endsection

@section('footer')
	 <audio controls>
    	<source src="audio/music.ogg" type="audio/ogg; codecs=vorbis">
    	<source src="audio/music.mp3" type="audio/mpeg">
    	Тег audio не поддерживается вашим браузером. 
    	<a href="audio/music.mp3">Скачайте музыку</a>.
  	</audio>
@endsection