function menu() {
    alert(" OK dan BUKA TAB BARU :D ");
}

function hitung() {
    var jarak = parseFloat(document.data.jarak.value);
    var total = 0.0;
    if (jarak >= 1) {
        total = jarak * 5000;
    } else {
        total = 5000;
    }
    document.data.biaya.value = eval(total);
}