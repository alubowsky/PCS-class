const url = require('url');

module.exports = function (req, res, next) {
    req.query = url.parse(req.url, true).query;
    if (req.query.magicWord === 'please') {
        next();
    }
    else {
        const err = new Error("no unautherized users allowed :(");
        err.statusCode = 401;
        next(err);
    }
};