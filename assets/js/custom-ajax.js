// new version

function slickCarousel(count) {
    $('.intro_slider_index').slick({
        slidesToShow: count > 3 ? 3 : count,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: false,
        responsive: [
          {
            breakpoint: 960,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
            },
          },
        ],
    });
}


  function destroyCarousel() {
    if ($('.intro_slider_index').hasClass('slick-initialized')) {
      $('.intro_slider_index').slick('destroy');
    }      
  }

  $('.main-rent-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots:true,
    arrows: false,
  });


jQuery(document).ready(function($) {
    
    // The currentPostType variable is set in the PHP template
    let currentPostType = 'buy'
    if (window.location.href.includes('/buy/')){
        currentPostType = 'buy'
    }
    if (window.location.href.includes('/rent/')){
        currentPostType = 'rent'
    }
    if (window.location.href.includes('/offplan/')){
        currentPostType = 'offplan'
    }

    let selectedTags = []; // Array to store selected tag IDs

    $('.change_post_type').on('click', function() {
        currentPostType = $(this).data('post-type');
        loadPosts(currentPostType, null); // Load posts for the selected post type
    });

    $('.filter-tag').on('click', function() {
        let tagId = $(this).data('tag-id');
        let tagIndex = selectedTags.indexOf(tagId);

        if (tagIndex > -1) {
            selectedTags.splice(tagIndex, 1); // Remove tag if already selected
        } else {
            selectedTags.push(tagId); // Add tag if not selected
        }

        loadPosts(currentPostType, selectedTags); // Load posts for the selected tags and post type
    });

   
    var more = 10;
    $('.show_more').on('click', function() {
		more = more +10;
        loadPosts(currentPostType, selectedTags, more); // Reload posts with ACF field filters
    });



    if (window.location.href.includes('/buy/') || window.location.href.includes('/rent/') || window.location.href.includes('/offplan/')){
        $('.filter__btns-btn-status').on('change', function() {
            loadPosts(currentPostType, selectedTags); // Reload posts with ACF field filters
        });
    }
    $('.filter__btns-select-category').on('change', function() {
        loadPosts(currentPostType, selectedTags); // Reload posts with ACF field filters
    });
	$('.filter__btns-btn-category').on('click' , function(){
		loadPosts(currentPostType, selectedTags);
	})
	$('.filter__btns-btn-status').on('click' , function(){
		loadPosts(currentPostType, selectedTags);
	})
	$('.filter__btns-btn-status-page').on('change' , function(){
		loadPosts(currentPostType, selectedTags);
	})
	$('.select-stype').on('change' , function(){
		loadPosts(currentPostType, selectedTags);
	})
	$('.select-bedrooms').on('change' , function(){
		loadPosts(currentPostType, selectedTags);
	})
    $('.filter__btns-select-status').on('change', function() {
        loadPosts(currentPostType, selectedTags); // Reload posts with ACF field filters
    });
	$('.max_price_mob').on('change', function() {
        loadPosts(currentPostType, selectedTags); // Reload posts with ACF field filters
    });
	$('.min_price_mob').on('change', function() {
        loadPosts(currentPostType, selectedTags); // Reload posts with ACF field filters
    });
    $('.filter__btns-type').on('change', function() { 
        $('.filter__btns-type_second').val('')
        loadPosts(currentPostType, selectedTags); // Reload posts with ACF field filters
    });
    $('.filter__btns-type_second').on('change', function() {
        $('.filter__btns-type').val('')
        loadPosts(currentPostType, selectedTags); // Reload posts with ACF field filters
    });
    $('.filter__btns-rooms').on('change', function() {
        loadPosts(currentPostType, selectedTags); // Reload posts with ACF field filters
    });
	$('.filter__btns-select-category_mob').on('change', function() {
        loadPosts(currentPostType, selectedTags); // Reload posts with ACF field filters
    });
    $('.max_price').on('change', function() {
        loadPosts(currentPostType, selectedTags); // Reload posts with ACF field filters
    });
    $('.min_price').on('change', function() {
        loadPosts(currentPostType, selectedTags); // Reload posts with ACF field filters
    });
	loadPosts(currentPostType, selectedTags);
    jQuery('.filter_send_btn button').on('click' , function(e){
        e.preventDefault();
        loadPosts(currentPostType, selectedTags);
    })

    function loadPosts(postType, tagIds, more ) {
        let acf_category = $('.filter__btns-btn-category.active').data('category');
        let acf_category_mob = $('.filter__btns-select-category').val();
        let property_status = $('.filter__btns-btn-status.active').data('status');
        let property_status_mob = $('.filter__btns-select-status').val();
        if (window.location.href.includes('/buy/')){
            property_status = $('.filter__btns-btn-status-page').val()
            acf_category = $('.filter__btns-select-category').val()
			if(more == "" || more == null ){
				more = 10;
			}
        }
        if (window.location.href.includes('/rent/')){
            property_status = $('filter__btns-btn-status.active-desc').val()
            acf_category = $('.filter__btns-select-category').val()
			if(more == "" || more == null ){
				more = 10;
			}
        }
        if (window.location.href.includes('/offplan/')){
            property_status = $('.filter__btns-btn-status.active-desc').val()
            acf_category = $('.filter__btns-select-category').val()
			if(more == "" || more == null ){
				more = 10;
			}
        }
        let property_stype = $('.filter__btns-type').val();
        let property_stype_second = $('.filter__btns-type_second').val();
        let bedrooms = $('.filter__btns-rooms').val();
        let max_price = $('.max_price').val();
        let min_price = $('.min_price').val();
        let mob = false;
        
        if (window.innerWidth <= 990) {
            mob = true;
			property_status = property_status_mob;
			acf_category = $('.filter__btns-select-category_mob').val();
			property_stype = $('.select-stype.active select').val();
			bedrooms = $('.select-bedrooms').val();
			min_price = $('.min_price_mob').val();
			max_price = $('.max_price_mob').val();
        }
		console.log('acf-category='+acf_category);
		console.log('acf-cat-mob='+acf_category_mob);

        $.ajax({
            url: ajax_params.ajax_url,
            type: 'POST',
            data: {
                action: 'filter_posts',
                post_type: postType,
                tag_id: tagIds,
                acf_category: acf_category,
                acf_category_mob: acf_category_mob,
                property_status: property_status,
                property_status_mob: property_status_mob,
                property_stype: property_stype.length > 0 ? property_stype : property_stype_second,
                bedrooms: bedrooms,
                max_price: parseInt(max_price),
                min_price: parseInt(min_price),
                mob: mob,
                paged : more
            },
            success: function(response) {
				console.log(response.data.requiest);
                if (response.success) {
                    destroyCarousel(); // Destroy existing Slick slider
                    $('#post-container').empty().html(response.data.posts); // Clear and update the post container
                    $('.product-count').text(`Found ${response.data.post_count} results`);
                    if(window.location.href.includes('/buy/') || window.location.href.includes('/rent/') || window.location.href.includes('/offplan/')){
                        $('.product__grid').empty().html(response.data.posts)
                    }
                    if (response.data.post_count >= 3) {
                        let sliderCount = 3;
                        slickCarousel(sliderCount); // Reinitialize the Slick slider with new content
                    }
                    if (response.data.post_count < 3) {
                        let sliderCount = response.data.post_count >= 2 ? response.data.post_count : 1;

                        slickCarousel(sliderCount); // Reinitialize the Slick slider with new content
                    }

                } else {
                    destroyCarousel(); // Destroy existing Slick slider
                    // $('#post-container').empty().html('No posts found.');
                    $('.product-count').text(`Found 0 results`);
                }
            },
            error: function(error) {
                $('#post-container').html('');
            }
        });
    }


});


function checkField(name, text) {
    var field = jQuery('input[name="' + name + '"]');
    if (field.val() != "") {
        if (name == "client_email") {
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(field.val())) {
                field.before('<span class="abs_message">Please enter a valid email address</span>');
                setTimeout(function () {
                    jQuery('span.abs_message').remove();
                }, 2500)
            } else {
                return true;
            }
        }
        if (name === 'client_phone') {
            if (field.val().length < 7) {
                field.before('<span class="abs_message">Please enter a valid phone number. Phone number length more 6');
                setTimeout(function () {
                    jQuery('span.abs_message').remove();
                }, 2500)
            } else {
                return true;
            }
        }
        else {
            return true;
        }
    } else {
        field.before('<span class="abs_message">Please write your ' + text + "</span>");
        setTimeout(function () {
            jQuery('span.abs_message').remove();
        }, 2500)
    }


}



jQuery('form .main-btn').on('click', function (e) {
	console.log(validForm());
    if (validForm()) {
        window.MINDALL_CRM.init(
            '8a0d54a2-56eb-4e98-8b08-9532a2233828',
            {
                formId: 'book_crm_form',
                prevent: false,

                inputs: {
                    firstname: { name: 'client_name' },
                    lastname: { name: 'client_last_name' },
                    phone: (formHtml) => {
                        return formHtml.querySelector('#tel').value.replaceAll(/[()+\- ]/g, '')
                    },
                    email: { name: 'client_email' },
                },

                meta: {
                    source: 'website',
                    sourceId: 'Lead',
                },
            }
        )

    }else{
		alert('The fields were filled in incorrectly');
	}

})



jQuery('form .single-page-send-btn').on('click', function (e) {
    if (validForm()) {
        window.MINDALL_CRM.init(
            '8a0d54a2-56eb-4e98-8b08-9532a2233828',
            {
                formId: 'book_crm_form_single_page',
                prevent: false,

                inputs: {
                    firstname: { name: 'client_name' },
                    lastname: { name: 'client_last_name' },
                    phone: (formHtml) => {
                        return formHtml.querySelector('#tel').value.replaceAll(/[()+\- ]/g, '')
                    },
                    email: { name: 'client_email' },
					propertyReference: { name: 'property' },
                },

                meta: {
                    source: 'website',
                    sourceId: 'Lead',
                },
            }
        )

    }else{
		alert('The fields were filled in incorrectly');
	}

})

function validForm(){
    var check = true;
    if(!checkField('client_last_name' , ' last name')){
        check = false;
		return check;
    }
    if(!checkField('client_name' , ' name')){
        check = false;
		return check;
    }
    if(!checkField('client_email' , 'email')){
        check = false;
		return check;
    }
    if(!checkField('client_phone' , ' phone number. Example : +971530 4584545')){
        check = false;
		return check;
    }
	return check;
}

jQuery('.close-modal-btn').click(function(){
	jQuery('.lw-modal-overlay').fadeOut(400);
})


// jQuery('.send_form').on('click', function(){
    
//     window.MINDALL_CRM.init(
//         '9223c96f-9fee-49a8-96dd-e0d5befd606d',
//         {
//           url: 'https://dev.crm.mindall.online/api/api/lead/create/byExternalForm ',
//           formId: 'single_book_form',
//           prevent: false,
    
//           inputs: {
//             firstname: { name: 'yourname' },
//             lastname: { name: 'yourlastname'},
//             phone: (formHtml) => {
//                 return formHtml.querySelector('input[type="tel"]').value.replaceAll(/[()+\- ]/g, '')
//             },
//             email: { name: 'email' },
//           },
    
//           meta: {
//             source: 'website',
//             sourceId : 'Lead',
//           },
//         }
//       )

// })





