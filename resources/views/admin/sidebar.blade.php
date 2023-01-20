<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                <img class="img-xs rounded-circle " src="../assets/images/faces/face15.jpg" alt="">
                <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h2 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h2>
                  <span>{{ Auth::user()->email }}</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('home')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showappointment')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Janji</span>
            </a>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Tambah Data</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('add_doctor_view')}}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Add Doctors</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('addkamar')}}">
              <span class="menu-icon">
                <i class="mdi mdi-seat-flat"></i>
              </span>
              <span class="menu-title">Add Kamar</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('addrawatin')}}">
              <span class="menu-icon">
                <i class="mdi mdi-clipboard-plus"></i>
              </span>
              <span class="menu-title">Add Rawat Inap</span>
            </a>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Data</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showdoctor')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Doctors</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showkamar')}}">
              <span class="menu-icon">
                <i class="mdi mdi-seat-flat"></i>
              </span>
              <span class="menu-title">Kamar</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showrawatin')}}">
              <span class="menu-icon">
                <i class="mdi mdi-clipboard-plus"></i>
              </span>
              <span class="menu-title">Pasien</span>
            </a>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Visit Dokter</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('inputvisit')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Input Visit</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showvisit')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Visit</span>
            </a>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Data Pasien</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showrekamedis')}}">
              <span class="menu-icon">
                <i class="mdi mdi-stethoscope"></i>
              </span>
              <span class="menu-title">Rekam Medis</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showprint')}}">
              <span class="menu-icon">
                <i class="mdi mdi-stethoscope"></i>
              </span>
              <span class="menu-title">Print Rekam Medis</span>
            </a>
          </li>
        </ul>
      </nav>