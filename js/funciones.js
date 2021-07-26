	$(document).ready(function(){

	$('input[name="date"]').datepicker({
			format: 'yyyy-mm-dd',
            autoclose: true,
		})


	})

$(function(){

    let razas = [
    {"name": "Cocker", "code": "Albania"},{"name": "Caniche", "code": "Caniche"},
    {"name": "Boxer", "code": "Boxer"}, {"name": "Chihuahua", "code": "Chihuahua"},
    {"name": "Chow Chow", "code": "Chow Chow"},{"name": "Dogo Argentino", "code": "Dogo Argentino"},
    {"name": "Fox Terrier", "code": "Fox Terrier"},{"name": "Galgo ", "code": "Galgo"},
    {"name": "Pastor Alemán", "code": "Pastor Alemán"},{"name": "Pit Bull", "code": "Pit Bull"},
    {"name": "Mestizo", "code": "Mestizo"},{"name": "San Bernardo", "code": "San Bernardo"},
]
var options = {
    data: razas,

    getValue: "name",

    list: {
        match: {
            enabled: true
        }
    }
};
$("#raza").easyAutocomplete(options);
});

$(function(){

    let t_mascota = [
    {"name": "Perro", "code": "Perro"},{"name": "Gato", "code": "Gato"},
    {"name": "Conejo", "code": "Conejo"}, {"name": "Hámster", "code": "Hámster"},
    {"name": "Tortuga", "code": "Tortuga"},{"name": "Hurón", "code": "Hurón"},
    {"name": "Cobaya", "code": "Cobaya"},{"name": "Chinchilla ", "code": "Chinchilla"},
    {"name": "Dragón barbudo", "code": "Dragón barbudo"},{"name": "Pájaros", "code": "Pájaros"},
    {"name": "Cerdo", "code": "Cerdo"},{"name": "Peces", "code": "Peces"},
]
var options = {
    data: t_mascota,

    getValue: "name",

    list: {
        match: {
            enabled: true
        }
    }
};
$("#t_mascota").easyAutocomplete(options);
});