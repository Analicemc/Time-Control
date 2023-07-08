<?php

function buildTaskCard($task, $userName = ""): string
{
    $data_inicio = formatDateFromDB($task['data_inicio']);
    return <<<card
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">{$task['titulo']}</h5>
        <p class="card-text">{$userName}</p>
        <p class="card-text">{$task['descricao']}</p>
        <p class="card-text">{$data_inicio}</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Info
        </button>
        <a href="editar_tarefa.php?id={$task['id']}" class="btn btn-primary">Editar</a>
        </div>
        </div>
    card;
}

function formatDateFromDB($date){
    strtotime($date);
    return date('d/m/Y', (int)($date));
}
