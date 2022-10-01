// console.time('Waktu Eksekusi Algoritma ke-1');

function f(n) {
    console.time(`f(${n})`);
    for (let i = 0; i < n; i++) {
        for (let j = 0; j < 400; j++) {

        }
    }
    for (let i = 0; i < 23; i++) { }
    console.timeEnd(`f(${n})`);
}

function g(n) {
    console.time(`g(${n})`);
    for (let i = 0; i < 2; i++) {
        for (let j = 0; j < n; j++) {
            for (let k = 0; k < n; k++) { }
        }
    }
    for (let i = 0; i < 1; i++) { }
    console.timeEnd(`g(${n})`);
}

f(999);
g(999);

const used = process.memoryUsage().heapUsed / 1024 / 1024;
console.log(`Memori : ${Math.round(used * 100) / 100} MB`);

// console.timeEnd('Waktu Eksekusi Algoritma ke-1');

// console.time('Waktu Eksekusi Algoritma ke-2');
// for (let n = 0; n < 10; n++) {
//     kasus2 = (2 * Math.pow(n, 2) + 1)
//     console.log(kasus2)
// }
// console.timeEnd('Waktu Eksekusi Algoritma ke-2');

