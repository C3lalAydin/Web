var kim=prompt('Kimsin? (Çıkmak İçin "Cancel")');

kim=kim.toLowerCase();


if (kim == "cancel") {
    console.log("İşlem İptal Edildi");
}else if (kim == "admin") {
    var sifre=prompt('Şifrenizi Giriniz');
    if (sifre == "cancel") {
        console.log("İşlem İptal Edildi");
    }else if (sifre === "123admin") {
        console.log("Giriş Yapıldı");
    }else {
        console.log("Şifre Yanlış");
    }
}else {
    console.log(`${kim} Adında Bir Kullancı Yok`);
}