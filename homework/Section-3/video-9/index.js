console.log("VD3: JS check String length");

setTimeout(() => {

    alert(' Con nhện có bao nhiêu chân : \n\
            1. không có \n\
            2. 4 chân \n\
            3. 8 chân \n\
            4. 12 chân' );

    while (true) {
        let n = prompt('Nhập vào lựa chọn của bạn');
        if (n == null || n == undefined) {
            alert('GoodBye!');
            break;
        } else {

            if (n < 1) {
                alert('Không hợp lệ, vui lòng nhập 1,2,3 hoặc 4');
            } else if (n < 3) {
                alert('Đáp án sai, trả lời lại ?');
            } else if (n == 3) {
                alert('bạn đã đúng');
                alert('con nhện có 8 chân')
                break;
            } else if (n == 4) {
                alert('Đáp án sai, trả lời lại ?');
            } else {
                alert('Không hợp lệ, vui lòng nhập 1,2,3 hoặc 4')
            }            

        }


    }


}, 3000);