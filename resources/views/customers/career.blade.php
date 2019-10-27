@extends('customers.layouts.master')
@section('content')
@include('customers.layouts.navbar')

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
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="smallInput">Course Title:</label>
												<input name="title" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Course Title" required="">
											</div>
											<div class="form-group">
												<label for="exampleFormControlSelect1">Select Venue</label>
												<select class="form-control"  name="venue" id="exampleFormControlSelect1">
													<option value="Town">Nairobi</option>
													<option value="Town">Nairobi</option>
													<option value="Town">Nairobi</option>
													<option value="Town">Nairobi</option>
												</select>
											</div>
											<div class="form-group">
												<label for="smallInput">Training Fees</label>
												<input name="fees" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Fees" required="">
											</div>
											<div class="form-group">
												<label for="smallInput">Duration</label>
												<input name="duration" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Duration" required="">
											</div>
										</div>
										<div class="col-md-8 col-lg-8">
											
											<div class="form-group">
												<label for="smallInput">Start Date</label>
												<input name="start_date" type="text" class="form-control form-control-sm" id="smallInput" placeholder="Start Date" required="">
											</div>
											<div class="form-group">
												<label for="comment">Description</label>
												<textarea name="description" id="summernote"></textarea>
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 300
      });
    </script>
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