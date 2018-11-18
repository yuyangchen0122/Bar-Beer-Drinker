$().ready(function() {
    $( "#State" ).change(function() {
    	var State = $( "#State" ).val();
    	$("#State option[value='0']").remove();

       	$.ajax({ url: "SearchBar.php",
         data: {state_id: State},
         type: 'get',
         async: false,
         success:
         function(msg) {
         	$('#Bar').find('option').remove().end();
         	var Bar = jQuery.parseJSON(msg);
         	for(var i = 0 ; i < Bar.length ; i++)
         	{
         		$('#Bar').append('<option value="'+Bar[i].id+'">'+Bar[i].Bar+'</option>');
         	}
       	 }
        });
    	$('#Item').find('option').remove().end();
    	$('#Item').append('<option value="0">Please choose a Bar</option>');

	});

	$( "#Bar" ).change(function() {
    	var Bar = $( "#Bar" ).val();
        $.ajax({ url: "SearchItem.php",
         data: {bar_id: Bar},
         type: 'get',
         async: false,
         success:
         function(msg) {
         	$('#Item').find('option').remove().end();
         	var Item = jQuery.parseJSON(msg);
         	for(var i = 0 ; i < Item.length ; i++)
         	{
         		$('#Item').append('<option value="'+Item[i].id+'">'+Item[i].Item+'</option>');
         	}
       	 }
        });
	});	
});