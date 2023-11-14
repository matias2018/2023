jQuery(document).ready(function($) {
  
  var maxFilter = 0;
  
  $( ".filter-btn" ).click(function(e) {

    e.preventDefault();

    var thisBtn = $(this);


    
   switch ( $( ".filter-btn" ).index( this ) ) {
     
      case 0 :
        if(!thisBtn.hasClass('filter-active')){
          maxFilter += 1;
          thisBtn.addClass('filter-active');
          thisBtn.addClass('workTypeBtn');
          $('.obra[data-category="Obras e Equipamentos Sociais"]').addClass('hidden');
          checkWorkTypes()
        } else if(thisBtn.hasClass('filter-active') && $('.filter-active').length > 1){
          maxFilter -= 1;
          thisBtn.removeClass('filter-active');
          thisBtn.removeClass('workTypeBtn');
          $('.obra[data-category="Recuperação de Património"]').addClass('hidden');
          $('.obra[data-category="Obras e Equipamentos Sociais"]').removeClass('hidden');
        } else if(thisBtn.hasClass('filter-active') && $('.filter-active').length === 1){
          maxFilter -= 1;
          thisBtn.removeClass('filter-active');
          thisBtn.removeClass('workTypeBtn');
          $('.hidden').removeClass('hidden');
        }
        /* value = "Recuperação de Património"; */
        break;
      case 1 :
        if(!thisBtn.hasClass('filter-active')){
          maxFilter += 1;
          thisBtn.addClass('filter-active');
          thisBtn.addClass('workTypeBtn');
          $('.obra[data-category="Recuperação de Património"]').toggleClass('hidden');
          checkWorkTypes()
        } else if(thisBtn.hasClass('filter-active') && $('.filter-active').length > 1){
          maxFilter -= 1;
          thisBtn.removeClass('filter-active');
          thisBtn.removeClass('workTypeBtn');
          $('.obra[data-category="Recuperação de Património"]').removeClass('hidden');
          $('.obra[data-category="Obras e Equipamentos Sociais"]').addClass('hidden');
        } else if(thisBtn.hasClass('filter-active') && $('.filter-active').length === 1){
          maxFilter -= 1;
          thisBtn.removeClass('filter-active');
          thisBtn.removeClass('workTypeBtn');
          $('.hidden').removeClass('hidden');
        }
        /* value = "Obras e Equipamentos Sociais"; */
        break;
      case 2 :
        if(!thisBtn.hasClass('filter-active')) {
          maxFilter += 1;
          thisBtn.addClass('filter-active');
          $('.done_').toggleClass('hideDone');
          checkFilters();
        } else {
          maxFilter -= 1;
          thisBtn.removeClass('filter-active');
          $('.done_1').toggleClass('hideDone');
          checkFilters();
        }
        break;
      case 3 :
        if(!thisBtn.hasClass('filter-active')) {
          maxFilter += 1;
          thisBtn.toggleClass('filter-active');
          $('.done_1').toggleClass('hideDone');
          checkFilters();
        } else {
          maxFilter -= 1;
          thisBtn.removeClass('filter-active');
          $('.done_').toggleClass('hideDone');
          checkFilters();
        }
        break;
    }
   
    if( (thisBtn.hasClass('filter-active') && maxFilter > 3) ) {
      location.reload();
    }
    /* $( "span" ).text( "" + value );  */
  });

  function checkWorkTypes() {
    var filters = $('.workTypeBtn');
    var hidden = $('.hidden');
    console.log(filters);
    if(filters.length >= 2 || filters.length < 1) {
      hidden.removeClass('hidden')
    }
  }

  function checkFilters() {
    var filters = $('.filter-active[data-filter="Concluded"]');
    var hidden = $('.hideDone');
    if(filters.length >= 2 || filters.length < 1) {
      hidden.removeClass('hideDone');
    };
  }

})
