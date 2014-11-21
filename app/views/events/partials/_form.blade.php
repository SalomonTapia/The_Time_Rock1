<!--<div id="wysihtml5-toolbar" style="display: none;">
  <a data-wysihtml5-command="bold">bold</a>
  <a data-wysihtml5-command="italic">italic</a>

   Some wysihtml5 commands require extra parameters 
  <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red">red</a>
  <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green">green</a>
  <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue">blue</a>

  Some wysihtml5 commands like 'createLink' require extra paramaters specified by the user (eg. href)
  <a data-wysihtml5-command="createLink">insert link</a>
  	<div data-wysihtml5-dialog="createLink" style="display: none;">
	    <label>
	      Link:
	      <input data-wysihtml5-dialog-field="href" value="http://" class="text">
	    </label>
	    <a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a>
 	</div>
</div>-->
	<script>
        CKEDITOR.replace( 'editor1' );
    </script>
	<div class="form-group">
		{{Form::label('nom_evento','Nombre del evento: ', array('class' => 'control-label') )}}
		{{Form::text('nom_evento', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{Form::label('lugar','Lugar: ')}}
		{{Form::text('lugar',null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-group">
		{{Form::label('desc_evento','Descripción del evento: ')}}
		{{Form::textarea('desc_evento', null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-actions">
		{{Form::submit($submit_text, array('class' => 'btn btn-primary')) }}
	</div>