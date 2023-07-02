function initMap() {
    var myLatLng = {lat: -6.1754, lng: 106.8272}; 

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Lokasi'
    });
  }