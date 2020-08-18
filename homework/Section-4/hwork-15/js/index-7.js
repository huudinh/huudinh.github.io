console.log('Bai 15.7 : Big Data');

for (let i in jobData.hits) {
    console.log('Title : ' + jobData.hits[i].jobTitle);
    console.log('Salary : ' + jobData.hits[i].jobSalary);
    console.log('Location : \n' + ' - ' + jobData.hits[i].locations);

    console.log("Benefits : ");
    for (let j in jobData.hits[i].benefits)
        console.log(' - ' + jobData.hits[i].benefits[j].benefitValue);
    console.log("Skills : ");
    for (let j in jobData.hits[i].skills)
        console.log(' - ' + jobData.hits[i].skills[j]);


    console.log('-------------------------------');

}  