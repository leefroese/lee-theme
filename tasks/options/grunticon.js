module.exports = {
	grunticon: {
		files: [{
                expand: true,
                cwd: 'img/svg',
                src: ['*.svg', '*.png'],
                dest: 'img/output'
            }]
	}
	
}