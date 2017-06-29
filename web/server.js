var connect = require('connect');
var serveStatic = require('serve-static');
connect().use(serveStatic(__dirname)).listen(2017, function(){
    console.log('Server running on 2017...');
});