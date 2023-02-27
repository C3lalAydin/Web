var sayi= 12.78913547;

console.log(sayi.toPrecision(3)); //Sayının İlk 3 Basamağını Gösterir
console.log(sayi.toFixed(3)); //Sayının ondalıklı kısmını 3 basamaklı yapar

console.log(Math.round(sayi)); //Sayıyı yuvarlar ondalıklı kısımları atar
console.log(Math.ceil(sayi)); //Sayıyı Yukarıya yuvarlar ondalıklı kısımları atar
console.log(Math.floor(sayi)); //Sayıyı Aşağıya yuvarlar ondalıklı kısımları atar

console.log(Math.min(5,2,7,97,40,248,4,12)); //Girilen Sayılardan En Küçük olanını seçer
console.log(Math.max(5,2,7,97,40,248,4,12)); //Girilen Sayılardan En büyük olanını seçer

sayimax=100;
sayimin=50;

console.log(Math.round(sayimin+Math.random()*(sayimax-sayimin)));
/*  

Random bir sayı üretilir
Max alabilceği Min alabilceği değerden çıkarılıp random değer ile çarpılır
Çıkan sonucun üstüne Min değeri eklenir

*/