<?php

use App\Administrator;
use App\Member;
use App\Animal;
use App\Batery;
use App\Project;
use App\Test;

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

Route::get('/Testes', function () {
    $tests = Test::all();
    echo "<h3> Informações de Testes</h3>";
    echo "<ul>";
    foreach ($tests as $t) {
        echo "<li> <strong> Nome: </strong>" . $t->name . " </li>";
        echo "<li> <strong> Orientador: </strong>" . $t->project->name . " </li>";
        echo "<h4> Membros </h4>";
        echo "<hr>";
        echo "</ul>";
    }
});

Route::get('/Baterias', function () {
    $bateries = Batery::all();
    echo "<h3> Informações de Baterias</h3>";
    echo "<ul>";
    foreach ($bateries as $b) {
        echo "<li> <strong> id: </strong>" . $b->id . " </li>";
        echo "<li> <strong> tryNum: </strong>" . $b->tryNum . " </li>";
        echo "<li> <strong> tryTime: </strong>" . $b->tryTime . " </li>";
        echo "<li> <strong> errorTime: </strong>" . $b->errorTime . " </li>";
        echo "<li> <strong> rewardTime: </strong>" . $b->rewardTime . " </li>";
        echo "<li> <strong> showingTime: </strong>" . $b->showingTime . " </li>";
        echo "<li> <strong> tests: </strong>" . $b->test->name . " </li>";
        echo "<hr>";
        echo "</ul>";
    }
});

Route::get('/ResultadosBaterias', function () {
    $resultBateries = ResultBatery::all();
    echo "<h3> Informações de Resultados das Baterias </h3>";
    echo "<ul>";
    foreach ($resultBateries as $rb) {
        echo "<li> <strong> id: </strong>" . $rb->id . " </li>";
        echo "<li> <strong> biggestErrorTime: </strong>" . $rb->tryNum . " </li>";
        echo "<li> <strong> totalError: </strong>" . $rb->tryTime . " </li>";
        echo "<li> <strong> totalTime: </strong>" . $rb->errorTime . " </li>";
        echo "<li> <strong> touchscreenNum: </strong>" . $rb->rewardTime . " </li>";
        echo "<li> <strong> batery_id: </strong>" . $rb->test->name . " </li>";
        echo "<hr>";
        echo "</ul>";
    }
});