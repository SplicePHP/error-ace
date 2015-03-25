module.exports = function (grunt) {
    
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-shell');
    grunt.loadNpmTasks('grunt-bower-task');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-git');
    
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        bower: {
            install: {
                //just run 'grunt bower:install'
                options: {
                    targetDir: './js/lib',
                    layout: 'byComponent',
                    install: true,
                    update: true,
                    verbose: true,
                    cleanTargetDir: false,
                    cleanBowerDir: false,
                    bowerOptions: {}
                }
            }
        },
        shell: {
            ls: {
                options: {stdout: true, stderr: true},
                command: [ 'ls' ].join('&&')
            }
        }
    });
    
};
