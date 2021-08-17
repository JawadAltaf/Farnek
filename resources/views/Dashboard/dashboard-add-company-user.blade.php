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
								<h2>Add Company User</h2>
							</div>
							<div class="wt-dashboardtabs">
								<ul class="wt-tabstitle nav navbar-nav">
									<li class="nav-item" id="personal_details">
										<a class="personal_tab active" data-toggle="tab" href="#wt-skills">Personal Details</a>
									</li>
									<li class="nav-item" id="next_of_kin">
										<a data-toggle="tab" href="#wt-nextkin">Next Of Kin</a>
									</li>
									<li class="nav-item" id="home_address">
										<a data-toggle="tab" href="#wt-homeaddress">Home Address</a>
									</li>
									<li class="nav-item" id="document">
										<a data-toggle="tab" href="#wt-document">Documents</a>
									</li>
									<li class="nav-item" id="language">
										<a data-toggle="tab" href="#wt-language">Language</a>
									</li>
									<li class="nav-item" id="transportation">
										<a data-toggle="tab" href="#wt-transportation">Transportation</a>
									</li>
									<li class="nav-item" id="experience">
										<a data-toggle="tab" href="#wt-education">Experience &amp; Education</a>
									</li>
									<li class="nav-item" id="projects">
										<a data-toggle="tab" href="#wt-awards">Projects &amp; Awards</a>
									</li>
								</ul>
							</div>
							<div class="wt-tabscontent tab-content">
								<div class="wt-personalskillshold tab-pane active fade show personal_tab_active" id="wt-skills">
                                    <form id="companyUserForm">
									<div class="wt-yourdetails wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>User Detail</h2>
										</div>
										<div class="wt-formtheme wt-userform">
											<fieldset>
												<div class="form-group form-group-half" id="select_company">
													<label>Select Company</label>
													<span class="wt-select">
														<select name="user_company">
															<option value="">Select Company</option>
															<option value="abc">abc</option>
															<option value="def">def</option>
															<option value="ghi">ghi</option>
														</select>
													</span>
												</div>
												<div class="form-group form-group-half" id="select_project">
													<label>Select Project</label>
													<span class="wt-select">
														<select name="select_project">
															<option value="">Select Project</option>
															<option value="abc">abc</option>
															<option value="def">def</option>
															<option value="ghi">ghi</option>
														</select>
													</span>
												</div>
												<div class="form-group form-group-half" id="user_designation">
													<label>User Designation</label>
													<span class="wt-select">
														<select name="user_company_designation">
															<option value="">Select Designation</option>
															<option value="Company Portal">Company Portal</option>
															<option value="Area Manager">Area Manager</option>
															<option value="Accounts Manager">Accounts Manager</option>
															<option value="Operation Manager">Operation Manager</option>
														</select>
													</span>
												</div>
												<div class="form-group form-group-half">
													<label>Select Gender</label>
													<span class="wt-select">
														<select name="select_gender">
															<option value="">Select Gender</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</span>
												</div>
												<div class="form-group form-group-half">
													<label>First Name</label>
													<input type="text" name="first_name" class="form-control" placeholder="First Name" data-required="true" autocomplete="off">
												</div>
												<div class="form-group form-group-half">
													<label>Last Name</label>
													<input type="text" name="last_name" class="form-control" placeholder="Last Name" data-required="true" autocomplete="off">
												</div>
												<div class="form-group form-group-half">
													<label>Email</label>
													<input type="email" name="email" class="form-control" placeholder="Email" data-required="true" autocomplete="off">
												</div>
												<div class="form-group form-group-half">
													<label>Phone Number</label>
													<input type="text" name="company_number" class="form-control" placeholder="Phone Number" data-required="true" autocomplete="off">
												</div>
												<div class="form-group form-group-half">
													<label>Password</label>
													<input type="number" name="user_password" class="form-control" placeholder="Password" data-required="true" autocomplete="off">
												</div>
												<div class="form-group form-group-half">
													<label>Confirm Password</label>
													<input type="number" name="user_confirm_password" class="form-control" placeholder="Confirm Password" data-required="true" autocomplete="off">
												</div>
											</fieldset>
										</div>
									</div>
									<div class="wt-profilephoto wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Profile Photo</h2>
										</div>
										<div class="wt-profilephotocontent">
											<div class="wt-description">
												<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua aut enim ad minim veniamac quis nostrud exercitation ullamco laboris.</p>
											</div>
											<div class="wt-formtheme wt-formprojectinfo wt-formcategory">
												<fieldset>
													<div class="form-group form-group-label">
														<div class="wt-labelgroup">
															<label for="filep">
																<span class="wt-btn">Select Files</span>
																<input type="file" name="file" id="filep">
															</label>
															<span>Drop files here to upload</span>
															<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
														</div>
													</div>
													<div class="form-group">
														<ul class="wt-attachfile wt-attachfilevtwo">
															<li class="wt-uploadingholder wt-companyimg-uploading">
																<div class="wt-uploadingbox">
																	<figure><img src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																	<div class="wt-uploadingbar wt-uploading">
																		<span class="uploadprogressbar"></span>
																		<span>Profile Photo.jpg</span>
																		<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</fieldset>
											</div>
										</div>
									</div>
									<div class="wt-yourdetails wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>User Cover Photo</h2>
										</div>
										<div class="wt-settingscontent">
											<div class="wt-formtheme wt-userform">
												<div class="wt-uploadingbox">
													<figure>
														<img src="{{ asset('assets/images/logo/Farneklogo.png') }}" alt="Photo de profil">
													</figure> 
													<div class="wt-uploadingbar">
														<div class="dz-filename">Farneklogo.png</div> 
														<em>File Size:
															<a href="javascript:void(0);" class="lnr lnr-cross"></a>
														</em>
													</div>
												</div> 
												<input type="hidden" name="hidden_banner_image" id="hidden_banner" value="b.jpg">
											</div>
										</div>
									</div>
								</div>
								<div class="wt-personalskillshold tab-pane fade" id="wt-nextkin">
									<div class="wt-yourdetails wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Next of Kin</h2>
										</div>
										<div class="wt-formtheme wt-userform">
											<fieldset>
												<div class="form-group form-group-half">
													<label>Full Name</label>
													<input type="text" name="First Name" class="form-control" placeholder="Full Name" data-required="true" autocomplete="off">
												</div>
												<div class="form-group form-group-half">
													<label>Relationship</label>
													<input type="text" name="Last Name" class="form-control" placeholder="Relationship" data-required="true" autocomplete="off">
												</div>
												<div class="form-group form-group-full">
													<label>Mobile No</label>
													<input type="number" name="email" class="form-control" placeholder="Mobile No" data-required="true" autocomplete="off">
												</div>
											</fieldset>
										</div>
									</div>
								</div>
								<div class="wt-personalskillshold tab-pane fade" id="wt-homeaddress">
									<div class="wt-location wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Home Location</h2>
										</div>
										<div class="wt-formtheme wt-userform">
											<fieldset>
												<div class="form-group form-group-half">
													<label>City</label>
													<input type="text" name="address" class="form-control" placeholder="City">
												</div>
												<div class="form-group form-group-half">
													<label>County</label>
													<input type="text" name="address" class="form-control" placeholder="County">
												</div>
												<div class="form-group form-group-half">
													<label>Country</label>
													<input type="text" name="address" class="form-control" placeholder="Country">
												</div>
												<div class="form-group form-group-half">
													<label>Post Code</label>
													<input type="text" name="address" class="form-control" placeholder="Post Code">
												</div>
												<div class="form-group form-group-full">
													<label>Address</label>
													<textarea name="message" class="form-control" placeholder="Address"></textarea>
												</div>
											</fieldset>
										</div>
									</div>
								</div>
								<div class="wt-personalskillshold tab-pane fade" id="wt-document">
									<div class="wt-location wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Proof of document</h2>
										</div>
										<div class="wt-formtheme wt-userform">
											<fieldset>
												<div class="form-group form-group-label">
													<label>Sia Licence</label>
													<div class="wt-labelgroup">
														<label for="filep">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="filep">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile wt-attachfilevtwo">
														<li class="wt-uploadingholder wt-companyimg-uploading">
															<div class="wt-uploadingbox">
																<figure><img src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																<div class="wt-uploadingbar wt-uploading">
																	<span class="uploadprogressbar"></span>
																	<span>Profile Photo.jpg</span>
																	<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="form-group form-group-label">
													<label>Passport</label>
													<div class="wt-labelgroup">
														<label for="filep">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="filep">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile wt-attachfilevtwo">
														<li class="wt-uploadingholder wt-companyimg-uploading">
															<div class="wt-uploadingbox">
																<figure><img src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																<div class="wt-uploadingbar wt-uploading">
																	<span class="uploadprogressbar"></span>
																	<span>Profile Photo.jpg</span>
																	<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="form-group form-group-label">
													<label>Residence Permit</label>
													<div class="wt-labelgroup">
														<label for="filep">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="filep">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile wt-attachfilevtwo">
														<li class="wt-uploadingholder wt-companyimg-uploading">
															<div class="wt-uploadingbox">
																<figure><img src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																<div class="wt-uploadingbar wt-uploading">
																	<span class="uploadprogressbar"></span>
																	<span>Profile Photo.jpg</span>
																	<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="form-group form-group-label">
													<label>NIN No</label>
													<div class="wt-labelgroup">
														<label for="filep">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="filep">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile wt-attachfilevtwo">
														<li class="wt-uploadingholder wt-companyimg-uploading">
															<div class="wt-uploadingbox">
																<figure><img src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																<div class="wt-uploadingbar wt-uploading">
																	<span class="uploadprogressbar"></span>
																	<span>Profile Photo.jpg</span>
																	<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="form-group form-group-label">
													<label>DVLA/Address</label>
													<div class="wt-labelgroup">
														<label for="filep">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="filep">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile wt-attachfilevtwo">
														<li class="wt-uploadingholder wt-companyimg-uploading">
															<div class="wt-uploadingbox">
																<figure><img src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																<div class="wt-uploadingbar wt-uploading">
																	<span class="uploadprogressbar"></span>
																	<span>Profile Photo.jpg</span>
																	<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="form-group form-group-label">
													<label>DBS Check</label>
													<div class="wt-labelgroup">
														<label for="filep">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="filep">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile wt-attachfilevtwo">
														<li class="wt-uploadingholder wt-companyimg-uploading">
															<div class="wt-uploadingbox">
																<figure><img src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																<div class="wt-uploadingbar wt-uploading">
																	<span class="uploadprogressbar"></span>
																	<span>Profile Photo.jpg</span>
																	<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="form-group form-group-label">
													<label>Bank Statement</label>
													<div class="wt-labelgroup">
														<label for="filep">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="filep">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile wt-attachfilevtwo">
														<li class="wt-uploadingholder wt-companyimg-uploading">
															<div class="wt-uploadingbox">
																<figure><img src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																<div class="wt-uploadingbar wt-uploading">
																	<span class="uploadprogressbar"></span>
																	<span>Profile Photo.jpg</span>
																	<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="form-group form-group-label">
													<label>Upload CV</label>
													<div class="wt-labelgroup">
														<label for="filep">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="filep">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile wt-attachfilevtwo">
														<li class="wt-uploadingholder wt-companyimg-uploading">
															<div class="wt-uploadingbox">
																<figure><img src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																<div class="wt-uploadingbar wt-uploading">
																	<span class="uploadprogressbar"></span>
																	<span>Profile Photo.jpg</span>
																	<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="form-group form-group-label">
													<label>Bill Image</label>
													<div class="wt-labelgroup">
														<label for="filep">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="filep">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile wt-attachfilevtwo">
														<li class="wt-uploadingholder wt-companyimg-uploading">
															<div class="wt-uploadingbox">
																<figure><img src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																<div class="wt-uploadingbar wt-uploading">
																	<span class="uploadprogressbar"></span>
																	<span>Profile Photo.jpg</span>
																	<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="form-group form-group-label">
													<label>Card Image</label>
													<div class="wt-labelgroup">
														<label for="filep">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="filep">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile wt-attachfilevtwo">
														<li class="wt-uploadingholder wt-companyimg-uploading">
															<div class="wt-uploadingbox">
																<figure><img src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																<div class="wt-uploadingbar wt-uploading">
																	<span class="uploadprogressbar"></span>
																	<span>Profile Photo.jpg</span>
																	<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</fieldset>
										</div>
									</div>
								</div>
								<div class="wt-personalskillshold tab-pane fade" id="wt-language">
									<div class="wt-location wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Languages</h2>
										</div>
										<div class="wt-formtheme wt-userform">
											<fieldset>
												<div class="form-group form-group-half">
													<label>Choose Language</label>
													<select name="address" class="form-control" multiple id="languages">
														<option value="">English</option>
														<option value="">Urdu</option>
														<option value="">Arabic</option>
													</select>
												</div>
												<div class="form-group form-group-half">
													<label>Language Level</label>
													<select name="address" class="form-control">
														<option value="">Beginner</option>
														<option value="">Intermediate</option>
														<option value="">Expert</option>
														<option value="">Native</option>
													</select>
												</div>
											</fieldset>
										</div>
									</div>
								</div>
								<div class="wt-personalskillshold tab-pane fade" id="wt-transportation">
									<div class="wt-location wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>How would you get job site</h2>
										</div>
										<div class="wt-formtheme wt-userform">
											<fieldset>
												<div class="form-group form-group-full">
													<label>Choose Vehicle Type</label>
													<select name="address" class="form-control">
														<option value="">Public Transport</option>
														<option value="">Own Vehicle</option>
														<option value="">Other</option>
													</select>
												</div>
												<div class="form-group form-group-label">
													<label>Own Driving Licence</label>
													<div class="wt-labelgroup">
														<label for="filep">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="filep">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile wt-attachfilevtwo">
														<li class="wt-uploadingholder wt-companyimg-uploading">
															<div class="wt-uploadingbox">
																<figure><img src="{{ asset('assets/images/company/img-07.jpg') }}" alt="img description"></figure>
																<div class="wt-uploadingbar wt-uploading">
																	<span class="uploadprogressbar"></span>
																	<span>Profile Photo.jpg</span>
																	<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</fieldset>
										</div>
									</div>
								</div>
								<div class="wt-educationholder tab-pane fade" id="wt-education">
									<div class="wt-userexperience wt-tabsinfo">
										<div class="wt-tabscontenttitle wt-addnew">
											<h2>Add Your Experience</h2>
											<a href="javascript:void(0);" id="addmore" data-toggle="collapse" data-target="#addmoreForm" aria-expanded="false">Add New</a>
										</div>
										<div class="wt-collapseexp collapse show" id="addmoreForm" aria-labelledby="addmore" data-parent="">
											<div class="wt-formtheme wt-userform">
												<fieldset>
													<div class="form-group form-group-half">
														<label>Company Name</label>
														<input type="text" name="Company Title" class="form-control" placeholder="Company Name">
													</div>
													<div class="form-group form-group-half">
														<label>Job Position</label>
														<input type="number" name="Job Title" class="form-control" placeholder="Your Job Position">
													</div>
													<div class="form-group form-group-half">
														<label>Start Date</label>
														<input type="text" name="Starting Date" class="form-control" placeholder="Start Date">
													</div>
													<div class="form-group form-group-half">
														<label>End Date</label>
														<input type="email" name="Ending Date" class="form-control" placeholder="End Date *">
													</div>
													<div class="form-group">
														<label>Job Description</label>
														<textarea name="message" class="form-control" placeholder="Your Job Description"></textarea>
													</div>
													<div class="form-group">
														<span>* Leave ending date empty if its your current job</span>
													</div>
												</fieldset>
											</div>
										</div>
										<ul class="wt-experienceaccordion accordion">
											<li>
												<div class="wt-accordioninnertitle">
													<span id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle">Web &amp; Apps Project Manager<em>(Jun 2017 - Jul 2018)</em></span>
													<div class="wt-rightarea">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
														<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
													</div>
												</div>
												<div class="wt-collapseexp collapse show" id="innertitle" aria-labelledby="accordioninnertitle" data-parent="#accordion">
													<div class="wt-formtheme wt-userform">
														<fieldset>
															<div class="form-group form-group-half">
																<input type="text" name="Company Title" class="form-control" placeholder="Company Title">
															</div>
															<div class="form-group form-group-half">
																<input type="text" name="Starting Date" class="form-control" placeholder="Starting Date">
															</div>
															<div class="form-group form-group-half">
																<input type="email" name="Ending Date" class="form-control" placeholder="Ending Date *">
															</div>
															<div class="form-group form-group-half">
																<input type="number" name="Job Title" class="form-control" placeholder="Your Job Title">
															</div>
															<div class="form-group">
																<textarea name="message" class="form-control" placeholder="Your Job Description"></textarea>
															</div>
															<div class="form-group">
																<span>* Leave ending date empty if its your current job</span>
															</div>
														</fieldset>
													</div>
												</div>
											</li>
											<li>
												<div class="wt-accordioninnertitle">
													<span id="accordioninnertitlea" data-toggle="collapse" data-target="#innertitlea">Sr. PHP &amp; Laravel Developer<em>(Jun 2017 - Jul 2018)</em></span>
													<div class="wt-rightarea">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitlea" data-toggle="collapse" data-target="#innertitlea" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
														<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
													</div>
												</div>
												<div class="wt-collapseexp collapse hide" id="innertitlea" aria-labelledby="accordioninnertitleaa" data-parent="#accordion">
													<div class="wt-formtheme wt-userform">
														<fieldset>
															<div class="form-group form-group-half">
																<input type="text" name="Company Title" class="form-control" placeholder="Company Title">
															</div>
															<div class="form-group form-group-half">
																<input type="text" name="Starting Date" class="form-control" placeholder="Starting Date">
															</div>
															<div class="form-group form-group-half">
																<input type="email" name="Ending Date" class="form-control" placeholder="Ending Date *">
															</div>
															<div class="form-group form-group-half">
																<input type="number" name="Job Title" class="form-control" placeholder="Your Job Title">
															</div>
															<div class="form-group">
																<textarea name="message" class="form-control" placeholder="Your Job Description"></textarea>
															</div>
															<div class="form-group">
																<span>* Leave ending date empty if its your current job</span>
															</div>
														</fieldset>
													</div>
												</div>
											</li>
											<li>
												<div class="wt-accordioninnertitle">
													<span id="accordioninnertitleb" data-toggle="collapse" data-target="#innertitleb">PHP &amp; Laravel Developer <em>(Apr 2016 - Jul 2017)</em></span>
													<div class="wt-rightarea">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitleb" data-toggle="collapse" data-target="#innertitleb" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
														<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
													</div>
												</div>
												<div class="wt-collapseexp collapse hide" id="innertitleb" aria-labelledby="accordioninnertitleb" data-parent="#accordion">
													<div class="wt-formtheme wt-userform">
														<fieldset>
															<div class="form-group form-group-half">
																<input type="text" name="Company Title" class="form-control" placeholder="Company Title">
															</div>
															<div class="form-group form-group-half">
																<input type="text" name="Starting Date" class="form-control" placeholder="Starting Date">
															</div>
															<div class="form-group form-group-half">
																<input type="email" name="Ending Date" class="form-control" placeholder="Ending Date *">
															</div>
															<div class="form-group form-group-half">
																<input type="number" name="Job Title" class="form-control" placeholder="Your Job Title">
															</div>
															<div class="form-group">
																<textarea name="message" class="form-control" placeholder="Your Job Description"></textarea>
															</div>
															<div class="form-group">
																<span>* Leave ending date empty if its your current job</span>
															</div>
														</fieldset>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="wt-awardsholder tab-pane fade" id="wt-awards">
									<div class="wt-addprojectsholder wt-tabsinfo">
										<div class="wt-tabscontenttitle wt-addnew">
											<h2>Add Your Projects</h2>
											<a href="javascript:void(0);">Add New</a>
										</div>
										<ul class="wt-experienceaccordion accordion">
											<li>
												<div class="wt-accordioninnertitle">
													<div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitleaone">
														<figure><img src="{{ asset('assets/images/thumbnail/img-11.jpg') }}" alt="img description"></figure>
														<h3>Project Title Here<span>www.themeforest.net</span></h3>
													</div>
													<div class="wt-rightarea">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitleaone"><i class="lnr lnr-pencil"></i></a>
														<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
													</div>
												</div>
												<div class="wt-collapseexp collapse" id="innertitleaone" aria-labelledby="accordioninnertitle" data-parent="#accordion">
													<div class="wt-formtheme wt-userform wt-formprojectinfo">
														<fieldset>
															<div class="form-group form-group-half">
																<input type="text" name="Project Title" class="form-control" placeholder="Project Title">
															</div>
															<div class="form-group form-group-half">
																<input type="text" name="Project URL" class="form-control" placeholder="Project URL">
															</div>
															<div class="form-group form-group-label wt-infouploading">
																<div class="wt-labelgroup">
																	<label for="filen">
																		<span class="wt-btn">Select Files</span>
																		<input type="file" name="file" id="filen">
																	</label>
																	<span>Drop files here to upload</span>
																	<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
																</div>
															</div>
															<div class="form-group">
																<ul class="wt-attachfile">
																	<li class="wt-uploading">
																		<span>Logo.jpg</span>
																		<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Wireframe Document.doc</span>
																		<em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Requirments.pdf</span>
																		<em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Company Intro.docx</span>
																		<em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																</ul>
															</div>
															<div class="form-group wt-btnarea">
																<a href="javascript:void(0);" class="wt-btn">Save</a>
															</div>
														</fieldset>
													</div>
												</div>
											</li>
											<li>
												<div class="wt-accordioninnertitle">
													<div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitlebone">
														<figure><img src="{{ asset('assets/images/thumbnail/img-12.jpg') }}" alt="img description"></figure>
														<h3>Project Title Here<span>www.themeforest.net</span></h3>
													</div>
													<div class="wt-rightarea">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitlebone"><i class="lnr lnr-pencil"></i></a>
														<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
													</div>
												</div>
												<div class="wt-collapseexp collapse show" id="innertitlebone" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
													<div class="wt-formtheme wt-userform wt-formprojectinfo">
														<fieldset>
															<div class="form-group form-group-half">
																<input type="text" name="Project Title" class="form-control" placeholder="Project Title">
															</div>
															<div class="form-group form-group-half">
																<input type="text" name="Project URL" class="form-control" placeholder="Project URL">
															</div>
															<div class="form-group form-group-label wt-infouploading">
																<div class="wt-labelgroup">
																	<label for="filet">
																		<span class="wt-btn">Select Files</span>
																		<input type="file" name="file" id="filet">
																	</label>
																	<span>Drop files here to upload</span>
																	<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
																</div>
															</div>
															<div class="form-group">
																<ul class="wt-attachfile">
																	<li class="wt-uploading">
																		<span>Logo.jpg</span>
																		<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Wireframe Document.doc</span>
																		<em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Requirments.pdf</span>
																		<em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Company Intro.docx</span>
																		<em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																</ul>
															</div>
															<div class="form-group wt-btnarea">
																<a href="javascript:void(0);" class="wt-btn">Save</a>
															</div>
														</fieldset>
													</div>
												</div>
											</li>
											<li>
											<div class="wt-accordioninnertitle">
												<div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitlecone">
													<figure><img src="{{ asset('assets/images/thumbnail/img-13.jpg') }}" alt="img description"></figure>
													<h3>Project Title Here<span>www.themeforest.net</span></h3>
												</div>
												<div class="wt-rightarea">
													<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitlecone"><i class="lnr lnr-pencil"></i></a>
													<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
												</div>
											</div>
											<div class="wt-collapseexp collapse" id="innertitlecone" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
												<div class="wt-formtheme wt-userform wt-formprojectinfo">
													<fieldset>
														<div class="form-group form-group-half">
															<input type="text" name="Project Title" class="form-control" placeholder="Project Title">
														</div>
														<div class="form-group form-group-half">
															<input type="text" name="Project URL" class="form-control" placeholder="Project URL">
														</div>
														<div class="form-group form-group-label wt-infouploading">
															<div class="wt-labelgroup">
																<label for="fileb">
																	<span class="wt-btn">Select Files</span>
																	<input type="file" name="file" id="fileb">
																</label>
																<span>Drop files here to upload</span>
																<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
															</div>
														</div>
														<div class="form-group">
															<ul class="wt-attachfile">
																<li class="wt-uploading">
																	<span>Logo.jpg</span>
																	<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</li>
																<li>
																	<span>Wireframe Document.doc</span>
																	<em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</li>
																<li>
																	<span>Requirments.pdf</span>
																	<em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</li>
																<li>
																	<span>Company Intro.docx</span>
																	<em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																</li>
															</ul>
														</div>
														<div class="form-group wt-btnarea">
															<a href="javascript:void(0);" class="wt-btn">Save</a>
														</div>
													</fieldset>
												</div>
											</div>
											</li>
										</ul>
									</div>
									<div class="wt-addprojectsholder">
										<div class="wt-tabscontenttitle wt-addnew">
											<h2>Add Your Awards</h2>
											<a href="javascript:void(0);">Add New</a>
										</div>
										<ul class="wt-experienceaccordion accordion">
											<li>
												<div class="wt-accordioninnertitle">
													<div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitleawone">
														<figure><img src="{{ asset('assets/images/thumbnail/img-08.jpg') }}" alt="img description"></figure>
														<h3>Awards Title Here<samp>Apr 27, 2016</samp></h3>
													</div>
													<div class="wt-rightarea">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitleawone"><i class="lnr lnr-pencil"></i></a>
														<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
													</div>
												</div>
												<div class="wt-collapseexp collapse" id="innertitleawone" aria-labelledby="accordioninnertitle" data-parent="#accordion">
													<div class="wt-formtheme wt-userform wt-formprojectinfo">
														<fieldset>
															<div class="form-group form-group-half">
																<input type="text" name="Awards" class="form-control" placeholder="Award Title">
															</div>
															<div class="form-group form-group-half">
																<input type="text" name="awards" class="form-control" placeholder="Award Date">
															</div>
															<div class="form-group form-group-label wt-infouploading">
																<div class="wt-labelgroup">
																	<label for="file">
																		<span class="wt-btn">Select Files</span>
																		<input type="file" name="file" id="file">
																	</label>
																	<span>Drop files here to upload</span>
																	<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
																</div>
															</div>
															<div class="form-group">
																<ul class="wt-attachfile">
																	<li class="wt-uploading">
																		<span>Logo.jpg</span>
																		<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Wireframe Document.doc</span>
																		<em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Requirments.pdf</span>
																		<em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Company Intro.docx</span>
																		<em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																</ul>
															</div>
															<div class="form-group wt-btnarea">
																<a href="javascript:void(0);" class="wt-btn">Save</a>
															</div>
														</fieldset>
													</div>
												</div>
											</li>
											<li>
												<div class="wt-accordioninnertitle">
													<div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitlebwone">
														<figure><img src="{{ asset('assets/images/thumbnail/img-08.jpg') }}" alt="img description"></figure>
														<h3>Awards Title Here<samp>Apr 27, 2016</samp></h3>
													</div>
													<div class="wt-rightarea">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitlebwone"><i class="lnr lnr-pencil"></i></a>
														<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
													</div>
												</div>
												<div class="wt-collapseexp collapse show" id="innertitlebwone" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
													<div class="wt-formtheme wt-userform wt-formprojectinfo">
														<fieldset>
															<div class="form-group form-group-half">
																<input type="text" name="Award Title" class="form-control" placeholder="Award Title">
															</div>
															<div class="form-group form-group-half">
																<input type="text" name="Award Date" class="form-control" placeholder="Award Date">
															</div>
															<div class="form-group form-group-label wt-infouploading">
																<div class="wt-labelgroup">
																	<label for="filea">
																		<span class="wt-btn">Select Files</span>
																		<input type="file" name="file" id="filea">
																	</label>
																	<span>Drop files here to upload</span>
																	<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
																</div>
															</div>
															<div class="form-group">
																<ul class="wt-attachfile">
																	<li class="wt-uploading">
																		<span>Logo.jpg</span>
																		<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Wireframe Document.doc</span>
																		<em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Requirments.pdf</span>
																		<em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Company Intro.docx</span>
																		<em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																</ul>
															</div>
															<div class="form-group wt-btnarea">
																<a href="javascript:void(0);" class="wt-btn">Save</a>
															</div>
														</fieldset>
													</div>
												</div>
											</li>
											<li>
												<div class="wt-accordioninnertitle">
													<div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitlecwone">
														<figure><img src="{{ asset('assets/images/thumbnail/img-09.jpg') }}" alt="img description"></figure>
														<h3>Awards Title Here<samp>Apr 27, 2016</samp></h3>
													</div>
													<div class="wt-rightarea">
														<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitlecwone"><i class="lnr lnr-pencil"></i></a>
														<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
													</div>
												</div>
												<div class="wt-collapseexp collapse" id="innertitlecwone" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
													<div class="wt-formtheme wt-userform wt-formprojectinfo">
														<fieldset>
															<div class="form-group form-group-half">
																<input type="text" name="Award Title" class="form-control" placeholder="Award Title">
															</div>
															<div class="form-group form-group-half">
																<input type="text" name="Award Date" class="form-control" placeholder="Award Date">
															</div>
															<div class="form-group form-group-label wt-infouploading">
																<div class="wt-labelgroup">
																	<label for="filec">
																		<span class="wt-btn">Select Files</span>
																		<input type="file" name="file" id="filec">
																	</label>
																	<span>Drop files here to upload</span>
																	<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
																</div>
															</div>
															<div class="form-group">
																<ul class="wt-attachfile">
																	<li class="wt-uploading">
																		<span>Logo.jpg</span>
																		<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Wireframe Document.doc</span>
																		<em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Requirments.pdf</span>
																		<em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																	<li>
																		<span>Company Intro.docx</span>
																		<em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
																	</li>
																</ul>
															</div>
															<div class="form-group wt-btnarea">
																<a href="javascript:void(0);" class="wt-btn">Save</a>
															</div>
														</fieldset>
													</div>
												</div>
											</li>
										</ul>
									</div>
							
								</div>
							</div>
						</div>
					</div>
					<div class="wt-updatall outer_btn">
						<i class="ti-announcement"></i>
						<span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
						<button type="submit" class="wt-btn">Save &amp; Update</button>
					</div>
                </form>
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
