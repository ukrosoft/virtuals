/**
 * Created by ANDREY on 28.10.15.
 */
jQuery(window).on('resize load', function () {
    if (jQuery(window).width() <= 751){
        jQuery('.menu-toggle').removeClass('hide');
    }
    if (jQuery(window).width() >= 752){
        jQuery('.menu-toggle').addClass('hide');
    }
});
jQuery(document).ready(function($) {


//jQuery('#stripe_modal').on('show.bs.modal', function (event) {
////    var button = jQuery(event.relatedTarget);
////    var amount = button.data('amount');
////    var title = button.data('title');
////
////    var modal = jQuery(this);
////    modal.find('.modal-title').text(title);
////    modal.find('#wp_stripe_amount').val(amount);
////    modal.find('#wp_stripe_amount').attr('readonly',true);
////    modal.find('#wp_stripe_comment').val(title);
//
//});

});
jQuery( 'form.payment_paymill' ).submit(function(event, token) {

    //event.preventDefault();

    // do something useful with the token

    //console.log(token);
//    jQuery.ajax({//login ajax
//        url: MyAjax.ajaxurl,//http://perssistant.ai.ukrosoft.com.ua/wp-admin/admin-ajax.php
//        type: 'POST',
//        data: {
//            action: 'payment_paymill'
//        },
//        beforeSend: function (xhr) {
//            console.log(xhr);
//        },
//        success: function (data) {
//            console.log(data);
//        },
//        error: function (errorThrown) {
//            console.log(errorThrown);
//        }
//    });


});


