console.log('2.7 C4EJSLab - Basic - part 7');
console.log('Log out jobTitle and benefitValue of ALL job hits \n\n');

for (let i = 0; i < jobData.hits.length; i++) {
    console.log('- ' + jobData.hits[i].jobTitle);
    for (let x = 0; x < jobData.hits[i].benefits.length; x++) {
        console.log('- ' + jobData.hits[i].benefits[x].benefitValue);
    }
    console.log('------------------------------------');
}