 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('frontend') }}">
        <div class="sidebar-brand-icon">
            <h5>CRUD Test</h5>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('frontend') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    
   <li class="nav-item active">
       <a class="nav-link" href="{{ route('artis.index') }}">
           <i class="fab fa-fw fa-wpforms"></i>
           <span>List Data Artis</span></a>
   </li>
  
   <li class="nav-item active">
       <a class="nav-link" href="{{ route('film.index') }}">
           <i class="fab fa-fw fa-wpforms"></i>
           <span>List Data Film</span></a>
   </li>
  
   <li class="nav-item active">
       <a class="nav-link" href="{{ route('genre.index') }}">
           <i class="fab fa-fw fa-wpforms"></i>
           <span>List Data Genre</span></a>
   </li>
  
   <li class="nav-item active">
       <a class="nav-link" href="{{ route('negara.index') }}">
           <i class="fab fa-fw fa-wpforms"></i>
           <span>List Data Negara</span></a>
   </li>
  
   <li class="nav-item active">
       <a class="nav-link" href="{{ route('produser.index') }}">
           <i class="fab fa-fw fa-wpforms"></i>
           <span>List Data Produser</span></a>
   </li>
  

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
