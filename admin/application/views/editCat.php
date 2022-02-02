
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
                                           
                        
                
                                          
                                           
                                            
                                
                                    
                            <div class="col-lg-6">
                                <form action="<?php echo base_url().'Category/edit/'.$category['cat_id'];?>" method="post">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit </strong> Category
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="has-success form-group">
                                            <label for="inputIsValid" class=" form-control-label">Category Name</label>
                                            <input type="text" id="" name="cat_name" value="<?php echo  $category['cat_name']?>" class="is-valid form-control-success form-control">
                                        
                                        </div>
                                        <div class="has-warning form-group">
                                            <label for="inputIsInvalid" class=" form-control-label">Category Description</label>
                                            <input type="text" id="" name="cat_desc" value="<?php echo  $category['cat_desc']?>" class="is-invalid form-control">
                                        
                                        </div>
                                    </div>
                                    <input type="submit" name="submit"
                                                class="btn btn-primary btn-sm">
                                                
                                            
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                            