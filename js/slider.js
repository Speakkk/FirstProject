/*function fun1() {
    var polz_value = document.getElementById('polz_slider').value; // polz - ползунок
    var input_el = document.getElementById('polz_value'); // value - значение
    input_el.value=polz_value;
	//alert(polz);
	console.log(polz_value);
}
*/
/*function fun2() {
    var polz_value = $('#polz_slider').val(); // polz - ползунок
    $('#polz_value').val(polz_value); // value - значение
	//alert(polz_value);
	//console.log(polz_value);
	jQuery("#polz_slider").slider({

	min: 0,

	max: 1000,

    values: [0,1000],

	range: true

	});
}  */



   $( function() {
    $( "#slider" ).slider({
      range: "min",
      value: 1,
      min: 1,
      max: 99,
      slide: function( event, ui ) {
        $( "#slider_value" ).text( ui.value );
		$( "#age_value" ).val( ui.value );
      }
    });
    $( "#slider_value" ).text($( "#slider" ).slider( "value" ) );
  } );