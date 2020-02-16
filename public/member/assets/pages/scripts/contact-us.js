var ContactUs = function () {

    return {
        //main function to initiate the module
        init: function () {
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    div: '#map',
                    lat: 23.777176,
                    lng: 90.399452,
                });
                var marker = map.addMarker({
                    lat: 23.777176,
                    lng: 90.399452,
                    title: 'Loop, Inc.',
                    infoWindow: {
                        content: "<b>Daffodil International University, Library.</b> 100/A, Shukrabad, Mirpur Road, Dhaka<br>"
                    }
                });

                marker.infoWindow.open(map, marker);
            });
        }
    };

}();

