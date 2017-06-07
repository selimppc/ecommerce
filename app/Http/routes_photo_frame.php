<?php

Route::any("admin_photo_frame/index", [
    "as"   => "admin-photo-frame-index",
    "uses" => "AdminPhotoFrameController@index"
]);

Route::any("admin_photo_frame/store", [
    "as"   => "admin-photo-frame-store",
    "uses" => "AdminPhotoFrameController@store"
]);


Route::any("admin_photo_frame/show/{id}", [
    "as"   => "admin-photo-frame-show",
    "uses" => "AdminPhotoFrameController@show"
]);

Route::any('admin_photo_frame/image-show/{id}', [
    'as' => 'admin-photo-frame.imageview',
    'uses' => 'AdminPhotoFrameController@image_show'
]);

Route::any("admin_photo_frame/edit/{id}", [
    "as"   => "admin-photo-frame-edit",
    "uses" => "AdminPhotoFrameController@edit"
]);

Route::any("admin_photo_frame/update/{id}", [
    "as"   => "admin-photo-frame-update",
    "uses" => "AdminPhotoFrameController@update"
]);

Route::any("admin_photo_frame/delete/{id}", [
    "as"   => "admin-photo-frame-delete",
    "uses" => "AdminPhotoFrameController@delete"
]);


/*Frame Category*/

Route::any("admin_frame_category/index", [
    "as"   => "admin-frame-category-index",
    "uses" => "AdminFrameCategoryController@index"
]);

Route::any("admin_frame_category/store", [
    "as"   => "admin-frame-category-store",
    "uses" => "AdminFrameCategoryController@store"
]);


Route::any("admin_frame_category/show/{id}", [
    "as"   => "admin-frame-category-show",
    "uses" => "AdminFrameCategoryController@show"
]);

Route::any("admin_frame_category/edit/{id}", [
    "as"   => "admin-frame-category-edit",
    "uses" => "AdminFrameCategoryController@edit"
]);

Route::any("admin_frame_category/update/{id}", [
    "as"   => "admin-frame-category-update",
    "uses" => "AdminFrameCategoryController@update"
]);

Route::any("admin_frame_category/delete/{id}", [
    "as"   => "admin-frame-category-delete",
    "uses" => "AdminFrameCategoryController@delete"
]);


/*Photo Frame*/

Route::any("admin_frame/index", [
    "as"   => "admin-frame-index",
    "uses" => "AdminFrameController@index"
]);

Route::any("admin_frame/store", [
    "as"   => "admin-frame-store",
    "uses" => "AdminFrameController@store"
]);


Route::any("admin_frame/show/{id}", [
    "as"   => "admin-frame-show",
    "uses" => "AdminFrameController@show"
]);

Route::any("admin_frame/edit/{id}", [
    "as"   => "admin-frame-edit",
    "uses" => "AdminFrameController@edit"
]);

Route::any("admin_frame/update/{id}", [
    "as"   => "admin-frame-update",
    "uses" => "AdminFrameController@update"
]);

Route::any("admin_frame/delete/{id}", [
    "as"   => "admin-frame-delete",
    "uses" => "AdminFrameController@delete"
]);


/*Mat*/

Route::any("admin_mat/index", [
    "as"   => "admin-mat-index",
    "uses" => "AdminMatController@index"
]);

Route::any("admin_mat/store", [
    "as"   => "admin-mat-store",
    "uses" => "AdminMatController@store"
]);


Route::any("admin_mat/show/{id}", [
    "as"   => "admin-mat-show",
    "uses" => "AdminMatController@show"
]);

Route::any("admin_mat/edit/{id}", [
    "as"   => "admin-mat-edit",
    "uses" => "AdminMatController@edit"
]);

Route::any("admin_mat/update/{id}", [
    "as"   => "admin-mat-update",
    "uses" => "AdminMatController@update"
]);

Route::any("admin_mat/delete/{id}", [
    "as"   => "admin-mat-delete",
    "uses" => "AdminMatController@delete"
]);