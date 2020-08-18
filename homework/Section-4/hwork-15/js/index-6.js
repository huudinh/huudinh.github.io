console.log('Bai 15.6 : Big Data');

for (let i in jobData.hits) {
    console.log(jobData.hits[i].jobTitle);
    console.log("Benefits : ");
    for (let j in jobData.hits[i].benefits)
        console.log(' - ' + jobData.hits[i].benefits[j].benefitValue);
    console.log('-----------------')
} 