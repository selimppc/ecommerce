<?php

Route::any("order_paid/index", [
    "as"   => "order-paid-index",
    "uses" => "OrderPaymentController@order_paid_index"
]);

Route::any("order_paid/approved", [
    "as"   => "order-paid-approved",
    "uses" => "OrderPaymentController@order_paid_approved"
]);

Route::any("order_paid/delivered", [
    "as"   => "order-paid-delivered",
    "uses" => "OrderPaymentController@order_paid_delivered"
]);

Route::any("order_paid/show/{id}", [
    "as"   => "order-paid-show",
    "uses" => "OrderPaymentController@order_show"
]);

Route::any("order_paid/approve/{id}", [
    "as"   => "order-paid-approve",
    "uses" => "OrderPaymentController@approve"
]);

Route::any("order_paid/deliverd/{id}", [
    "as"   => "order-paid-deliverd",
    "uses" => "OrderPaymentController@deliverd"
]);



Route::any("order_paid/cancel/{id}", [
    "as"   => "order-paid-cancel",
    "uses" => "OrderPaymentController@cancel"
]);