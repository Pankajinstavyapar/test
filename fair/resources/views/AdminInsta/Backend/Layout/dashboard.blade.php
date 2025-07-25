<!doctype html>
<html lang="en">

@include('AdminInsta.Backend.Layout.common-head')
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
  data-pc-theme="light">

  <!-- [ Sidebar Menu ] start -->
  @include('AdminInsta.Backend.Layout.sidebar')
  <!-- [ Sidebar Menu ] end -->

  <!-- [ Header Topbar ] start -->
  @include('AdminInsta.Backend.Layout.header')
  <!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Dashboard</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="card statistics-card-1 overflow-hidden">
            <div class="card-body">
              <img src="https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg"
                alt="img" class="img-fluid img-bg" />
              <h5 class="mb-4">Banner</h5>
              <div class="d-flex align-items-center mt-3">
                <h3 class="f-w-300 d-flex align-items-center m-b-0">{{ $bannerRecordCount }}</h3>
                <span class="badge bg-light-success ms-2">36%</span>
              </div>
              <p class="text-muted mb-2 text-sm mt-3">Banner</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="card statistics-card-1 overflow-hidden">
            <div class="card-body">
              <img src="https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-5.svg"
                alt="img" class="img-fluid img-bg" />
              <h5 class="mb-4">Pages</h5>
              <div class="d-flex align-items-center mt-3">
                <h3 class="f-w-300 d-flex align-items-center m-b-0">{{ $pageRecordCount }}</h3>
                <span class="badge bg-light-primary ms-2">20%</span>
              </div>
              <p class="text-muted mb-2 text-sm mt-3">Pages</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="card statistics-card-1 overflow-hidden bg-brand-color-3">
            <div class="card-body">
              <img src="https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-6.svg"
                alt="img" class="img-fluid img-bg" />
              <h5 class="mb-4 text-white">Product</h5>
              <div class="d-flex align-items-center mt-3">
                <h3 class="text-white f-w-300 d-flex align-items-center m-b-0">{{ $productRecordCount }}</h3>
              </div>
              <p class="text-white text-opacity-75 mb-2 text-sm mt-3">Product</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="card statistics-card-1 overflow-hidden bg-brand-color-3">
            <div class="card-body">
              <img src="https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-6.svg"
                alt="img" class="img-fluid img-bg" />
              <h5 class="mb-4 text-white">Locations</h5>
              <div class="d-flex align-items-center mt-3">
                <h3 class="text-white f-w-300 d-flex align-items-center m-b-0">{{ $loactionRecordCount }}</h3>
              </div>
              <p class="text-white text-opacity-75 mb-2 text-sm mt-3">Locations</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="card statistics-card-1 overflow-hidden bg-brand-color-3">
            <div class="card-body">
              <img src="https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-6.svg"
                alt="img" class="img-fluid img-bg" />
              <h5 class="mb-4 text-white">Gallery</h5>
              <div class="d-flex align-items-center mt-3">
                <h3 class="text-white f-w-300 d-flex align-items-center m-b-0">{{ $galleryRecordCount }}</h3>
              </div>
              <p class="text-white text-opacity-75 mb-2 text-sm mt-3">Gallery</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-12">
          <div class="card statistics-card-1 overflow-hidden bg-brand-color-3">
            <div class="card-body">
              <img src="https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-6.svg"
                alt="img" class="img-fluid img-bg" />
              <h5 class="mb-4 text-white">Testimonials</h5>
              <div class="d-flex align-items-center mt-3">
                <h3 class="text-white f-w-300 d-flex align-items-center m-b-0">{{ $testiRecordCount }}</h3>
              </div>
              <p class="text-white text-opacity-75 mb-2 text-sm mt-3">Testimonials</p>
            </div>
          </div>
        </div>
       
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->
  @include('AdminInsta.Backend.Layout.footer')

  <div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
    <div class="offcanvas-header justify-content-between">
      <h5 class="offcanvas-title">Settings</h5>
      <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i
          class="ti ti-x"></i></button>
    </div>
    <div class="pct-body customizer-body">
      <div class="offcanvas-body py-0">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="pc-dark">
              <h6 class="mb-1">Theme Mode</h6>
              <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
              <div class="row theme-color theme-layout">
                <div class="col-4">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="true" onclick="layout_change('light');">
                      <span class="btn-label">Light</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');">
                      <span class="btn-label">Dark</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="default" onclick="layout_change_default();"
                      data-bs-toggle="tooltip"
                      title="Automatically sets the theme based on user's operating system's color scheme.">
                      <span class="btn-label">Default</span>
                      <span class="pc-lay-icon d-flex align-items-center justify-content-center">
                        <i class="ph-duotone ph-cpu"></i>
                      </span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item pc-sidebar-color">
            <h6 class="mb-1">Sidebar Theme</h6>
            <p class="text-muted text-sm">Choose Sidebar Theme</p>
            <div class="row theme-color theme-sidebar-color">
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn" data-value="true" onclick="layout_sidebar_change('dark');">
                    <span class="btn-label">Dark</span>
                    <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                  </button>
                </div>
              </div>
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn active" data-value="false" onclick="layout_sidebar_change('light');">
                    <span class="btn-label">Light</span>
                    <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <h6 class="mb-1">Accent color</h6>
            <p class="text-muted text-sm">Choose your primary theme color</p>
            <div class="theme-color preset-color">
              <a href="#!" class="active" data-value="preset-1"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-2"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-3"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-4"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-5"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-6"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-7"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-8"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-9"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-10"><i class="ti ti-check"></i></a>
            </div>
          </li>
          <li class="list-group-item">
            <h6 class="mb-1">Sidebar Caption</h6>
            <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
            <div class="row theme-color theme-nav-caption">
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn active" data-value="true" onclick="layout_caption_change('true');">
                    <span class="btn-label">Caption Show</span>
                    <span
                      class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                  </button>
                </div>
              </div>
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn" data-value="false" onclick="layout_caption_change('false');">
                    <span class="btn-label">Caption Hide</span>
                    <span
                      class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="pc-rtl">
              <h6 class="mb-1">Theme Layout</h6>
              <p class="text-muted text-sm">LTR/RTL</p>
              <div class="row theme-color theme-direction">
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="false" onclick="layout_rtl_change('false');">
                      <span class="btn-label">LTR</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="true" onclick="layout_rtl_change('true');">
                      <span class="btn-label">RTL</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item pc-box-width">
            <div class="pc-container-width">
              <h6 class="mb-1">Layout Width</h6>
              <p class="text-muted text-sm">Choose Full or Container Layout</p>
              <div class="row theme-color theme-container">
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="false" onclick="change_box_container('false')">
                      <span class="btn-label">Full Width</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="true" onclick="change_box_container('true')">
                      <span class="btn-label">Fixed Width</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="d-grid">
              <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- [Page Specific JS] start -->
  @include('AdminInsta.Backend.Layout.common-end')


</body>
<!-- [Body] end -->

<!-- Mirrored from html.phoenixcoded.net/light-able/bootstrap/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2024 06:41:57 GMT -->

</html>