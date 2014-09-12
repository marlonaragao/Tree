/**
 * Componente responsavel arvore de arquivos
 *
 * @author Marlon Aragão
 */

define(['jquery'], function(jq) {
    var Tree = (function(window, document, undefined) {
            'use strict';

            var $public = {};
            var $private = {};

            $private.wrapperTree = '.tree-accordion';
            $private.elementClickTree = 'li .text';

            $private.enableTree = function() {
                $($private.wrapperTree + ' ' + $private.elementClickTree).on('click', function(){
                    $(this).parent().find('ul').first().slideToggle();
                });
            }

            $public.disableTree = function() {

                $($private.wrapperTree + ' ' + $private.elementClickTree).off('click').on('click', function(){

                    if($(this).parent().find('.checkbox').is(':checked') == false){
                        $(this).parent().find('.checkbox').attr('checked', 'checked');
                    } else {
                        $(this).parent().find('.checkbox').removeAttr('checked');
                    }

                });

            }

            $public.setWrapperTree = function(element) {
                $private.wrapperTree = element;
            };

            $public.setElementClickTree = function(element) {
                $private.elementClickTree = element;
            };

            $public.getWrapperTree = function() {
                return $private.wrapperTree;
            };

            $public.getElementClickTree = function() {
                return $private.elementClickTree;
            };

            $public.ready = function() {
                $private.enableTree();
            }

            return $public;

    })(window, document);

    return Tree;
});