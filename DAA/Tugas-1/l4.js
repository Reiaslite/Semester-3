console.time('Execution time');

var i = 1;
while (i <= 1000) {
    console.log(i);
    i++;
}

console.timeEnd('Execution time');
const used = process.memoryUsage().heapUsed / 1024 / 1024;
console.log(`The script uses approximately ${Math.round(used * 100) / 100} MB`);