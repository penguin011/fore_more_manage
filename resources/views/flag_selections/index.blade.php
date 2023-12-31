@extends('layouts.app')
@section('title','Flag Selections')
@section('content')
<!-- Datatables Content -->
  <div class="block full">
      <div class="block-title">
          <h2><strong>Flag Selections</strong> </h2>
           <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -8px;margin-bottom: 5px;margin-left: 10px;" href="{{url('downloadSecion')}}">Export Excel</a>
                 <a class="btn btn-primary pull-right" style="margin-top: -8px;margin-bottom: 5px" href="{{ route('flagSelections.create') }}">Add New</a>
          </h1>
      </div>
        @include('flash::message')
      <div class="table-responsive">
         <table id="role-datatable" class="table table-vcenter table-condensed table-bordered">
              <thead>
                  <tr>
                      <th class="text-center">No</th>
                      <th>Business</th>
                      <th>Segment</th>
                      <th>User</th>
                      <th class="text-center">Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <?php  $i=1; ?>
                  @foreach ($data as $key => $flag_selection)
                    <tr>
                      <td class="text-center">{{ $i++}}</td>
                      <td class="text-center">{{ $flag_selection->name }}</td>
                      <td class="text-center">{{ $flag_selection->segment_name }}</td>
                      <td class="text-center">{{ $flag_selection->users_name }}</td>
                      
                      <td class="text-center">
                          {!! Form::open(['route' => ['flagSelections.destroy', $flag_selection->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                                           
                                <a href="{{ route('flagSelections.edit', $flag_selection->id) }}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
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
        <script>$(function(){ RoleTablesDatatables.init(); });</script>
@endsection




