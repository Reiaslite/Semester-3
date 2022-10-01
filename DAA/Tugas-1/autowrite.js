const fs = require('fs');
let temp = '';

let num = 20
for (i = 1; i <= 1000; i++) {
    temp += `print(${num} / i)\n`

    num += 20
}

fs.writeFileSync('temp.txt', temp);