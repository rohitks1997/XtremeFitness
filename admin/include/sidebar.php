<aside class="app-sidebar">
     
      <ul class="app-menu">
      <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Exercises</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="addexercise.php"><i class="icon fa fa-plus-square-o"></i> Add Exercise</a></li>
            <li><a class="treeview-item" href="exclist.php"><i class="icon fa fa-circle-o"></i> Exercises & Fitness</a></li>
<?php
$run="SELECT * FROM `exercise`";
$dat=mysqli_query($con,$run);

foreach ($dat as $k) {
  

?>
            <li><a class="treeview-item" href="exercise.php?id=<?php echo$k['id']?>"><i class="icon fa fa-hand-o-right"></i><?php echo$k['name']?></a></li>

<?php }?>          </ul>
        </li>
        
      <li><a class="app-menu__item" href="member.php"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Membership</span></a></li>
      <li><a class="app-menu__item" href="addpromotion.php"><i class="app-menu__icon fa fa-product-hunt"></i><span class="app-menu__label">Promotion</span></a></li>  
      
      <li><a class="app-menu__item" href="users.php"><i class="app-menu__icon 	fa fa-users"></i><span class="app-menu__label">Users List</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cc-visa"></i><span class="app-menu__label">User Packages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="app-menu__item" href="upackag.php"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label">Membership</span></a></li>
          <li><a class="app-menu__item" href="upromo.php"><i class="app-menu__icon fa fa-product-hunt"></i><span class="app-menu__label">Promotion</span></a></li>
          </ul>
        </li>
      
      
      <li><a class="app-menu__item" href="uqueries.php"><i class="app-menu__icon fa fa-user-circle"></i><span class="app-menu__label">User Queries</span></a></li>
      
        
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Category</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add-category.php"><i class="icon fa fa-circle-o"></i> Add Category</a></li>
             <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Manage Category</a></li>
           </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Package Type</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add-package.php"><i class="icon fa fa-circle-o"></i> Add Package</a></li>
             <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Manage Category</a></li>
          </ul>
        </li> -->
       
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Package</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="add-post.php"><i class="icon fa fa-circle-o"></i>Add</a></li>
            <li><a class="treeview-item" href="manage-post.php"><i class="icon fa fa-circle-o"></i> Manage</a></li>
          </ul>
        </li> -->


      <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Booking History</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="new-bookings.php"><i class="icon fa fa-circle-o"></i>New</a></li>
            <li><a class="treeview-item" href="partial-payment-bookings.php"><i class="icon fa fa-circle-o"></i> Partial Payment </a></li>
            <li><a class="treeview-item" href="full-payment-bookings.php"><i class="icon fa fa-circle-o"></i> Full Payment </a></li>
            <li><a class="treeview-item" href="booking-history.php"><i class="icon fa fa-circle-o"></i> All</a></li>
          </ul>
      </li> -->


       
        
     
        <li><a class="app-menu__item" href="upabout.php"><i class="app-menu__icon fa fa-wrench"></i><span class="app-menu__label">Update About Us</span></a></li>
        <li><a class="app-menu__item" href="upapperance.php"><i class="app-menu__icon fa fa-desktop"></i><span class="app-menu__label">Update Apperance</span></a></li>
      
          <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Report</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="report-booking.php"><i class="icon fa fa-circle-o"></i>Booking Report</a></li>
            <li><a class="treeview-item" href="report-registration.php"><i class="icon fa fa-circle-o"></i>Registration Report</a></li>
          </ul>
        </li> -->
      </ul>
    </aside>