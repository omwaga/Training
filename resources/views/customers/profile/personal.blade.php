@extends('customers.layouts.master')
@section('content')
@include('customers.layouts.profile')

		<div class="main-panel">
			<div class="content">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Personal Details</div>
								</div>
								<form method="POST" action="/courses">
									@csrf
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="smallInput">Full Name:</label>
												<input name="title" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Course Title" required="">
											</div>
											<div class="form-group">
												<label for="smallInput">Email Address:</label>
												<input name="title" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Course Title" required="">
											</div>
											<div class="form-group">
												<label for="smallInput">Phone Number:</label>
												<input name="fees" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Fees" required="">
											</div>
										</div>
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="exampleFormControlSelect1">What best describes your current role?</label>
												<select class="form-control"  name="venue" id="exampleFormControlSelect1">
													<option value="Town">Editable Text area</option>
													<option value="Town">Nairobi</option>
													<option value="Town">Nairobi</option>
													<option value="Town">Nairobi</option>
												</select>
											</div>
											
											<div class="form-group">
												<label for="exampleFormControlSelect1">Select your experience</label>
												<select class="form-control"  name="venue" id="exampleFormControlSelect1">
													<option value="Town">0-12 months</option>
													<option value="Town">1-2 years</option>
													<option value="Town">Nairobi</option>
													<option value="Town">Nairobi</option>
												</select>
											</div>

											</div>
										</div>
									</div>
								</div>
								<div class="card-action">
									<button class="btn btn-success">Submit & Continue</button>
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