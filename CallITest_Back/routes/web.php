<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('Administrators', 'AdministratorsController@index')->name('adm');

Route::get('Membros', 'MemberController@index')->name('members');

Route::get('Animais', 'AnimalController@index')->name('animals');

Route::get('Projetos', 'ProjectController@index' )->name('projects');

Route::get('Testes', 'TestsController@index')->name('tests');

Route::get('Baterias', 'BateriesController@index')->name('bateries');

Route::get('ResultadosBaterias', 'ResultBateryController@index')->name('resultBateries');

Route::get('Tentativa_Bateria', 'TryBateryController@index')->name('try_bateries');

Route::get('Result_Tentativa_Bateria', 'ResultTryBateryController@index')->name('try_result_bateries');

Route::get('Trainamento', 'TrainingController@index')->name('trainings');

Route::get('Resultado_Trainamento', 'ResultTrainingController@index')->name('result_trainings');

Route::get('Tentativa_Trainamento', 'TryTrainingController@index')->name('try_trainings');

Route::get('Resultado_Tentativa_Trainamento', 'ResultTryTrainingController@index')->name('try_result_trainings');