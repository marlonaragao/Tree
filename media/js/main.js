/*
 * Require.js - Arquivo de configuração do require
 *
 * @author Marlon Aragão <aragao@morphy.com.br>
 * @version 1.0 <12/09/2014>
 */

// Configura os path das aplicação
require.config({
    urlArgs: "=v1",
    paths: {
        // Alias para os plugins
        jquery: "empty:",
        bootstrap: "../vendor/bootstrap/dist/js/bootstrap.min"
    },
    pathCss: {
        // "nome Moludo": "caminho Moludo"
    },
    waitSeconds: 10,
    shim: {
        bootstrap: {
            deps: ['jquery'],
            exports: '$.fn.popover'
        }
    }
});

require(['bootstrap']);