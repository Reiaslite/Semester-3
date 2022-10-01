console.time('Execution time');

function OneToTen(n) {
    if (n > 1000) return

    console.log(n)

    OneToTen(n + 1)
}

OneToTen(1)

console.timeEnd('Execution time');
const used = process.memoryUsage().heapUsed / 1024 / 1024;
console.log(`The script uses approximately ${Math.round(used * 100) / 100} MB`);