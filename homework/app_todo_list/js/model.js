const model = {};

// Read All Job
model.loadListJob = async () => {
    // console.log(db);

    // Read Data
    db.on("value", function (snapshot) {

        document.getElementById('myUL').innerHTML = '';
        let data = snapshot.val();
        // console.log(data);

        for(let item in data){
            // console.log(data[item].check);
            let cs;
            if (data[item].check == 'checked'){
                cs = 'class="checked"';
            }

            document.getElementById('myUL').insertAdjacentHTML('beforeend',`
                <li ${cs}><span class="text">${data[item].name}</span><span class="edit">E</span><span class="close">×</span></li>
            `);
        }

    }, function (error) {
        console.log("Error: " + error.code);
    });
}

//Create Job
model.addListJob = async (jobName) => {
    
    // Add data to DB
    db.push ({
        check:'',
        name: jobName
    });

    //Lay data moi nhat tu DB
    model.loadListJob();
    view.setActiveScreen('main');

}

//Finsh Job
model.fnListJob = async (jobFn) => {
    // Read Data
    db.on('value', function (snapshot){
        let data = snapshot.val();
        for(let item in data){
            let job = data[item].name;
            if(job == jobFn){

                // let check = data[item].check;

                // Update Du lieu
                firebase.database().ref('data/' + item).update({
                    'check': 'checked'
                });

                //Lay data moi nhat tu DB
                model.loadListJob();
                // controller.resetJob();
                view.setActiveScreen('main');
            }
        }
    });
}

//Un Finsh Job
model.unFinishJob = async (jobFn) => {
    // Read Data
    db.on('value', function (snapshot){
        let data = snapshot.val();
        for(let item in data){
            let job = data[item].name;
            if(job == jobFn){

                // let check = data[item].check;

                // Update Du lieu
                firebase.database().ref('data/' + item).update({
                    'check': ''
                });

                //Lay data moi nhat tu DB
                model.loadListJob();
                view.setActiveScreen('main');
            }
        }
    });
}

//Remove Job
model.removeListJob = async (jobDel) => {

    // Read Data
    db.on("value", function (snapshot) {

        let data = snapshot.val();

        for(let item in data){
            let job = data[item].name;
            // console.log(job);
            // console.log(jobDel);

            if(job == jobDel){

                //Xoa du lieu
                firebase.database().ref('data/' + item).remove();

                //Lay data moi nhat tu DB
                // model.loadListJob();
                view.setActiveScreen('main');
                
            }
        }

    }, function (error) {
        console.log("Error: " + error.code);
    });

    // firebase.database().ref("data/1").remove();
}