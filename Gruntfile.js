module.exports = function(grunt) {
  grunt.loadNpmTasks("grunt-contrib-less");
  grunt.loadNpmTasks("grunt-contrib-watch");
  
  grunt.initConfig({
    less: {
      dev: {
        src: "style.less",
        dest: "style.css"
      },
      //run grunt less:production to compress css file
      production: {
        options: {
          compress: true
        },
        src: "style.less",
        dest: "style.css"
      }
    },
    watch: {
      less: {
        files: ["**/*.less"],
        tasks: ["less:dev"]
      }
    }
  });
  
  grunt.registerTask("default", ["less:dev", "watch"]);
}