@include('admin.components.admin_navbar')

@include('admin.components.admin_sidebar')

    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
        <nav>
            <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
            <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('guest/assets/img/profile.jpg')}}" alt="">Ahmad Reski
                <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="javascript:;"> Profile</a></li>
                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
            </li>
            </ul>
        </nav>
        </div>
    </div>
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
            <h3>FORM</h3>
            </div>
            </div>
        </div>

    <div class="clearfix"></div>

        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
            <div class="x_title">
                <h2>INPUT</h2>
                <ul class="nav navbar-right panel_toolbox">
                </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page ...
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, iusto dolorum modi beatae maxime nulla commodi delectus ad exercitationem ullam, id veritatis molestiae illo tempora consequatur suscipit consectetur omnis vitae?

            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- /page content -->
<!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
        Ahmad Reski
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('admin/build/js/custom.min.js')}}"></script>

</body>
</html>
