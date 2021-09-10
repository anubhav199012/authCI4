"use strict";
var KTLogin = {
	init: function () {
		var t, i;
		t = KTUtil.getById("kt_login_singin_form"), KTUtil.attr(t, "action"), i = KTUtil.getById("kt_login_singin_form_submit_button"), t && FormValidation.formValidation(t, {
				fields: {
					username: {
						validators: {
							notEmpty: {
								message: "Username is required"
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: "Password is required"
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					submitButton: new FormValidation.plugins.SubmitButton,
					bootstrap: new FormValidation.plugins.Bootstrap({})
				}
			}).on("core.form.valid", function () {
				KTUtil.btnWait(i, "spinner spinner-right spinner-white pr-15", "Please wait"), setTimeout(function () {
					KTUtil.btnRelease(i)
				}, 2e3)
			}).on("core.form.invalid", function () {
				Swal.fire({
					text: "Sorry, looks like there are some errors detected, please try again.",
					icon: "error",
					buttonsStyling: !1,
					confirmButtonText: "Ok, got it!",
					customClass: {
						confirmButton: "btn font-weight-bold btn-light-primary"
					}
				}).then(function () {
					KTUtil.scrollTop()
				})
			}),
			function () {
				var t = KTUtil.getById("kt_login_forgot_form"),
					i = (KTUtil.attr(t, "action"), KTUtil.getById("kt_login_forgot_form_submit_button"));
				t && FormValidation.formValidation(t, {
					fields: {
						email: {
							validators: {
								notEmpty: {
									message: "Email is required"
								},
								emailAddress: {
									message: "The value is not a valid email address"
								}
							}
						}
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger,
						submitButton: new FormValidation.plugins.SubmitButton,
						bootstrap: new FormValidation.plugins.Bootstrap({})
					}
				}).on("core.form.valid", function () {
					KTUtil.btnWait(i, "spinner spinner-right spinner-white pr-15", "Please wait"), setTimeout(function () {
						KTUtil.btnRelease(i)
					}, 2e3)
				}).on("core.form.invalid", function () {
					Swal.fire({
						text: "Sorry, looks like there are some errors detected, please try again.",
						icon: "error",
						buttonsStyling: !1,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-light-primary"
						}
					}).then(function () {
						KTUtil.scrollTop()
					})
				})
			}(),
			function () {
				var t, i = KTUtil.getById("kt_login"),
					e = KTUtil.getById("kt_login_signup_form"),
					r = [];
				e && (r.push(FormValidation.formValidation(e, {
					fields: {
						fname: {
							validators: {
								notEmpty: {
									message: "First name is required"
								}
							}
						},
						lname: {
							validators: {
								notEmpty: {
									message: "Last Name is required"
								}
							}
						},
						phone: {
							validators: {
								notEmpty: {
									message: "Phone is required"
								}
							}
						},
						email: {
							validators: {
								notEmpty: {
									message: "Email is required"
								},
								emailAddress: {
									message: "The value is not a valid email address"
								}
							}
						}
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger,
						bootstrap: new FormValidation.plugins.Bootstrap
					}
				})), r.push(FormValidation.formValidation(e, {
					fields: {
						address1: {
							validators: {
								notEmpty: {
									message: "Address is required"
								}
							}
						},
						postcode: {
							validators: {
								notEmpty: {
									message: "Postcode is required"
								}
							}
						},
						city: {
							validators: {
								notEmpty: {
									message: "City is required"
								}
							}
						},
						state: {
							validators: {
								notEmpty: {
									message: "State is required"
								}
							}
						},
						country: {
							validators: {
								notEmpty: {
									message: "Country is required"
								}
							}
						}
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger,
						bootstrap: new FormValidation.plugins.Bootstrap
					}
				})), r.push(FormValidation.formValidation(e, {
					fields: {
						delivery: {
							validators: {
								notEmpty: {
									message: "Delivery type is required"
								}
							}
						},
						packaging: {
							validators: {
								notEmpty: {
									message: "Packaging type is required"
								}
							}
						},
						preferreddelivery: {
							validators: {
								notEmpty: {
									message: "Preferred delivery window is required"
								}
							}
						}
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger,
						bootstrap: new FormValidation.plugins.Bootstrap
					}
				})), r.push(FormValidation.formValidation(e, {
					fields: {
						ccname: {
							validators: {
								notEmpty: {
									message: "Credit card name is required"
								}
							}
						},
						ccnumber: {
							validators: {
								notEmpty: {
									message: "Credit card number is required"
								},
								creditCard: {
									message: "The credit card number is not valid"
								}
							}
						},
						ccmonth: {
							validators: {
								notEmpty: {
									message: "Credit card month is required"
								}
							}
						},
						ccyear: {
							validators: {
								notEmpty: {
									message: "Credit card year is required"
								}
							}
						},
						cccvv: {
							validators: {
								notEmpty: {
									message: "Credit card CVV is required"
								},
								digits: {
									message: "The CVV value is not valid. Only numbers is allowed"
								}
							}
						}
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger,
						bootstrap: new FormValidation.plugins.Bootstrap
					}
				})), (t = new KTWizard(i, {
					startStep: 1,
					clickableSteps: !1
				})).on("beforeNext", function (i) {
					r[i.getStep() - 1].validate().then(function (i) {
						"Valid" == i ? (t.goNext(), KTUtil.scrollTop()) : Swal.fire({
							text: "Sorry, looks like there are some errors detected, please try again.",
							icon: "error",
							buttonsStyling: !1,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn font-weight-bold btn-light-primary"
							}
						}).then(function () {
							KTUtil.scrollTop()
						})
					}), t.stop()
				}), t.on("change", function (t) {
					KTUtil.scrollTop()
				}))
			}()
	}
};
jQuery(document).ready(function () {
	KTLogin.init()
});
