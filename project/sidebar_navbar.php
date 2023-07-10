<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
 <ul class="navbar-nav">
   <li class="nav-item">
     <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
   </li>
 </ul>
 <!-- Right navbar links -->
 <ul class="navbar-nav ml-auto">
   <li class="nav-item dropdown">
     <a class="nav-link" data-toggle="dropdown" href="#">
       <i class="fa fa-user"></i>
       <span class="badge badge-warning navbar-badge"></span>
     </a>
     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
           <div class="card-body box-profile">
               <div class="text-center">
                   <img class="profile-user-img img-fluid img-circle" src="dist/img/user2-160x160.jpg" alt="User profile picture">
               </div>
               <h3 class="profile-username text-center">Nina Mcintire</h3>
               <p class="text-muted text-center">Software Engineer</p>
               <ul class="list-group list-group-unbordered mb-3">
                   <li class="list-group-item">
                       <div class="col-12">
                           <a href="login.html"><button type="submit" class="btn btn-primary btn-block">Profile</button></a>
                       </div>
                   </li>
                   <li class="list-group-item">          
                       <div class="col-12">
                           <a href="login.html"><button type="submit" class="btn btn-primary btn-block">Log Out</button></a>
                       </div>
                   </li>
               </ul>
           </div>
           <!-- /.card-body -->
     </div>
   </li>
   <li class="nav-item">
     <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
       <i class="fas fa-th-large"></i>
     </a>
   </li>
 </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
 <!-- Brand Logo -->
 <a href="books.php" class="brand-link">
   <span class="brand-text font-weight-light">Library System</span>
 </a>

 <!-- Sidebar -->
 <div class="sidebar">
   <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
     <div class="info">
       <a href="#" class="d-block">Alexander Pierce</a>
     </div>
   </div>

   <!-- Sidebar Menu -->
   <nav class="mt-2">
     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="books.php" class="nav-link">
               <i class="nav-icon far fa-circle text-danger"></i>
               <p class="text">Books</p>
           </a>
         </li>
         <li class="nav-item">
             <a href="subjects.php" class="nav-link">
                   <i class="nav-icon far fa-circle text-danger"></i>
                 <p class="text">Subjects</p>
             </a>
         </li>
         <li class="nav-item">
             <a href="grades.php" class="nav-link">
                   <i class="nav-icon far fa-circle text-danger"></i>
                 <p class="text">Grades</p>
             </a>
         </li>
         <li class="nav-item">
             <a href="borrowers.php" class="nav-link">
                   <i class="nav-icon far fa-circle text-danger"></i>
                 <p class="text">Borrowers</p>
             </a>
         </li>
         <li class="nav-item">
             <a href="borrowed&returned.php" class="nav-link">
                   <i class="nav-icon far fa-circle text-danger"></i>
                 <p class="text">Borrowed and Returned</p>
             </a>
         </li>
     </ul>
   </nav>
   <!-- /.sidebar-menu -->
 </div>
 <!-- /.sidebar -->
</aside>

