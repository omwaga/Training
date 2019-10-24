@extends('admin.layouts.master')
@section('content')
@include('admin.layouts.navbar')
<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Forms</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Forms</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Basic Form</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-body">
        <!-- Courses Tables -->
            <div class="container">
                <div class="col-sm-12">
                    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Venue</th>
      <th scope="col">Duration</th>
      <th scope="col">Fees</th>
    </tr>
  </thead>
  <tbody>
      @foreach($courses as $course)
      <tr>
      <th scope="row">1</th>
      <td>{{$course->title}}</td>
      <td>{{$course->venue}}</td>
      <td>{{$course->duration}}</td>
      <td>{{$course->fees}}</td>
      </tr>
      @endforeach
  </tbody>
</table>
                </div>
            </div>
</div>
</div>
</div>
    <!-- End of the Table -->
 </div>
</div>
</div>
@endsection