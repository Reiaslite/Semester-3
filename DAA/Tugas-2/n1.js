console.time('Execution time');
const bil = [31,24,46,12,71,23,64,78,23,8,52];

console.log('Nilai Maksimum:', Math.max(...bil));

console.log('Nilai Minimum:', Math.min(...bil));
console.timeEnd('Execution time');
const used = process.memoryUsage().heapUsed / 1024 / 1024;
console.log(`The script uses approximately ${Math.round(used * 100) / 100} MB`);

// const arr = [];
// arr.name = 'Rai Tilosava';
// arr.age = '20';
// arr.birth = 'Karawang';

// console.log('Hai perkenalkan nama saya', arr.name, 'umur saya', arr.age, 'tahun, lahir di', arr.birth);

// const arr = ['Rai Tilosava', '20', 'Karawang'];

// console.log('Hai perkenalkan nama saya', arr[0], 'umur saya', arr[1], 'tahun, lahir di', arr[2]);