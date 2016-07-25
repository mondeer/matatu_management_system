@extends('admin.admindash')

@section('content')
  <div class="row">
    <div class="col-md-4">
      <a href="/system/deregister" class="btn btn-lg btn-primary">DRIVING LICENCE</a>
    </div>

    <div class="col-md-4">
      <a href="/system/deregister" class="btn btn-lg btn-primary">INSURANCE REMINDERS</a>
    </div>

  </div>
  @yield('reminders')
@endsection
