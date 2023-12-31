@extends('layouts.app')
@section('title','Social Media')
@section('content')
<div class="content">
<div class="box box-primary">
<div class="content">
    @include('adminlte-templates::common.errors')
     <div class="block">
            <!-- Normal Form Title -->
            <div class="block-title">
               <h2><strong>Create New </strong> Social Media</h2>
            </div>
                   {!! Form::open(['route' => 'socialMediaMgts.store', 'files' => true]) !!}

                        @include('social_media_mgts.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection