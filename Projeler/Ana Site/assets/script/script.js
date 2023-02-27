const url = 'https://api.openweathermap.org/data/2.5/';
const key = '8ca7bd10b3287f02fcef129f98069504';

var sehir = document.getElementById("sehir2").innerHTML;
const city2 = sehir.trim();

var derece_div = document.getElementById("derece")
var havadurumu_div = document.getElementById("havadurumu")
var sehir_div = document.getElementById("sehir")

var icon = document.getElementById("icon")
var id;

/*
$("#search").click(function() {
    $text = $("#sehir_input").val()
    let query = url + "weather?q=" + $text + "&appid=" + key + "&units=metric&lang=tr";

});*/


let query = url + "weather?q=" + city2 + "&appid=" + key + "&units=metric&lang=tr";
console.log(query);


function HavaDurumu_Bilgi() {
    fetch(query)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            var id = data.weather[0].id;
            var havadurumu = data.weather[0].description;
            console.log(id);

            derece_div.innerText = Math.round(data.main.temp) + " °C";
            havadurumu_div.innerText = havadurumu[0].toUpperCase() + havadurumu.slice(1);
            sehir_div.innerText = data.name;


            if (id == 200) {
                icon.innerHTML = '<i class="wi wi-night-lightning"></i>';
            } else if (id == 201) {
                icon.innerHTML = '<i class="wi wi-night-lightning"></i>';
            } else if (id == 202) {
                icon.innerHTML = '<i class="wi wi-night-lightning"></i>';
            } else if (id == 210) {
                icon.innerHTML = '<i class="wi wi-night-lightning"></i>';
            } else if (id == 211) {
                icon.innerHTML = '<i class="wi wi-night-lightning"></i>';
            } else if (id == 212) {
                icon.innerHTML = '<i class="wi wi-night-lightning"></i>';
            } else if (id == 221) {
                icon.innerHTML = '<i class="wi wi-night-lightning"></i>';
            } else if (id == 230) {
                icon.innerHTML = '<i class="wi wi-night-lightning"></i>';
            } else if (id == 231) {
                icon.innerHTML = '<i class="wi wi-night-lightning"></i>';
            } else if (id == 232) {
                icon.innerHTML = '<i class="wi wi-night-lightning"></i>';
            } else if (id == 300) {
                icon.innerHTML = '<i class="wi wi-night-hail"></i>';
            } else if (id == 301) {
                icon.innerHTML = '<i class="wi wi-night-hail"></i>';
            } else if (id == 302) {
                icon.innerHTML = '<i class="wi wi-night-hail"></i>';
            } else if (id == 310) {
                icon.innerHTML = '<i class="wi wi-night-hail"></i>';
            } else if (id == 311) {
                icon.innerHTML = '<i class="wi wi-night-hail"></i>';
            } else if (id == 312) {
                icon.innerHTML = '<i class="wi wi-night-hail"></i>';
            } else if (id == 313) {
                icon.innerHTML = '<i class="wi wi-night-hail"></i>';
            } else if (id == 314) {
                icon.innerHTML = '<i class="wi wi-night-hail"></i>';
            } else if (id == 321) {
                icon.innerHTML = '<i class="wi wi-night-hail"></i>';
            } else if (id == 500) {
                icon.innerHTML = '<i class="wi wi-night-rain"></i>';
            } else if (id == 501) {
                icon.innerHTML = '<i class="wi wi-night-rain"></i>';
            } else if (id == 502) {
                icon.innerHTML = '<i class="wi wi-night-rain"></i>';
            } else if (id == 503) {
                icon.innerHTML = '<i class="wi wi-night-rain"></i>';
            } else if (id == 504) {
                icon.innerHTML = '<i class="wi wi-night-rain"></i>';
            } else if (id == 511) {
                icon.innerHTML = '<i class="wi wi-snowflake-cold"></i>';
            } else if (id == 520) {
                icon.innerHTML = '<i class="wi wi-showers"></i>';
            } else if (id == 521) {
                icon.innerHTML = '<i class="wi wi-showers"></i>';
            } else if (id == 522) {
                icon.innerHTML = '<i class="wi wi-showers"></i>';
            } else if (id == 531) {
                icon.innerHTML = '<i class="wi wi-showers"></i>';
            } else if (id == 600) {
                icon.innerHTML = '<i class="wi wi-snowflake-cold"></i>';
            } else if (id == 601) {
                icon.innerHTML = '<i class="wi wi-snowflake-cold"></i>';
            } else if (id == 602) {
                icon.innerHTML = '<i class="wi wi-snowflake-cold"></i>';
            } else if (id == 611) {
                icon.innerHTML = '<i class="wi wi-snowflake-cold"></i>';
            } else if (id == 612) {
                icon.innerHTML = '<i class="wi wi-snowflake-cold"></i>';
            } else if (id == 613) {
                icon.innerHTML = '<i class="wi wi-snowflake-cold"></i>';
            } else if (id == 615) {
                icon.innerHTML = '<i class="wi wi-snowflake-cold"></i>';
            } else if (id == 616) {
                icon.innerHTML = '<i class="wi wi-snowflake-cold"></i>';
            } else if (id == 620) {
                icon.innerHTML = '<i class="wi wi-snowflake-cold"></i>';
            } else if (id == 621) {
                icon.innerHTML = '<i class="wi wi-snowflake-cold"></i>';
            } else if (id == 622) {
                icon.innerHTML = '<i class="wi wi-snowflake-cold"></i>';
            } else if (id == 701) {
                icon.innerHTML = '<i class="wi wi-strong-wind"></i>';
            } else if (id == 711) {
                icon.innerHTML = '<i class="wi wi-strong-wind"></i>';
            } else if (id == 721) {
                icon.innerHTML = '<i class="wi wi-strong-wind"></i>';
            } else if (id == 731) {
                icon.innerHTML = '<i class="wi wi-strong-wind"></i>';
            } else if (id == 741) {
                icon.innerHTML = '<i class="wi wi-strong-wind"></i>';
            } else if (id == 751) {
                icon.innerHTML = '<i class="wi wi-strong-wind"></i>';
            } else if (id == 761) {
                icon.innerHTML = '<i class="wi wi-strong-wind"></i>';
            } else if (id == 762) {
                icon.innerHTML = '<i class="wi wi-strong-wind"></i>';
            } else if (id == 771) {
                icon.innerHTML = '<i class="wi wi-strong-wind"></i>';
            } else if (id == 781) {
                icon.innerHTML = '<i class="wi wi-strong-wind"></i>';
            } else if (id == 800) {
                icon.innerHTML = '<i class="wi wi-moon-alt-full"></i>';
            } else if (id == 801) {
                icon.innerHTML = '<i class="wi wi-night-cloudy"></i>';
            } else if (id == 802) {
                icon.innerHTML = '<i class="wi wi-cloud"></i>';
            } else if (id == 803) {
                icon.innerHTML = '<i class="wi wi-cloudy"></i>';
            } else if (id == 804) {
                icon.innerHTML = '<i class="wi wi-cloudy"></i>';
            } else {
                icon.innerHTML = 'Deneme';
            }
        });
}

HavaDurumu_Bilgi();