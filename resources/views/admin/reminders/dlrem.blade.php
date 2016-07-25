@extends('admin.reminders.reminders')

@section('reminders')

<hr style="border-right: 1px solid #F20000;"></hr>

<div class="row">

    <div class="col-md-12">
      <div class="card">
          <div class="header">
              <h4 class="title">Driving Licences </h4>
              <p class="category">Driving Licences for the Chep Matatu Crew</p>
          </div>
          <div class="content table-responsive table-full-width">
              <table class="table table-hover table-striped">
                  <thead>
                    <th>ID</th>
                  	<th>Crew Member Name</th>
                  	<th>DL Number</th>
                  	<th>DL Expiry</th>
                  	<th>Reminder</th>
                  </thead>
                  <tbody>
                      <tr>

                      </tr>

                  </tbody>
              </table>

          </div>
      </div>
  </div>

</div>
@endsection
