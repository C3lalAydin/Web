document.getElementById("prgrf"); //İd si Paragraf Olan Etiketi Seçer

document.getElementById("prgrf").style.backgroundColor = "limegreen";
//İd si Paragraf Olan Etiketi Seçer Ve Arka Planını Limegreen yapar

document.getElementsByClassName("link"); //Class ı link olan etiketi seçer



document.querySelector(".link"); //Class ı kutu Olan etiketi seçer


document.querySelector("p").innerHTML = "<b>innerHTML ile Bu Bir Paragraftır</b>";
document.querySelector("p").style.width = "100px";
document.querySelector("p").style.height = "100px";
document.querySelector("p").style.backgroundColor = "firebrick";
document.querySelector("p").style.textAlign = "center";

document.querySelector("li:nth-child(2)").innerHTML = "Bu Bir Li";

document.querySelector("li:last-child").classList.add("JS");
//Son li Etiketini seçer ve Etikete JS Classını ekler

var liler = document.querySelectorAll("li");
//Sayfada ki bütün li'leri seçer

liler.forEach(function (item, index) {
    item.textContent = ` ${index + 1}. Madde`;
});

const li = document.createElement("li");
//Yeni Bir Li Etiketi Oluşturur

li.className.add = "liste";
//Yeni Li ye liste adın da bir class ekler

li.setAttribute("title", "Bu Bir Li'dir")
//Attribute ekler örnek <li title="Bu Bir Li'dir" class="liste"></li>

const text = document.createTextNode("Yazı");
li.appendChild(text);
//Li'nin İçine Yazı Eklenir
//   <li title="Bu Bir Li'dir" class="liste">Yazı</li>

document.querySelector(".list").appendChild(li);
//Class'ı list olan etiket seçilir altına oluşturduğumuz li etiketini ekler





var div_prf = document.querySelector(".paragraflar");
var paragraf=document.querySelector("#prgrf");

div_prf.removeChild(paragraf);
//Seçilen Etiketi Siler



var textnode=document.createTextNode("Yeni Li");
var liste=document.querySelector(".list");

liste.replaceChild(textnode,liste.children[5]);
//replaceChild Etiketleri Değiştirir
//İlk Değiştirilcek Girilir Sonra Değiştirilecek Şey Girilir