console.log("VD3: JS check String length");

setTimeout(() => {

    let n;
    while (true) {
        n = prompt('Nhap vao ten cua ban');
        if(n == ''){
            break;
        }
        if (n.length > 15) {
            alert('Ten cua ban qua dai');
        } else {
            alert('good name');
            break;
        }
    }


}, 3000);