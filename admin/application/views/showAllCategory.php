
            <!-- END HEADER DESKTOP-->
        
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                          <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3" width="100%"> 
                                        <thead>
                                            <tr>
                                            <th>Category No</th>
                                               <th>Category Name</th>
                                                <th>Category Description</th>
                                                <th>EDIT</th>
                                                 <th>DELETE</th>
                                               

                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php if(!empty($categories)) {
                                          foreach($categories as $category) {?>
                                            
                                            <tr>
                                            <td><?php echo $category['cat_id']?></td>
                                                <td><?php echo $category['cat_name'] ?></td>
                                                <td><?php echo $category['cat_desc'] ?></td>
                                               
                                           
                        <td><a href ="<?php echo base_url()."Category/edit/".$category['cat_id']?>" class="btn btn-primary">EDIT</td>
                      <td><a href ="<?php echo base_url()."allCategory/delete/".$category['cat_id']?>" class="btn btn-primary">DELETE</td>
                                                      
                                                        
                                                    </div></td>
                                               
                                                
                                               
                                            </tr>

                                            <?php  }}
                                            else
                                            {
                                                ?>
                                                <td colspan="5">Records not found</td>
                                                <?php
                                            }
                                            ?>
                                            
                                            </tr> 
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>