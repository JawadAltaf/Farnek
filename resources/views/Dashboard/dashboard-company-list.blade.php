@extends('layouts.dashboard-app')
@section('content')
    <main class="wt-main wt-haslayout">
        <section class="wt-haslayout wt-dbsectionspace" id="profile_settings">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-right">
                    <div class="wt-dashboardbox">
                        <div class="wt-dashboardboxtitle wt-titlewithsearch">
                            <h2>Manage Companies</h2>
                            <a href="{{ url('add_company') }}" class="wt-btn float-right wt-btn-sm ml-4">
                                <i class="fa fa-plus-circle"></i>&nbsp;Add New Company</a>
                            <form class="wt-formtheme wt-formsearch">
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="keyword" value=""
                                            class="form-control" placeholder="Search Users">
                                        <button type="submit" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="wt-titlewithsearch">
                            
                        </div>
                        <div class="wt-dashboardboxcontent wt-categoriescontentholder">
                            <table class="wt-tablecategories">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Verification Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>kai@amentotech.com</td>
                                        <td>freelancer</td>
                                        <td>    d</td>
                                        <td id="verify_user-21">
                                            <a href="javascript:;" class="" v-on:click.prevent="verifiedUserEmail('verify_user-21', '21', 'verify')">Not Verified</a>
                                        </td>
                                        <td>
                                            <div class="wt-actionbtn">
                                                <a href="javascript:void()" v-on:click.prevent="deleteUser(21)" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
                                                <a href="" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Georgia Baker</td>
                                        <td>baker@amentotech.com</td>
                                        <td>freelancer</td>
                                        <td id="verify_user-22">
                                            <a href="javascript:;" class="" v-on:click.prevent="verifiedUserEmail('verify_user-22', '22', 'not_verify')">Verified</a>
                                        </td>
                                        <td>
                                            <div class="wt-actionbtn">
                                                <a href="javascript:void()" v-on:click.prevent="deleteUser(22)" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
                                                <a href="http://amentotech.com/projects/worketic/profile/georgia-baker" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>    
                                        <td>davis@amentotech.com</td>
                                        <td>freelancer</td>
                                        <td>    df</td>
                                        <td id="verify_user-23">
                                            <a href="javascript:;" class="" v-on:click.prevent="verifiedUserEmail('verify_user-23', '23', 'not_verify')">Verified</a>
                                        </td>
                                        <td>
                                            <div class="wt-actionbtn">
                                                <a href="javascript:void()" v-on:click.prevent="deleteUser(23)" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
                                                <a href="http://amentotech.com/projects/worketic/profile/ralph-davis" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>kai@amentotech.com</td>
                                        <td>freelancer</td>
                                        <td>    d</td>
                                        <td id="verify_user-21">
                                            <a href="javascript:;" class="" v-on:click.prevent="verifiedUserEmail('verify_user-21', '21', 'verify')">Not Verified</a>
                                        </td>
                                        <td>
                                            <div class="wt-actionbtn">
                                                <a href="javascript:void()" v-on:click.prevent="deleteUser(21)" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
                                                <a href="" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Georgia Baker</td>
                                        <td>baker@amentotech.com</td>
                                        <td>freelancer</td>
                                        <td id="verify_user-22">
                                            <a href="javascript:;" class="" v-on:click.prevent="verifiedUserEmail('verify_user-22', '22', 'not_verify')">Verified</a>
                                        </td>
                                        <td>
                                            <div class="wt-actionbtn">
                                                <a href="javascript:void()" v-on:click.prevent="deleteUser(22)" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
                                                <a href="http://amentotech.com/projects/worketic/profile/georgia-baker" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>    
                                        <td>davis@amentotech.com</td>
                                        <td>freelancer</td>
                                        <td>    df</td>
                                        <td id="verify_user-23">
                                            <a href="javascript:;" class="" v-on:click.prevent="verifiedUserEmail('verify_user-23', '23', 'not_verify')">Verified</a>
                                        </td>
                                        <td>
                                            <div class="wt-actionbtn">
                                                <a href="javascript:void()" v-on:click.prevent="deleteUser(23)" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
                                                <a href="http://amentotech.com/projects/worketic/profile/ralph-davis" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>    
                                    <tr>    
                                        <td>davis@amentotech.com</td>
                                        <td>freelancer</td>
                                        <td>    df</td>
                                        <td id="verify_user-23">
                                            <a href="javascript:;" class="" v-on:click.prevent="verifiedUserEmail('verify_user-23', '23', 'not_verify')">Verified</a>
                                        </td>
                                        <td>
                                            <div class="wt-actionbtn">
                                                <a href="javascript:void()" v-on:click.prevent="deleteUser(23)" class="wt-deleteinfo wt-skillsaddinfo"><i class="fa fa-trash"></i></a>
                                                <a href="http://amentotech.com/projects/worketic/profile/ralph-davis" class="wt-addinfo wt-skillsaddinfo"><i class="lnr lnr-eye"></i></a>
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
        </section>
    </main>
@endsection

