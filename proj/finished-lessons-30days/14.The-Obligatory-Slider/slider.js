
///$.css(); $.children(); $find(); .length; .width; $.show(); $.data(); $.on(); $.animate; $.first;
//$.width() gets the single width of a group of elems
(function($) {
    
    ///*----------- initialize dimensions----------------
    //overflow hidden
    // get width & maxlength
    // set focusview
    // get totalwidth
    // focuswidth
            
 var   $slider_ulli = $('div.slider').css('overflow','hidden').find('ul').children('li'), 
       imgs=$slider_ulli.find('img'),
       swidth=imgs.width(), //or imgs[0].width
       NumImgs=imgs.length,
       focusView=1,
       totalWidth=swidth*NumImgs;
      
     //  console.log(swidth+ ' ' +NumImgs + ' ' + totalWidth) ;
          
     ///*----------- selector trigger & focusview pointer----------------   
     // trigger selector
     // check direction by buttons clicked then +- focusview
     // if focusview < 1 then imglast is focuswidth = - (totalwidth - imgwidth)  (+=)
     // elseif focusview > maxlength then img1 is focuswidth = imgwidth -imgwidth or 0 (-=)
     
      nav = $('div#slider-nav').show().children('button').on('click', function() {
    //    console.log( this);
       var $this = $(this),
           direction = $this.data('dir');
          // console.log(direction);
           
           (direction=="next") ? ++focusView: --focusView;
          // console.log(focusView);
           
           if(focusView < 1) {
             //  console.log(focusView+ ' >');
               focusView = 5;
           } else if(focusView > NumImgs) {
             //  console.log(focusView+ ' <');
               focusView = 1;
           }
           focusWidth=-(swidth * focusView);
        //   console.log(focusWidth);
           container = $('div.slider ul');
           transistion(container, focusWidth+swidth);
      });
      
       function transistion(container,focusWidth) {

          console.log(container + ' transistion ' + focusWidth);
          container.animate({'margin-left' : focusWidth},500,'linear');
       }

    //*---------- transition function -------------------
    
           ///get unit to add or minus
           /// $.animate ({'margin-left' : unit ? (unit + widthfactor) : widthfactor })
           




    
})(jQuery);

