
var gun;
var hafta;

switch (new Date().getDay()) {
    case 0:
        gun = "Pazar";
        break;
    case 1:
        gun = "Pazartesi";
        break;
    case 2:
        gun = "Salı";
        break;
    case 3:
        gun = "Çarşamba";
        break;
    case 4:
        gun = "Perşembe";
        break;
    case 5:
        gun = "Cuma";
        break;
    case 6:
        gun = "Cumartesi";
        break;

    default:
        console.error("Hata Gün Seçilemedi");
}

switch (new Date().getDay()) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        hafta = "Hafta İçi";
        break;
    case 6:
    case 0:
        hafta = "Hafta Sonu";
        break;

    default:
        console.error("Hata Hafta Seçilemedi");
}

console.log(`Bugün Günlerden ${gun}`);
console.log(`Şu An ${hafta}`);