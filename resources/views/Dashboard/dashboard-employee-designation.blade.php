@extends('layouts.dashboard-app')

@section('content')
	<!--Main Start-->
	<main id="wt-main" class="wt-main wt-haslayout">
	
		<!--Register Form Start-->
		<section class="wt-haslayout wt-dbsectionspace">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 float-left">
					<div class="wt-dashboardbox">
						<div class="wt-dashboardboxtitle">
							<h2>Add New Designation</h2>
						</div>
						<div class="wt-dashboardboxcontent">
							<form class="wt-formtheme wt-formprojectinfo wt-formcategory">
								<fieldset>
									<div class="form-group">
										<input type="text" name="designation" class="form-control" placeholder="Designation">
									</div>
									<div class="form-group form-group-label">
										<div class="wt-labelgroup">
											<label for="file">
												<span class="wt-btn">Select Files</span>
												<input type="file" name="file" id="file">
											</label><br>
											<span>Drop Icon here to upload</span>
											<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
										</div>
									</div>
									<!-- <div class="form-group">
										<ul class="wt-attachfile">
											<li class="wt-uploading">
												<span class="uploadprogressbar"></span>
												<span>Category Icon.jpg</span>
												<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
											</li>
										</ul>
									</div> -->
									<div class="form-group wt-btnarea">
										<a href="javascript:void(0);" class="wt-btn">Add New Designation</a>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 float-right">
					<div class="wt-dashboardbox wt-categorys">
						<div class="wt-dashboardboxtitle wt-titlewithsearch">
							<h2>Employee Designation</h2>
							<form class="wt-formtheme wt-formsearch">
								<fieldset>
									<div class="form-group">
										<input type="text" name="category" class="form-control" placeholder="Search Category">
										<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="wt-dashboardboxcontent wt-categoriescontentholder">
							<table class="wt-tablecategories">
								<thead>
									<tr>
										<th>Icon</th>
										<th>Name</th>
										<th>Manage Access</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><figure><img src="{{ asset('assets/images/icons/administrator.png') }}" alt="img description"></figure></td>
										<td>Administrator</td>
										<td class="text-center">
											<div class="wt-actionbtn">
												<a href="dashboard-manange-access.php" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-pencil"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td><figure><img src="{{ asset('assets/images/icons/moderator.png') }}" alt="img description"></figure></td>
										<td>Moderator</td>
										<td>
											<div class="wt-actionbtn">
												<a href="dashboard-manange-access.php" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-pencil"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td><figure><img src="{{ asset('assets/images/icons/controller.png') }}" alt="img description"></figure></td>
										<td>Controller</td>
										<td>
											<div class="wt-actionbtn">
												<a href="dashboard-manange-access.php" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-pencil"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<nav class="wt-pagination">
								<ul>
									<li class="wt-prevpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-left"></i></a></li>
									<li><a href="javascrip:void(0);">1</a></li>
									<li><a href="javascrip:void(0);">2</a></li>
									<li><a href="javascrip:void(0);">3</a></li>
									<li><a href="javascrip:void(0);">4</a></li>
									<li><a href="javascrip:void(0);">...</a></li>
									<li><a href="javascrip:void(0);">50</a></li>
									<li class="wt-nextpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-right"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Register Form End-->
	</main>
	<!--Main End-->
@endsection	
