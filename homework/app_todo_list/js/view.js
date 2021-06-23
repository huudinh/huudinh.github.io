const view = {};
view.setActiveScreen = (screenName) => {
    switch (screenName) {
        case 'main':
            // mount Main screen
            document.getElementById('app').innerHTML = components.main;

            // Read Job form DB
            model.loadListJob();

            // Add Job to DB
            controller.addJob();

            // Finish Job
            setTimeout(()=>{
                controller.finishJob();
            },500);

            // Reset Job
            setTimeout(()=>{
                controller.resetJob();
            },1000);

            // Add Job to DB
            setTimeout(()=>{
                controller.removeJob();
            },1000);
    }
}