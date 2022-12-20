var nilai = [2, 4, 1, 12, 20, 14, 45, 62];
for (var i = 0; i < nilai.length; i++) {
  for (var j = 0; j < nilai.length; j++) {
    if (nilai[j] > nilai[j + 1]) {
      var temp = nilai[j];
      nilai[j] = nilai[j + 1];
      nilai[j + 1] = temp;
    }
  }
}
console.log(nilai);
console.log(nilai[0]);
console.log(nilai[nilai.length - 1]);

// q: explain the algorithm
// a: compare each value with the next value
// 1. for each value in array
// 2. if value > next value
// 3. swap value with next value
// 4. end if
// 5. end for
// 6. repeat step 1-5 until no swap is made

// q: algoritma bubble sort?
// a: bandingkan setiap nilai dengan nilai berikutnya
// 1. untuk setiap nilai dalam array
// 2. jika nilai > nilai berikutnya
// 3. tukar nilai dengan nilai berikutnya
// 4. akhiri jika
// 5. akhiri untuk
// 6. ulangi langkah 1-5 sampai tidak ada pertukaran

// q: pseudocode bubble sort?
// a: compare each value with the next value

// q: pseudocode ascending bubble sort?
// a: compare each value with the next value
// 1. for each value in array
// 2. if value > next value
// 3. swap value with next value
// 4. end if
// 5. end for
// 6. repeat step 1-5 until no swap is made

// q: pseudocode descending bubble sort?
// a: compare each value with the next value
// 1. for each value in array
// 2. if value < next value
// 3. swap value with next value
// 4. end if
// 5. end for
// 6. repeat step 1-5 until no swap is made
