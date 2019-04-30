<?php

Route::get('/',

    [
        'uses' =>'MudiController@mudi',
        'as'   =>'/'
    ]
);
Route::get('/catagorey-product/{id}',

    [
        'uses' =>'MudiController@catagorey',
        'as'   =>'catagorey-product'
    ]
);
Route::get('/product-details',

    [
        'uses' =>'MudiController@product',
        'as'   =>'product-details'
    ]
);
/*Admin routes */
Route::get('/add-catagorey',

    [
        'uses' =>'catagoreyController@addcatagorey',
        'as'   =>'add-catagorey'
    ]
);
Route::get('/manage-catagorey',

    [
        'uses' =>'catagoreyController@manageCatagorey',
        'as'   =>'manage-catagorey'
    ]
);
Route::get('/add-brand',

    [
        'uses' =>'brandController@addBrand',
        'as'   =>'add-brand'
    ]
);
Route::get('/manage-brand',

    [
        'uses' =>'brandController@manageBrand',
        'as'   =>'manage-brand'
    ]
);
Route::post('/new-brand',

    [
        'uses' =>'brandController@newBrand',
        'as'   =>'new-brand'
    ]
);
Route::get('/edit-brand/{id}',
    [
        'uses' =>'brandController@editBrand',
        'as'   =>'edit-brand'
    ]
);
Route::post('/update-brand',
    [
        'uses' => 'brandController@updateBrand',
        'as'   => 'update-brand'
    ]
);
Route::get('/delete-brand/{id}',
    [
        'uses' => 'brandController@deleteBrand',
        'as'   =>'delete-brand'
    ]
);
Route::post('/new-catagorey',

    [
        'uses' =>'catagoreyController@newCatagorey',
        'as'   =>'new-catagorey'
    ]
);
Route::get('/edit-catagorey/{id}',

    [
        'uses' =>'catagoreyController@editCatagorey',
        'as'   =>'edit-catagorey'
    ]
);

Route::post('/update-catagorey',
    [
        'uses'=>'catagoreyController@updateCatagorey',
        'as'  =>'update-catagorey'
    ]);
Route::get('/delete-catagorey/{id}',
    [
        'uses' =>'catagoreyController@deleteCatagorey',
        'as'   =>'delete-catagorey'
    ]
);

Route::get('/add-product',
    [
        'uses'=> 'productController@addProduct',
        'as'  => 'add-product'
    ]
);

Route::post('/new-product',
    [
    'uses' => 'productController@newProduct',
    'as'   => 'new-product'
    ]
);
Route::get('/edit-product/{id}',
    [
        'uses' => 'productController@'
    ]
);



/*Admin routes */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
