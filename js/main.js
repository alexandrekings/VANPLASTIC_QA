if ( $('.et_pb_scroll_top').length ) {
			$(window).scroll(function(){
				if ($(this).scrollTop() > 400) {
					$('.et_pb_scroll_top').show().removeClass( 'et-hidden' ).addClass( 'et-visible' );
				} else {
					$('.et_pb_scroll_top').removeClass( 'et-visible' ).addClass( 'et-hidden' );
				}
			});

			//Click event to scroll to top
			$('.et_pb_scroll_top').click(function(){
				$('html, body').animate({scrollTop : 0},800);
			});
		}

// 		    $("#contactForm").submit(function(event){
//     // cancels the form submission
//     event.preventDefault();
//     submitForm();
// });

//            function submitForm(){
//     // Initiate Variables With Form Content
//     var name = $("#pedidoNombre").val();
//     var email = $("#pedidoTel").val();
//     var message = $("#pedidoCorreo").val();
 
//     $.ajax({
//         type: "POST",
//         url: "proceso.php",
//         data: "name=" + name + "&email=" + email + "&message=" + message,
//         success : function(text){
//             if (text == "success"){
//                 formSuccess();
//             }
//         }
//     });
// }
// function formSuccess(){
//     $( "#msgSubmit" ).removeClass( "hide" );
// }