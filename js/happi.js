jQuery(document).ready(function(){
    //This is for home page automatic height based on screen
	var hi8 = $(window).height()-112;
    $('.header_slider').css("height",hi8);

    //jquery for dynamic height for slider image height
    var slide_hi8 = $(window).height()-163;
	$('.slide img').css({height:slide_hi8,width:1250,});
	$('.header_slider .slides_container, .header_slider .slides_control').css("height",slide_hi8);

	// Airport ,Airticket , Car form validation
	$("#airport,#airticket,#car").validate({
			rules: {
				yourname: {
					required: true,
					minlength: 3
				},
				email: {
					required: true,
					email: true
				},
				source: {
					required: true,
					minlength: 3
				},
				destination: {
					required: true,
					minlength: 3
				},
				date_in: "required",
				pax: {
					required: true,
					minlength: 1,
					maxlength: 2,
				},
				mobile:{
					required:true,
					minlength:10,
					maxlength:11,
				}
			},
			messages: {
				yourname: {
					required: "Please enter a yourname",
					minlength: "Your name must consist of at least 2 characters"
				},
				email: "Please enter a valid email address",
				source: {
					required: "Please enter a your source",
					minlength: "Your source must consist of at least 2 characters"
				},
				destination: {
					required: "Please enter a your destination",
					minlength: "Your destination must consist of at least 2 characters"
				},
				pax: {
					required: "Please enter a pax details",
					maxlength: "You are not exceeded allowed pax"
				},
				mobile: {
					required: "Please enter mobile number",
					minlength: "Please enter valid mobile number",
					maxlength: "Please enter valid mobile number",
				},

			}
		});
		// Contact form validation
		$("#contact_form").validate({
				rules: {
					yourname: {
						required: true,
						minlength: 3
					},
					email: {
						required: true,
						email: true
					},
					message: {
						required:true,
						minlength:10,
						maxlength:500,
					},
				},
				messages: {
					yourname: {
						required: "Please enter a yourname",
						minlength: "Your name must consist of at least 2 characters"
					},
					email: "Please enter a valid email address",
					message: {
						required: "Please enter message",
						minlength: "Please enter atleast 10 characters",
						maxlength: "You exceeded 500 characters",
					},

				}
			});

		// Cruise form validations
		$("#cruise").validate({
				rules: {
					yourname: {
						required: true,
						minlength: 3
					},
					email: {
						required: true,
						email: true
					},

					destination: {
						required: true,
						minlength: 3
					},
					days:{
						required: true,
						minlength: 1,
						maxlength: 3,
					},
					date_in: "required",
					mobile:{
						required:true,
						minlength:10,
						maxlength:11,
					}
				},
				messages: {
					yourname: {
						required: "Please enter a yourname",
						minlength: "Your name must consist of at least 2 characters"
					},
					email: "Please enter a valid email address",
					destination: {
						required: "Please enter a your destination",
						minlength: "Your destination must consist of at least 2 characters"
					},
					days: {
						required: "Please enter no of days",
						minlength: "Please enter atleast one days",
						maxlength: "You are exceeded allowed days",
					},
					mobile: {
						required: "Please enter mobile number",
						minlength: "Please enter valid mobile number",
						maxlength: "Please enter valid mobile number",
					},

				}
			});

			// event for validation
			$("#event").validate({
					rules: {
						yourname: {
							required: true,
							minlength: 3
						},
						email: {
							required: true,
							email: true
						},

						guest: {
							required: true,
							minlength: 3
						},
						vanue: {
							required: true,
							minlength: 3
						},
						date_in: "required",
						mobile:{
							required:true,
							minlength:10,
							maxlength:11,
						},
						person: {
							required: true,
							minlength: 3
						},
					},
					messages: {
						yourname: {
							required: "Please enter a yourname",
							minlength: "Your name must consist of at least 2 characters"
						},
						email: "Please enter a valid email address",
						destination: {
							required: "Please enter a your destination",
							minlength: "Your destination must consist of at least 2 characters"
						},
						guest: {
							required: "Please enter  no of guest",
							minlength: "Please enter at least 3 characters"
						},
						vanue: {
							required: "Please enter vanue",
							minlength: "Please enter at least 3 characters"
						},
						mobile: {
							required: "Please enter mobile number",
							minlength: "Please enter valid mobile number",
							maxlength: "Please enter valid mobile number",
						},
						person: {
							required: "Please enter a contact person",
							minlength: "Contact person must consist of at least 3 characters"
						},

					}
				});

			// hotel form validation
			$("#hotel_form").validate({
					rules: {
						yourname: {
							required: true,
							minlength: 3
						},
						email: {
							required: true,
							email: true
						},
						checkin: "required",
						checkout: "required",
						city: {
							required: true,
							minlength: 3
						},
						adult: {
							required: true,
							minlength: 1
						},
						mobile:{
							required:true,
							minlength:10,
							maxlength:11,
						},
					},
					messages: {
						yourname: {
							required: "Please enter a yourname",
							minlength: "Your name must consist of at least 2 characters"
						},
						email: "Please enter a valid email address",
						city: {
							required: "Please enter a your city",
							minlength: "Your city must consist of at least 2 characters"
						},
						adult: {
							required: "Please enter  no of adults",
							minlength: "Please enter at least 1 adult"
						},
						mobile: {
							required: "Please enter mobile number",
							minlength: "Please enter valid mobile number",
							maxlength: "Please enter valid mobile number",
						},
					}
				});

				// institutional form validation
				$("#institutional").validate({
						rules: {
							yourname: {
								required: true,
								minlength: 3
							},
							email: {
								required: true,
								email: true
							},
							destination: {
								required: true,
								minlength: 3
							},
							days: {
								required: true,
								minlength: 2
							},
							message: {
								required: true,
								minlength: 10,
								maxlength:500,
							},
							mobile:{
								required:true,
								minlength:10,
								maxlength:11,
							},
							person:{
								required:true,
								minlength:2,
							},
						},
						messages: {
							yourname: {
								required: "Please enter a yourname",
								minlength: "Your name must consist of at least 2 characters"
							},
							email: "Please enter a valid email address",
							city: {
								required: "Please enter a your city",
								minlength: "Your city must consist of at least 2 characters"
							},
							destination: {
								required: "Please enter  destination",
								minlength: "Please enter at least 3 character"
							},
							days: {
								required: "Please enter  IV details",
								minlength: "Please enter at least 2 words",
								maxlength: "You exceeded allowed characters"
							},
							message: {
								required: "Please enter  no of days",
								minlength: "Please enter at least 1 days"
							},
							mobile: {
								required: "Please enter mobile number",
								minlength: "Please enter valid mobile number",
								maxlength: "Please enter valid mobile number",
							},
							person: {
								required: "Please enter a contact person",
								minlength: "contact person must consist of at least 2 characters"
							},
						}
					});
					// Insurance form validation
					$("#insurance").validate({
							rules: {
								yourname: {
									required: true,
									minlength: 3
								},
								email: {
									required: true,
									email: true
								},
								country: {
									required: true,
									minlength: 3,

								},
								mobile:{
									required:true,
									minlength:10,
									maxlength:11,
								},
							},
							messages: {
								yourname: {
									required: "Please enter a yourname",
									minlength: "Your name must consist of at least 3 characters"
								},
								email: "Please enter a valid email address",
								country: {
									required: "Please enter  destination",
									minlength: "Please enter at least 3 character"
								},
								mobile: {
									required: "Please enter mobile number",
									minlength: "Please enter valid mobile number",
									maxlength: "Please enter valid mobile number",
								},
							}
						});

						// mice form validation
						$("#mice").validate({
								rules: {
									yourname: {
										required: true,
										minlength: 3
									},
									email: {
										required: true,
										email: true
									},
									destination: {
										required: true,
										minlength: 3
									},
									days: {
										required: true,
										minlength: 2
									},
									purpose: {
										required: true,
										minlength: 10,
										maxlength:500,
									},
									mobile:{
										required:true,
										minlength:10,
										maxlength:11,
									},
									person:{
										required:true,
										minlength:2,
									},
								},
								messages: {
									yourname: {
										required: "Please enter a yourname",
										minlength: "Your name must consist of at least 2 characters"
									},
									email: "Please enter a valid email address",
									city: {
										required: "Please enter a your city",
										minlength: "Your city must consist of at least 2 characters"
									},
									destination: {
										required: "Please enter  destination",
										minlength: "Please enter at least 3 character"
									},
									days: {
										required: "Please enter  IV details",
										minlength: "Please enter at least 2 words",
										maxlength: "You exceeded allowed characters"
									},
									purpose: {
										required: "Please enter  no of days",
										minlength: "Please enter at least 1 days"
									},
									mobile: {
										required: "Please enter mobile number",
										minlength: "Please enter valid mobile number",
										maxlength: "Please enter valid mobile number",
									},
									person: {
										required: "Please enter a contact person",
										minlength: "contact person must consist of at least 2 characters"
									},
								}
							});

							// passport form validation
							$("#passport").validate({
									rules: {
										yourname: {
											required: true,
											minlength: 3
										},
										email: {
											required: true,
											email: true
										},
										pax: {
											required: true,
											minlength: 1,

										},
										mobile:{
											required:true,
											minlength:10,
											maxlength:11,
										},
									},
									messages: {
										yourname: {
											required: "Please enter a yourname",
											minlength: "Your name must consist of at least 3 characters"
										},
										email: "Please enter a valid email address",
										pax: {
											required: "Please enter  pax",
											minlength: "Please enter at least 1 pax"
										},
										mobile: {
											required: "Please enter mobile number",
											minlength: "Please enter valid mobile number",
											maxlength: "Please enter valid mobile number",
										},
									}
								});

								// mice form validation
								$("#mice").validate({
										rules: {
											yourname: {
												required: true,
												minlength: 3
											},
											email: {
												required: true,
												email: true
											},
											destination: {
												required: true,
												minlength: 3
											},
											days: {
												required: true,
												minlength: 2
											},
											date_in:"required",
											mobile:{
												required:true,
												minlength:10,
												maxlength:11,
											},
										},
										messages: {
											yourname: {
												required: "Please enter a yourname",
												minlength: "Your name must consist of at least 2 characters"
											},
											email: "Please enter a valid email address",
											city: {
												required: "Please enter a your city",
												minlength: "Your city must consist of at least 2 characters"
											},
											destination: {
												required: "Please enter  destination",
												minlength: "Please enter at least 3 character"
											},
											days: {
												required: "Please enter  IV details",
												minlength: "Please enter at least 2 words",
												maxlength: "You exceeded allowed characters"
											},
											mobile: {
												required: "Please enter mobile number",
												minlength: "Please enter valid mobile number",
												maxlength: "Please enter valid mobile number",
											},
										}
									});

									// passport form validation
									$("#passport").validate({
											rules: {
												yourname: {
													required: true,
													minlength: 3
												},
												email: {
													required: true,
													email: true
												},
												pax: {
													required: true,
													minlength: 1,

												},
												mobile:{
													required:true,
													minlength:10,
													maxlength:11,
												},
											},
											messages: {
												yourname: {
													required: "Please enter a yourname",
													minlength: "Your name must consist of at least 3 characters"
												},
												email: "Please enter a valid email address",
												pax: {
													required: "Please enter  pax",
													minlength: "Please enter at least 1 pax"
												},
												mobile: {
													required: "Please enter mobile number",
													minlength: "Please enter valid mobile number",
													maxlength: "Please enter valid mobile number",
												},
											}
										});
										// tailor form validation
										$("#tailor").validate({
												rules: {
													yourname: {
														required: true,
														minlength: 3
													},
													email: {
														required: true,
														email: true
													},
													destination: {
														required: true,
														minlength: 3
													},
													days: {
														required: true,
														minlength: 1
													},
													date_in:"required",
													mobile:{
														required:true,
														minlength:10,
														maxlength:11,
													},
												},
												messages: {
													yourname: {
														required: "Please enter a yourname",
														minlength: "Your name must consist of at least 2 characters"
													},
													email: "Please enter a valid email address",
													city: {
														required: "Please enter a your city",
														minlength: "Your city must consist of at least 2 characters"
													},
													destination: {
														required: "Please enter  destination",
														minlength: "Please enter at least 3 character"
													},
													days: {
														required: "Please enter  days",
														minlength: "Please enter at least 1 "
													},
													mobile: {
														required: "Please enter mobile number",
														minlength: "Please enter valid mobile number",
														maxlength: "Please enter valid mobile number",
													},
												}
											});
									// tourguide form validation
									$("#tourguide").validate({
											rules: {
												yourname: {
													required: true,
													minlength: 3
												},
												email: {
													required: true,
													email: true
												},
												destination: {
													required: true,
													minlength: 3
												},
												date_in:"required",
												mobile:{
													required:true,
													minlength:10,
													maxlength:11,
												},
											},
											messages: {
												yourname: {
													required: "Please enter a yourname",
													minlength: "Your name must consist of at least 2 characters"
												},
												email: "Please enter a valid email address",
												city: {
													required: "Please enter a your city",
													minlength: "Your city must consist of at least 2 characters"
												},
												destination: {
													required: "Please enter  destination",
													minlength: "Please enter at least 3 character"
												},
												mobile: {
													required: "Please enter mobile number",
													minlength: "Please enter valid mobile number",
													maxlength: "Please enter valid mobile number",
												},
											}
										});

				// visa form validation
				$("#visa").validate({
						rules: {
							yourname: {
								required: true,
								minlength: 3
							},
							email: {
								required: true,
								email: true
							},
							country: {
								required: true,
								minlength: 3
							},
							month: {
								required: true,
								minlength: 3
							},
							pax: {
								required: true,
								minlength: 1
							},
							mobile:{
								required:true,
								minlength:10,
								maxlength:11,
							},
						},
						messages: {
							yourname: {
								required: "Please enter a yourname",
								minlength: "Your name must consist of at least 2 characters"
							},
							email: "Please enter a valid email address",
							country: {
								required: "Please enter a your country",
								minlength: "Your city must consist of at least 3 characters"
							},
							month: {
								required: "Please enter  month",
								minlength: "Please enter at least 3 character"
							},
							pax: {
								required: "Please enter  pax",
								minlength: "Please enter at least 1"
							},
							mobile: {
								required: "Please enter mobile number",
								minlength: "Please enter valid mobile number",
								maxlength: "Please enter valid mobile number",
							},
						}
				});

});
