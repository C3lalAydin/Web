$(document).ready(function(){
    // $(".yazilar").append("Deneme"); Yazılar Classına Deneme Yazısını ekler
    $("#buton3").css({backgroundColor: "red"});  
    $("#buton3").css({color: "blue"});
    $("li:nth-child(3)").css({backgroundColor: "green"}); //3. li nin arka planını yeşil yapar
    $("button:first-child").css({backgroundColor: "purple"}); //ilk butonun arka planını mor yapar
    $("button:last-child").css({backgroundColor: "aqua"}); 


    var yazilar=$(".yazilar")
    $("#gizle").click(function () {  //id si gizle olan etikete tıklandığında
        yazilar.hide(1000);  //class ı yazilar olan şeyi 1 saniyede gizle
        
    });
    $("#goster").click(function () { 
        yazilar.show(600);
        
    });
    $("#toggle").click(function () { 
        yazilar.toggle(2000);
        
    });
    $("#acil-kapan").click(function () { 
        yazilar.slideDown(1000).slideUp(1000);
        
    });
    $("#eleman-ekle").click(function () { 
        yazilar.prepend("Celal"); //En başa text ekle
        yazilar.append("Aydın"); //En sona text ekle
        
    });
    $("#li-sil").click(function () { 
        $("li:first-child").remove(); //ilk li yi siler
        
    });

    var kutu= $("#kutu");
    var poz= kutu.position();
    var sol=poz.left;
    $("#anim-start").click(function () { 
        kutu.css({position:"relative"}); 
        while(sol<=1100){  //kutunun sol pozisyonu 1100 den büyük olasaya kadar tekrarla
            kutu.animate({
                left: "1000", 
            });
            sol+=10; 
        }
        
    });

    var zaman = setInterval(kac, 1000);

    function kac() {
        var d = new Date();
        var saat = d.getHours();
        var dakika = d.getMinutes();
        var saniye = d.getSeconds();
        $(".saat").text(saat);
        $(".dakika").text(dakika);
        $(".saniye").text(saniye);
  }

});