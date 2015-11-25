<?php

/**
 * Classe de configuração da aplicação
 * em nosso MVC em PHP. Atualmente possui
 * apenas informações de configuração
 * de acesso ao banco de dados.
 */
class Config {

    /**
     * Um array de configurações possibilita a
     * criação de modelos para múltiplos bancos
     * de dados.
     */
    public static $banco = array(

        'padrao' => array(
            'servidor' => 'localhost',
            'usuario' => 'root',
            'driver' => 'mysqli',
            'senha' => 'unipe',
            'porta' => '',
            'banco' => 'aprendaja',
            'charset' => 'utf8'
        )
    );

}