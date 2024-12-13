<?php
function modelo_dia_semana() {
    $dia_semana = date('w'); // Obtém o dia da semana (0 = Domingo, 6 = Sábado)
    
    // Defina os shortcodes dos modelos de cada dia
    $modelos = [
        0 => 'segunda', // ID do modelo para Domingo
        1 => 'terça', // ID do modelo para Segunda
        2 => 'quarta', // ID do modelo para Terça
        3 => 'quinta', // ID do modelo para Quarta
        4 => 'sexta', // ID do modelo para Quinta
        5 => 'sabado', // ID do modelo para Sexta
        6 => 'domingo', // ID do modelo para Sábado
    ];

    // Retorne o shortcode do modelo para o dia atual
    if (isset($modelos[$dia_semana])) {
        return $modelos[$dia_semana]; // Substituí 'do_shortcode' para simular o retorno
    }

    return 'Modelo não encontrado'; // Caso o dia não esteja configurado
}

// Testar a função
echo modelo_dia_semana();
?>
