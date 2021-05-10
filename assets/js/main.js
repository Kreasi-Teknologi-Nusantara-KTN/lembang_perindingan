// $.noConflict();

jQuery(document).ready(function($) {

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	} );

	jQuery('.selectpicker').selectpicker;


	$('#menuToggle').on('click', function(event) {
		$('body').toggleClass('open');
	});

	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

	// $('.user-area> a').on('click', function(event) {
	// 	event.preventDefault();
	// 	event.stopPropagation();
	// 	$('.user-menu').parent().removeClass('open');
	// 	$('.user-menu').parent().toggleClass('open');
	// });


});

function updateProfile(link) {
  let formEdit    = document.getElementById("formEdit");
  let nama        = document.getElementById("nama");
  let myformData  = new FormData(formEdit);
  let email       = document.getElementById("email");
  jQuery.ajax({
    url     : link + 'admin/upload.html', 
    type    : "POST",
    processData: false,
    contentType: false,
    cache: false,
    data: myformData,
    enctype: 'multipart/form-data',
    success: function(result){
      if (result.foto !== false) {
        dataUpdate  = {
          displayName : nama.value,
          photoURL    : result.foto
        }
      } else {
        dataUpdate  = {
          displayName : nama.value
        }
      }
      let user  = firebase.auth().currentUser;

      user.updateProfile(dataUpdate);
      user.updateEmail(email.value);
      
      window.location.href = link + "admin/my_profile.html";
    }
  });
}