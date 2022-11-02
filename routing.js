function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 14.92150835140474, lng: 120.75601227719818},
        zoom: 15,
        mapId: 'd3e2ae0b1abcb6ce',
        mapTypeControl: false,
        fullscreenControl: false,
        streetViewControl: false
    });
    
const markers = [
    [
        "Evacuation Center",
        14.919398202242517,
        120.76236775595213,
        "location.png",
        38,
        31
    ],
    [
        "Node 1",
        14.919582341997032, 
        120.74908647779893,
        "location.png",
        38,
        31
    ],
    [
        "Node 2",
        14.920577350509369,
        120.7498678890806,
        "location.png",
        38,
        31
    ],
    [
        "Node 3",
        14.916632622121728,
        120.75909203475528,
        "location.png",
        38,
        31
    ],
    [
        "Barangay Hall",
        14.915427393051926,
        120.75432937115785,
        "location.png",
        38,
        31
    ]
];
    
    for(let i = 0; i<markers.length; i++){
        const currMarker = markers[i];
        
        const marker = new google.maps.Marker({
            position: {lat: currMarker[1], lng: currMarker[2]},
            map,
            title: currMarker[0],
            icon: {
                src: currMarker[3],
                scaledSize: new google.maps.Size(currMarker[4], currMarker[5])
            },
            animation: google.maps.Animation.DROP
        });
    
        const infowindow = new google.maps.InfoWindow({
            content: currMarker[0],
        });
    
        marker.addListener("click", () => {
            infowindow.open(map, marker);
        });
    }
}