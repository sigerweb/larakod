{!! Form::model($model, ['url'=>$form_url, 'method'=>'delete', 'class'=>'form-inline']) !!}
	
<a href="{!! $edit_url !!}" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>  
	
{!! Form::button('<i class="fa fa-remove"></i>', ['type'=>'submit','class'=>'btn btn-xs btn-danger']) !!}
{!! Form::close() !!}
