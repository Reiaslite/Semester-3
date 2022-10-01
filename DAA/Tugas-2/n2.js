console.time('Execution time');
let a = 2;
let d = 5;

for (let n = 1; n <= 10; n++) {
    const hasil = a + (n - 1) * d;
    console.log(hasil);
}
console.timeEnd('Execution time');
const used = process.memoryUsage().heapUsed / 1024 / 1024;
console.log(`The script uses approximately ${Math.round(used * 100) / 100} MB`);