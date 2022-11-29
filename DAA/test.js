//L I N E A R  S E A R C H (TIDAK TERURUT)
var nilai = [2,4,1,12,20,14,45,62];

// q: how to find lowest value in array with loop?
// a: compare each value with the lowest value
var lowest = nilai[0];
for (var i = 0; i<nilai.length; i++){
    if (nilai[i] < lowest){
        lowest = nilai[i];
    }
}
console.log(lowest);

//CONTOH 1 - nilai MIN (linear search)
// q: pseudocode to find lowest value in array with linear search
// a: compare each value with the lowest value
// 1. set lowest to the first value in array
// 2. for each value in array
// 3. if value < lowest
// 4. set lowest to value
// 5. end if
// 6. end for
// 7. return lowest

//CONTOH 2 - nilai MAX (linear search)
// q: pseudocode to find lowest value in array with linear search
// a: compare each value with the lowest value
// 1. set lowest to the first value in array
// 2. for each value in array
// 3. if value > lowest
// 4. set lowest to value
// 5. end if
// 6. end for
// 7. return lowest

// q: how to find highest value in array with loop?
// a: compare each value with the highest value
var highest = nilai[0];
for (var i = 0; i<nilai.length; i++){
    if (nilai[i] > highest){
        highest = nilai[i];
    }
}
console.log(highest);



//B I N A R Y  S E A R C H (TERURUT)
var nilai = [2,4,1,12,20,14,45,62]; 
for (var i = 0; i<nilai.length; i++){ //array sorting (bubble sort)
    for (var j = 0; j<nilai.length; j++){ //array sorting (bubble sort)
        if (nilai[j] > nilai[j+1]){
            var temp = nilai[j];
            nilai[j] = nilai[j+1];
            nilai[j+1] = temp;
        }
    }
}
console.log(nilai);
console.log(nilai[0]); //nilai minimum  (lowest value)
console.log(nilai[nilai.length-1]); //nilai maximum  (highest value)

// q: explain the algorithm
// a: compare each value with the next value
// 1. for each value in array
// 2. if value > next value
// 3. swap value with next value
// 4. end if
// 5. end for
// 6. print array (sorted)
// 7. print lowest value
// 8. print highest value

// q: pseudocode to find lowest value in array with binary search
// a: compare each value with the lowest value
// 1. set lowest to the first value in array
// 2. for each value in array
// 3. if value < lowest
// 4. set lowest to value
// 5. end if
// 6. end for
// 7. return lowest

// B I N A R Y  S E A R C H (TERURUT)
// var nilai = [2,4,1,12,20,14,45,62];
// var nilai = [1,2,4,12,14,20,45,62];
// q: how to find lowest value in array
// a: sort the array and get the first value
nilai.sort();
console.log(nilai[0]);

// q: how to find highest value in array?
// a: sort the array and get the last value
nilai.sort();
console.log(nilai[nilai.length-1]);



// q: pseudocode to find lowest value in array with loop
// a: compare each value with the lowest value
// 1. set lowest to the first value in array
// 2. for each value in array
// 3. if value < lowest
// 4. set lowest to value
// 5. end if
// 6. end for
// 7. return lowest