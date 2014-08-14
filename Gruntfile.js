module.exports = function(grunt) {

 // Project configuration.
 grunt.initConfig({
   pkg: grunt.file.readJSON('package.json'),

   watch: {
   	css: {
   		files: 'sass/*.scss',
   		tasks: ['sass', 'autoprefixer']
   	}//,
      // javascript: {
      //    files: 'assets/app.js',
      //    tasks: ['']
      // },
   	// options: {
   	// 	livereload: true
   	// }
   },

   sass: {
   	dist: {
   		files: {
   			'style.css' : 'sass/style.scss'
   		}
   	}
   },

   autoprefixer: {
   	options: {
   		browsers: ['last 5 version', 'ie 8', 'ie 9']
   	},
   	no_dest: {
   		src: 'style.css'
   	}
   }//,

   // connect: {
   // 	server: {
   // 		options: {
   // 			port: '9009',
   // 			base: ''
   // 		}
   // 	}
   // }

 });

grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-autoprefixer');
// grunt.loadNpmTasks('grunt-contrib-connect');

 // Default task(s).
 grunt.registerTask('default', ['sass','autoprefixer',/*'connect',*/'watch']);
};
