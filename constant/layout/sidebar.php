 <?php 
 include('./constant/connect.php');
  

 ?>

 
        <div class="left-sidebar">
            
            <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                        </li> 
                 
                         <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                             <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Consumer</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add_client.php">Add Consumer</a></li>
                           
                                <li><a href="client.php">Manage Consumer</a></li>
                            </ul>
                        </li>
                
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Supplier</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-brand.php">Add Supplier</a></li>
                           
                                <li><a href="brand.php">Manage Supplier</a></li>
                                 <li><a href="importbrand.php">Import Supplier</a></li>
                            </ul>
                        </li>
                    <?php }?>
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Categories</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-category.php">Add Category</a></li>
                           
                                <li><a href="categories.php">Manage Categories</a></li>
                            </ul>
                        </li>
                    <?php }?>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi-gas-cylinder mdi"></i><span class="hide-menu">Cylinder</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-product.php">Add Cylinder</a></li>
                           
                                <li><a href="product.php">Manage Cylinders</a></li>
                            </ul>
                        </li>
                    <?php }?>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                     <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-arrow-compress-all"></i><span class="hide-menu">Connections</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="new_connection.php">New Connections </a></li>
                                
                                <li><a href="onhold_connection.php">On Hold Connections </a></li>
                                <li><a href="approved_connection.php">Approved Connections </a></li>
                                <li><a href="rejected_connection.php">Rejected Connections </a></li>
                           
                            </ul>
                        </li>
                        <?php }?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi-ticket-account mdi"></i><span class="hide-menu">Booking</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-order.php">Add Booking</a></li>
                           
                                <li><a href="Order.php">Manage Booking</a></li>
                            </ul>
                        </li>
                         
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                         <li><a href="report.php" href="#" aria-expanded="false"><i class="mdi mdi-flag"></i><span class="hide-menu">Reports</span></a></li>
                        
<?php }?>
<?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cog"></i><span class="hide-menu">Setting</span></a>
                            <ul aria-expanded="false" class="collapse">
                               
                               <li><a href="manage_website.php">Appearance Management</a></li>
                           
                              <li><a href="email_config.php">Email Management</a></li>
                               
                            </ul>
                        </li> 
                  <?php }?>

                  <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                         <li><a href="about.php" aria-expanded="false"><i class="fa fa-info-circle"></i><span class="hide-menu">About Author</span></a></li>
                        
<?php }?>


                  


    
                    </ul>   
                </nav>
                
            </div>
            
        </div>
        