function pilihan(){
    var x = document.getElementById("selectWisata").value;
    var harga = document.getElementById("harga");
    var total = document.getElementById("total");
    // harga.innerHTML = 'Harga tiket ini adalah Rp. ' + x;

    var dewasa = document.getElementById("dewasa").value;
    var anak = document.getElementById("anak").value;

    if (dewasa == 1 && anak == 1) {
        harga.innerHTML = 'Harga tiket adalah Rp. ' + x;
        total.innerHTML = 'Total harga tiket adalah Rp. ' + x;
    } else {
        var hargaTiketDewasa = x * dewasa;
        var hargaTiketAnak = x * anak;
        var totalHargaTiket = hargaTiketDewasa + hargaTiketAnak
        harga.innerHTML = 'Harga tiket adalah Rp. ' + x;
        total.innerHTML = 'Total harga tiket adalah Rp. ' + totalHargaTiket;
        
    };
}

function buttonSubmit(){
    alert('Tiket Berhasil Dipesan!')
}