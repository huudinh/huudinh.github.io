console.log('Bai 2: Destructuring object');

const task = {
    subject: "Implement login feature",
    createdBy: "Hoang Ngoc Duc",
    assignTo: "Nguyen Phuong Nam",
    dueDate: "2019-10-08T18:00:24+0000",
    expectedHours: 0.5,
};
const { subject, dueDate, assignTo } = task;
console.log(`Subject: ${subject}`);
console.log(`DueDate: ${dueDate}`);
console.log(`AssignTo: ${assignTo}`);