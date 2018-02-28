@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            @include('layouts.sections.main.main')
            @include('layouts.sections.projects.edit')
        </div>
    </div>
    <!-- /.container -->
@endsection