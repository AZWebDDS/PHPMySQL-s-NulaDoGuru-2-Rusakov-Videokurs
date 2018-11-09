// gulpfile.js
// Файл инструкций для работы Gulp (тасков)

var gulp = require('gulp'),                         //Подключение Gulp из папки node_modules к проекту в переменную gulp
    resizer = require('gulp-images-resizer'),       //Изменение размеров изображений
    imagemin = require('gulp-imagemin'),            //Библиотека для работы с изображениями
    pngquant = require('pngquant'),                 //Компрессор для PNG
    cache = require('gulp-cache');                  //Кеширование изображений


// Таск resizer для изменения размеров изображений
    gulp.task('resize', function () {
        return gulp.src('src/pic/*.*')
            .pipe(resizer({
                format: "jpg",
                width: "50%"
            }))
            .pipe(gulp.dest('SANDBOX/public/img/'));
    });



//Таск img для сжатия изображений (для продакшина)
gulp.task('img', function () {
    return gulp.src('src/pic/1.png')      //Берем 1 изображение из src
        .pipe(resizer({
            format: "png",
            width: "80%"
        }))
            .pipe(cache(imagemin({                        //Сжимаем его с наилучшими настройками
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        })))
        .pipe(gulp.dest('SANDBOX/public/img')); //Выгружаем на продакшин
});


// ================================
//Пробный таск
gulp.task('mytask', function () {
    console.log('Привет, я таск!');
});


