@extends('admin.members.members')

@section('members')
<div class="panel panel-body">
    <h1 class="text-center">Delete A Member From the System</h1>
    <table class="table table-striped table-positive table-hover">

              <thead>
              <tr>
                  <th>Id.</th>
                  <th>Owner Name</th>
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
                          <td>{{$member->gender}}</td>
                          <td>{{$member->motor_reg}}</td>
                          <td>{{$member->dor}}</td>
                          <td>{{$member->phone}}</td>
                          <td>
                              <form class="success delete" action="/system/{{ $member->id }}/delete" method="post">
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
