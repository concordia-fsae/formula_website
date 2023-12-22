//This makes header background appear white when scrolling down 20 px.
window.onscroll = function() {scrollFunction()};


function scrollFunction() {
  if (window.innerWidth > 750){
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.querySelector("header").style.background = "rgba(255,255,255,0.8)";
    } 
    else {
      document.querySelector("header").style.background = "unset";
   }
  }
  else {
    document.querySelector("header").style.background = "unset";
  }
}

// this is the full google maps java code
// Initialize and add the map
let map;

async function initMap() {
  // The location of CONCORDIA FORMULA RACING
  const position = { lat: 45.497296578930325, lng: -73.57879827627701 };
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  // The map, centered at Uluru
  map = new Map(document.getElementById("map"), {
    zoom: 13, // ZOOM IS RESPONSIBLE OF HOW ZOOMED IN WE ARE (0 BEING THE VIEW OF THE WHOLE EARTH)
    center: position,
    mapId: "DEMO_MAP_ID",
  });

  // The marker, positioned at Uluru
  const marker = new AdvancedMarkerElement({
    map: map,
    position: position,
    title: "CONCORDIA FORMULA RACING",
  });
}

initMap();