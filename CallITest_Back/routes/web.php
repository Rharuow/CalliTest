<?php

use App\Administrator;
use App\Member;
use App\Animal;
use App\Batery;
use App\Project;
use App\Test;
use App\ResultBatery;
use App\TryBatery;
use App\ResultTryBatery;
use App\Training;
use App\ResultTraining;
use App\TryTraining;
use App\ResultTryTraining;

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
        echo "<li> <strong> batery_id: </strong>" . $rb->batery->id . " </li>";
        echo "<hr>";
        echo "</ul>";
    }
});

Route::get('/Tentativa_Bateria', function () {
    $tryBatery = TryBatery::all();
    echo "<h3> Informações de Tentativa das Baterias </h3>";
    echo "<ul>";
    foreach ($tryBatery as $tb) {
        echo "<li> <strong> id: </strong>" . $tb->id . " </li>";
        echo "<li> <strong> type: </strong>" . $tb->type . " </li>";
        echo "<li> <strong> shape: </strong>" . $tb->shape . " </li>";
        echo "<li> <strong> color: </strong>" . $tb->color . " </li>";
        echo "<li> <strong> batery_id: </strong>" . $tb->batery->id . " </li>";
        echo "<hr>";
        echo "</ul>";
    }
});

Route::get('/Result_Tentativa_Bateria', function () {
    $resultTryBatery = ResultTryBatery::all();
    echo "<h3> Informações de Resultados das Tentativa das Baterias </h3>";
    echo "<ul>";
    foreach ($resultTryBatery as $rtb) {
        echo "<li> <strong> id: </strong>" . $rtb->id . " </li>";
        echo "<li> <strong> firstErroTime: </strong>" . $rtb->firstErroTime . " </li>";
        echo "<li> <strong> totalTime: </strong>" . $rtb->totalTime . " </li>";
        echo "<li> <strong> touchscreenNum: </strong>" . $rtb->touchscreenNum . " </li>";
        echo "<li> <strong> try_bateries_id: </strong>" . $rtb->tryBateries->id . " </li>";
        echo "<hr>";
        echo "</ul>";
    }
});

Route::get('/Trainamento', function () {
    $trainings = Training::all();
    echo "<h3> Informações de Trainamento </h3>";
    echo "<ul>";
    foreach ($trainings as $t) {
        echo "<li> <strong> id: </strong>" . $t->id . " </li>";
        echo "<li> <strong> firstErroTime: </strong>" . $t->firstErroTime . " </li>";
        echo "<li> <strong> totalTime: </strong>" . $t->totalTime . " </li>";
        echo "<li> <strong> touchscreenNum: </strong>" . $t->touchscreenNum . " </li>";
        echo "<li> <strong> test: </strong>" . $t->test->id . " </li>";
        echo "<hr>";
        echo "</ul>";
    }
});

Route::get('/Resultado_Trainamento', function () {
    $resultTraining = ResultTraining::all();
    echo "<h3> Informações de Resultado do Trainamento </h3>";
    echo "<ul>";
    foreach ($resultTraining as $rt) {
        echo "<li> <strong> id: </strong>" . $rt->id . " </li>";
        echo "<li> <strong> biggestErrorTime: </strong>" . $rt->biggestErrorTime . " </li>";
        echo "<li> <strong> totalError: </strong>" . $rt->totalError . " </li>";
        echo "<li> <strong> totalTime: </strong>" . $rt->totalTime . " </li>";
        echo "<li> <strong> touchscreenNum: </strong>" . $rt->touchscreenNum . " </li>";
        echo "<li> <strong> training_id: </strong>" . $rt->training->id . " </li>";
        echo "<hr>";
        echo "</ul>";
    }
});

Route::get('/Tentativa_Trainamento', function () {
    $tryTraining = TryTraining::all();
    echo "<h3> Informações de Tentativas do Trainamento </h3>";
    echo "<ul>";
    foreach ($tryTraining as $tt) {
        echo "<li> <strong> id: </strong>" . $tt->id . " </li>";
        echo "<li> <strong> type: </strong>" . $tt->type . " </li>";
        echo "<li> <strong> shape: </strong>" . $tt->shape . " </li>";
        echo "<li> <strong> color: </strong>" . $tt->color . " </li>";
        echo "<li> <strong> training_id: </strong>" . $tt->training->id . " </li>";
        echo "<hr>";
        echo "</ul>";
    }
});

Route::get('/Resultado_Tentativa_Trainamento', function () {
    $resultTryTraining = ResultTryTraining::all();
    echo "<h3> Informações de Resultado das Tentativas do Trainamento </h3>";
    echo "<ul>";
    foreach ($resultTryTraining as $rtt) {
        echo "<li> <strong> id: </strong>" . $rtt->id . " </li>";
        echo "<li> <strong> firstErroTime: </strong>" . $rtt->firstErroTime . " </li>";
        echo "<li> <strong> totalTime: </strong>" . $rtt->totalTime . " </li>";
        echo "<li> <strong> touchscreenNum: </strong>" . $rtt->touchscreenNum . " </li>";
        echo "<li> <strong> try_training_id: </strong>" . $rtt->tryTraining->id . " </li>";
        echo "<hr>";
        echo "</ul>";
    }
});