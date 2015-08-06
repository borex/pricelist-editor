<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> {{ isset($page['pageTitle']) ? $page['pageTitle'].' | '.CNF_APPNAME : CNF_APPNAME }} </title>
<meta name="keywords" content="{{ CNF_METAKEY }}">
<meta name="description" content="{{ CNF_METADESC }}"/>
<link href="{{ asset('chandra/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('chandra/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('chandra/css/custom_css/chandra.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('chandra/css/custom_css/metisMenu.css')}}"  rel="stylesheet" type="text/css"/>
<link href="{{ asset('chandra/css/custom_css/panel.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('chandra/vendors/jvectormap/jquery-jvectormap.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('chandra/vendors/toastr/css/toastr.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('chandra/vendors/QuickNote-jQuery-Plugin/jquery.quicknote.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('chandra/css/custom_css/toastr.css')}}" rel="stylesheet" />
<link href="{{ asset('chandra/css/custom_css/dashboard.css')}}" rel="stylesheet" type="text/css" />
<body>



























































   <!-- header logo: style can be found in header-->
    <header class="header">
        
        
        
        
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="<?php echo app_path(); ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the marginin -->
                <img src="{{ asset('chandra/img/logo.png')}}" alt="logo" />
            </a>
            <!-- Header Navbar: style can be found in header-->
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw fa-hand-o-left"></i>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                   
                   
                   
                   
                    <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-fw fa-language black"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages table-striped">
                            <li class="dropdown-title">{{ Lang::get('core.language') }} :</li>
                	            <li>  </li>
								@foreach(SiteHelpers::langOption() as $lang)
								<li><a class="message striped-col" href="{{ URL::TO('home/lang/'.$lang['folder']) }}"> 
								<span @if(Session::get('lang') == $lang['folder']) class="label label-success" @endif>
									{{  strtoupper($lang['folder']) }}  </span>  
								</a></li>
								@endforeach
                             </ul>
                 
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                            <img src="{{ asset('chandra/img/authors/avatar1.jpg')}}" width="35" class="img-circle img-responsive pull-left" height="35" alt="User Image">
                            <div class="riot">
                                <div>
                                   {{  CNF_APPNAME }}
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                     
                     
                     
                     
                     
                        <ul class="dropdown-menu">
                          
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ asset('chandra/img/authors/avatar1.jpg')}}" class="img-circle" alt="User Image">
                                <p></p>
                            </li>
                            <!-- Menu Body -->
                     @if(!Auth::check()) 
					 	<li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ URL::to('user/login') }}"><i class="fa fa-sign-in"></i> {{ Lang::get('core.signin') }}</a>
                                </div>
                                	<div class="pull-right">
            			        	<a href="{{ URL::to('user/register') }}"><i class="fa fa-user"></i> {{ Lang::get('core.signup') }}</a>
			                    </div>
                            </li>

            		 @else
					 	<li><a href="{{ URL::to('user/profile') }}"><i class="fa fa-user "></i> {{ Lang::get('core.m_myaccount') }}</a></li>
                    	<li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-desktop"></i> {{ Lang::get('core.m_dashboard') }}</a></li>	
						
 						    <li role="presentation" class="divider"></li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                	<div class="pull-right">
                        			<a href="{{ URL::to('user/logout') }}">
                                	<i class="fa  fa-sign-out"></i> 
                                	{{ Lang::get('core.m_logout') }}
                                	</a>
                                </div>
                            </li>

					 @endif	
                      </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar">
                <div id="menu" role="navigation">
                    <div class="nav_profile">
                        <div class="media profile-left">
                            <a class="pull-left profile-thumb" href="#">
                                <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image"></a>
                            <div class="content-profile">
                                <h4 class="media-heading">Nataliapery</h4>
                                <ul class="icon-list">
                                    <li>
                                        <a href="users.html">
                                            <i class="fa fa-fw fa-user"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="lockscreen.html">
                                            <i class="fa fa-fw fa-lock"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw fa-gear"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login.html">
                                            <i class="fa fa-fw fa-sign-out"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="navigation">
                        <li class="active" id="active">
                            <a href="index.html">
                                <i class="menu-icon fa fa-fw fa-home"></i>
                                <span class="mm-text ">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-dropdown ">
                            <a href="charts.html">
                                <i class="menu-icon fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="flot_charts.html">
                                        <i class="fa fa-fw fa-area-chart"></i>
                                        Flot Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="nvd3_charts.html">
                                        <i class="fa fa-fw fa-line-chart"></i>
                                        NVD3 Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="chartjs_charts.html">
                                        <i class="menu-icon fa fa-bar-chart-o"></i>
                                        Chart js
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon fa fa-check-square"></i>
                                <span>Forms</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="form_elements.html">
                                        <i class="fa fa-fw fa-fire"></i>
                                        Form Elements
                                    </a>
                                </li>
                                <li>
                                    <a href="form_editors.html">
                                        <i class="fa fa-fw fa-file-text-o"></i>
                                        Form Editors
                                    </a>
                                </li>
                                <li>
                                    <a href="form_validations.html">
                                        <i class="fa fa-fw fa-warning"></i>
                                        Form Validations
                                    </a>
                                </li>
                                <li>
                                    <a href="form_layouts.html">
                                        <i class="fa fa-fw fa-fire"></i>
                                        Form Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="form_wizards.html">
                                        <i class="fa fa-fw fa-cog"></i>
                                        Form Wizards
                                    </a>
                                </li>
                                <li>
                                    <a href="x-editable.html">
                                        <i class="fa fa-fw fa-eyedropper"></i>
                                        X-editable
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon fa fa-desktop"></i>
                                <span>UI Features</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="general_components.html">
                                        <i class="fa fa-fw fa-plug"></i>
                                        General Components
                                    </a>
                                </li>
                                <li>
                                    <a href="pickers.html">
                                        <i class="fa fa-fw fa-paint-brush"></i>
                                        Pickers
                                    </a>
                                </li>
                                <li>
                                    <a href="buttons.html">
                                        <i class="fa fa-fw fa-delicious"></i>
                                        Buttons
                                    </a>
                                </li>
                                <li>
                                    <a href="panels.html">
                                        <i class="fa fa-fw fa-gift"></i>
                                        Panels
                                    </a>
                                </li>
                                <li>
                                    <a href="tabs_accordions.html">
                                        <i class="fa fa-fw fa-copy"></i>
                                        Tabs &amp; Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href="font_icons.html">
                                        <i class="fa fa-fw fa-font"></i>
                                        Font Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="grid_layout.html">
                                        <i class="fa fa-fw fa-columns"></i>
                                        Grid Layout
                                    </a>
                                </li>

                                <li>
                                    <a href="tags_input.html">
                                        <i class="fa fa-fw fa-tag"></i>
                                        Tags Input
                                    </a>
                                </li>
                                <li>
                                    <a href="nestable_list.html">
                                        <i class="fa fa-fw fa-navicon"></i>
                                        Nestable List
                                    </a>
                                </li>
                                <li>
                                    <a href="toastr_notifications.html">
                                        <i class="fa fa-fw fa-desktop"></i>
                                        Toastr Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="session_timeout.html">
                                        <i class="fa fa-fw fa-rocket"></i>
                                        Session Timeout
                                    </a>
                                </li>
                                <li>
                                    <a href="draggable_portlets.html">
                                        <i class="fa fa-fw fa-random"></i>
                                        Draggable Portlets
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon fa fa-briefcase"></i>
                                <span>UI Components</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">

                                <li>
                                    <a href="timeline.html">
                                        <i class="fa fa-fw fa-clock-o"></i>
                                        Timeline
                                    </a>
                                </li>
                                <li>
                                    <a href="transitions.html">
                                        <i class="fa fa-fw fa-star-half-empty"></i>
                                        Transitions
                                    </a>
                                </li>
                                <li>
                                    <a href="circle_sliders.html">
                                        <i class="fa fa-fw fa-sun-o"></i>
                                        Circle Sliders
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="tables.html">
                                <i class="menu-icon fa fa-table"></i>
                                <span>DataTables</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="simple_tables.html">
                                        <i class="fa fa-fw fa-tasks"></i>
                                        Simple tables
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables.html">
                                        <i class="fa fa-fw fa-database"></i>
                                        Data Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="advanced_datatables.html">
                                        <i class="fa fa-fw fa-table"></i>
                                        Advanced Tables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class=" menu-icon fa fa-fw fa-calendar"></i>
                                <span>Calendar</span>
                                <small class="badge">4</small>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="fa fa-fw fa-envelope"></i>
                                <span>Email</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="mail_box.html">
                                        <i class="fa fa-inbox"></i>
                                        Mail box
                                    </a>
                                </li>
                                <li>
                                    <a href="compose.html">
                                        <i class="fa fa-pencil"></i>
                                        Compose Message
                                    </a>
                                </li>
                                <li>
                                    <a href="view_mail.html">
                                        <i class="fa fa-eye"></i>
                                        Single Mail
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="task.html">
                                <i class="fa fa-fw fa-list-ul"></i>
                                <span>Tasks</span>
                                <small class="badge">10</small>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon fa fa-fw fa-photo"></i>
                                <span>Gallery</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="gallery.html">
                                        <i class="fa fa-fw fa-file-image-o"></i>
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="masonry_gallery.html">
                                        <i class="fa fa-fw fa-file-image-o"></i>
                                        Masonry Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="multiplefile_upload.html">
                                        <i class="fa fa-fw fa-cloud-upload"></i>
                                        Multiple File Upload
                                    </a>
                                </li>

                                <li>
                                    <a href="image_magnifier.html">
                                        <i class="fa fa-fw fa-search"></i>
                                        Image Magnifier
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon  fa fa-fw fa-paw"></i>
                                <span>Users</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="users.html">
                                        <i class="fa fa-fw fa-users"></i>
                                        Users
                                    </a>
                                </li>
                                <li>
                                    <a href="addnew_user.html">
                                        <i class="fa fa-fw fa-user"></i>
                                        Add New User
                                    </a>
                                </li>
                                <li>
                                    <a href="user_profile.html">
                                        <i class="fa fa-fw fa-user"></i>
                                        User Profile
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon fa fa-map-marker"></i>
                                <span>Maps</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="google_maps.html">
                                        <i class="fa fa-fw fa-globe"></i>
                                        Google Maps
                                    </a>
                                </li>
                                <li>
                                    <a href="vector_maps.html">
                                        <i class="fa fa-fw fa-map-marker"></i>
                                        Vector Maps
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon fa fa-files-o"></i>
                                <span>Pages</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="faq.html">
                                        <i class="fa fa-fw fa-question"></i>
                                        FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-fw fa-lock"></i>
                                        Lockscreen
                                    </a>
                                </li>
                                <li>
                                    <a href="invoice.html">
                                        <i class="fa fa-fw fa-newspaper-o"></i>
                                        Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="blank.html">
                                        <i class="fa fa-fw fa-file-o"></i>
                                        Blank
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-fw fa-sign-in"></i>
                                        Login
                                    </a>
                                </li>
                                <li>
                                    <a href="register.html">
                                        <i class="fa fa-fw fa-sign-in"></i>
                                        Register
                                    </a>
                                </li>
                                <li>
                                    <a href="404.html">
                                        <i class="fa fa-fw fa-unlink"></i>
                                        404 Error
                                    </a>
                                </li>
                                <li>
                                    <a href="500.html">
                                        <i class="fa fa-fw fa-frown-o"></i>
                                        500 Error
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon fa fa-th"></i>
                                <span>Layouts</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="boxed.html">
                                        <i class="fa fa-fw fa-th-large"></i>
                                        Boxed Layout
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_fixed_header.html">
                                        <i class="fa fa-fw fa-th-list"></i>
                                        Fixed Header
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_boxed_fixed_header.html">
                                        <i class="fa fa-fw fa-th"></i>
                                        Boxed &amp; Fixed Header
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_fixed.html">
                                        <i class="fa fa-fw fa-indent"></i>
                                        Fixed Header &amp; Menu
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon fa fa-sitemap"></i>
                                <span>Menu levels</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw fa-sitemap"></i>
                                        Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw fa-sitemap"></i>
                                                Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw fa-sitemap"></i>
                                                Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw fa-sitemap"></i>
                                                Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul class="sub-menu sub-submenu">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-fw fa-sitemap"></i>
                                                        Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-fw fa-sitemap"></i>
                                                        Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-fw fa-sitemap"></i>
                                                        Level 3
                                                        <span class="fa arrow"></span>
                                                    </a>
                                                    <ul class="sub-menu sub-submenu">
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-fw fa-sitemap"></i>
                                                                Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-fw fa-sitemap"></i>
                                                                Level 4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-fw fa-sitemap"></i>
                                                                Level 4
                                                                <span class="fa arrow"></span>
                                                            </a>
                                                            <ul class="sub-menu sub-submenu">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-fw fa-sitemap"></i>
                                                                        Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-fw fa-sitemap"></i>
                                                                        Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-fw fa-sitemap"></i>
                                                                        Level 5
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-fw fa-sitemap"></i>
                                                        Level 4
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw fa-sitemap"></i>
                                                Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw fa-sitemap"></i>
                                        Level 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw fa-sitemap"></i>
                                        Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw fa-sitemap"></i>
                                                Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw fa-sitemap"></i>
                                                Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw fa-sitemap"></i>
                                                Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- / .navigation --> </div>
                <!-- menu --> </section>
            <!-- /.sidebar --> </aside>
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>Welcome To Dashboard</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-fw fa-home"></i>
                            Dashboard
                        </a>
                    </li>

                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row row-spacing">
                    <div class="col-md-12">
                        <div class="panel panel-default1">
                            <div class="panel-heading">
                                <span class="panel-title">Site Activity</span>
                                <ul class="nav nav-tabs nav-float" role="tablist">
                                    <li class="active">
                                        <a href="#home" role="tab" data-toggle="tab">Stats</a>
                                    </li>
                                    <li>
                                        <a href="#profile" role="tab" data-toggle="tab">Sales</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <div class="row">
                                            <div class="col-md-8 col-xs-12">
                                                <div id="basicFlotLegend1" class="flotLegend"></div>
                                                <div id="basicflot" class="flotChart"></div>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <div class="task-item">
                                                    Total sold
                                                    <small class="pull-right text-muted">40%</small>
                                                    <div class="progress progress-sm">
                                                        <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;" class="progress-bar progress-bar-primary">
                                                            <span class="sr-only">40% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                Product delivered
                                                <small class="pull-right text-muted">60%</small>
                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-success">
                                                        <span class="sr-only">60% Complete (success)</span>
                                                    </div>
                                                </div>
                                                Sale reports
                                                <small class="pull-right text-muted">55%</small>
                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;" class="progress-bar progress-bar-info">
                                                        <span class="sr-only">55% Complete (success)</span>
                                                    </div>
                                                </div>
                                                New Projects
                                                <small class="pull-right text-muted">66%</small>
                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;" class="progress-bar progress-bar-warning">
                                                        <span class="sr-only">66% Complete (success)</span>
                                                    </div>
                                                </div>
                                                New Users
                                                <small class="pull-right text-muted">90%</small>
                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" class="progress-bar progress-bar-danger">
                                                        <span class="sr-only">90% Complete (success)</span>
                                                    </div>
                                                </div>
                                                Total income
                                                <small class="pull-right text-muted">50%</small>
                                                <div class="progress progress-sm">
                                                    <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar progress-bar-primary">
                                                        <span class="sr-only">50% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <div class="row">
                                            <div class="col-md-9 col-xs-12">
                                                <div id="basicFlotLegend"></div>
                                                <div id="placeholder" style="width:100%; height: 280px"></div>
                                            </div>
                                            <div class="col-md-3 col-xs-12">
                                                <div id="donut" style="width:100%; height: 300px" class="centered"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="text-center">
                                            <h5>This year total sales</h5>
                                            <h4>
                                                <strong>$2,111,234</strong>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-9">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-3 text-center">
                                                <img src="img/flags/au.png" alt="img">
                                                <h5>
                                                    <strong>$14,123</strong>
                                                </h5>
                                            </div>
                                            <div class="col-xs-6 col-sm-3 text-center">
                                                <div>
                                                    <img src="img/flags/ca.png" alt="img">
                                                    <h5>
                                                        <strong>$22,342</strong>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3 text-center">
                                                <div>
                                                    <img src="img/flags/uk.png" alt="img">
                                                    <h5>
                                                        <strong>$12,112</strong>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3 text-center">
                                                <div>
                                                    <img src="img/flags/us.png" alt="img">
                                                    <h5>
                                                        <strong>$88,321</strong>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-spacing">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default1">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table1 table bottom-pad" id="users">
                                        <tr >
                                            <td class="bodr">Visits : 3,200</td>
                                            <td class="bodr">
                                                <span class="pull-right  mini-graph"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Unique Visitors : 2,123</td>
                                            <td>
                                                <span class=" pull-right   mini-graph2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bounce Rate : 2,654</td>
                                            <td>
                                                <span class=" pull-right   mini-graph3"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>New Visits : 22,000</td>
                                            <td>
                                                <span class=" pull-right   mini-graphpie"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pageviews : 1,200</td>
                                            <td>
                                                <span class=" pull-right   mini-graph5"></span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="panel panel-default1">
                            <div class="panel-body">
                                <div class="tab-pane" id="messages">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="demo-container">
                                                <span class="ser-load">Server Load</span>
                                                <div id="chart3" class="ser"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="row tiles-container tiles white spacing-bottom">
                            <div class="tile-more-content col-md-4 col-sm-4 no-padding">
                                <div class="tiles green">
                                    <div class="tiles-body">
                                        <div class="heading">Stock Statistics</div>
                                        <p>Status : live</p>
                                    </div>
                                    <div class="tile-footer">258 Countries, 4835 Cities</div>
                                </div>
                                <div class="tiles-body">
                                    <ul class="progress-list">
                                        <li>
                                            <div class="details-wrapper">
                                                <div class="name">Desktop Visits</div>

                                            </div>
                                            <div class="details-status pull-right">
                                                <span class="animate-number" data-value="89" data-animation-duration="800">80%</span>

                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="progress progress-small no-radius">
                                                <div class="progress-bar progress-bar-success pro-bar" data-percentage="89%"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="details-wrapper">
                                                <div class="name">Mobile Visits</div>

                                            </div>
                                            <div class="details-status pull-right">
                                                <span class="animate-number" data-value="45" data-animation-duration="600">8%</span>

                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="progress progress-small no-radius ">
                                                <div class="progress-bar progress-bar-warning pro-bar1" data-percentage="45%"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="details-wrapper">
                                                <div class="name">Tablet Visits</div>
                                            </div>
                                            <div class="details-status pull-right">
                                                <span class="animate-number" data-value="12" data-animation-duration="200">12%</span>

                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="progress progress-small no-radius">
                                                <div class="progress-bar progress-bar-danger pro-bar2" data-percentage="12%"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tiles white col-md-8 col-sm-8 no-padding">
                                <div class="tiles-chart">
                                    <div class="controller">
                                        <div id="world-map-markers" class="wrd"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="panel panel-default1">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fa fa-fw fa-rss"></i>
                                    Feeds
                                </h3>
                                <span class="pull-right">
                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body panel-padding widget-content ">
                                <div class="tabbable tabbable-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_feed_1" data-toggle="tab">System</a>
                                        </li>
                                        <li>
                                            <a href="#tab_feed_2" data-toggle="tab">Activities</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_feed_1">
                                            <div id="slim">
                                                <ul class="feeds clearfix">
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-success">
                                                                        <i class="fa fa-fw fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">You have 2 puzzles</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">Just now</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-success">
                                                                        <i class="fa fa-fw fa-calendar-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">New event added.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">20 mins ago</div>
                                                        </div>
                                                    </li>
                                                    <li class="hoverable">
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-info">
                                                                        <i class="fa fa-fw fa-flask"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">New items are in queue.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">25 mins ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-danger">
                                                                        <i class="fa fa-fw fa-desktop"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">
                                                                        High CPU load.
                                                                        <span class="label label-danger label-mini">
                                                                            Fix it
                                                                            <i class="icon-share-alt"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">30 mins ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-warning">
                                                                        <i class="fa fa-fw fa-hand-o-left"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">Disk space to 85% full.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">45 mins ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-success">
                                                                        <i class="fa fa-fw fa-desktop"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">CPU load normal</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">1 hour ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-info">
                                                                        <i class="fa fa-fw fa-flask"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">Download finished.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">1.5 hours ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-danger">
                                                                        <i class="fa fa-fw fa-cog"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">User data successfully synced.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">2 hours ago</div>
                                                        </div>
                                                    </li>
                                                    <li class="hoverable">
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-info">
                                                                        <i class="fa fa-fw fa-flask"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">New items are in queue.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">8 hours ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-danger">
                                                                        <i class="fa fa-fw fa-desktop"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">
                                                                        High CPU load.
                                                                        <span class="label label-danger label-mini">
                                                                            Fix it
                                                                            <i class="icon-share-alt"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">12 hours ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-warning">
                                                                        <i class="fa fa-fw fa-hand-o-left"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">Disk space to 85% full.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">1 day ago</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_feed_2">
                                            <div id="slim1">
                                                <ul class="feeds clearfix">
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-success">
                                                                        <i class="fa fa-fw fa-user"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">New user registered.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">1 min ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-success">
                                                                        <i class="fa fa-fw fa-user"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">New user registered.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">5 mins ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-info">
                                                                        <i class="fa fa-fw fa-check"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">New order received.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">10 mins ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-success">
                                                                        <i class="fa fa-fw fa-user"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">New user registered.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">20 mins ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-info">
                                                                        <i class="fa fa-fw fa-check"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">New order received.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">30 mins ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-success">
                                                                        <i class="fa fa-fw fa-user"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">New user registered.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">40 mins ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-info">
                                                                        <i class="fa fa-fw fa-check"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">New order received.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">50 mins ago</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col1">
                                                            <div class="content">
                                                                <div class="content-col1">
                                                                    <div class="label label-success">
                                                                        <i class="fa fa-fw fa-user"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="content-col2">
                                                                    <div class="desc">New user registered.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date">1 hour ago</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="right" class="bg-light lter">
                    <div class="pad50" id="slim2">
                        <div class="rightsidebar-right">
                            <div class="rightsidebar-right-content">
                                <h5 class="rightsidebar-right-heading rightsidebar-right-heading-first text-uppercase text-xs">
                                    <i class="menu-icon  fa fa-fw fa-paw"></i>
                                    Contacts
                                </h5>

                                <ul class="list-unstyled margin-none">
                                    <li class="rightsidebar-contact-wrapper">
                                        <a class="rightsidebar-contact" href="#">
                                            <img src="img/authors/avatar1.jpg" alt="image" height="20" width="20" class="img-circle pull-right">
                                            <i class="fa fa-circle text-xs text-primary"></i>
                                            Alanis
                                        </a>
                                    </li>
                                    <li class="rightsidebar-contact-wrapper">
                                        <a class="rightsidebar-contact" href="#">
                                            <img src="img/authors/avatar.jpg" alt="image" height="20" width="20" class="img-circle pull-right">
                                            <i class="fa fa-circle text-xs text-primary"></i>
                                            Rolando
                                        </a>
                                    </li>
                                    <li class="rightsidebar-contact-wrapper">
                                        <a class="rightsidebar-contact" href="#">
                                            <img src="img/authors/avatar2.jpg" alt="image" height="20" width="20" class="img-circle pull-right">
                                            <i class="fa fa-circle text-xs text-primary"></i>
                                            Marlee
                                        </a>
                                    </li>
                                    <li class="rightsidebar-contact-wrapper">
                                        <a class="rightsidebar-contact" href="#">
                                            <img src="img/authors/avatar3.jpg" alt="image" height="20" width="20" class="img-circle pull-right">
                                            <i class="fa fa-circle text-xs text-warning"></i>
                                            Marlee
                                        </a>
                                    </li>
                                    <li class="rightsidebar-contact-wrapper">
                                        <a class="rightsidebar-contact" href="#">
                                            <img src="img/authors/avatar4.jpg" alt="image" height="20" width="20" class="img-circle pull-right">
                                            <i class="fa fa-circle text-xs text-danger"></i>
                                            Kamryn
                                        </a>
                                    </li>
                                    <li class="rightsidebar-contact-wrapper">
                                        <a class="rightsidebar-contact" href="#">
                                            <img src="img/authors/avatar5.jpg" alt="image" height="20" width="20" class="img-circle pull-right">
                                            <i class="fa fa-circle text-xs text-muted"></i>
                                            Cielo
                                        </a>
                                    </li>
                                    <li class="rightsidebar-contact-wrapper">
                                        <a class="rightsidebar-contact" href="#">
                                            <img src="img/authors/avatar7.jpg" alt="image" height="20" width="20" class="img-circle pull-right">
                                            <i class="fa fa-circle text-xs text-muted"></i>
                                            Charlene
                                        </a>
                                    </li>
                                </ul>

                                <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                    <i class="fa fa-fw fa-tasks"></i>
                                    Tasks
                                </h5>
                                <ul class="list-unstyled margin-top">
                                    <li>
                                        <div>
                                            <p>
                                                <strong>Task 1</strong>
                                                <span class="dropdown-small pull-right text-muted">40% Complete</span>
                                            </p>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p>
                                                <strong>Task 2</strong>
                                                <span class="dropdown-small pull-right text-muted">20% Complete</span>
                                            </p>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p>
                                                <strong>Task 3</strong>
                                                <span class="dropdown-small pull-right text-muted">60% Complete</span>
                                            </p>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p>
                                                <strong>Task 4</strong>
                                                <span class="dropdown-small pull-right text-muted">80% Complete</span>
                                            </p>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                    <i class="fa fa-fw fa-group"></i>
                                    Recent Activities
                                </h5>
                                <div>
                                    <ul class="list-unstyled">
                                        <li class="rightsidebar-notification">
                                            <a href="#">
                                                <i class="fa fa-comment fa-fw pri"></i>
                                                New Comment
                                            </a>
                                        </li>
                                        <li class="rightsidebar-notification">
                                            <a href="#">
                                                <i class="fa fa-twitter fa-fw succ"></i>
                                                3 New Followers
                                            </a>
                                        </li>
                                        <li class="rightsidebar-notification">
                                            <a href="#">
                                                <i class="fa fa-envelope fa-fw info"></i>
                                                Message Sent
                                            </a>
                                        </li>
                                        <li class="rightsidebar-notification">
                                            <a href="#">
                                                <i class="fa fa-tasks fa-fw warn"></i>
                                                New Task
                                            </a>
                                        </li>
                                        <li class="rightsidebar-notification">
                                            <a href="#">
                                                <i class="fa fa-upload fa-fw dan"></i>
                                                Server Rebooted
                                            </a>
                                        </li>
                                        <li class="rightsidebar-notification">
                                            <a href="#">
                                                <i class="fa fa-warning fa-fw pri"></i>
                                                Server Not Responding
                                            </a>
                                        </li>
                                        <li class="rightsidebar-notification">
                                            <a href="#">
                                                <i class="fa fa-shopping-cart fa-fw succ"></i>
                                                New Order Placed
                                            </a>
                                        </li>
                                        <li class="rightsidebar-notification">
                                            <a href="#">
                                                <i class="fa fa-money fa-fw info"></i>
                                                Payment Received
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#right --> </section>
            <!-- /.content --> </aside>
        <!-- /.right-side --> </div>
    <!-- ./wrapper -->
    <!-- global js -->
    <div id="qn"></div>















































<!---Footer Files--->
    <script src="{{ asset('chandra/js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/js/custom_js/app.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/js/custom_js/metisMenu.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/js/custom_js/style-switcher.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/js/custom_js/rightside_bar.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/vendors/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/vendors/charts/jquery.flot.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/vendors/charts/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/vendors/charts/jquery.flot.pie.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/vendors/charts/jquery.flot.time.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/vendors/charts/jquery.flot.spline.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/vendors/charts/jquery.flot.tooltip.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/vendors/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript'}}"></script>
    <script src="{{ asset('chandra/vendors/toastr/js/toastr.min.js" type="text/javascript')}}"></script>
    <script src="{{ asset('chandra/vendors/QuickNote-jQuery-Plugin/jquery.quicknote.js')}}" type="text/javascript"></script>
    <script src="{{ asset('chandra/js/custom_js/dashboard.js" type="text/javascript')}}"></script>


</body>
</html>