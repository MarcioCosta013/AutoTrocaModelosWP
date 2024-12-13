<?php

function trocar_modelo_home() {
    if (is_front_page()) {
        $dia_semana = date('w'); // Obtém o dia da semana (0 = Domingo, 6 = Sábado)

        // Modelos de cada dia da semana
        $modelos = [
            0 => '[elementor-template id="2196"]',  // Domingo
            1 => '[elementor-template id="139"]',  // Segunda-feira
            2 => '[elementor-template id="1754"]',    // Terça-feira
            3 => '[elementor-template id="1759"]',   // Quarta-feira
            4 => '[elementor-template id="1953"]',   // Quinta-feira
            5 => '[elementor-template id="1767"]',    // Sexta-feira
            6 => '[elementor-template id="1774"]',   // Sábado
        ];

        if (isset($modelos[$dia_semana])) {
            echo do_shortcode($modelos[$dia_semana]); // Insere o shortcode correspondente ao dia da semana
        }
    }
}
add_action('wp_head', 'trocar_modelo_home'); // Executa o código no carregamento da página

?>
