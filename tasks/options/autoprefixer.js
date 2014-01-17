module.exports = {
  options: {
    browsers: ['last 2 version']
  },
  multiple_files: {
    expand: true,
    flatten: true,
    src: '<%= path.css %>/build/master.css',
    dest: '<%= path.css %>/build/prefixed/'
  }
}