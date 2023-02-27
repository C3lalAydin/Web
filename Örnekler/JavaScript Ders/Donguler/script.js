var giris=false;

while (giris==false) {
  var k_adi=prompt("Kullanıcı Adı Giriniz: ")
  var sifre=prompt("Şifre Giriniz: ")

 if (k_adi=="admin" && sifre=="1234") {
    console.log("Giriş Yapıldı "+k_adi);
    giris=true;
  }else {
    console.log("Giriş Yapılamadı");
  }
}
