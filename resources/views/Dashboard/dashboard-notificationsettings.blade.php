@extends('layouts.dashboard-app')
@section('content')
    <!--Main Start-->
    <main id="wt-main" class="wt-main wt-haslayout">
        <!--Register Form Start-->
        <section class="wt-haslayout">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
                    <div class="wt-haslayout wt-dbsectionspace">
                        <div class="wt-dashboardbox wt-dashboardtabsholder">
                            <div class="wt-dashboardboxtitle">
                                <h2>Profile Details</h2>
                            </div>
                            <div class="wt-dashboardtabs">
                                <ul class="wt-tabstitle nav navbar-nav">
                                    <li class="nav-item">
                                        <a class="active" data-toggle="tab" href="#wt-mail">Mail Settings</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="wt-tabscontent tab-content">
                                <div class="wt-securityhold tab-pane active fade show" id="wt-mail">
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Form Email ID/Address</h2>
                                        </div>
                                        <form class="wt-formtheme wt-userform">
                                            <fieldset>
                                                <div class="form-group form-group-full">
                                                    <input type="text" name="Site Title" class="form-control" placeholder="info@noreply.com" value="info@noreply.com" data-required="true" autocomplete="off">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="wt-bannerphoto wt-tabsinfo">
                                        <div class="wt-yourdetails wt-tabsinfo">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Form Name Email</h2>
                                            </div> 
                                            <form class="wt-formtheme wt-userform">
                                                <fieldset>
                                                    <div class="form-group form-group-full">
                                                        <input type="text" name="Site Title" class="form-control" placeholder="info@noreply.com" value="info@noreply.com" data-required="true" autocomplete="off">
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Email Logo</h2>
                                        </div>
                                        <div class="wt-profilephotocontent">
                                            <form class="wt-formtheme wt-formprojectinfo wt-formcategory">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <ul class="wt-attachfile wt-attachfilevtwo">
                                                            <li class="">
                                                                <div class="wt-uploadingbox">
                                                                    <figure><img src="{{ asset('assets/images/sidebar/Farnek-Logo-100x100.png') }}"></figure>
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
                                            </form>
                                        </div>
                                    </div>
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Email Banner</h2>
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
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Email Sender Avatar</h2>
                                        </div>
                                        <div class="wt-profilephotocontent">
                                            <form class="wt-formtheme wt-formprojectinfo wt-formcategory">
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
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Email Sender's Name</h2>
                                        </div>
                                        <form class="wt-formtheme wt-userform">
                                            <fieldset>
                                                <div class="form-group form-group-full">
                                                    <input type="text" name="Site Title" class="form-control" placeholder="info@noreply.com" value="Amento" data-required="true" autocomplete="off">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Sender Email</h2>
                                        </div>
                                        <form class="wt-formtheme wt-userform">
                                            <fieldset>
                                                <div class="form-group form-group-full">
                                                    <input type="text" name="Site Title" class="form-control" placeholder="info@noreply.com" value="info@noreply.com" data-required="true" autocomplete="off">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wt-updatall">
                        <i class="ti-announcement"></i>
                        <span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
                        <a class="wt-btn" href="javascript:void(0);">Save &amp; Update</a>
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
 