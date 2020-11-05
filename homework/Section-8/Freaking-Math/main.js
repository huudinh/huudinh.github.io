let setting = document.getElementsByClassName('setting');
setting[0].style.display = 'none';

/* Hidden score */
const scoreBox = document.getElementById('score_box');
const game_score = document.getElementById('game_score');
scoreBox.addEventListener('click', () => {
    if(scoreBox.checked === true) {
        game_score.style.display = 'block';
    } else {
        game_score.style.display = 'none';
    }
    
})

/* Hidden timer */
const timerBox = document.getElementById('timer_box');
const totalTime = document.getElementById('totalTime');
timerBox.addEventListener('click', () => {
    if(timerBox.checked === true) {
        totalTime.style.display = 'block';
    } else {
        totalTime.style.display = 'none';
    }
})

// SET INITIAL VALUE
var score_val = 1;
let score = document.getElementById('score');


// GENERATE A DYNAMIC ID FOR MODULE
function newScore(check) {
	if (check == 1) {
		return window.score_val += 1;
	} else if (check == 0) {
		return window.score_val -= 1;

	}
}



// FIRST TURN
function firstTurn() {
	nextTurn();
	let contentplay = document.getElementsByClassName('contentplay');
	let main = document.getElementsByClassName('main');
	

	contentplay[0].style.display = 'none';
	main[0].style.display = 'block';
	setting[0].style.display = 'block';
	score.setAttribute('value', 1);
	console.log(score.value);
	
}


// NEW TURN
function nextTurn(check) {
	var valueSum1 = 1 + Math.floor(Math.random() * 9), // Generate a random number between 1 and 9
		valueSum2 = 1 + Math.floor(Math.random() * 9), // Generate a random number between 1 and 9
		sum1 = document.getElementById('sum1'),
		sum2 = document.getElementById('sum2'),
		score_val = newScore(check),
		countDown = startCountdown(),
		resultRandom = 1 + Math.floor(Math.random() * 18), // Generate a random number between 1 and 18
		viewresultRandom = document.getElementById('resultrandom'),
		trueResult = valueSum1 + valueSum2,
		right = document.getElementById('right'),
		wrong = document.getElementById('wrong'),
		r_value = [trueResult, resultRandom],
		r_randomBtV = Math.floor(2 * Math.random()); // Randon between trueResult and randomresult
	viewResult = r_value[r_randomBtV];


	sum1.innerHTML = valueSum1;
	sum2.innerHTML = valueSum2;
	viewresultRandom.innerHTML = viewResult;


	// verify true result
	if (viewResult == trueResult) {
		console.log('Ket qua Đúng');
		right.setAttribute('onclick', 'nextTurn(1)');
		wrong.setAttribute('onclick', 'nextTurn(0)');
	} else if (viewResult != trueResult) {
		console.log('Kết quả sai');
		wrong.setAttribute('onclick', 'nextTurn(1)');
		right.setAttribute('onclick', 'nextTurn(0)');
	};

	// get value score after insert new score

	score.getAttribute('value');
	if (score.value < 1) {
		// score.setAttribute('value', 0);
		endGame();
	} else {
		score.setAttribute('value', score_val);
	}

}


function endGame() {
	let buttons = document.getElementsByClassName('buttons');
	let sum = document.getElementsByClassName('sum');
	let endGame = document.getElementById('endGame');
	let progress = document.getElementsByTagName('progress');
	buttons[0].style.display = 'none';
	sum[0].style.display = 'none';
	setting[0].style.display = 'none';
	endGame.style.display = 'block';
	clearInterval(window.animate);
	progress[0].value = 0;
}

var time = 0;

function startCountdown() {
	var barArea = document.getElementById('bar-area');
	barArea.innerHTML = '';
	clearInterval(window.animate);

	// console.log(time);

	var barra1 = document.createElement("progress");
	barra1.setAttribute("value", "1");
	barra1.setAttribute("max", "100");
	barArea.appendChild(barra1);

	var min = 0;
	var time = 50;
	var value = barra1.getAttribute('value');
	var value = parseInt(100);
	console.log(time);

	var loading = function () {
		value -= 1;
		addValue = barra1.setAttribute('value', value);

		if (value == min) {
			time = 0;
			// value = 0;
			addValue = barra1.setAttribute('value', 1);
			clearInterval(window.animate);
			endGame();
			return false;
		}
	};

	window.animate = setInterval(function () {
		loading();
	}, time);

};