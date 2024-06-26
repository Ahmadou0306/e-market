<?php

    use App\Http\Controllers\ProductsController;
    use Illuminate\Support\Facades\Route;

    Route::get('', [ProductsController::class,'index'])->name('index');
    Route::get('produits', [ProductsController::class,'produits'])->name('produits');
    Route::get('test/{id}',[ProductsController::class,'info'])->whereNumber('id')->name('info');
    Route::get('add',function(){
        return view('formulaireAjout');
    })->name('formadd');

    Route::post('add',[ProductsController::class,'add'])->name('add');
    Route::get('modifier/{id}',[ProductsController::class,'formUpdate'])->name('formUpdate');
    Route::post('update',[ProductsController::class,'modifie'])->whereNumber('id')->name('modifier');
    Route::get('delete/{id}',[ProductsController::class,'supprimer'])->whereNumber('id')->name('supprimer');
    Route::get('contact',function(){
        return view('contact');
    })->name('contactForm');
    Route::post('contact',[ProductsController::class,'contact'])->name('contact');
    Route::post('search',[ProductsController::class,'search'])->name('search');
