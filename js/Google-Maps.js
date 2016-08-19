var map, draggable;
$(document).ready(function () {
    google.maps.event.addDomListener(window, 'load', initialize);
});

function initialize() {
    if( $('#googleMap').attr('position') == 'contactanos' ) {
        var $lat = 25.733913,
            $long = -100.314735,
            $title = 'Ponderosa';
    }

    var map_canvas = document.getElementById('googleMap');

    var map_options = {
        center: new google.maps.LatLng(25.733713, $long),
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        streetViewControl: false,
        //draggable: !("ontouchend" in document)
    };

    map = new google.maps.Map(map_canvas, map_options);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng($lat, $long),
        map: map,
        title: $title,
        url: 'http://maps.google.com/maps?q=loc:'+String($lat)+','+String($long)
    });

    google.maps.event.addListener(marker, 'click', function() {
        /*window.location.href = this.url;*/
        window.open(this.url,'_blank');
    });
}