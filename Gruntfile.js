module.exports = function(grunt) {
  grunt.loadNpmTasks("grunt-contrib-less");
  grunt.loadNpmTasks("grunt-contrib-watch");
  
  grunt.initConfig({
    less: {
      dev: {
        src: "styles/style.less",
        dest: "style.css"
      },
      //run grunt less:production to compress css file
      production: {
        options: {
          compress: true
        },
        src: "styles/style.less",
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