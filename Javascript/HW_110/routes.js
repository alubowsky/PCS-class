const app = require('connect')();

app.use((req, res, next) => {
    res.setHeader('Content-Type', 'text/html');
    next();
});

app.use(require('./middleware.js'));


app.use('/home', (req, res, next) => {
    res.end("<h2>The home page.</h2>");
});

app.use('/about', (req, res, next) => {
    res.end("<h2>PCS is a great place.</h2>");
});

app.use((req, res, next) => {
    res.statusCode = 404;
    res.end("<h5>Page not found. 404</h5>");
});

app.use((err, req, res, next) => {
    res.statusCode = err.statusCode ? err.statusCode : 500;
    res.end('<h4>Something went wrong<br/>' + err.message + '</h4>');
});
app.listen(80);