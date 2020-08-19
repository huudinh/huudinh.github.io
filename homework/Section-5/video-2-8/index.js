console.log('2.8 C4EJSLab - Basic - part 8');
console.log('Log out jobTitle, locations, skills, jobSalary and benefitValues of ALL job hits \n\n');

for (let i = 0; i < jobData.hits.length; i++) {
    console.log(jobData.hits[i].jobTitle);
    console.log('Salary: ' + jobData.hits[i].jobSalary + '$');
    console.log('Location: \n- ' + jobData.hits[i].locations);
    console.log('Benefits: \n');
    for (let x = 0; x < jobData.hits[i].benefits.length; x++) {
        console.log('- ' + jobData.hits[i].benefits[x].benefitValue);
    }
    console.log('Skills: \n');
    console.log('- ' + jobData.hits[i].skills.join('\n- '));
    console.log('-------------------------------------------------------------');
}