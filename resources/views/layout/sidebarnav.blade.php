 <!-- Main Sidebar Container -->
 <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="#" class="brand-link">
         <img src="{{ asset('favicon.ico') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
         <span class="brand-text font-weight-light"><strong>MODUL APP</strong></span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="info">
                 <a href="/dashboard" class="d-block"><strong>NAMA USER</strong></a>
             </div>
         </div>
         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item my-1">
                     <a href="pendahuluan" class="nav-link">
                         <i class="nav-icon fas fa-book"></i>
                         <p>Pendahuluan</p>
                     </a>
                 </li>
                 <li class="nav-item my-1">
                     <a href="completeselular" class="nav-link">
                         <i class="nav-icon fas fa-book"></i>
                         <p>Complete Selular</p>
                     </a>
                 </li>
                 <li class="nav-item my-1">
                     <a href="budayaperusahaan" class="nav-link">
                         <i class="nav-icon fas fa-book"></i>
                         <p>Budaya Perusahaan</p>
                     </a>
                 </li>
                 <li class="nav-item my-1">
                     <a href="pengenalan" class="nav-link">
                         <i class="nav-icon fas fa-book"></i>
                         <p>Pengenalan Program</p>
                     </a>
                 </li>
                 <li class="nav-item my-1">
                     <a href="jobdesc" class="nav-link">
                         <i class="nav-icon fas fa-book"></i>
                         <p>Job Description</p>
                     </a>
                 </li>
                 <li class="nav-item my-1">
                     <a href="pekerjaan" class="nav-link">
                         <i class="nav-icon fas fa-book"></i>
                         <p>Penjelasan Pekerjaan</p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->

     <div class="sidebar-custom">
         <form action="#" method="POST">
             @csrf
             <button type="submit" class="btn btn-link"><i class="fas fa-sign-out-alt"></i> Log Out</button>
         </form>
     </div>
     <!-- /.sidebar-custom -->
 </aside>
