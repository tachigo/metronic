var gulp = require('gulp');
var del = require('del');
var build = require('./build');
var func = require('./helpers');

// task to clean and delete dist directory content
var getPaths = function (outPaths) {
	if (typeof outPaths === 'undefined') outPaths = [];
	var paths = [];
	var output = build.config.dist;
	for (var type in output) {
		if (!output.hasOwnProperty(type)) continue;

		// has demo placeholder
		if (output[type].path.indexOf('**') !== -1) {
			func.getDemos().forEach(function (demo) {
				paths.push(output[type].path.replace('**', demo));
			})
		} else {
			if (outPaths.length === 0) {
				paths.push(output[type].path);
			}
			outPaths.forEach(function (path) {
				paths.push(output[type].path + '/' + path);
			});
		}
	}
	return paths;
};

gulp.task('clean', function () {
	return del(getPaths(), {force: true});
});