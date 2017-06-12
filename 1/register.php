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
						<h1>Register</h1>
					  </div>
									
					<form method="POST" action="post.php?action=new_user">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <label>Full Name</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <input type="text"
                                       name="fullname"
                                       placeholder="Enter your full name"
                                       required
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <label>Email</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <input type="email"
                                       name="email"
                                       required
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <label>Password</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <input type="password"
                                       name="password"
                                       required
                                       class="form-control" />
                            </div>
                        </div>
                       
					   
						<div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <label>Re-Password</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <input type="password"
                                       name="repassword"
                                       required
                                       class="form-control" />
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <button type="submit"
                                        class="btn btn-primary">
                                    Register
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