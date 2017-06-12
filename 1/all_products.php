<?php
include 'post.php';
include "header.php";
$products = get_all_products(1000);


?>
<div class="content-wrapper page">
    <div class="content">
        <div class="shadow-box">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <div class="page-header">
						<h1>All Products</h1>
					</div>
					
					<table class="table table-bordered">
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Color</th>
							<th>Price</th>
							<th>Edit</th>
							<th>Delete</th>
							<th>Delete Ajax</th>
						</tr>
						<tbody>
							<?php
							$i = 0;
							foreach($products as $product){
								$i++;
							?>	
							<tr id="tr_<?php echo $product->id; ?>">
										<td scope="row"><?php echo $i;?></td> 
										<td><?php echo $product->name; ?></td>
										<td><?php echo $product->color; ?></td>
										<td>$<?php echo $product->price; ?></td>
										<td><a href="edit_product.php?id=<?php echo $product->id; ?>">Edit</a></td>
										<td><a href="post.php?action=delete_product&id=<?php echo $product->id; ?>">Delete</a></td>
										<td>
										<!-- onclick="delete_product(<?php echo $product->id; ?>)" -->
										<a data-sample="nokia" data-id="<?php echo $product->id; ?>" href="#"  class="delete_item">Delete Ajax</a></td>
									</tr>
							<?php 
							}
							?>
						</tbody>
					</table>
 					
					 
					 
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>