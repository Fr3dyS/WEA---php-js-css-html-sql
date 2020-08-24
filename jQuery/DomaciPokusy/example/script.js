$(function(){

   var zdroj = $('#vkladani .one');

   $('#vkladani .two').html( zdroj.html() );
   $('#vkladani .three').text( zdroj.text() );   
   $('#vkladani .four').text( zdroj.html() ); 

   /*$('#vkladani .three').append("<b>Ahoj, já jsem APPEND</b>");
   $("<i>Ahoj, já jsem APPENDTO</i>").appendTo('#vkladani .three');

   $( $('#vkladani .two').html() ).appendTo( $('#vkladani .three') );

   $('#vkladani .one').prepend( $('#vkladani .four') );*/

   $('#vkladani .one').after("<div id='pres_after'>Ahoj, jsem vložený přes <b>.after()</b></div>");
   $('#pres_after').insertAfter( $('#vkladani .two') );

   $('#pres_after').before("<div id='pres_before'>Ahoj, jsem vložený přes <b>.before()</b></div>");

   // $('#pres_before').wrap('<section><article></article></section>');

   // $('#pres_before').unwrap('<article></article>');

   $('#pres_before').wrap( "<div><div><p><em><b></b></em></p></div></div>" );

   $('#pres_after, #vkladani .four').wrapAll( $('.gray') ) ;

   $('#pres_after').wrapInner( '<div class="red"></div>' ) ;
});