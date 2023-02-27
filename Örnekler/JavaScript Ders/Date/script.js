var date=new Date();
console.log(date);

var yil=date.getFullYear();
var ay=date.getMonth();
var gun=date.getDay();

console.log(yil+" Yılının "+ay+". Ayı "+gun+". Günündeyiz");


var dt=new Date("5/13/2016 17:30:11"); // "Ay/Gün/Yıl  Saat/Dakika/Saniye"  13 Mayıs 2016
var dt1= new Date(2016,4,13,17,30,11) // Yıl,Gün,Ay,Saat,Dakika,Saniye  13 Mayıs 2016

console.log(dt);
console.log(dt1);


var dtc=new Date("1/1/2000");
var dtc_day= dtc.getDate();
dtc.setDate(dtc_day-1);

console.log(dtc);



var datenow=new Date();
var dtt= new Date("6/18/2023");

var datefarkmilisecond=dtt-datenow;
var saniye=datefarkmilisecond/1000;
var dakika=saniye/60;
var saat=dakika/60;
var gunn=saat/24;

console.log(datefarkmilisecond);
console.log(saniye+" Saniye");
console.log(dakika+" Dakika");
console.log(saat+" Saat");
console.log(gunn+" Gün");
