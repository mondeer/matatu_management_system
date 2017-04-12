@extends('admin')

@section('content')
<div class="panel panel-body">
    <h1 class="text-center">Chep Matatu Vehicles</h1>
    <table class="table table-striped table-positive table-hover">

              <thead>
              <tr>
                  <th><i class="fa fa-user"></i> Id.</th>
                  <th><i class="fa fa-user"></i> Owner Name</th>
                  <th><i class="fa fa-user"></i> Gender</th>
                  <th><i class="fa fa-user"></i> Motor Reg. No.</th>
                  <th><i class="fa fa-user"></i> Date of Registration</th>
                  <th><i class="fa fa-user"></i> Phone</th>
                  <th>Edit</th>
              </tr>
              </thead>
              <tbody>

                  @foreach($members as $member)
                      <tr>
                          <td>{{$member->id}}</td>
                          <td>{{$member->name}}</td>
                          <td>{{$member->gender}}</td>
                          <td>{{$member->motor_reg}}</td>
                          <td>{{$member->dor}}</td>
                          <td>{{$member->phone}}</td>
                          <td>
                              <form class="success delete" action="/system/{{ $member->id }}" method="post">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <button class="btn btn-primary" type="submit" value="Delete">Delete</button>
                            </form>
                          </td>
                      </tr>
                  @endforeach


              </tbody>
            </table>
  </div>

@endsection
