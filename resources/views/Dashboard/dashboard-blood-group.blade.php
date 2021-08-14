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
							<h2>Add New Blood Group</h2>
						</div>
						<div class="wt-dashboardboxcontent">
							<form class="wt-formtheme wt-formprojectinfo wt-formcategory">
								<fieldset>
									<div class="form-group">
										<input type="text" name="blood-group" class="form-control" placeholder="Blood Group">
										<span class="form-group-description">The name is how it appears on your site.</span>
									</div>
									<div class="form-group wt-btnarea">
										<a href="javascript:void(0);" class="wt-btn">Add New</a>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 float-right">
					<div class="wt-dashboardbox wt-categorys">
						<div class="wt-dashboardboxtitle wt-titlewithsearch">
							<h2>Blood Groups</h2>
							<form class="wt-formtheme wt-formsearch">
								<fieldset>
									<div class="form-group">
										<input type="text" name="category" class="form-control" placeholder="Search Category">
										<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
									</div>
								</fieldset>
							</form>
							<div class="wt-actionbtn wt-skilldel">
								<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
							</div>
						</div>
						<div class="wt-dashboardboxcontent wt-categoriescontentholder">
							<table class="wt-tablecategories">
								<thead>
									<tr>
										<th>
											<span class="wt-checkbox">
												<input id="wt-name" type="checkbox" name="head">
												<label for="wt-name"></label>
											</span>
										</th>
										<th>Blood Group Name</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<span class="wt-checkbox">
												<input id="wt-name4" type="checkbox" name="categories">
												<label for="wt-name4"></label>
											</span>
										</td>
										<td>O+</td>
										<td>
											<div class="wt-actionbtn">
												<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-pencil"></i></a>
												<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<span class="wt-checkbox">
												<input id="wt-namea" type="checkbox" name="head">
												<label for="wt-namea"></label>
											</span>
										</td>
										<td>O-</td>
										<td>
											<div class="wt-actionbtn">
												<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-pencil"></i></a>
												<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<span class="wt-checkbox">
												<input id="wt-name1" type="checkbox" name="categories">
												<label for="wt-name1"></label>
											</span>
										</td>
										<td>A+</td>
										<td>
											<div class="wt-actionbtn">
												<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-pencil"></i></a>
												<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<span class="wt-checkbox">
												<input id="wt-name1" type="checkbox" name="categories">
												<label for="wt-name1"></label>
											</span>
										</td>
										<td>A-</td>
										<td>
											<div class="wt-actionbtn">
												<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-pencil"></i></a>
												<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<span class="wt-checkbox">
												<input id="wt-name1" type="checkbox" name="categories">
												<label for="wt-name1"></label>
											</span>
										</td>
										<td>B+</td>
										<td>
											<div class="wt-actionbtn">
												<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-pencil"></i></a>
												<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<span class="wt-checkbox">
												<input id="wt-name1" type="checkbox" name="categories">
												<label for="wt-name1"></label>
											</span>
										</td>
										<td>B-</td>
										<td>
											<div class="wt-actionbtn">
												<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-pencil"></i></a>
												<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<span class="wt-checkbox">
												<input id="wt-name1" type="checkbox" name="categories">
												<label for="wt-name1"></label>
											</span>
										</td>
										<td>AB+</td>
										<td>
											<div class="wt-actionbtn">
												<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-pencil"></i></a>
												<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<span class="wt-checkbox">
												<input id="wt-name1" type="checkbox" name="categories">
												<label for="wt-name1"></label>
											</span>
										</td>
										<td>AB-</td>
										<td>
											<div class="wt-actionbtn">
												<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-pencil"></i></a>
												<a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
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