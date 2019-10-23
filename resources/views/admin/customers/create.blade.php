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
							<div class="card">
								<div class="card-header">
									<div class="card-title">New Course</div>
								</div>
								<form method="POST" action="/courses">
									@csrf
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="smallInput">Course Title:</label>
												<input name="title" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Course Title" required="">
											</div>

											<div class="form-group">
												<label for="smallInput">Training Fees</label>
												<input name="fees" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Fees" required="">
											</div>
											<div class="form-group">
												<label for="smallInput">Duration</label>
												<input name="duration" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Duration" required="">
											</div>
											<div class="form-group">
												<label for="smallInput">Start Date</label>
												<input name="start_date" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Start Date" required="">
											</div>
										</div>
										<div class="col-md-8 col-lg-8">
											
											<div class="form-group">
												<label for="comment">Description</label>
												<textarea name="description" class="form-control" id="comment" rows="5" required=""> 

												</textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="card-action">
									<button class="btn btn-success">Submit</button>
									<button class="btn btn-danger">Cancel</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endsection