$().ready(function() {
    $( "#country" ).change(function() {
    	var country = $( "#country" ).val();
    	$("#country option[value='0']").remove();

       	$.ajax({ url: "SearchBar.php",
         data: {country_id: country},
         type: 'get',
         async: false,
         success:
         function(msg) {
         	$('#region').find('option').remove().end();
         	var region = jQuery.parseJSON(msg);
         	for(var i = 0 ; i < region.length ; i++)
         	{
         		$('#region').append('<option value="'+region[i].id+'">'+region[i].region+'</option>');
         	}
       	 }
        });
    	$('#city').find('option').remove().end();
    	$('#city').append('<option value="0">Please choose a Bar</option>');

	});

	$( "#region" ).change(function() {
    	var region = $( "#region" ).val();
        $.ajax({ url: "SearchItem.php",
         data: {region_id: region},
         type: 'get',
         async: false,
         success:
         function(msg) {
         	$('#city').find('option').remove().end();
         	var city = jQuery.parseJSON(msg);
         	for(var i = 0 ; i < city.length ; i++)
         	{
         		$('#city').append('<option value="'+city[i].id+'">'+city[i].city+'</option>');
         	}
       	 }
        });
	});	
});