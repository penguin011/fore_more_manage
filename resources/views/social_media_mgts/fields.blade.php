<!-- Media Name Field -->
<div class="form-group">
    {!! Form::label('media_name', 'Media Name:') !!}
    {!! Form::text('media_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Media Category Field -->
<div class="form-group">
    {!! Form::label('media_category', 'Media Category:') !!}

            {!! Form::select('media_category', [''=>'Select Category','Contact' => 'Contact',"Channels" => 'Channels'], null, ['class' => 'form-control','id' => 'status']) !!}
</div>

<!-- Media Icon Field -->
<div class="form-group">
    {!! Form::label('media_icon', 'Media Icon:') !!}
    {!! Form::file('media_icon') !!}
</div>

 <?php if (isset($socialMediaMgt->media_icon)) {?>
    <div class="form-group">
     <img src="<?php echo  url('/').'/'.$socialMediaMgt->media_icon; ?>" style="width: 9%"  >
     <input type="hidden" name="icon" value="{{$socialMediaMgt->media_icon}}">
</div> 
<?php }?>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('socialMediaMgts.index') }}" class="btn btn-default">Cancel</a>
</div>
