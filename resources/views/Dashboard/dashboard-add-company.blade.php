@extends('layouts.dashboard-app')
@section('content')
<!--Main Start-->
	<main id="wt-main" class="wt-main wt-haslayout">
		<!--Register Form Start-->
		<section class="wt-haslayout">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
					<div class="wt-haslayout wt-dbsectionspace">
						<div class="wt-dashboardbox wt-dashboardtabsholder wt-accountsettingholder">
							<div class="wt-dashboardboxtitle">
								<h2>Add Company</h2>
							</div>
							<div class="wt-dashboardtabs">
								<ul class="wt-tabstitle nav navbar-nav">
									<li class="nav-item" id="add_company">
										<a class="company_tab active" data-toggle="tab" href="#wt-addcompany">Add Company</a>
									</li>
								</ul>
							</div>
							<div class="wt-tabscontent tab-content">
								<div class="wt-personalskillshold tab-pane active fade show company_tab_active" id="wt-addcompany">
									<form id="addUserForm">
										<div class="wt-yourdetails wt-tabsinfo">
											<div class="wt-tabscontenttitle">
												<h2>Company Details</h2>
											</div>
											<div class="wt-formtheme wt-userform">
												<fieldset>
													
													<div class="form-group form-group-half">
														<label>Owner Name</label>
														<input type="text" name="owner_name" class="form-control" placeholder="Owner Name" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														<label>Company Name</label>
														<input type="text" name="company_name" class="form-control" placeholder="Company Name" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														<label>Phone No</label>
														<input type="number" name="phone_number" class="form-control" placeholder="Phone No" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														<label>Website Link</label>
														<input type="text" name="website_link" class="form-control" placeholder="Website Link" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														<label>Email</label>
														<input type="email" name="email" class="form-control" placeholder="Email" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														<label>Company Number</label>
														<input type="text" name="company_number" class="form-control" placeholder="Company Number" data-required="true" autocomplete="off">
													</div>
												</fieldset>
											</div>
										</div>
										<div class="wt-yourdetails wt-tabsinfo">
											<div class="wt-tabscontenttitle">
												<h2>Company Location</h2>
											</div>
											<div class="wt-formtheme wt-userform">
												<fieldset>
													
													<div class="form-group form-group-half">
														<label>City</label>
														<input type="text" name="city" class="form-control" placeholder="City" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														<label>County</label>
														<input type="text" name="county" class="form-control" placeholder="County" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														<label>Country</label>
														<input type="number" name="country" class="form-control" placeholder="Country" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														<label>Post Code</label>
														<input type="text" name="post_code" class="form-control" placeholder="Post Code" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-full">
														<label>Address</label>
														<textarea name="address" class="form-control" placeholder="Address"></textarea>
													</div>
												</fieldset>
											</div>
										</div>
										<div class="wt-yourdetails wt-tabsinfo">
											<div class="wt-tabscontenttitle">
												<h2>Credentials</h2>
											</div>
											<div class="wt-formtheme wt-userform">
												<fieldset>
													
													<div class="form-group form-group-half">
														<label>Password</label>
														<input type="password" name="password" class="form-control" placeholder="Password" data-required="true" autocomplete="off">
													</div>
													<div class="form-group form-group-half">
														<label>Confirm Password</label>
														<input type="text" name="confirm_password" class="form-control" placeholder="Confirm Password" data-required="true" autocomplete="off">
													</div>
												</fieldset>
											</div>
										</div>
										<div class="wt-updatall">
											<i class="ti-announcement"></i>
											<span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
											<button class="wt-btn" type="submit">Save</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
					<div class="wt-haslayout wt-dbsectionspace wt-codescansidebar">
						<div class="tg-authorcodescan wt-codescanholder">
							<figure class="tg-qrcodeimg">
								<img src="{{ asset('assets/images/qrcode.png') }}" alt="img description">
							</figure>
							<div class="tg-qrcodedetail">
								<span class="lnr lnr-laptop-phone"></span>
								<div class="tg-qrcodefeat">
									<h3>Scan with your <span>Smart Phone </span> To Get It Handy.</h3>
								</div>
							</div>
							<div class="wt-codescanicons">
								<span>Share Your Profile</span>
								<ul class="wt-socialiconssimple">
									<li class="wt-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
									<li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
									<li class="wt-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="wt-clone"><a href="javascript:void(0);"><i class="far fa-clone"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="wt-companyad">
							<figure class="wt-companyadimg"><img src="{{ asset('assets/images/add-img.jpg') }}" alt="img description"></figure>
							<span>Advertisement  255px X 255px</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Register Form End-->
	</main>
@endsection
