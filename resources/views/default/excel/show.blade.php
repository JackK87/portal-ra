@extends('default.layouts._layout')

@section('content')
	<div class="jumbotron">
		<h1>Рабочая зона Excel</h1>
		<p>Для продолжения работы выберите требуемую функцию</p>
	</div>
	<section class="row">
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">Поиск соответствия в таблицах</div>
  				<div class="panel-body">
    				<p>Поиск соответствия в 2х и более таблицах.</p>
    				<p><a href="{{ route('find-data-excel') }}" class="btn btn-success">Открыть</a></p>
  				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-info">
				<div class="panel-heading">Статистики Naumen</div>
  				<div class="panel-body">
    				<p>Получение статистики по инцидентам на основе данных из Naumen</p>
    				<p><a href="{{ route('work-zone') }}" class="btn btn-info">Открыть</a></p>
  				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-warning">
				<div class="panel-heading">Panel heading without title</div>
  				<div class="panel-body">
    				<p>Panel content</p>
    				<p><a href="{{ route('work-zone') }}" class="btn btn-warning">Открыть</a></p>
  				</div>
			</div>
		</div>
	</section>
@endsection