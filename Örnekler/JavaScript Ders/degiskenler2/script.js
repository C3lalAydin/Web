var ad="Celal";
var soyad="Aydın";
var tc="11111111111";
var siparis1= "70";
var siparis2= "48.3";
var siparis_toplam=Number(siparis1)+Number(siparis2);

const BirthYear=2007;
var yas=new Date().getFullYear()-BirthYear;

var cinsiyet=true;
var adres={
    sehir: "Antalya",
    semt: "Kepez"
};
var hobiler= ["Kitap","Yazılım"];

console.log(ad);
console.log(soyad);
console.log(tc);
console.log(siparis_toplam);
console.log(yas);
console.log(cinsiyet);
console.log(adres.semt);
console.log(hobiler[1]);