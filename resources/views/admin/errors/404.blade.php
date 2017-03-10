@extends('admin.layouts.master')

@section('title')
404 
@endsection

@section('content')
	<div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found, Or you don't have primession to access this page.</h3>

          <p>
            We could not find the page you were looking for.
            Meanwhile, you may <a href="{{ url('/adminpanel') }}">return to dashboard</a>
          </p>
        </div>
        <!-- /.error-content -->
      </div>
@endsection