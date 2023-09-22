@extends('layouts.app')
@section('title','Social Media')
@section('content')
  <div class="block full">
      <div class="block-title">
          <h2><strong>Social Media</strong> </h2>
           <h1 class="pull-right">
                 <a class="btn btn-primary pull-right" style="margin-top: -8px;margin-bottom: 5px" href="{{ route('socialMediaMgts.create') }}">Add New</a>
          </h1>
      </div>
        @include('flash::message')
      <div class="table-responsive">
         <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
              <thead>
                  <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Category</th>
                      <th class="text-center">Title</th>
                     <!-- <th>Business</th>
                     <th>Position</th> -->
                      <th class="text-center">Icon</th>
                      <th class="text-center">Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $i=1;?>
                  @foreach ($data as $key => $socia)
                    <tr>
                      <td class="text-center">{{ $i++ }}</td>
                      <td class="text-center">{{ $socia->media_category }}</td>
                      <td class="text-center">{{ $socia->media_name }}</td>
                      
                      <td class="text-center"><img src="<?php echo  url('/').'/'.$socia->media_icon; ?>" style="width: 10%"  ></td>
                      
                      <td class="text-center">
                          {!! Form::open(['route' => ['socialMediaMgts.destroy', $socia->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                                           
                                <a href="{{ route('socialMediaMgts.edit', $socia->id) }}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                {!! Form::button('<i class="fa fa-times"></i>', [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'onclick' => "return confirm('Are you sure?')"
                                ]) !!}
                            </div>
                            {!! Form::close() !!}
                      </td>
                    </tr>
                  @endforeach
                                
              </tbody>
          </table>
      </div>
  </div>
  <!-- END Datatables Content -->
@endsection
@section('scripts')
    <script src="{{url('/new/js/pages/tablesDatatables.js') }}"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
@endsection


