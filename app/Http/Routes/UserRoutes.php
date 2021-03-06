<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::group(['prefix' => 'mi-cuenta'], function(){
    Route::group(['prefix' => 'datos-personales'], function(){   
	    Route::get('/', ['as' => 'customer.index', 'uses' => 'AccountController@index']);
        Route::post('edit/{id}', ['as' => 'customer.update', 'uses' => 'AccountController@update']);
    });
	//Administrar cuentas bancarias

    Route::group(['prefix' => 'cuentas-bancarias'], function(){    
         Route::get('/', ['as' => 'bank_account.index', 'uses' => 'BankAccountController@index']);
         Route::get('crear', ['as' => 'bank_account.create', 'uses' => 'BankAccountController@create']);
         Route::post('crear', ['as' => 'bank_account.store', 'uses' => 'BankAccountController@store']);
    //     //Route::get('show/{id}', ['as' => 'promocondition.show', 'uses' => 'Investigation\Promocondition\PromoconditionController@show']);
         Route::get('edit/{id}', ['as' => 'bank_account.edit', 'uses' => 'BankAccountController@edit']);
         Route::post('edit/{id}', ['as' => 'bank_account.update', 'uses' => 'BankAccountController@update']);
         Route::get('delete/{id}', ['as' => 'bank_account.delete', 'uses' => 'BankAccountController@destroy']);
    });

    Route::group(['prefix' => 'tarjetas-de-credito'], function(){    
         Route::get('/', ['as' => 'credit_card.index', 'uses' => 'CreditCardController@index']);
         Route::get('crear', ['as' => 'credit_card.create', 'uses' => 'CreditCardController@create']);
         Route::post('crear', ['as' => 'credit_card.store', 'uses' => 'CreditCardController@store']);
    //     //Route::get('show/{id}', ['as' => 'promocondition.show', 'uses' => 'Investigation\Promocondition\PromoconditionController@show']);
        Route::get('edit/{id}', ['as' => 'credit_card.edit', 'uses' => 'CreditCardController@edit']);
        Route::post('edit/{id}', ['as' => 'credit_card.update', 'uses' => 'CreditCardController@update']);
        Route::get('delete/{id}', ['as' => 'credit_card.delete', 'uses' => 'CreditCardController@destroy']);
    });

    Route::group(['prefix' => 'operaciones'], function(){    
         Route::get('/', ['as' => 'operations.index', 'uses' => 'OperationsController@index']);
         Route::get('/findCustomerAccounts', ['as' => 'operations.findCustomerAccounts', 'uses' => 'OperationsController@findCustomerAccounts']);
         Route::get('/findCustomerBanks', ['as' => 'operations.findCustomerBanks', 'uses' => 'OperationsController@findCustomerBanks']);
         // Route::get('/', ['as' => 'operations.edit', 'uses' => 'OperationsController@index']);
         // Route::post('crear', ['as' => 'credit_card.store', 'uses' => 'CreditCardController@store']);
    //     //Route::get('show/{id}', ['as' => 'promocondition.show', 'uses' => 'Investigation\Promocondition\PromoconditionController@show']);
    //     Route::get('edit/{id}', ['as' => 'customer.edit', 'uses' => 'Sales\CustomerController@edit']);
    //     Route::post('edit/{id}', ['as' => 'customer.update', 'uses' => 'Sales\CustomerController@update']);
    //     Route::get('delete/{id}', ['as' => 'customer.delete', 'uses' => 'Sales\CustomerController@destroy']);
    });
    Route::group(['prefix' => 'movimientos'], function(){    
         Route::get('/', ['as' => 'bank_movements.index', 'uses' => 'BankMovementsController@index']);
    });
});
