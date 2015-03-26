

(function($) {
    var sliderUL = $('div.slider').css('overflow','hidden').children('ul'),
        imgs = sliderUL.find('img'), 
     //   imgWidth = imgs.first().width(),
     //   imgWidth = imgs.first().css('width'), ///225px
        imgWidth = imgs[0].width, //225px
        imgsLen = imgs.length, //5
        current = 1,
        totalImgsWidth = imgWidth * imgsLen;
       // console.log(totalImgsWidth);  
      
    $('#slider-nav').show().find('button').on('click',function()  {
        //console.log('clicked rbtm');
        var direction =  $(this).data('dir'); //$(this).attr('data-dir');
            loc = imgWidth; //
      //  console.log(direction);
        
        ///update value of current
        (direction === 'next') ? ++current : --current;
        
      /// if 1st image, go to last pic
        if (current === 0) {
            current = imgsLen;
            direction === 'next';
            loc = -(totalImgsWidth - imgWidth); //
             //console.log(loc);
        } else if(current - 1 === imgsLen) { // if last image, go to 1st image
            current = 1;
            loc = 0; /// needs to be 0 ready to animate to expand
        }
        
        transition(sliderUL, loc, direction);
        // console.log(loc);
    });
    
    function transition(container, loc, direction) {
        var unit; /// -= +=
        
        if (direction && loc !== 0) {
            unit = (direction === 'next') ? '-=' : '+=';
        }
        
        container.animate({
            //'margin-left': unit + 225 // '-=225' /// width
            'margin-left' : unit ? (unit + loc) : loc /// +- 225 or 0
            
        })
   //  console.log(unit+loc);
     
    }
    
})(jQuery);

