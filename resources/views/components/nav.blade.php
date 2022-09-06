<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- vendor css -->
<link rel="stylesheet" href="assets/css/style.css">

<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >
            
            <div class="">
                <div class="main-menu-header">
                 
                    <div class="user-details">
                        <div id="more-details">Admin<i class="fa fa-chevron-down m-l-5"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
                        <li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
            
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{ route('homePage') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{ route('productPage') }}" class="nav-link " ><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext" >Products</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{ route('locationPage') }}" class="nav-link " ><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext" >Locations</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{ route('suppliersPage') }}" class="nav-link " ><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext" >Suppliers</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{ route('grnPage') }}" class="nav-link " ><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext" >GRN</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{ route('gdnPage') }}" class="nav-link " ><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext" >GDN</span></a>
                </li>


                
                
            </ul>
            
            {{-- <div class="card text-center">
                <div class="card-block">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="feather icon-sunset f-40"></i>
                    <h6 class="mt-3">Upgrade To Pro</h6>
                    <p>Please contact us on our email for need any support</p>
                    <a href="https://1.envato.market/PgJNQ" target="_blank" class="btn btn-primary btn-sm text-white m-0">Upgrade</a>
                </div>
            </div>
             --}}
        </div>
    </div>
</nav>
