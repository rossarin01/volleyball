<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Volleyball Competition</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../../assets/images/logo5.png"
    />
    <!-- Custom CSS -->
    <link
      href="../../assets/libs/fullcalendar/dist/fullcalendar.min.css"
      rel="stylesheet"
    />
    <link href="../../assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="../../dist/css/style.min.css" rel="stylesheet" />
    <style>
    .btn-circle {
        border-radius: 70%;
        width: 60px;
        height: 50px;
        padding: 10px;
        text-align: center;
        font-size: 12px;
        line-height: 1.5;
    }

    .btn-edit {
        background-color: green;
        color: white;
    }

    .btn-delete {
        background-color: red;
        color: white;
    }
</style>

  </head>

  <body>
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <a class="navbar-brand" href="{{ url('admin/home') }}">
              <!-- Logo icon -->

              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo5 ms-2">
                <!-- dark Logo text -->
                <img
                  src="../../assets/images/logo5.png"
                  alt="homepage"
                  class="light-logo5"
                  width="50"
                />
              </span>
            </a>

            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              
              <li class="nav-item search-box">

                </form>
              </li>
            </ul>
            <ul class="navbar-nav float-end">

              <li class="nav-item dropdown">
               
                <ul
                  class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    animated
                    bounceInDown
                  "
                  aria-labelledby="2"
                >
                  <ul class="list-style-none">
                    <li>
                      <div class="">
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-success btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-calendar text-white fs-4"></i
                            ></span>
                            
                          </div>
                        </a>
                        
                        
                        
                      </div>
                    </li>
                  </ul>
                </ul>
              </li>
              <li class="nav-item">
  <a class="nav-link text-muted waves-effect waves-dark" href="{{ route('logout') }}"
    onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
  </form>
</li>


                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ url('event') }}"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">อีเว้นท์การแข่งขัน</span></a
                >
              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ url('world') }}"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">ตารางแข่งขันวอลเลย์บอล Women</span></a
                >
              </li>
              
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{ url('menball') }}"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">ตารางแข่งขันวอลเลย์บอล Men</span></a
                >
              </li>


              
              
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <div class="page-wrapper">
        <div class="container-fluid">

          @yield('content')
                   
          <!-- BEGIN MODAL -->
          
          <!-- Modal Add Category -->
          <div class="modal fade none-border" id="add-new-event">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><strong>Add</strong> a category</h4>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-hidden="true"
                  >
                    &times;
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <label class="control-label">Category Name</label>
                        <input
                          class="form-control form-white"
                          placeholder="Enter name"
                          type="text"
                          name="category-name"
                        />
                      </div>
                      <div class="col-md-6">
                        <label class="control-label"
                          >Choose Category Color</label
                        >
                        <select
                          class="form-select shadow-none form-white"
                          data-placeholder="Choose a color..."
                          name="category-color"
                        >
                          <option value="success">Success</option>
                          <option value="danger">Danger</option>
                          <option value="info">Info</option>
                          <option value="primary">Primary</option>
                          <option value="warning">Warning</option>
                          <option value="inverse">Inverse</option>
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="
                      btn btn-danger
                      waves-effect waves-light
                      save-category
                    "
                    data-dismiss="modal"
                  >
                    Save
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary waves-effect"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="../../dist/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../../assets/libs/moment/min/moment.min.js"></script>
    <script src="../../assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../../dist/js/pages/calendar/cal-init.js"></script>
  </body>
</html>
