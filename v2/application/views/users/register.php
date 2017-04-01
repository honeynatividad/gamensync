	

			<!-- Banner -->	
			<div class="profile-cover no-break-20">
				<div class="profile-cover-img" style="background-image: url(<?php echo base_url('assets/images/placeholder.jpg') ?>"></div>
					<div class="media">
						 <div class="media-body">
							<h1>REGISTRATION</h1>
						</div>
					</div>
			</div>
			<!-- /banner -->


			<!-- Breadrumbs -->
			<div class="content-group-lg border-top-lg border-red">
				<div class="page-header page-header-default">
					<div class="page-header-content1">
						<div class="page-title">
							 <ul class="breadcrumb">
								<li><a href="https://www.gamensync.com/"><i class="icon-home2 icon-red position-left"></i> Home</a></li>
								<li class="active">Registration</li>
							</ul>
						<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

						<div class="heading-elements">
							<form class="heading-form" action="#">
								<div class="form-group">
									<div class="has-feedback">
										<input type="search" class="form-control" placeholder="Search">
										<div class="form-control-feedback">
											<i class="icon-search4 text-size-small text-muted"></i>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /breadcrumbs -->

			<!-- Registration Form-->
			<div class="panel panel-flat">				
					<div class="panel-heading">
						<h6 class="panel-title">Registration</h6> 
					</div>	
					
					<div class="panel-body panel-reg"> 
						<div class="col-lg-6 col-lg-offset-3">
							<div class="tabbable panel login-form width-400">
								<ul class="nav nav-tabs nav-justified">
									<li class="active"><a href="#basic-tab1" data-toggle="tab"><h6>SIGN IN</h6></a></li>
									<li><a href="#basic-tab2" data-toggle="tab"><h6>REGISTER</h6></a></li>
								</ul>

								<div class="tab-content panel-body">
									<div class="tab-pane fade in active" id="basic-tab1">
										<form action="">
											<div class="text-center">
												<div class="icon-object   icon-red"><i class="icon-reading"></i></div>
												<h5 class="content-group">Login to your account</h5>
											</div>

											<div class="form-group has-feedback has-feedback-left">
												<input type="text" class="form-control" placeholder="Username" name="username" required="required">
												<div class="form-control-feedback">
													<i class="icon-user text-muted"></i>
												</div>
											</div>

											<div class="form-group has-feedback has-feedback-left">
												<input type="password" class="form-control" placeholder="Password" name="password" required="required">
												<div class="form-control-feedback">
													<i class="icon-lock2 text-muted"></i>
												</div>
											</div>

											<div class="form-group login-options">
												<div class="row">
													<div class="col-sm-6">
														<label class="checkbox-inline">
															<input type="checkbox" class="styled" checked="checked">
															Remember me
														</label>
													</div>

													<div class="col-sm-6 text-right">
															<div class="content-group">															
															<button type="button" class="btn bg-blue btn-block" data-toggle="modal" data-target="#modal-recover"><i class="icon-question4 position-left"></i> Forgot password?</button>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<button type="submit" class="btn bg-red btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
											</div>
										</form>

										<div class="content-divider text-muted form-group"><span>or sign in with</span></div>
										<ul class="list-inline form-group list-inline-condensed text-center">
											<li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
											<li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-google-plus"></i></a></li>
											<li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
										</ul>

										<span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
									</div>

									<div class="tab-pane fade" id="basic-tab2">
										<form action="" method="POST">
											<div class="panel-body">
												<div class="text-center">
													<div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
													<h5 class="content-group-lg">Create account <small class="display-block">All fields are required</small></h5>
												</div>

												<div class="form-group has-feedback">
													<input type="text" class="form-control" placeholder="Choose username">
													<div class="form-control-feedback">
														<i class="icon-user-plus text-muted"></i>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group has-feedback">
															<input type="text" class="form-control" placeholder="First name" id="first_name" name="first_name">
															<div class="form-control-feedback">
																<i class="icon-user-check text-muted"></i>
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group has-feedback">
															<input type="text" class="form-control" placeholder="Last name" id="last_name" name="last_name">
															<div class="form-control-feedback">
																<i class="icon-user-check text-muted"></i>
															</div>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group has-feedback">
															<input type="password" class="form-control" placeholder="Create password" name="password" id="password">
															<div class="form-control-feedback">
																<i class="icon-user-lock text-muted"></i>
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group has-feedback">
															<input type="password" class="form-control" placeholder="Repeat password" id="password2" name="password2">
															<div class="form-control-feedback">
																<i class="icon-user-lock text-muted"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div id="message_password">
														</div>
													</div>
													
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group has-feedback">
															<input type="email" class="form-control" placeholder="Email Address" id="email_address" name="email_address">
															<div class="form-control-feedback">
																<i class="icon-mention text-muted"></i>
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group has-feedback">
															<input type="email" class="form-control" placeholder="Repeat email" id="email_address2" name="email_address2">
															<div class="form-control-feedback">
																<i class="icon-mention text-muted"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div id="message_email">
														</div>
													</div>
													
												</div>
												
												<div class="row">
													<div class="col-md-6"> 
														<div class="form-group">
															<select data-placeholder="Plaform"  class="select" id="platform" name="platform">
																<option value="android">Android</option>
																<option value="ios">IOS</option> 
															</select>     
														</div>
													</div>

													<div class="col-md-6"> 
														<div class="form-group">
															<select data-placeholder="Interest"  class="select" id="interest" name="interest" >
																<option value="action">Action</option>
																<option value="adventure">Adventure</option> 
																<option value="arcade">Arcade</option>
																<option value="board">Board</option> 		
																<option value="card">Card</option>
																<option value="casino">Casino</option> 
																<option value="casual">Casual</option>
																<option value="educational">Educational</option> 
																<option value="music">Music</option>
																<option value="puzzle">Puzzle</option> 
																<option value="racing">Racing</option>
																<option value="roleplaying">Roleplaying</option> 
																<option value="simulation">Simulation</option>
																<option value="sports">Sports</option> 
																<option value="strategy">Strategy</option>
																<option value="trivia">Trivia</option>
																<option value="word">Word</option>
																<option value="others">Others</option>  																
															</select>     
														</div>
													</div>
												</div>
				  
												<div class="form-group">
													<div class="checkbox">
														<label>
															<input type="checkbox" class="styled" checked="checked" name="notify">
															Notify me if there's any <a href="https://gamensync.com/profile-settings">updates or message</a>
														</label>
													</div>

													<div class="checkbox">
														<label>
															<input type="checkbox" class="styled" checked="checked" id="newsletter" name="newsletter">
															Subscribe to monthly newsletter
														</label>
													</div>

													<div class="checkbox">
														<label>
															<input type="checkbox" class="styled" id="accept" name="accept">
															Accept <a href="https://gamensync.com/terms-of-service">Terms of Service</a>
														</label>
													</div>
												</div>

												<div class="text-right">
													<button type="submit" class="btn btn-link"><i class="icon-arrow-left13 icon-orange position-left"></i> Back to login form</button>
													<button type="submit" id="submit" name="submit" class="btn bg-red btn-labeled btn-labeled-right ml-10"><b><i class="icon-plus3"></i></b> Create account</button>
												</div>
											</div> 
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>	
					
					<!-- Password recovery form -->
					<div id="modal-recover" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content login-form">

								<!-- Form -->
								<form class="modal-body" action="gamensync_registration.html">
									<div class="text-center">
										<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
										<h5 class="content-group">Password recovery <small class="display-block">Check your email for the instructions on how to reset your password. Check spam or junk mail for the recovery email if it's not in your inbox.</small></h5>
									</div>

									<div class="form-group has-feedback">
										<input type="email" class="form-control" placeholder="Your email">
										<div class="form-control-feedback">
											<i class="icon-mail5 text-muted"></i>
										</div>
									</div>

									<button type="submit" class="btn bg-red btn-block">Reset password <i class="icon-arrow-right14 position-right"></i></button>
									<button type="button" class="btn bg-red btn-block" data-dismiss="modal">Cancel</button>
								</form>
								<!-- /form -->

							</div>
						</div>
					</div>
					<!-- /password recovery form -->
						
				</div>
				<!-- /registration form -->  
			
			
			
				<!-- Registration User Dropdown 
				<li class="dropdown social-media1 dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/placeholder.jpg" alt="">
						<span>Victoria</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> Transactions</a></li>
						<li><a href="#"><i class="icon-airplane2"></i> Pilot Schedule</a></li>
						<li><a href="#"><i class="icon-heart5"></i> Wishlist</a></li>
						<li><a href="#"><i class="icon-users"></i> Friends</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>				
				<!-- /registration user dropdown -->	
				
				<script>
				$(document).ready(function(){
					$('#password2').on('keyup', function () {
					    if ($(this).val() == $('#password').val()) {
					        $('#message_password').html('Password match!').css('color', 'green');
					    } else $('#message_password').html('Password doesnt match!').css('color', 'red');
					});

					$('#email_address2').on('keyup', function () {
					    if ($(this).val() == $('#email_address').val()) {
					        $('#message_email').html('Email match!').css('color', 'green');
					    } else $('#message_email').html('Email doesnt match!').css('color', 'red');
					});

					$('#email_address').on('keyup', function () {
						validate();
					});

				});

				function validateEmail(email) {
					var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				 	return re.test(email);
				}

				function validate() {
					$("#message_email").text("");
				  	var email = $("#email_address").val();
				  	
				  	if (validateEmail(email)) {
				    	$("#message_email").text(email + " is valid :)");
				    	$("#message_email").css("color", "green");
				  	} else {
				    	$("#message_email").text(email + " is not valid :(");
				    	$("#message_email").css("color", "red");
				  	}
				  	return false;
				}

				function fetch_select(val)
				{
				    $(".lloading").text("Loading....");
				    
				   $.ajax({
				     type: 'post',
				     url: '<?php echo base_url("providers/getallDistrict");?>',
				     data: {
				       city:val
				     },
				     success: function (response) {
				       //  alert(response);
				       //document.getElementById("distrct_rep").innerHTML=response; 
				       $("#distrct_rep").html(response);
				       $(".lloading").text('done');
				     }
				   });
				}
				</script>