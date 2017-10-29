var app = app || {};

app.counter = (function (module) {
    "use strict";

    var count = 0;

    module.incrementCount = function () {
        return count += 1;
    };

    module.getCurrentCount= function () {
        return count;
    };

    return module;
}(app.counter || {}));
