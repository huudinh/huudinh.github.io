const controller = {};

// Add Job
controller.addJob = () => {
    document.getElementById('addBtn').addEventListener('click', ()=>{
        //Read Input
        let inputValue = document.getElementById("myInput").value;

        if (inputValue === '') {
            alert("You must write something!");
        } else {
            
            let jobName = inputValue;
            // Add Job to DB
            model.addListJob(jobName);

        }
        document.getElementById("myInput").value = "";
    });
}

// Remove Job
controller.removeJob = () => {
    let del = document.getElementsByClassName('close');
    let text = document.getElementsByClassName('text');
    // console.log(del.length);
    for(let i = 0; i < del.length; i++){
        del[i].onclick = function (){
            
            // Truyen Doi So Ten Job vao ham Remove trong Model
            let jobDel = text[i].textContent;
            // console.log(jobDel);
            model.removeListJob(jobDel);
        }
    }

}

// Checked Job
controller.finishJob = () => {
    let text = document.getElementsByClassName('text');
    let li = document.getElementsByTagName('li');
    
    for(let i = 0; i < li.length; i++){
        text[i].onclick = function (){
            if(text[i]){
                let jobFn = text[i].textContent;
                console.log(jobFn);
                location.reload();
                // Truyen doi so vao ham Finish Job
                model.fnListJob(jobFn);
            }
        }
    }      
}
// Reset Job
controller.resetJob = () => {
    let text = document.getElementsByClassName('text');
    let li = document.getElementsByTagName('li');
    let reset = document.getElementsByClassName('edit');

    for(let i = 0; i < li.length; i++){
        // console.log(li[i]);
        reset[i].onclick = function (){
            if(li[i].getAttribute('class')){
                if(text[i]){
                    let jobFn = text[i].textContent;
                    console.log(jobFn);
                    location.reload();
                    // Truyen doi so vao ham Finish Job
                    model.unFinishJob(jobFn);
                }
                
            }
        }
    } 
       
}