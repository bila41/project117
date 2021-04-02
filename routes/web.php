<?php

/**/

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/home', function () {
    return view('index');
});
Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});


Route::group(['prefix'=>'belajar'], function(){
    Route::get('/mahasiswa', function () {
        echo  'Mahasiswa';
    });
    Route::get('/ubg/ilkom/mahasiswa', function () {
        return 'mahasiswa Ilkom kampus UBG';
    });
    
    //routing dg parameter
    Route::get('/ubg/ilkom/mahasiswa/{semester}/{nim}', function ($semester, $nim) {
        return 'Mahasiswa Ilkom kampus UBG semester :' .$semester . '-NIM : ' . $nim;
    });
    
    Route::redirect('login', '/masuk');
    
    Route::group(['prefix'=>'/admin'], function(){
        Route::get('/mahasiswa', function () {
            return 'admin mahasiswa';  
        }); 
        Route::get('/dosen', function () {
            return 'admin dosen';
        });
        Route::get('/pegawai', function () {
            return 'admin pegawai';
        });
    });
});



