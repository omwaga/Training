@extends('customers.layouts.master')
@section('content')
@include('customers.layouts.profile')

		<div class="main-panel">
			<div class="content">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Career Interests</div>
								</div>
								<form method="POST" action="/courses">
									@csrf
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="smallInput">Types of jobs you are interested in:</label>
												<input name="title" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Course Title" required="">
											</div>
											<div class="form-group">
												<label for="smallInput">Current Location</label>
												<input name="fees" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Fees" required="">
											</div>
											<div class="form-group">
												<label for="smallInput">Employment types looking for</label>
												<input name="duration" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Duration" required="">
											</div>
										</div>
										<div class="col-md-6 col-lg-6">
											
											<div class="form-group">
												<label for="smallInput">Relocate</label>
												<input name="start_date" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Start Date" required="">
											</div>
											<div class="form-group">
												<label for="comment">Current/Last drawn CTC</label>
												<textarea name="description" id="summernote"></textarea>
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
			</div>
		@endsection