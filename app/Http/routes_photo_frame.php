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