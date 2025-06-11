if(document.querySelector('#comments')){
    var submit = document.getElementById('sub');
    var comment = document.getElementById('comment');
    var comment2 = document.getElementById('comment-2');
    var author = document.querySelector(".comment-form-author");
    var email = document.querySelector(".comment-form-email");
    var url = document.querySelector(".comment-form-url");
    var close = document.querySelector(".close");
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];

    comment.setAttribute("placeholder", "Mời bạn để lại bình luận");
    
    if(submit){
        submit.addEventListener('click', function(){
            if( comment.value == '' ){
                modal.style.display = "none";
                alert('Chưa có nội dung phần bình luận !');
            }else{
                modal.style.display = "block";
                comment2.value = comment.value;
            }
        });
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        close.onclick = function() {
            modal.style.display = "none";
        }
        document.getElementById('reply-title').remove();
    }
}