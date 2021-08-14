@extends('layouts.app')
@section('content')
	<!--Inner Home Banner Start-->
	<div class="wt-haslayout wt-innerbannerholder">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
					<div class="wt-innerbannercontent">
					<div class="wt-title"><h2>Job Proposal</h2></div>
					<ol class="wt-breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li><a href="javascript:void(0);">Jobs</a></li>
						<li><a href="javascript:void(0);">Job Detail</a></li>
						<li class="wt-active">Job Proposal</li>
					</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Inner Home End-->
	<!--Main Start-->
	<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
		<div class="wt-haslayout wt-main-section">
			<!-- User Listing Start-->
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 push-lg-2">
						<div class="wt-jobalertsholder">
							<ul class="wt-jobalerts">
								<li class="alert alert-warning alert-dismissible fade show">
									<span><em>Alert:</em> You’ve consumed all you points to apply new job,</span>
									<a href="javascript:void(0)" class="wt-alertbtn warning">Buy Now</a>
									<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
								</li>
								<li class="alert alert-primary alert-dismissible fade show">
									<span><em>info: </em> You’ve no skills of “PHP” but still you can apply for this job.</span>
									<a href="javascript:void(0)" class="wt-alertbtn primary">View</a>
									<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
								</li>
								<li class="alert alert-danger alert-dismissible fade show">
									<span><em>You’re Late:</em> We’re sorry but the job you want to apply is no longer available You’re Late:  for public/freelancers anymore.</span>
									<a href="javascript:void(0)" class="wt-alertbtn danger">Got It</a>
									<a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
								</li>
							</ul>
						</div>
						<div class="wt-proposalholder">
							<span class="wt-featuredtag"><img src="{{ asset('assets/images/featured.png') }}" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
							<div class="wt-proposalhead">
								<h2>Webpage Takes Many Seconds to Load, I Want to Reduce it </h2>
								<ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
									<li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Professional</span></li>
									<li><span><img src="{{ asset('assets/images/flag/img-02.png') }}" alt="img description">  United States</span></li>
									<li><span><i class="far fa-folder"></i> Type: Fixed</span></li>
									<li><span><i class="far fa-clock"></i> Duration: 15 Days</span></li>
								</ul>
							</div>
						</div>
						<div class="wt-proposalamount-holder">
							<div class="wt-title">
								<h2>Proposal Amount</h2>
							</div>
							<div class="wt-proposalamount accordion">
								<div class="form-group">
									<span>( <i class="fa fa-dollar-sign"></i> )</span>
									<input type="number" name="amount" class="form-control" placeholder="Enter Your Proposal Amount">
									<a href="javascript:void(0);" class="collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="lnr lnr-chevron-up"></i></a>
									<em>Total amount the client will see on your proposal</em>
								</div>
								<ul class="wt-totalamount collapse show" id="collapseOne" aria-labelledby="headingOne">
									<li>
										<h3>( <i class="fa fa-dollar-sign"></i> ) <em>- 00.00</em></h3>
										<span><strong>“ Worktern ”</strong> Service Fee<i class="fa fa-exclamation-circle template-content tipso_style" data-tipso="Plus Member"></i></span>
									</li>
									<li>
										<h3>( <i class="fa fa-dollar-sign"></i> ) <em>- 00.00</em></h3>
										<span>Amount You’ll Recive after <strong>“ Worktern ”</strong> Service Fee deduction<i class="fa fa-exclamation-circle template-content tipso_style" data-tipso="Plus Member"></i></span>
									</li>
								</ul>
							</div>
							<form class="wt-formtheme wt-formproposal">
								<fieldset>
									<div class="form-group">
										<span class="wt-select">
											<select>
												<option value="1">I Can Finish This Project In: 01 Months</option>
												<option value="2">I Can Finish This Project In: 02 Months</option>
												<option value="3">I Can Finish This Project In: 03 Months</option>
												<option value="4">I Can Finish This Project In: 04 Months</option>
											</select>
										</span>
									</div>
									<div class="form-group">
										<textarea class="form-control" placeholder="Add Description*"></textarea>
									</div>
								</fieldset>
								<fieldset>
									<div class="wt-attachments wt-attachmentsvtwo">
										<div class="wt-title">
											<h3>Upload File (Optional)</h3>
											<label for="afile">
												<span><i class="lnr lnr-link"></i> Attach File(s)</span>
												<input type="file" name="file" id="afile">
											</label>
										</div>
										<ul class="wt-attachfile">
											<li class="wt-uploading">
												<span>Logo.jpg</span>
												<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-trash"></a></em>
											</li>
											<li>
												<span>Wireframe Document.doc</span>
												<em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-trash"></a></em>
											</li>
											<li>
												<span>Requirments.pdf</span>
												<em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-trash"></a></em>
											</li>
											<li>
												<span>Company Intro.docx</span>
												<em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-trash"></a></em>
											</li>
										</ul>
										<div class="wt-btnarea">
											<a href="javascrip:void(0);" class="wt-btn">Send Now</a>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- User Listing End-->
		</div>
	</main>
	<!--Main End-->
@endsection