module.exports = function(grunt) {
  grunt.initConfig({

    less: {
      development: {
        options: {
          paths: ["assets/css"]
        },
        files: {
          "resources/assets/css/bootstrap.css": "resources/assets/less/bootstrap/bootstrap.less",
          "resources/assets/css/stylesheet.css": "resources/assets/less/stylesheet.less",
        }
      }
    },
    watch: {
      styles: {
        files: ['resources/assets/less/**/*.less'], 
        tasks: ['less', 'concat:css'],
        options: {
          nospawn: true
        }
      }, 
      scripts: {
      	files: ['resources/assets/js/**/*.js'], 
      	tasks: ['concat:js'],
      	options: {
          nospawn: true
        }
      }
    },
    concat: {
  		options: {
  			// define a string to put between each file in the concatenated output
  			separator: ';\n'
  		},
  		js: {
  			// the files to concatenate (jquery, then bootstrap, then everythign else)
  			src: ['resources/assets/js/jquery/*.js','resources/assets/js/boostrap/*.js', 'resources/assets/js/**/*.js'],

  			// the location of the resulting JS file
  			dest: 'public/js/sandhogs.js'
  		}, 
  		css: { 
  			// the files to concatenate (modernizr, then jquery, then bootstrap, then everythign else)
  			src: ['resources/assets/css/**/*.css'],

  			// the location of the resulting JS file
  			dest: 'public/styles/styles.css'
  		}
	}
  });
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');

  grunt.registerTask('default', ['watch']);
};