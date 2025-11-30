@extends('admin.layouts.master')

@section('head-tag')
<title>داشبورد</title>
@endsection

@section('content')
    		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">خوش آمدی ادمین</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item active">دشبرد</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon text-primary border-primary">
										<i class="fe fe-users"></i>
									</span>
									<div class="dash-count">
										<h3>168</h3>
									</div>
								</div>
								<div class="dash-widget-info">
									<h6 class="text-muted">پزشکان</h6>
									<div class="progress progress-sm">
										<div class="progress-bar bg-primary w-50"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon text-success">
										<i class="fe fe-credit-card"></i>
									</span>
									<div class="dash-count">
										<h3>487</h3>
									</div>
								</div>
								<div class="dash-widget-info">

									<h6 class="text-muted">مراجعان</h6>
									<div class="progress progress-sm">
										<div class="progress-bar bg-success w-50"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon text-danger border-danger">
										<i class="fe fe-money"></i>
									</span>
									<div class="dash-count">
										<h3>485</h3>
									</div>
								</div>
								<div class="dash-widget-info">

									<h6 class="text-muted">رزرو نوبت</h6>
									<div class="progress progress-sm">
										<div class="progress-bar bg-danger w-50"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card">
							<div class="card-body">
								<div class="dash-widget-header">
									<span class="dash-widget-icon text-warning border-warning">
										<i class="fe fe-folder"></i>
									</span>
									<div class="dash-count">
										<h3>523</h3>
									</div>
								</div>
								<div class="dash-widget-info">

									<h6 class="text-muted"> درآمد </h6>
									<div class="progress progress-sm">
										<div class="progress-bar bg-warning w-50"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-6">

						<!-- Sales Chart -->
						<div class="card card-chart">
							<div class="card-header">
								<h4 class="card-title"> درآمد </h4>
							</div>
							<div class="card-body">
								<div id="morrisArea"></div>
							</div>
						</div>
						<!-- /Sales Chart -->

					</div>
					<div class="col-md-12 col-lg-6">

						<!-- Invoice Chart -->
						<div class="card card-chart">
							<div class="card-header">
								<h4 class="card-title"> وضعیت </h4>
							</div>
							<div class="card-body">
								<div id="morrisLine"></div>
							</div>
						</div>
						<!-- /Invoice Chart -->

					</div>
				</div>
				<div class="row">
					<div class="col-md-6 d-flex">

						<!-- Recent Orders -->
						<div class="card card-table flex-fill">
							<div class="card-header">
								<h4 class="card-title">لیست پزشکان</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>نام پزشک</th>
												<th>تخصص</th>
												<th>درآمد</th>
												<th>نظرات</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/doctors/doctor-thumb-01.jpg"
																alt="User Image"></a>
														<a href="profile.html">پرشک رابی پرین</a>
													</h2>
												</td>
												<td>دندان پزشک</td>
												<td> 320000 تومان </td>
												<td>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star-o text-secondary"></i>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/doctors/doctor-thumb-02.jpg"
																alt="User Image"></a>
														<a href="profile.html">پزشک دارن الدر</a>
													</h2>
												</td>
												<td>دندان پزشک</td>
												<td>31000 تومان</td>
												<td>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star-o text-secondary"></i>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/doctors/doctor-thumb-03.jpg"
																alt="User Image"></a>
														<a href="profile.html">پزشک دبرا انجل</a>
													</h2>
												</td>
												<td>قلب و عروق</td>
												<td>40000 تومان</td>
												<td>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star-o text-secondary"></i>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/doctors/doctor-thumb-04.jpg"
																alt="User Image"></a>
														<a href="profile.html">پزشک صوفیا برینت</a>
													</h2>
												</td>
												<td>اورولوژی</td>
												<td> 320000 تومان </td>
												<td>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star-o text-secondary"></i>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/doctors/doctor-thumb-05.jpg"
																alt="User Image"></a>
														<a href="profile.html">پزشک ماروین کمپل</a>
													</h2>
												</td>
												<td>ارتوپدی</td>
												<td>35000 تومان</td>
												<td>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star text-warning"></i>
													<i class="fe fe-star-o text-secondary"></i>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- /Recent Orders -->

					</div>
					<div class="col-md-6 d-flex">

						<!-- Feed Activity -->
						<div class="card  card-table flex-fill">
							<div class="card-header">
								<h4 class="card-title">لیست بیماران</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>نام مراجعه کننده</th>
												<th>شماره</th>
												<th>آخرین ویزیت</th>
												<th>پرداخت شده</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/patients/patient1.jpg"
																alt="User Image"></a>
														<a href="profile.html">چارلن رد </a>
													</h2>
												</td>
												<td>8286329170</td>
												<td>20 مهر 1399</td>
												<td class="text-right">100 تومان</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/patients/patient2.jpg"
																alt="User Image"></a>
														<a href="profile.html">تراویس تریمبل </a>
													</h2>
												</td>
												<td>2077299974</td>
												<td>22 مهر 1399</td>
												<td class="text-right">200 تومان</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/patients/patient3.jpg"
																alt="User Image"></a>
														<a href="profile.html">کارل کلی</a>
													</h2>
												</td>
												<td>2607247769</td>
												<td>21 مهر 1399</td>
												<td class="text-right">250 تومان</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/patients/patient4.jpg"
																alt="User Image"></a>
														<a href="profile.html"> میچل فایرفکس</a>
													</h2>
												</td>
												<td>5043686874</td>
												<td>21 آبان 1399</td>
												<td class="text-right"> 150 تومان</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/patients/patient5.jpg"
																alt="User Image"></a>
														<a href="profile.html">جینا مور</a>
													</h2>
												</td>
												<td>9548207887</td>
												<td>18 آبان 1399</td>
												<td class="text-right">530 تومان</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- /Feed Activity -->

					</div>
				</div>
				<div class="row">
					<div class="col-md-12">

						<!-- Recent Orders -->
						<div class="card card-table">
							<div class="card-header">
								<h4 class="card-title">لیست رزروها</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>نام پزشک</th>
												<th>تخصص</th>
												<th>نام مراجعه کننده</th>
												<th>وقت ویزیت</th>
												<th> وضعیت </th>
												<th class="text-right">مقدار</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/doctors/doctor-thumb-01.jpg"
																alt="User Image"></a>
														<a href="profile.html">پرشک رابی پرین</a>
													</h2>
												</td>
												<td>دندان پزشک</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/patients/patient1.jpg"
																alt="User Image"></a>
														<a href="profile.html">چارلن رد </a>
													</h2>
												</td>
												<td>9 مهر 1399 <span class="text-primary d-block">11.00 بعدازظهر - 11.15
														قبل از
														ظهر</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_1" class="check" checked>
														<label for="status_1" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													200 تومان
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/doctors/doctor-thumb-02.jpg"
																alt="User Image"></a>
														<a href="profile.html">پزشک دارن الدر</a>
													</h2>
												</td>
												<td>دندان پزشک</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/patients/patient2.jpg"
																alt="User Image"></a>
														<a href="profile.html">تراویس تریمبل </a>
													</h2>
												</td>

												<td>5 مهر 1399 <span class="text-primary d-block">11.00 بعدازظهر - 11.35
														قبل از
														ظهر</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_2" class="check" checked>
														<label for="status_2" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													300 تومان
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/doctors/doctor-thumb-03.jpg"
																alt="User Image"></a>
														<a href="profile.html">پزشک دبرا انجل</a>
													</h2>
												</td>
												<td>قلب و عروق</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/patients/patient3.jpg"
																alt="User Image"></a>
														<a href="profile.html">کارل کلی</a>
													</h2>
												</td>
												<td>11 مهر 1399 <span class="text-primary d-block">12.00 بعد از ظهر -
														12.15 بعد
														از ظهر</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_3" class="check" checked>
														<label for="status_3" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													150 تومان
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/doctors/doctor-thumb-04.jpg"
																alt="User Image"></a>
														<a href="profile.html">پزشک صوفیا برینت</a>
													</h2>
												</td>
												<td>اورولوژی</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/patients/patient4.jpg"
																alt="User Image"></a>
														<a href="profile.html"> میچل فایرفکس</a>
													</h2>
												</td>
												<td>7 مهر 1399<span class="text-primary d-block">1.00 بعد از ظهر - 1.20
														بعد از
														ظهر</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_4" class="check" checked>
														<label for="status_4" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													150 تومان
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/doctors/doctor-thumb-05.jpg"
																alt="User Image"></a>
														<a href="profile.html">پزشک ماروین کمپل</a>
													</h2>
												</td>
												<td>ارتوپدی</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/patients/patient5.jpg"
																alt="User Image"></a>
														<a href="profile.html">جینا مور</a>
													</h2>
												</td>

												<td>15 مهر 1399 <span class="text-primary d-block">1.00 بعد از ظهر -
														1.15 بعد از
														ظهر</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_5" class="check" checked>
														<label for="status_5" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													200 تومان
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- /Recent Orders -->

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->
@endsection