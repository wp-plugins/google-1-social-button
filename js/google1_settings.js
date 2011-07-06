jQuery(document).ready(function(){
   
    jQuery('#google1_button_type').change(function(){
      if( jQuery(this).val() == 'sm_with_count' ){
         jQuery('img.preview_sm_with_count').fadeIn('slow');
         jQuery('img#preview_google1_button').not('img.preview_sm_with_count').css('display', 'none');
      }else if( jQuery(this).val() == 'sm_without_count' ){
         jQuery('img.preview_sm_without_count').fadeIn('slow');
         jQuery('img#preview_google1_button').not('img.preview_sm_without_count').css('display', 'none');
      }else if( jQuery(this).val() == 'm_with_count' ){
         jQuery('img.preview_m_with_count').fadeIn('slow');
         jQuery('img#preview_google1_button').not('img.preview_m_with_count').css('display', 'none');
      }else if( jQuery(this).val() == 'm_without_count' ){
         jQuery('img.preview_m_without_count').fadeIn('slow');
         jQuery('img#preview_google1_button').not('img.preview_m_without_count').css('display', 'none');
      }else if( jQuery(this).val() == 'st_with_count' ){
         jQuery('img.preview_st_with_count').fadeIn('slow');
         jQuery('img#preview_google1_button').not('img.preview_st_with_count').css('display', 'none');
      }else if( jQuery(this).val() == 'st_without_count' ){
         jQuery('img.preview_st_without_count').fadeIn('slow');
         jQuery('img#preview_google1_button').not('img.preview_st_without_count').css('display', 'none');
      }else if( jQuery(this).val() == 't_with_count' ){
         jQuery('img.preview_t_with_count').fadeIn('slow');
         jQuery('img#preview_google1_button').not('img.preview_t_with_count').css('display', 'none');
      }
      
   });
});
