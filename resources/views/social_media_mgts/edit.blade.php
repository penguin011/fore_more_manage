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
               <h2><strong>Update </strong> Social Media</h2>
            </div>
                   {!! Form::model($socialMediaMgt, ['route' => ['socialMediaMgts.update', $socialMediaMgt->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('social_media_mgts.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection