@section('main')
<h2>Eventos</h2>
@if (!$Events->count())
Aun  no se ha crreado Un Evento en esta página, vuelve pronto
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