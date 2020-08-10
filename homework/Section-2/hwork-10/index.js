console.log("Bài Tập 10");
setTimeout(() => {

    let weight = prompt('Your weight in kg?');
    let height = prompt('Your height in cm?');
    height = height/100;

    let bmi = weight / (height * height);
    bmi = parseFloat(bmi).toFixed(2);


    alert(`Your BMI is ${bmi}`);

    if (bmi < 16) {
        alert('You are severely underweight');
    } else if (bmi < 18.5) {
        alert('You are underweight if BMI');
    } else if (bmi < 25) {
        alert('You are normal');
    } else if (bmi < 30) {
        alert('You are overweight');
    } else {
        alert('You are obese');
    }

}, 3000);