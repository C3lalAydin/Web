var cik=true;
while (cik==true) {
    max=10;
    min=1
    var i=Math.round(min+Math.random()*(max-min));
    var sor=prompt("Sayı Tahmin Edin");

    if (sor>i) {
        console.log("Bilemediniz Birazcık Aşağı İnin");
    }else if (i>sor) {
        console.log("Bilemediniz Birazcık Yukarı Çıkın");
    }else if (i==sor) {
        console.log("Bildiniz");
        cik=false
    }
}

    


