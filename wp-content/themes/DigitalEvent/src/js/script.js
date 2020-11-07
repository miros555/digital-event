jQuery(function($){

	var dataID = '';

	$('.agenda-card__event').click(function(){
		dataID =  $(this).attr('data-id');
		
		console.log(dataID);
		console.log(arr_events);
		
		if(arr_events.includes(dataID)){
			$(".meine").prop('checked', true);
		}else{
			$(".meine").prop('checked', false);
		}
		
		return;
	});
        
		
	$('.close__icon').click(function(){
		dataID =  '';
		console.log(dataID);
		return;
	});
        
        
	$('.conf_choice').click(function(){
			
			
		if ( $(".meine").prop('checked')&&!arr_events.includes(dataID) ){
		
			$.ajax({
				type: "POST",
				url:'/wp-admin/admin-ajax.php',
				data: {
					action:'select',
					eventID:dataID,
					action_type:'add'
				},
				success: function(data) {
					dataID = '';
					location.reload();
				}
			})
	
		}
		
		
		if(!$(".meine").prop('checked')&&arr_events.includes(dataID)){   
								
			$.ajax({
				type: "POST",
				url:'/wp-admin/admin-ajax.php',
				data: {
					action:'select',
					eventID:dataID,
					action_type:'delete'
				},
				success: function(data) {
					dataID = '';
					location.reload();
				}
			})
		}
        
		
		if( $(".ical").prop('checked') ){   console.log(dataID);

			$.ajax({
				type: "POST",
				url:'/wp-admin/admin-ajax.php',
				data: {
					action:'select',
					eventID:dataID,
					action_type:'ical_event'
				},
				success: function(data) {
					console.log(data);
					dataID = '';
					var response = confirm("Download the selected Event file for import to iCal, Google Calendar etc?");
					// Start file download.
					if(response==true){
						download("calendar.ics", data);
					}else{
						return false;
					}
					//location.reload();
				}
			})
		}
		
		return;
    });
     
	 
	function download(filename, text) {
		var element = document.createElement('a');
		element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
		element.setAttribute('download', filename);
		element.style.display = 'none';
		document.body.appendChild(element);
		element.click();
		document.body.removeChild(element);
	}
	 
	 
	$('.modal_exit').click(function(){
		location.reload();
	});
	  
	  
	$('.my-event-card__close').click(function(){
		var data_id = $(this).attr('data-id');
		$(this).closest('.my-event-card__item').fadeOut(400);		
		arr_events = arr_events.filter(item => item !== data_id);
					
		$.ajax({
			type: "POST",
			url:'/wp-admin/admin-ajax.php',
			data: {
				action:'select',
				eventID:data_id,
				action_type:'delete'
			},
			success: function(data) {
				console.log('success');
				console.log(arr_events);
				if(arr_events.length==0){
					$('.notification').html('<h2 style="color:white;">Keine gemerkten Events vorhanden. Klicken Sie bei einem gewünschten Termin auf Event merken, um diesen hier zu speichern. So haben Sie stets einen Überblick Ihrer Event-Auswahl.</h2>');
				}
				data_id = '';
				//location.reload();
				return false;
			}
		})	
		
	});
	  
	  
	  
        
});       