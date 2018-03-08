let x = 0;
for (let i = 2; i < process.argv.length; i++) {
    x += +process.argv[i];
    if (i === process.argv.length - 1) {
        console.log(x);
    }
}