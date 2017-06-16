<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	<div class="form-group">
	    {!! Form::label('title', 'Title', ['class'=>'col-sm-2 control-label']) !!}
	    <div class="col-sm-8"> 
	    {!! Form::text('title', null, ['class'=>'form-control']) !!}
	    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	    </div>
  	</div>
  	<div class="form-group">
	    {!! Form::label('headline', 'Headline', ['class'=>'col-sm-2 control-label']) !!}
	    <div class="col-sm-8"> 
		    <div class="radio">
		    	<label>
		    	{!! Form::radio('headline', 'Y') !!} Ya
		    	</label>
		    </div>
		    <div class="radio">
		    	<label>
		    	{!! Form::radio('headline', 'N', true) !!} Tidak
		    	</label>
		    </div>	    
	    </div>
  	</div>
  	<div class="form-group">
	    {!! Form::label('active', 'Active', ['class'=>'col-sm-2 control-label']) !!}
	    <div class="col-sm-8"> 
		    <div class="radio">
		    	<label>
		    	{!! Form::radio('active', 'Y', true) !!} Ya
		    	</label>
		    </div>
		    <div class="radio">
		    	<label>
		    	{!! Form::radio('active', 'N') !!} Tidak
		    	</label>
		    </div>
	    </div>
  	</div>
  	<!-- Images -->
	<div class="form-group">
		{!! Form::label('image', 'Image', ['class'=>'col-sm-2 control-label']) !!}
		<div class="col-sm-8">
		    <div class="input-group">     
		      {!! Form::text('image', null, ['class'=>'form-control']) !!}
		      <span class="input-group-btn">
		        <a data-fancybox data-type="iframe" href="{{ asset('js/filemanager/dialog.php?type=1&field_id=image&relative_url=1') }}" class="btn btn-success" type="button">Pilih Gambar</a>
		      </span>
		    </div>
	    </div>
	</div>
  	<div class="form-group">
	    {!! Form::label('content', 'Content', ['class'=>'col-sm-2 control-label']) !!}
	    <div class="col-sm-8"> 
	    {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
	    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
	    </div>
  	</div>
  	<div class="form-group">
	    {!! Form::label('status', 'Status', ['class'=>'col-sm-2 control-label']) !!}
	    <div class="col-sm-8"> 
		    <div class="radio">
		    	<label>
		    	{!! Form::radio('status', 'publish') !!} Publish
		    	</label>
		    </div>
		    <div class="radio">
		    	<label>
		    	{!! Form::radio('status', 'draft', true) !!} Draft
		    	</label>
		    </div>	    
	    </div>
  	</div>
</div>
{!! Form::hidden('author', Auth::user()->name) !!}
<div class="form-group"> 
	<div class="col-sm-offset-2 col-sm-8">
	{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	<a href="{{ url()->previous() }}" class="btn btn-warning">Back</a>
	</div>
</div>
