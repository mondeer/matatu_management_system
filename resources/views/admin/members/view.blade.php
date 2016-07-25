@extends('admin.members.members')

@section('members')
<hr>
<div class="panel panel-body">
    <h1 class="text-center">Chep Matatu Vehicles</h1>
    <table class="table table-striped table-positive table-hover">

              <thead>
              <tr>
                  <th>Id.</th>
                  <th>Owner Name</th>
                  <th>Name of driver</th>
                  <th>Gender</th>
                  <th>Motor Reg. No.</th>
                  <th>Date of Registration</th>
                  <th>Phone</th>
                  <th>Edit</th>
              </tr>
              </thead>
              <tbody>

                  @foreach($members as $member)
                      <tr>
                          <td>{{$member->id}}</td>
                          <td>{{$member->owner_name}}</td>
                          <td>{{$member->driver_name}}</td>
                          <td>{{$member->gender}}</td>
                          <td>{{$member->motor_reg}}</td>
                          <td>{{$member->dor}}</td>
                          <td>{{$member->phone}}</td>
                          <td>
                            <a class="btn btn-primary" href="/system/{{$member->id}}/edit">Edit</a>
                          </td>
                      </tr>
                  @endforeach


              </tbody>
            </table>
  </div>
@endsection
