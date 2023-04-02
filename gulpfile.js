// modules
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const debug = require('gulp-debug');


// control vars
const control = {
    "files": {
        "assets_css": [
            'assets/css/_mixins.scss',
            'assets/css/_utilities.scss',
            'assets/css/_presets.scss',
            'assets/css/_reset.scss',
            'assets/css/_animations.scss',

            'assets/css/c-smartMenu.scss',
            'assets/css/c-responsiveGrid.scss',
            'assets/css/c-hamburguer.scss',
            'assets/css/c-form.scss',
            'assets/css/c-formFeedback.scss',
            'assets/css/c-readMore.scss',
            'assets/css/c-brand.scss',
            'assets/css/c-breadCrumb.scss',
            'assets/css/c-btn.scss',
            'assets/css/c-cardBlogArticle.scss',
            'assets/css/c-cardClinicAddress.scss',
            'assets/css/c-cardDoctor.scss',
            'assets/css/c-cardMvv.scss',
            'assets/css/c-cardProcedure.scss',
            'assets/css/c-cardProctomais.scss',
            'assets/css/c-cardVideo.scss',
            'assets/css/c-cardStaff.scss',
            'assets/css/c-clinicAddressFull.scss',
            'assets/css/c-copyright.scss',
            'assets/css/c-cta.scss',
            'assets/css/c-fullArticle.scss',
            'assets/css/c-medicalInsurances.scss',
            'assets/css/c-neurodigital.scss',
            'assets/css/c-photo.scss',
            'assets/css/c-scheduleForm.scss',
            'assets/css/c-scrollLink.scss',
            'assets/css/c-sitemap.scss',
            'assets/css/c-slideArrows.scss',
            'assets/css/c-socialList.scss',
            'assets/css/c-tag.scss',
            'assets/css/c-blogAside.scss',
            'assets/css/c-blogWidget.scss',
            'assets/css/c-pagination.scss',
            'assets/css/c-searchForm.scss',
            'assets/css/c-toggleItem.scss',
            'assets/css/c-newsletter.scss',

            'assets/css/s-twoColsContent.scss',
            'assets/css/s-blog.scss',
            'assets/css/s-doctor.scss',
            'assets/css/s-error.scss',
            'assets/css/s-contact.scss',
            'assets/css/s-generalStaff.scss',
            'assets/css/s-locations.scss',
            'assets/css/s-medicalProcedure.scss',
            'assets/css/s-medicalProcedures.scss',
            'assets/css/s-mvv.scss',
            'assets/css/s-photoGallery.scss',
            'assets/css/s-schedule.scss',
            'assets/css/s-testmonials.scss',
            'assets/css/s-gridPosts.scss',
            'assets/css/s-listPosts.scss',
            'assets/css/s-plainText.scss',
            'assets/css/s-faq.scss',

            'assets/css/l-footer.scss',
            'assets/css/l-headerHome.scss',
            'assets/css/l-headerInner.scss',
            'assets/css/l-nav.scss',
            'assets/css/l-innerPageContentHero.scss',

            "assets/css/p-inner.scss"
        ],
        "assets_js": [
            "assets/js/_utilities.js",
            "assets/js/c-smartMenu.js",
            "assets/js/c-hamburguer.js",
            "assets/js/c-responsiveGrid.js",
            "assets/js/c-form.js",
            "assets/js/c-formSchedule.js",
            "assets/js/c-formContact.js",
            "assets/js/c-toggleItem.js",
            "assets/js/c-photo.js",
            "assets/js/c-scrollLink.js",
            'assets/js/c-toggleItem.js',
            "assets/js/s-generalStaff.js",
            "assets/js/s-medicalProcedures.js",
            "assets/js/s-medicalProceduresPage.js",
            "assets/js/l-nav.js",
        ],
    },
    "dist" : 'dist/assets'
};


// project tasks
const tasks = {
    "assets_css": () => {
        return gulp
            .src(control.files.assets_css)
            .pipe(debug({title: 'file:'}))
            .pipe(concat('assets_css-min.css'))
            .pipe(sass({outputStyle: 'compressed'}))
            .pipe(autoprefixer({cascade: false}))
            .pipe(gulp.dest(control.dist));
    },
    "assets_js": () => {
        return gulp
            .src(control.files.assets_js)
            .pipe(debug({title: 'file:'}))
            .pipe(concat('assets_js-min.js'))
            .pipe(babel({presets: ['@babel/preset-env']}))
            .pipe(uglify())
            .pipe(gulp.dest(control.dist));
    }
}


// gulp tasks
gulp.task('assets_css', (done) => {tasks.assets_css(); done()});
gulp.task('assets_js', (done) => {tasks.assets_js(); done()});
gulp.task('assets_watch', () => {
    gulp.watch('assets/css/*.scss', tasks.assets_css);
    gulp.watch('assets/js/*.js', tasks.assets_js);
});
gulp.task('default', gulp.parallel('assets_css', 'assets_js'));
