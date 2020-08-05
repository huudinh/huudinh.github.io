console.log('1.4 C4EJSLab - Basic - part 4');
console.log('Write a script to randomly select a quiz from the list above, show them to users');

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

let random = Math.random();
random = Math.round(random * 10);

let numberQuizs = quizs.length;
let quiz;

for (let i = 0; i < numberQuizs; i++) {

    while (random >= quizs.length) {
        random = Math.round(Math.random() * 10);
    };

    quiz = quizs[random];
    
};

let answer = prompt(`${quiz.question}\n${quiz.choice[0]}\n${quiz.choice[1]}\n${quiz.choice[2]}\n${quiz.choice[3]}`);
