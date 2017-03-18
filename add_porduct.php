<?php
include "functions.php";
include "header.php";
?>
<div class="content-wrapper page">
    <div class="content">
        <div class="shadow-box">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <div class="page-header">
						<h1>Add New Product</h1>
					  </div>
									
					<form method="POST" action="post.php?action=add_product">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <label>Name</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <input type="text"
                                       name="name"
                                       placeholder="Enter your product name"
                                       required
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
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <label>Color</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <select name="color" class="form-control">
								  <option value="red">red</option>
								  <option value="black">black</option>
								  <option value="orange">orange</option>
								</select>
                            </div>
                        </div>
                       
					    
                        <div class="clearfix">&nbsp;</div>

                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <button type="submit"
                                        class="btn btn-primary">
                                    Save
                                </button>
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