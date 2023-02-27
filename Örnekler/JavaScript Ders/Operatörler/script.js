function indexHesaplama(kilo,boy) {
    index=kilo/(boy*boy)
    return index;
}

function indexKisiDurum(kisi) {
    if (kisi>=0 && kisi<18.5) {
        return "Zayıf";
    }

    if (kisi>=18.5 && kisi<25) {
        return "Normal";
    }

    if (kisi>=25 && kisi<30) {
        return "Kilolu";
    }

    if (kisi>=30 && kisi<34.9) {
        return "Şişman";
    }


}




var kisi1 = {
    kilo: 72,
    boy: 1.75
};

var kisi2 = {
    kilo: 55,
    boy: 1.60
};

var kisi1_index=indexKisiDurum(indexHesaplama(kisi1.kilo,kisi1.boy));
var kisi2_index=indexKisiDurum(indexHesaplama(kisi2.kilo,kisi2.boy));



if (kisi1_index < kisi2_index) {
    console.log("Kişi 2 nin index durumu, kişi 1'in index durumundan büyüktür. Kişi 2'nin Durumu: "+kisi2_index);
}
if (kisi1_index > kisi2_index) {
    console.log("Kişi 1'in index durumu , kişi 2 nin index durumundan büyüktür. Kişi 1'in Durumu: "+kisi1_index);
}

if (kisi1_index == kisi2_index) {
    console.log("Kişi 1 ve Kişi 2 nin durumları eşittir İkisinin durumu: "+kisi1_index);
}

