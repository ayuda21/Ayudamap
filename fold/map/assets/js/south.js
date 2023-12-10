const apiKey = 'pk.eyJ1IjoiYWxmcmVkMjAxNiIsImEiOiJja2RoMHkyd2wwdnZjMnJ0MTJwbnVmeng5In0.E4QbAFjiWLY8k3AFhDtErA';

const mymap = L.map('map', {
    zoomControl: false,
    minZoom: 13,
    maxZoom: 18
}).setView([14.661873719779733, 120.99098735678655], 14);



var oms = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    maxZoom: 18,
    id: 'mapbox/satellite-streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    zoomDelta: 0.25,
    zoomSnap: 0,
    accessToken: apiKey

});

var CartoDB_Voyager = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
   
    subdomains: 'abcd',
    maxZoom: 18,

});



var CartoDB_DarkMatter = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
    
    subdomains: 'abcd',
    maxZoom: 18,

});
CartoDB_DarkMatter.addTo(mymap);



var baseLayers = {
    "Street View": CartoDB_Voyager,
    "Dark": CartoDB_DarkMatter,
    "Satellite": oms,
};

L.control.layers(baseLayers).addTo(mymap);