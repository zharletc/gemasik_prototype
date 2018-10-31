
var gulp = require('gulp');
var coba = require('defaults');

gulp.task('default');
gulp.task('generate-service-worker', function(callback) {
  var path = require('path');
  var swPrecache = require('sw-precache');
  var rootDir = 'umum';

  swPrecache.write(path.join(rootDir, 'service-worker.js'), {
    staticFileGlobs: ['umum/**/*.{js,html,css,png,jpg,gif,svg}'],
    stripPrefix: rootDir,
    runtimeCaching: [{
    	urlPattern: 'http://127.0.0.1:8006',
    	handler: 'networkFirst',
    	option: {
    		cache:{
    			name: 'gemasik'
    		}
    	}
    }]
  }, callback);
});