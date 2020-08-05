console.log('1.4 C4EJSLab - Basic - part 4');
console.log('Let it run continuously, make sure each question only appears once, if the questions has run out, let users know (note that the result showing to users are omitted in the figure below)');

quizs = [
    {
        question: 'how old are you',
        choice: ['1. 4', '2. 16', '3. 15', '4. 18'],
        rightchoice: '3'
    },
    {
        question: 'how many day in a week',
        choice: ['1. 7', '2. 5', '3. 10', '4. 8'],
        rightchoice: '1'
    },
    {
        question: 'how many hours in a day',
        choice: ['1. 48', '2. 24', '3. 56', '4. 69'],
        rightchoice: '2'
    },
    {
        question: 'what is the capital of France',
        choice: ['1. Newyork', '2. Hanoi', '3. London', '4. Paris'],
        rightchoice: '4'
    }
];

let n = Math.random();
n = Math.round(n * 10);

let numberQuizs = quizs.length;
let point = 0;

for (let i = 0; i < numberQuizs; i++) {
    while (n >= quizs.length) {
        n = Math.round(Math.random() * 10);
    };
    let quiz = quizs[n];
    let answer = prompt(`${quiz.question}\n${quiz.choice[0]}\n${quiz.choice[1]}\n${quiz.choice[2]}\n${quiz.choice[3]}`);
    if (answer == quiz.rightchoice) {
        quizs.splice(n, 1);
        alert('correct');
    } else {
        quizs.splice(n, 1);
        alert('wrong');
    };
};
alert('we are out of question');