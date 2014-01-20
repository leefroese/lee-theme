module.exports = {
  dist: {
    src: [
      '<%= path.js %>/libs/*.js',
      '<%= path.js %>/global.js'
    ],
    dest: '<%= path.js %>/build/production.js'
  }
}