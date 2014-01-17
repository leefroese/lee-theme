module.exports = {
  dynamic: {
    files: [{
      expand: true,
      cwd: '<%= path.img %>/',
      src: ['**/*.{png,jpg,gif}'],
      dest: '<%= path.img %>/'
    }]
  }
}