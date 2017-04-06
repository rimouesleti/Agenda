function LoadSearchModule() {
	Microsoft.Maps.loadModule('Microsoft.Maps.Search', {callback : searchRequest})
}


function createSearchManager() {
	map.addComponent('searchManager', new Microsoft.Maps.Search.SearchManager(map));
	searchManager = map.getComponent('searchManager');
}

function searchRequest() {
	createSearchManager();
	var query = '2 Impasse Edmond Rostand , 69005 , Lyon , France';
	if(query!="")
    {
	var request = {
		query : query,
		count : 20,
		startIndex : 0,
		bounds : map.getBounds(),
		callback : search_onSearchSuccess,
		errorCallback : search_onSearchFailure
	};
	searchManager.search(request);
    }
	else
		alert('champ vide');
}

function search_onSearchSuccess(result, userData) {
	var searchResults = result && result.searchResults;
	if (searchResults) {
		for ( var i = 0; i < searchResults.length; i++) {
			search_createMapPin(searchResults[i]);
		}
		if (result.searchRegion && result.searchRegion.mapBounds) {
			map.setView( {
				bounds : result.searchRegion.mapBounds.locationRect
			});
		} else {
			alert('pas de resultat');
		}
	}
}

function search_createMapPin(result) {
	if (result) {
		var pin = new Microsoft.Maps.Pushpin(result.location, null);
                console.log(pin)
		Microsoft.Maps.Events.addHandler(pin, 'click', function() {
			search_showInfoBox(result)
		});
		map.entities.push(pin);
	}
}

function search_showInfoBox(result) {
	if (currInfobox) {
		currInfobox.setOptions( {
			visible : true
		});
		map.entities.remove(currInfobox);
	}
	currInfobox = new Microsoft.Maps.Infobox(result.location, {
		title : result.name,
		description : [ result.address, result.city, result.state,
				result.country, result.phone ].join(' '),
		showPointer : true,
		titleAction : null,
		titleClickHandler : null
	});
	currInfobox.setOptions( {
		visible : true
	});
	map.entities.push(currInfobox);
}

function search_onSearchFailure(result, userData) {
	alert('Search  failed');
}


