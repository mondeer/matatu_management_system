@extends('admin')

@section('content')
<h3><i class="fa fa-angle-right"></i> Update Motorcycle Detail</h3>

    <!-- INLINE FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update Member Details</div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                          action="/system/{{$member->id}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Drivers Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="driver_name" value="{{ $member->driver_name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="{{ $member->phone }}">
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" data-toggle="modal" data-target="#update" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /col-lg-12 -->
    </div><!-- /row -->

    <!-- Modal Success Popup -->
    <div class="modal fade success-popup" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

          </div>
          <div class="modal-body text-center">
             <img src="http://osmhotels.com//assets/check-true.jpg">
              <p class="lead">Member file Updated successfully</p>

          </div>

        </div>
      </div>
    </div>

@endsection
