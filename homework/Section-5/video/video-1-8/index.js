console.log('1.8 C4EJSLab - Basic - part 8');
console.log('(Optional) Shuffle the choices each time you show users the quiz');

quizs = [
    {
        question: 'how old are you',
        choice: ['4', '16', '15', '18'],
        rightchoice: 18
    },
    {
        question: 'how many day in a week',
        choice: ['7', '5', '10', '8'],
        rightchoice: 7
    },
    {
        question: 'how many hours in a day',
        choice: ['48', '24', '56', '69'],
        rightchoice: 48
    },
    {
        question: 'what is the capital of France',
        choice: ['Newyork', 'Hanoi', 'London', 'Paris'],
        rightchoice: 'London'
    }
];

let n = Math.random();
n = Math.round(n * 10);

let numberQuizs = quizs.length;

let point = 0;

for (let i = 0; i < numberQuizs; i++) {

    let quiz = quizs[i];
    let arr = quiz.choice;

    let currentIndex = arr.length, randomIndex, temporaryValue;
    while (currentIndex != 0) {
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        temporaryValue = arr[currentIndex];
        arr[currentIndex] = arr[randomIndex];
        arr[randomIndex] = temporaryValue;
    }

    let answer = prompt(`${quiz.question}\n1. ${quiz.choice[0]}\n2. ${quiz.choice[1]}\n3. ${quiz.choice[2]}\n4. ${quiz.choice[3]}`);

    if (answer == quiz.rightchoice) {
        point += 1;
        quizs.splice(n, 1);
        alert('correct');
    } else {
        quizs.splice(n, 1);
        alert('wrong');
    };

};

alert('we are out of question');
alert(`you answer ${point} out of ${numberQuizs} questions`);