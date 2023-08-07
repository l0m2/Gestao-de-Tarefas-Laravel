<?php

// Arquivo app/Helpers/CustomHelpers.php


    function getPriorityColor($priority)
    {
        switch ($priority) {
            case 'Alta':
                return 'red';
            case 'Media':
                return 'orange';
            case 'Baixa':
                return 'green';
            default:
                return 'black'; // Cor padrão, caso a prioridade não seja reconhecida
        }
    
}
