
<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sales</title>
    <?php include 'links.php' ?>
    <script src="https://cdn.ckeditor.com/4.25.0-lts/standard/ckeditor.js"></script>
</head>

<body class="crm_body_bg">


    <?php include 'sidebar.php' ?>
    <?php include 'function.php' ?>
        <section class="main_content dashboard_part large_header_bg">

        <?php include 'header.php' ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0 sm_padding_15px">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                           <div class="box_header m-0">
                              <div class="main-title">
                                 <h3 class="m-0">Add Prodduct</h3>
                              </div>
                           </div>
                        </div>
                        <div class="white_card_body">
                           <div class="card-body">
                              <form action="function.php" method="post" enctype="multipart/form-data">
                                 <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">Product Name</label>
                                       <input type="text" class="form-control" name="Product_Name" id="inputEmail4" placeholder="Category name">
                                    </div>
                                    <div class="col-md-6">
                                       <label class="form-label" for="inputState">Product Category</label>
                                       <select name="parent_id" id="" class="form-control" onchange="get_subcategories(this.value)">
                                            <option value="">--Select--</option>
                                            <?php GetCategories_Name() ?>
                                            
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                       <label class="form-label" for="inputState">Product Sub Category</label>
                                       <select id="pro_sub_cat" name="Product_Sub_Category" class="form-control">
                                       <option selected>Choose...</option>
 
                                       </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">Stock</label>
                                       <input type="text" class="form-control" name="Stock" id="inputEmail4" placeholder="Category name">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                       <label class="form-label" for="inputEmail4">Product Description</label>
                                       <input type="text" class="form-control" name="pro_desc" id="inputEmail4" placeholder="Category name">
                                       <!-- <div class="col-12">
                                        <div id="summernote" name="pro_desc"></div>
                                         </div> -->
                                    </div>
                                   
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">MRP</label>
                                       <input type="text" class="form-control" name="MRP" id="inputEmail4" placeholder="Category name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">Seling Price</label>
                                       <input type="text" class="form-control" name="Seling_Price" id="inputEmail4" placeholder="Category name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">Product Image</label>
                                       <input type="file" class="form-control" name="Product_image" id="inputEmail4" placeholder="Category name">
                                    </div>
                                  
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">meta title</label>
                                       <input type="text" class="form-control" name="meta_title" id="inputEmail4" placeholder="Category name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">meta keyword</label>
                                       <input type="text" class="form-control" name="meta_key" id="inputEmail4" placeholder="Category name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">meta Discription</label>
                                       <input type="text" class="form-control" name="meta_desc" id="inputEmail4" placeholder="Category name">
                                    </div>
                                    <div class="col-md-6">
                                       <label class="form-label" for="inputState">status</label>
                                       <select id="inputState" name="status" class="form-control">
                                          <option selected>Choose...</option>
                                          <option value="1">Active</option>
                                          <option value="0">deactive</option>
                                       </select>
                                    </div>
                                 </div>                              
                                 <button type="submit" name="add_product" class="btn btn-primary">Add Categories</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      
            <?php include 'footer.php' ?>
            <script>
                function get_subcategories(cat_id){
                    var cat_id = cat_id;
                    $.ajax({
                        url:'function.php',
                        method:'post',
                        data:{cat_id:cat_id},
                        error:function(){
                            ("somthing went worng");
                        },
                        success:function(data){
                           $("#pro_sub_cat").html(data);
                        }
                        
                    })
                    
                }
               

            </script>
            <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
            <!-- <script src="https://cdn.ckeditor.com/4.25.0-lts/standard/ckeditor.js"></script> -->
            