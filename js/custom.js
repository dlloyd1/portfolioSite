$.vegas('slideshow', 
  {
    delay:5000,
      backgrounds:
      [
        { src:'./img/congruent.png', fade:2000 },
        { src:'./img/stardust.png', fade:2000 },
        { src:'./img/zigzagwool.png', fade:2000 },
        { src:'./img/lodyas.png', fade:2000 }
      ]
  }
)

('overlay', 
  {
    src:'./img/overlay.png'
  }
);

$(function()
  {
    $('#Grid').mixitup(); //jquery plugin mixitup - used for filtering portfolio images
  }
);

$(function() 
{
  $('a[href*=#]:not([href=#])').click(function() 
  {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) 
    {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) 
      {
        $('html,body').animate(
        {
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
    
$(document).ready(function() 
{
  $('#nav').scrollToFixed();
});
