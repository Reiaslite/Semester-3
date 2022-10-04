function a(b) {
    if (b === 0) {
        return 0;
    } else {
        return b + a (--b);
    }
}

console.log(a(4));