// gulpfile.js
// Файл инструкций для работы Gulp (тасков)

var gulp        = require('gulp'),                              //Подключение Gulp из папки node_modules к проекту в переменную gulp
    browserSync = require('browser-sync');                      //Подключаем Browser Sync
    // resizer     = require('gulp-images-resizer'),               //Изменение размеров изображений
    // imagemin    = require('gulp-imagemin'),                     //Библиотека для работы с изображениями
    // pngquant    = require('pngquant'),                          //Компрессор для PNG
    // cache       = require('gulp-cache');                        //Кеширование изображений


// Подключение и настройки для browserSync
var reload      = browserSync.reload;                           //Ф-ия перезагрузки выведена для удобства в переменную
var paths = {                                                   //Переменная с путями к отслеживаемым файлам
    html:['SANDBOX/public/index.html']
};
// Задача (таск) browserSync для HTML файлов
gulp.task('html', function(){
    gulp.src(paths.html)
        .pipe(reload({stream:true}));
});
// Настройка самого browser-sync
gulp.task('browserSync', function() {
    browserSync({
        server: {
            baseDir: "SANDBOX/public/"
        },
        browser: "C:\\Program Files\\Firefox Developer Edition\\firefox.exe",
        port: 8080,
        open: true,
        notify: false
    });
});
// ... и далее эта задача добавлена в watcher




//Таск для автоматического обновления браузера Browser Sync
//     gulp.task('browser-sync', function() {                      //Создаем таск browser-sync
//         browserSync({                                           //Выполняем browser Sync
//             server: {                                           //Определяем параметры сервера
//                 baseDir: 'SANDBOX/public'                      //Директория для сервера
//             },
//             notify: true                                       //Отключаем уведомления
//         });
//     });





// Таск resizer для изменения размеров изображений
    // gulp.task('resize', function () {
    //     return gulp.src('src/pic/*.*')
    //         .pipe(resizer({
    //             format: "jpg",
    //             width: "50%"
    //         }))
    //         .pipe(gulp.dest('SANDBOX/public/img/'));
    // });



//Таск img для сжатия изображений (для продакшина)
// gulp.task('img', function () {
//     return gulp.src('src/pic/1.png')      //Берем 1 изображение из src
//         .pipe(resizer({
//             format: "png",
//             width: "80%"
//         }))
//             .pipe(cache(imagemin({                        //Сжимаем его с наилучшими настройками
//             interlaced: true,
//             progressive: true,
//             svgoPlugins: [{removeViewBox: false}],
//             use: [pngquant()]
//         })))
//         .pipe(gulp.dest('SANDBOX/public/img')); //Выгружаем на продакшин
// });


// ================================
//Пробный таск
gulp.task('mytask', function () {
    console.log('Привет, я таск!');
});


//Таск Наблюдатель (watcher)
gulp.task('watcher',function(){
    gulp.watch(paths.html, ['html']);
});

// Задача, которая выполняется "по умолчанию"
gulp.task('default', ['mytask', 'watcher', 'browserSync']);
