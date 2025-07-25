<nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="#" class="b-brand text-primary">
          <!-- ========   Change your logo from here   ============ -->
          <img src="{{ asset('assets/images/logo-insta.png')}}" alt="logo image" class="logo-lg" />
        </a>
      </div>
      <div class="navbar-content">
        <ul class="pc-navbar">
          <li class="pc-item pc-caption">
            <label data-i18n="Navigation">Navigation</label>
            <i class="ph-duotone ph-gauge"></i>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-gauge"></i>
              </span>
              <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
              <span class="pc-badge">2</span>
            </a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('AdminInsta.dashboard') }}" data-i18n="Dashboard">Dashboard</a></li>
            </ul>
          </li>

          <!-- <li class="pc-item pc-caption">
            <label data-i18n="Widget">Widget</label>
            <i class="ph-duotone ph-chart-pie"></i>
          </li> -->
          <li class="pc-item">
            <a href="{{ route('AdminInsta.contact') }}" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-address-book"></i>
              </span>
              <span class="pc-mtext" data-i18n="Lead">Lead</span>
            </a>
          </li>
          
          <li class="pc-item">
            <a href="{{ route('AdminInsta.manage-banners') }}" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-image"></i>
              </span>
              <span class="pc-mtext" data-i18n="Banner">Banner</span>
            </a>
          </li>

          <li class="pc-item">
            <a href="{{ route('AdminInsta.manage-pages') }}" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-file"></i>
              </span>
              <span class="pc-mtext" data-i18n="Pages">Pages</span>
            </a>
          </li>

          <li class="pc-item">
            <a href="{{ route('AdminInsta.manage-subdomain') }}" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-globe"></i>
              </span>
              <span class="pc-mtext" data-i18n="Subdomain">Subdomain</span>
            </a>
          </li>

          <li class="pc-item">
            <a href="{{ route('AdminInsta.manage-product') }}" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-apple-logo"></i>
              </span>
              <span class="pc-mtext" data-i18n="Product">Product</span>
            </a>
          </li>

          <li class="pc-item">
            <a href="{{ route('AdminInsta.manage-testimonial') }}" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-atom"></i>
              </span>
              <span class="pc-mtext" data-i18n="Testimonials">Testimonials</span>
            </a>
          </li>

          <li class="pc-item">
            <a href="{{ route('AdminInsta.manage-location') }}" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-map-pin"></i>
              </span>
              <span class="pc-mtext" data-i18n="Location">Location</span>
            </a>
          </li>

          <li class="pc-item">
            <a href="{{ route('AdminInsta.manage_blog') }}" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-bell"></i>
              </span>
              <span class="pc-mtext" data-i18n="Blogs">Blogs</span>
            </a>
          </li>

          <li class="pc-item">
            <a href="{{ route('AdminInsta.manage-category') }}" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-list"></i>
              </span>
              <span class="pc-mtext" data-i18n="Category">Category</span>
            </a>
          </li>

          <li class="pc-item">
            <a href="{{ route('AdminInsta.manage-gallery') }}" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-image"></i>
              </span>
              <span class="pc-mtext" data-i18n="Gallery">Gallery</span>
            </a>
          </li>

          <li class="pc-item">
            <a href="{{ route('AdminInsta.manage-website') }}" class="pc-link">
              <span class="pc-micon">
                <i class="ph-duotone ph-gear"></i>
              </span>
              <span class="pc-mtext" data-i18n="Website">Website</span>
            </a>
          </li>
        </ul>
        
      </div>
      <div class="card pc-user-card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
              <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
            </div>
            <div class="flex-grow-1 ms-3">
              <div class="dropdown">
                <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                  data-bs-offset="0,20">
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1 me-2">
                      <h6 class="mb-0">ADMIN</h6>
                      <small>Administrator</small>
                    </div>
                    <div class="flex-shrink-0">
                      <div class="btn btn-icon btn-link-secondary avtar">
                        <i class="ph-duotone ph-windows-logo"></i>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu">
                  <ul>
                    <li>
                      <a class="pc-user-links">
                        <i class="ph-duotone ph-user"></i>
                        <span>My Account</span>
                      </a>
                    </li>
                    <li>
                      <a class="pc-user-links">
                        <i class="ph-duotone ph-gear"></i>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="pc-user-links">
                        <i class="ph-duotone ph-lock-key"></i>
                        <span>Lock Screen</span>
                      </a>
                    </li>
                    <li>
                      <a class="pc-user-links">
                        <i class="ph-duotone ph-power"></i>
                        <span>Logout</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>