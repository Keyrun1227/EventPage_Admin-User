 $(document).ready(function() {
    
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
    fields: {
user_password: {
            validators: {
                notEmpty: {
                        message: 'Please enter your Password'
                    },
                    remote: {
                        url: 'event_password_check.php',
                        type: 'POST',
                        data:{
                            email: function() {
                                return $("#contact_form  :input[name='email']").val();
                        }
                    },
                        message: 'Wrong Password'    
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    },
                    remote: {
                        url: 'event_mail_check.php',
                        type: 'POST',
                        data:{
                        type:'email'
                        },
                        message: 'You are not Yet Registered.Please Register First.'    
                    }
                }
            },
            event:{
                validators:{
                    notEmpty:{
                        message: "Select One Option"
                    }
                }
            },
            type:{
                validators:{
                    notEmpty:{
                        message: "Select One Option"
                    }
                }
            },
            member_email1:{
                validators: {
                    
                    emailAddress:{
                        message:'invalid'
                    },
                    remote:{
                        url: 'event_mail_check1.php',
                        type: 'POST',
                        data:{
                            type:'email'
                        },
                        message:'You are not Yet Registered.Please Register First.'
                    }
                }
            },
            member_email2:{
                validators: {
                    
                    emailAddress:{
                        message:'invalid'
                    },
                    remote:{
                        url: 'event_mail_check2.php',
                        type: 'POST',
                        data:{
                            type:'email'
                        },
                        message:'You are not Yet Registered.Please Register First.'
                    }
                }
            },
            member_email3:{
                validators: {
                    
                    emailAddress:{
                        message:'invalid'
                    },
                    remote:{
                        url: 'event_mail_check3.php',
                        type: 'POST',
                        data:{
                            type:'email'
                        },
                        message:'You are not Yet Registered.Please Register First.'
                    }
                }
            },
            member_email4:{
                validators: {
                    
                    emailAddress:{
                        message:'invalid'
                    },
                    remote:{
                        url: 'event_mail_check4.php',
                        type: 'POST',
                        data:{
                            type:'email'
                        },
                        message:'You are not Yet Registered.Please Register First.'
                    }
                }
            },
            member_email5:{
                validators: {
                    
                    emailAddress:{
                        message:'invalid'
                    },
                    remote:{
                        url: 'event_mail_check5.php',
                        type: 'POST',
                        data:{
                            type:'email'
                        },
                        message:'You are not Yet Registered.Please Register First.'
                    }
                }
            }
            
            /*,
            contact_no: {
                validators: {
                  stringLength:
                  {
                    min:10,
                    max:10,
                  },
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                
                }
            },
            otp: {
                validators: {
                    identical:{
                        field: 'otpcheck',
                        message: 'Incorrect OTP'
                    },
                    notEmpty: {
                        message: 'Please Enter Your OTP'
                    }
                }
            },
            otpcheck: {
                validators: {
                    identical:{
                        field: 'otp',
                        message: 'Incorrect OTP'
                    }
                    
                }
            }*/
            
            }
        })
        // .on('success.form.bv', function(e) {
            // $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                // $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            // e.preventDefault();

            // Get the form instance
            // var $form = $(e.target);
            

            // Get the BootstrapValidator instance
            // var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
     //       $.post($form.attr('action'), $form.serialize(), function(result) {
       //         console.log(result);
         //   }, 'json');
        //});
//});
 
 //$(document).on("click", ".btn-warning", function () {
   //      var bootstrapValidator = $('#multiform').data('bootstrapValidator');
     //    bootstrapValidator.enableFieldValidators('price', false);
    });