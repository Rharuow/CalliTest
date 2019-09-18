<?php

use App\Administrator;
use App\Member;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Administradores', function () {
    $adm = Administrator::all();
    
    echo "<table>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Senha</th>";
    echo "<th>Sexo</th>";
    echo "<th>Token</th>";
    echo "</tr>";
    foreach ($adm as $a) {
        echo "<tr>";
        echo "<td>" . $a->name . "</td>";
        echo "<td>" . $a->psw . "</td>";
        echo "<td>" . $a->sex . "</td>";
        echo "<td>" . $a->temporaryToken . "</td>";
        echo "</tr>";
    }

});

Route::get('/Membros', function () {
    $member = Member::with('administrators')->get();
    
    echo "<table>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Senha</th>";
    echo "<th>Sexo</th>";
    echo "<th>CPF</th>";
    echo "<th>RG</th>";
    echo "<th>Matricula</th>";
    echo "<th>Curso</th>";
    echo "<th>Administrador</th>";
    echo "</tr>";
    foreach ($member as $m) {
        echo "<tr>";
        echo "<td>" . $m->name . "</td>";
        echo "<td>" . $m->psw . "</td>";
        echo "<td>" . $m->sex . "</td>";
        echo "<td>" . $m->CPF . "</td>";
        echo "<td>" . $m->RG . "</td>";
        echo "<td>" . $m->registration . "</td>";
        echo "<td>" . $m->course . "</td>";
        echo "<td>" . $m->administrators->name . "</td>";
        echo "</tr>";
    }

});