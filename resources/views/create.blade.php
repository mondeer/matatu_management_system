@extends('admin')

@section('content')
        <!-- <div class="row imondgray">
            <div class="col-sm-12">
                <h2 class="text-center mg-md ">
                  Function Render
                </h2>
            </div>
        </div> -->

          <hr style="border-right: 1px solid #F20000;"></hr>

        <div class="row ">
          <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Fill in Member Details</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {{$errors->first()}}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                          action="{{ url('/system/create') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Owner Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="owner_name" value="{{ old('owner_name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Drivers Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="driver_name" value="{{ old('driver_name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <select name="gender" class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Motor Registration</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" name="motor_reg" value="{{ old('motor_reg') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">LogBook Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="logbook" value="{{ old('logbook') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Date of Reg</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="Y-M-D" name="dor" value="{{ old('dor') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" data-toggle="modal" data-target="#create" class="btn btn-primary">Create</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div><!-- /col-lg-12 -->
        </div>

        <!-- Modal Success Popup -->
        <div class="modal fade success-popup" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

              </div>
              <div class="modal-body text-center">
                 <img src="http://osmhotels.com//assets/check-true.jpg">
                  <p class="lead">Member file Created successfully</p>

              </div>

            </div>
          </div>
        </div>

@endsection
