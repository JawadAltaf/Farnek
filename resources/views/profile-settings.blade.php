<?php include_once('common/header.php'); ?>
<?php include_once('dashboard/header.php'); ?>
<?php include_once('dashboard/sidebar.php'); ?>
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
                                    <a class="active" data-toggle="tab" href="#wt-skills">Administrator Details</a>
                                </li>
                            </ul>
                        </div>
                        <div class="wt-tabscontent tab-content">
                            <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
                                <div class="wt-yourdetails wt-tabsinfo">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Your Details</h2>
                                    </div>
                                    <form class="wt-formtheme wt-userform">
                                        <div class="wt-formtheme wt-userform">
                                            <fieldset>
                                                <div class="form-group form-group-half">
                                                    <input class="form-control" placeholder="Prénom" name="first_name" type="text" value="chris">
                                                </div>
                                                <div class="form-group form-group-half">
                                                    <input class="form-control" placeholder="Nom de famille" name="last_name" type="text" value="evans">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Email" name="email" type="email" value="admin@amentotech.com">
                                                </div>
                                            </fieldset>
                                        </div>
                                    </form>
                                </div>
                                <div class="wt-profilephoto wt-tabsinfo">
                                    <div class="wt-tabscontenttitle">
                                        <h2>Profile Photo</h2>
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
                                                <div class="form-group">
                                                    <ul class="wt-attachfile wt-attachfilevtwo">
                                                        <li class="">
                                                            <div class="wt-uploadingbox">
                                                                <figure><img src="images/sidebar/Farnek-Logo-100x100.png"></figure>
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
                                <div class="wt-bannerphoto wt-tabsinfo">
                                    <div class="wt-location wt-tabsinfo">
                                        <div class="wt-tabscontenttitle">
                                            <h2>Bannière photo</h2>
                                        </div> 
                                        <div class="wt-settingscontent">
                                            <div class="wt-formtheme wt-userform">
                                                <div class="wt-uploadingbox">
                                                    <figure>
                                                        <img src="http://amentotech.com/projects/worketic/uploads/users/1/b.jpg" alt="Photo de profil">
                                                    </figure> 
                                                    <div class="wt-uploadingbar">
                                                        <div class="dz-filename">b.jpg</div> 
                                                        <em>Taille du fichier:
                                                            <a href="javascript:void(0);" class="lnr lnr-cross"></a>
                                                        </em>
                                                    </div>
                                                </div> 
                                                <input type="hidden" name="hidden_banner_image" id="hidden_banner" value="b.jpg">
                                            </div>
                                        </div>
                                    </div>
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
                            <img src="images/qrcode.png" alt="img description">
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
                        <figure class="wt-companyadimg"><img src="images/add-img.jpg" alt="img description"></figure>
                        <span>Advertisement  255px X 255px</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Register Form End-->
</main>
<?php   include_once('dashboard/footer.php'); ?>
 