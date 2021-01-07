 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">C.C.Ms <BR> Combat Crime Mgt System </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('asset/dist/img/ethical.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ethical Programmer</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link {{Request::is('#') ? 'active':''}}">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Dashboard                    
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview {{Request::is('master') ? 'menu-open':''}}">
            <a href="#" class="nav-link {{Request::is('master') ? 'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Patrol Contact
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('patrol_leader')}}" class="nav-link {{Request::is('patrol_leader') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Patrol Leader Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('patrol_commander')}}" class="nav-link {{Request::is('patrol_commander') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Patrol Commanders Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user_patrol_evidence')}}" class="nav-link {{Request::is('user_patrol_evidence') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Other Information Eg. Pictures </p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview {{Request::is('master') ? 'menu-open':''}}">
            <a href="#" class="nav-link {{Request::is('master') ? 'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Sexual Corruption
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('create_sexual_claim')}}" class="nav-link {{Request::is('create_sexual_claim') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create your Claim</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sexual_progress')}}" class="nav-link {{Request::is('sexual_progress') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>See Claims Progression </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sexual_claims')}}" class="nav-link {{Request::is('sexual_claims') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My all Claims</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{Request::is('master') ? 'menu-open':''}}">
            <a href="#" class="nav-link {{Request::is('master') ? 'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Dawati 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('create_dawati_claim')}}" class="nav-link {{Request::is('create_dawati_claim') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Dawati Claim </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('dawati_progress')}}"class="nav-link {{Request::is('dawati_progress') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>See Report Progression </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('dawati_claims')}}" class="nav-link {{Request::is('dawati_claims') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My all Reports</p>
                </a>
              </li>
            </ul>
          </li>

          

          <li class="nav-item has-treeview {{Request::is('master') ? 'menu-open':''}}">
            <a href="#" class="nav-link {{Request::is('master') ? 'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Testimonals
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('create_testimonal')}}" class="nav-link {{Request::is('create_testimonal') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Post Testimonal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('my_testimonals')}}" class="nav-link {{Request::is('my_testimonals') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My all Testimonals</p>
                </a>
              </li>
           
            </ul>
          </li>
     

          <li class="nav-item has-treeview menu-open {{Request::is('master') ? 'menu-open':''}}">
            <a href="#" class="nav-link {{Request::is('master') ? 'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Account Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user_profile')}}" class="nav-link {{Request::is('user_profile') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('change_password')}}" class="nav-link {{Request::is('change_password') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('term_privacy')}}" class="nav-link {{Request::is('term_privacy') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Term and Privacy</p>
                </a>
              </li>
            </ul>
          </li>     </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>