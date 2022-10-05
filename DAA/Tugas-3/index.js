// REKURSIF
function f(n) {
  if (n === 0) {
    return 0;
  } else {
    return n + f(--n);
  }
}

// console.log(f(5));

// FAKTORIAL REKURSIF
function f(n) {
  if (n === 0) {
    return 1;
  } else {
    return n * f(n - 1);
  }
}

// console.log(f(5));

// FIBONNACI REKURSIF
function fib(n) {
  if (n < 3) {
    return 1;
  } else {
    return fib(n - 1) + fib(n - 2);
  }
}

// console.log(fib(20));

//COUNTDOWN REKURSIF
let countDown = function (x) {
  if (x < 0) {
    return;
  }
  console.log(x);
  countDown(x - 1);
};

// console.log(countDown(5));

// COUNTUP REKURSIF
let countUp = function (x, max) {
  if (x > max) {
    return;
  }
  console.log(x);
  countUp(x + 1, max);
};

// console.log(countUp(1, 10));
