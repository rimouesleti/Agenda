var map = null;
var map2 = null;
 
 
 function get_clients()
{  
	$.ajax({
        type: 'post', 
        url: '_server/db/clients_filter.php', 
        dataType: 'json',
		success: function(m) {
		boundsMap=new Array();
		m.forEach(function(item)
            {
		       var locE=item['position_client'];
                  var l=new Array();
                  l = locE.split(",");
				  var longitude=parseFloat(l[0]);
	              var lattitude=parseFloat(l[1]);
				  boundsMap.push(new Microsoft.Maps.Location(longitude,lattitude));
				  var pushpinOptions = {icon: '/assets/pushP/ppc/client/'+item['pushpin_color']+'1.png' , width: 34, height: 50 , draggable: false}; 
                  var pushpin= new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(longitude,lattitude), pushpinOptions); 
                  map.entities.push(pushpin);
				  map.entities.push(new Microsoft.Maps.Infobox(pushpin.getLocation(),{title :'<font color="#FF9900">'+item['nom_client']+" "+item['prenom_client']+'</font>',description :'<a href="tel:'+item['tel_client']+'">Tel : '+item['tel_client']+'</a><br><a href="mailto:'+item['email_client']+'"> E-mail :'+item['email_client']+'</a><br>Position :'+locE+'<br><center><button data-role="button" onclick="itineraireAction(\'' + locE + '\',\'' + item['ville_client'] + '\',\'' + item['adresse_client'] + '\')" >ajouter a l&apos;Itin&eacute;raire</button><button data-role="button" onclick="location.href = \'fichedetailleclient.php?id='+item['id_client']+'\';" >voir la fiche d&eacute;taill&eacute;e</button></center>', pushpin : pushpin}));
		          Microsoft.Maps.Events.addHandler(pushpin,'click',displayInfo); 
			});
		   map.setView({bounds: Microsoft.Maps.LocationRect.fromLocations(boundsMap), padding: 100});
		},
		error: function(m)
		{}
   		});
		

}
 
 function displayInfo(e)
 {
     if (e.targetType == "pushpin") {

				  
				 var pushpinOptions = {icon: '/assets/pushP/ppc/client/default1.png' , width: 34, height: 50 , draggable: false}; 
                  var pushpin= new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(e.target._location.latitude,e.target._location.longitude), pushpinOptions); 
   map2.entities.push(pushpin);
 map2.entities.push(new Microsoft.Maps.Infobox(pushpin.getLocation(),{title :'aaaa', description :'aaaa',pushpin : pushpin})); 
 map2.setView({ zoom: 10, center: new Microsoft.Maps.Location(e.target._location.latitude,e.target._location.longitude) })
				  
				 
              }
 }

 function GetMap() {
 

	Microsoft.Maps.loadModule('Microsoft.Maps.Themes.BingTheme',
		{
			callback : function() {
			map = new Microsoft.Maps.Map(document.getElementById('divMap'),
			{
				credentials : "AoqgNgDfcQ1C-pSBC6q8hJj9jxslNxwEzb8sySpQJtOZSCtg3GXWy11AFqx_5--Z",
				mapTypeId : Microsoft.Maps.MapTypeId.road,
				enableClickableLogo : false,
				enableSearchLogo : false,
				center : new Microsoft.Maps.GeoLocationProvider(map).getCurrentPosition({ showAccuracyCircle: false }),
				zoom : 5,
				showBreadcrumb : false,
				theme : new Microsoft.Maps.Themes.BingTheme()
			});		
       get_clients();
			}
		});
		Microsoft.Maps.loadModule('Microsoft.Maps.Themes.BingTheme',
		{
			callback : function() {
			map2 = new Microsoft.Maps.Map(document.getElementById('divMap2'),
			{
				credentials : "AoqgNgDfcQ1C-pSBC6q8hJj9jxslNxwEzb8sySpQJtOZSCtg3GXWy11AFqx_5--Z",
				mapTypeId : Microsoft.Maps.MapTypeId.road,
				enableClickableLogo : false,
				enableSearchLogo : false,
				center : new Microsoft.Maps.GeoLocationProvider(map2).getCurrentPosition({ showAccuracyCircle: false }),
				zoom : 5,
				showBreadcrumb : false,
				theme : new Microsoft.Maps.Themes.BingTheme()
			});
			}
		});
		
 }
