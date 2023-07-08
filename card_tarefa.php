<?php
function buildTaskCard($task): string
{
    return <<<card
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">{$task['titulo']}</h5>
        <p class="card-text">{$task['descricao']}</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Info
        </button>
        <a href="editar_tarefa.php?id={$task['id']}" class="btn btn-primary">Editar</a>
        </div>
        </div>
    card;
}
