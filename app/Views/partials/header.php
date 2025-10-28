 <header>
   <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
     <div class="container-fluid">
       <a class="navbar-brand" href="<?= url_to('/')?>">Java Nice Day Bistro</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
         data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
         aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="<?= url_to('/') ?>">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">About Us</a>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">Menu</a>
             <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="#">Drinks</a></li>
               <li><a class="dropdown-item" href="#">Pastries</a></li>
             </ul>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Profile
             </a>
             <ul class="dropdown-menu">
               <li class="dropdown-item">
                 <?php if (session()->get('logged_in')): ?>
                   <?php if (session()->get('role') == 'admin'): ?>
                     <a class="nav-link" href="<?= site_url('admin') ?>">Admin Dashboard</a>
                   <?php else: ?>
                     <a class="nav-link" href="<?= site_url('profile') ?>">Profile</a>
                   <?php endif; ?>
                 <?php else: ?>
                   <a class="nav-link" href="<?= site_url('login') ?>">Log In</a>
                 <?php endif; ?>
               </li>
               <?php if (session()->get('logged_in')): ?>
                 <li class="dropdown-item">
                   <a class="nav-link" href="<?= site_url('logout') ?>">Logout</a>
                 </li>
               <?php endif; ?>
             </ul>
           </li>
         </ul>
         <form class="d-flex" role="search">
           <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
           <button class="btn btn-outline-dark" type="submit">Search</button>
         </form>
       </div>
     </div>
   </nav>
 </header>