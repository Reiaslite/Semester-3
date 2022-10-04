REKURSIF
function f(n) {
    if (n === 0) {
        return 0;
    } else {
        return n + f (--n);
    }
}

console.log(f(4));

FAKTORIAL REKURSIF
function f(n) {
    if (n === 0) {
        return 1;
    } else {
        return (n * f(n-1))
    }
}

console.log(f(5));

FIBONNACI REKURSIF
function fib(n) {
    if (n < 3) {
        return 1;
    } else {
        return fib(n-1) + fib(n-2);
    }
}

console.log(fib(20));
