@extends('layouts.app')
@section('title','Create Country')
@section('content')
<div class="content">
    <div class="box box-primary">
    <div class="content">
        @include('adminlte-templates::common.errors')
         <div class="block">
                <!-- Normal Form Title -->
                <div class="block-title">
                   <h2><strong>Create New </strong> Country</h2>
                </div>
                    {!! Form::open(['route' => 'countries.store','files' => true]) !!}

                        @include('countries.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script type="text/javascript">
//$('.category').on('load change',function(){
$(document).on('change', ".category", function () {
    var ids = $(this).attr('data-id');
    
    var category_id = $(this).val();
    //alert(buss_id_country)
    if(category_id){
        $.ajax({
           type:"GET",
           url:"{{url('get-media-list')}}?category_id="+category_id,
           success:function(res){
            if(res){
                $("#media_id_"+ids).empty();
                //$("#country_data").append('<option value="">Select Category</option>');
                $.each(res,function(key,value){
                    $("#media_id_"+ids).append('<option value="'+key+'">'+value+'</option>');
                    
                });
                //$('select').niceSelect('update');
            }else{
               $("#media_id_"+ids).empty();
            }
           }
        });
    }else{
        $("#country_data").empty();
    }
});



 $(function () {
        
        $('.add_item').hide();
        $('.remove_item').show();
        $('.add_item:last').show();
       
        if($('.remove_item').length == 1){
            $('.remove_item').hide();
        }
        //Delete item onclick event
        $('body').on('load click','.remove_item', function(){
            var itemId = $(this).attr('data-item-id');

            $('#' + itemId).remove();
            $('.add_item').hide();
            $('.remove_item').show();
            $('.add_item:last').show();

            //we will hide remove button if have only single record
            if($('.remove_item').length == 1){
                $('.remove_item').hide();
            }
        })
        
        $('body').on('click','.add_item', function(){
          
          var idsData = $(this).attr('data-id');
          //alet(idsData);
          var totalIds = parseInt(idsData) + parseInt(1);
          

          var itemHtml = '<div class="row itemClass" id="item_'+totalIds+'"><div class="form-group col-md-3">{!! Form::label("media_category", "Select Media Category:") !!}<select class="form-control category" name="media_category[]" id="category_id_'+totalIds+'" data-id="'+totalIds+'"><option value="">Select Category</option><option value="Channels">Channels</option><option value="Contact">Contact</option></select></div><div class="form-group col-md-3">{!! Form::label("media_category", "Select Media:") !!}<select class="form-control" name="social_media_id[]" id="media_id_'+totalIds+'" data-id="'+totalIds+'"></select></div><div class="form-group col-md-3">{!! Form::label("url", "URL:") !!}<input type="text" name="url[]" class="form-control" id="url_id_'+totalIds+'" data-id="'+totalIds+'"></div><div class="col-md-2" style="margin-top: 20px;"><div class="input-group-btn"><button class="btn btn-danger remove_item" data-item-id="item_'+totalIds+'" type="button"><i class="fa fa-minus"></i> </button><button class="btn btn-success add_item" data-id="'+totalIds+'" data-item-id="item_'+totalIds+'" type="button" style="margin-left: 2%;"><i class="fa fa-plus"></i></button></div></div></div><div class="clear"></div>';  
          var totalRecords = $('.itemClass').length + 1;      
          var itemNewContent = itemHtml.replace(/sec_dynamic_id/g, totalRecords);
          var itemId = $(this).attr('data-item-id');
         
          $('#' + itemId).after(itemNewContent);
          
          $('.add_item').hide();
          $('.remove_item').show();
          $('.add_item:last').show();          
        }) 
   });  
</script>

@endpush