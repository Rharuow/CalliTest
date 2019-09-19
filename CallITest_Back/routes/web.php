<?php

use App\Administrator;
use App\Member;
use App\Animal;
use App\Project;

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
    echo "<h3> Informações de Administradores</h3>";
    echo "<ul>";
    foreach ($adm as $a) {
        echo "<li> <strong> Name:  </strong>" . $a->name . "</li>";
        echo "<li> <strong> Senha:  </strong>" . $a->psw . "</li>";
        echo "<li> <strong> Sexo:  </strong>" . $a->sex . "</li>";
        echo "<li> <strong> Token:  </strong>" . $a->temporaryToken . "</li>";
        echo "<hr>";
    }
    echo "</ul>";
});

Route::get('/Membros', function () {
    $members = Member::all();
    echo "<h3>Informações de Membros</h3>";
    echo "<ul>";
    foreach ($members as $m) {  
        echo "<li>Nome: ". $m->name ."</li>";
        echo "<li>Senha: ". $m->psw ."</li>";
        echo "<li>Sexo: ". $m->sex ."</li>";
        echo "<li>CPF: ". $m->CPF ."</li>";
        echo "<li>RG: ". $m->RG ."</li>";
        echo "<li>Matricula: ". $m->registration ."</li>";
        echo "<li>Curso: ". $m->course ."</li>";
        echo "<li>Administrador: ". $m->administrators->name ."</li>";
        echo "<h4> Projetos que " . $m->name . " está vinculado</h4>";
        foreach ($m->project as $p) {
            echo " | " . $p->name . " | ";
        }
        echo "<hr>";
        echo "</ul>";
    }
});

Route::get('/Animais', function () {
    $animals = Animal::with('project')->get();
    echo "<h3> Informações dos animais</h3>";
    echo "<ul>";
    foreach ($animals as $a) {
        echo "<li> <strong> Nome: </strong>" . $a->name . " </li>";
        echo "<li> <strong> Código: <strong> " . $a->code . "</li>";
        echo "<li> <strong> Sexo: <strong> " . $a->sex . "</li>";
        echo "<li> <strong> Marcação: <strong> " . $a->marking . "</li>";
        echo "<li> <strong> Gaiola: <strong> " . $a->cage . "</li>";
        echo "<li> <strong> Data de Nascimento: <strong> " . $a->birthday . "</li>";
        echo "<li> <strong> OBS: <strong> " . $a->OBS . "</li>";
        echo "<h4> Projetos </h4>";
        foreach ($a->project as $p) {
            echo " | " . $p->name . " | ";
        }
        echo "<hr>";
        echo "</ul>";
    }
});

Route::get('/Projetos', function () {
    $projects = Project::all();
    echo "<h3> Informações de Projetos</h3>";
    echo "<ul>";
    foreach ($projects as $p) {
        echo "<li> <strong> Nome: </strong>" . $p->name . " </li>";
        echo "<li> <strong> Orientador: </strong>" . $p->administrators->name . " </li>";
        echo "<h4> Membros </h4>";
        foreach ($p->member as $m) {
            echo " | " . $m->name . " | ";
        }
        echo "<hr>";
        echo "</ul>";
    }
});
