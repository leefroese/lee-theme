module.exports = {
  options: {
    livereload: true,
  },
  scripts: {
    files: ['<%= path.js %>/*.js'],
    tasks: ['jshint', 'concat', 'uglify'],
    options: {
      spawn: false,
    }
  },
  css: {
    files: ['<%= path.css %>/*.scss'],
    tasks: ['compass', 'autoprefixer', 'cssmin'],
    options: {
      spawn: false,
    }
  },
  images: {
    files: ['<%= path.img %>/**/*.{png,jpg,gif}', 'img/*.{png,jpg,gif}'],
    tasks: ['imagemin'],
    options: {
      spawn: false,
    }
  },
  svgs: {
    files: ['**/*.svg'],
    tasks: ['svgmin', 'grunticon'],
    options: {
      spawn: false,
    }
  },
  html:{
    files: ['./**/*.{php,html,htm}'],
    tasks: [],
    options: {
      spawn: false
    }
  }
}