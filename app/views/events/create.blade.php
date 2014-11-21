@section('main')
<h1><font color="Red">Nuevo  Evento</font></h1>

{{Form::model(new Event, ['route'=>['events.store'], 'role' => 'form', 'class' => 'form-horizontal']) }}
@include('events/partials/_form',['submit_text'=>'Registrar Evento'])
{{Form::close()}}
@stop