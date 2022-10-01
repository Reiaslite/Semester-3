console.time('Execution time');

var i = 2;
while (i <= 2000) {
    console.log(i/2);
    i += 2;
}
console.timeEnd('Execution time');
const used = process.memoryUsage().heapUsed / 1024 / 1024;
console.log(`The script uses approximately ${Math.round(used * 100) / 100} MB`);