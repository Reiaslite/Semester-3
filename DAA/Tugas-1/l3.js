console.time("Execution time");

for (let i = 1; i <= 1000; i++) {
  console.log(i);
}

console.timeEnd("Execution time");
const used = process.memoryUsage().heapUsed / 1024 / 1024;
console.log(`The script uses approximately ${Math.round(used * 100) / 100} MB`);
