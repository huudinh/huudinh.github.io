console.log('Bai 15.5 : Big Data');

console.log("first job hit benefit : ");
for(let i in jobData.hits[0].benefits){

    console.log(' - ' + jobData.hits[0].benefits[i].benefitValue);
}  