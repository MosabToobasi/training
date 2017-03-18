<?php
include 'post.php';
include "header.php";

$id = $_GET['id'];
$product = get_porduct_by_id($id); //1

?>
<div class="content-wrapper page">
    <div class="content">
        <div class="shadow-box">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <div class="page-header">
						<h1>Edit Product</h1>
					  </div>
									
					<form method="POST" action="post.php?action=edit_product"><!-- 2-->
					<input type="hidden" name="id" value="<?php echo $product->id;?>"/><!-- 3 -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <label>Name</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <input type="text"
                                       name="name"
                                       placeholder="Enter your product name"
                                       required
									   value="<?php echo $product->name;?>"
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <label>Price</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <input type="text"
                                       name="price"
                                       required
									   value="<?php echo $product->price;?>"
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <label>Color</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
								<!-- TODO: Must get data from array -->
							
                                <select name="color" class="form-control">
								  <option value="<?php echo $product->color;?>" selected><?php echo $product->color;?></option>
								  <option value="red">red</option>
								  <option value="black">black</option>
								  <option value="orange">orange</option>
								</select>
                            </div>
                        </div>
                       
					    
                        <div class="clearfix">&nbsp;</div>

                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <a href="all_products.php" class="btn btn-primary">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>