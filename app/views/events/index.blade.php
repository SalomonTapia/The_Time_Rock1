@section('main')
<h2>Eventos</h2>
@if (!$events->count())
Aun  no se ha crreado Post en este blog, vuelve pronto
@else
<ul>
	@foreach($events as $event)
	<li>
		<a href="#">
		<strong>{{$event->nom_evento}}</strong></a>
	</li>
	@endforeach
</ul>
@endif
@stop