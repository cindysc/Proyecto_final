	//GOOGLE MAPS
	var marker = null;
	var mymap = null;

	//DARKSKY SETTINGS


	var coords = {
		stg: '-33.4377968,-70.6504451',
		vlp: '-33.0458456,-71.6196749',
		qta : '-32.879997,-71.2473555',
		vna : '-33.0245031, -71.55181166666667',
	}

	$(document).ready(function(){

        generarMapa();
		//Llamada ajax para cargar datos de ciudad de santiago en primera carga de página
		//ajaxCall(coords['stg']);

		$(document).on('change','#select',function(){

			var selected = $(this).val();

			if(selected != ""){

				changeMarkerPosition(coords[selected]);
				//ajaxCall(coords[selected]);

			}

		});

	});


	//Función que inicializa mapa con marcador en Santiago de Chile
	function generarMapa() {

        mymap = L.map('map').setView([-33.02435557387417,-71.5551418989172], 13);
		L.tileLayer('https://api.mapbox.com/styles/v1/cindysanhueza/cjs92s8v42b1b1ft8a7rohxbt/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoiY2luZHlzYW5odWV6YSIsImEiOiJCVWVsUTBZIn0.7cZxUC2vdDdYsR9PLUKKGQ', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		}).addTo(mymap);

		//Creamos nuevo marcador de mapa
		var marker = L.marker([-33.4377968,-70.6504451]).addTo(mymap);
		var marker = L.marker([-33.02435557387417,-71.5551418989172]).addTo(mymap);
		var marker = L.marker([-33.0240542,-71.5514042]).addTo(mymap);


		marker.bindPopup("<b>Curso | Pintura de caja vintage</b><br>Materiales no incluidos").openPopup();


		//localizador botón
		L.control.locate().addTo(mymap);
    }


	//Función para generar un nuevo marcador
    function changeMarkerPosition(coords) {

		//Separamos el string de coordenadas
        var latitud = coords.split(",")[0];
		var longitud = coords.split(",")[1];

        mymap.panTo(new L.LatLng(latitud, longitud));

		L.marker([latitud,longitud]).addTo(mymap);

    }

	//variable para usar gps de localización
	var lc = L.control.locate({
		position: 'topright',
		cacheLocation: true,
		keepCurrentZoomLevel: true,
		strings: {
			title: "Muestrame donde estoy"
		}
	}).addTo(mymap);
