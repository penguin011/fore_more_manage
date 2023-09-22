@extends('layouts.app')
@section('title','Promotional Image Masters')
@section('content')
 <div class="block full">
      <div class="block-title">
          <h2><strong>Promotional Image Masters</strong> </h2>
           <h1 class="pull-right">
                 
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('promotionalImageMasters.create') }}">Add New</a>
          </h1>
      </div>
        @include('flash::message')
      <div class="table-responsive">
         <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
              <thead>
                  <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Country</th>
                      <th class="text-center">From Date</th>
                      <th class="text-center">To Date</th>
                      <th class="text-center">Actions</th>
                  </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                  @foreach ($data as $key => $brands)
                    <tr>
                      <td class="text-center">{{ $i++ }}</td>
                      <td class="text-center">{{ $brands->country_name}}</td>
                      <td class="text-center">{{$brands->from_date->format('Y-m-d') }}</td>
                      <td class="text-center">{{$brands->to_date->format('Y-m-d') }}</td>
                      <td class="text-center">
                          {!! Form::open(['route' => ['promotionalImageMasters.destroy', $brands->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                                           
                                <a href="{{ route('promotionalImageMasters.edit', $brands->id) }}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
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


