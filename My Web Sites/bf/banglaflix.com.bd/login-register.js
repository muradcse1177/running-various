/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 *
 */
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with your Banglalink Number 88019XXXXXXXX and get Pincode');
    });
    $('.error').removeClass('alert alert-danger').html('');

}

function showForgetForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.forgetBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Enter Your Banglalink Number to Get Pincode');
    });
    $('.error').removeClass('alert alert-danger').html('');

}

function showLoginForm(){

    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('#loginModal .forgetBox').fadeOut('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');
        });

        $('.modal-title').html('Login with your Banglalink Number as 88019XXXXXXXX and Pincode');
    });
     $('.error').removeClass('alert alert-danger').html('');
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');
    }, 230);

}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');
    }, 230);

}

function openForgetModal(){
    showForgetForm();
    setTimeout(function(){
        $('#loginModal').modal('show');
    }, 230);

}

function loginAjax(){
   var username = document.getElementById('email').value;
  var password = document.getElementById('password').value;

    $.post( "./api/makemylogingettoken_web.php", { username: username, password: password })
 	 .done(function( data ) {
 	  if(data == 1){
                window.location.replace("/alpha");
            } else {
                 shakeModal();
            }
 	 //window.location.replace("/alpha");
   // alert( "Data Loaded: " + data );
  });
    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");
            } else {
                 shakeModal();
            }
        });
    */

/*   Simulate error message from the server   */
   //  shakeModal();
}

function signupAjax(){
   var username = document.getElementById('email2').value;

    $.post( "./api/flix_signup_web.php", { msisdn: username})
 	 .done(function( data ) {
 	  if(data == 1){
                window.location.replace("/alpha");
            }
            else if (data==2){
				window.location.replace("signup.php");
			}
            else if (data==3){
				window.location.replace("forget.php");
						}
            else if (data==4){
                 window.location.replace("error.php");
            }
  });

}


function forgetAjax(){
   var username = document.getElementById('email3').value;

    $.post( "./api/flix_signup_web.php", { msisdn: username, forget: "forget"})
 	 .done(function( data ) {
 	  if(data == 5){
                window.location.replace("forget.php");
            }

            else{
                 window.location.replace("error.php");
            }
  });

}



function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Invalid Mobile No/Pincode combination");
             $('input[type="password"]').val('');
             setTimeout( function(){
                $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000 );
}

