<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url() ?>assets/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
                            </ul>
                        </li>
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Category</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                              <li>
                                  <a href="<?php echo base_url('category/addNewCategory')?>">Add New</a>
                              </li>  
                              <li>
                                  <a href="<?php echo base_url('allCategory')?>">All Category</a>
                              </li> 
                           </ul>
                     </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
