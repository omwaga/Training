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
        <!-- Pricing Tables -->

            <div class="section-title margin-b50">
                <h2><span>Full Managed</span>Most Trending Courses</h2>
            </div>
            <div class="container">
                <div class="col-sm-12">
                    <table class="products-table responsive tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                        <thead>
                            <tr>
                                <th>CODE</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Venue</th>
                                <th>Fees</th>
                                <th>ORDER</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dual</td>
                                <td>1×1.2GHzn Dedicated Hosting Price</td>
                                <td>3GB</td>
                                <td>1×300 GB 6.1K</td>
                                <td>12TB</td>
                                <td><a class="btn btn-block btn-new" href="">CONFIGURE</a> </td>
                            </tr>
                            <tr>
                                <td> Intel</td>
                                <td>3×1.24GHz Dedicated Hosting Price</td>
                                <td>8GB</td>
                                <td>3x2TB 6.1K</td>
                                <td>$123/mo</td>
                                <td><a class="btn btn-block btn-new" href="">CONFIGURE</a> </td>
                            </tr>
                            <tr>
                                <td> Intel</td>
                                <td>4.0GHz v</td>
                                <td>24GB</td>
                                <td>3x2TB 6.1K</td>
                                <td>$132/mo</td>
                                <td><a class="btn btn-block btn-new" href="">CONFIGURE</a> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
</div>
</div>
</div>
    <!-- End of Pricing Tables -->
 </div>
</div>
</div>
@endsection