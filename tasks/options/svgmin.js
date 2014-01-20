module.exports = {
	options: {
		plugins: [
			{ removeViewBox: false },
			{ removeUselessStrokeAndFill: false }
		]
	},
	dist: {
		files: [{
				expand: true,
                cwd: '<%= path.img %>/src',
                src: ['**/*.svg'],
                dest: '<%= path.img %>/svg',
                ext: '.svg'
            }]
	}
}