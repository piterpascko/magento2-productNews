define([
    'jquery',
    'Magento_Ui/js/modal/modal',
    'Magento_Ui/js/form/form'
], function ($, modal, form) {
    return function(config, element) {
        var options = {
            title: config.title || ''
        };
        var myModal = $( "<div></div>" )
            .appendTo( "body" )
            .modal(options);
        myModal.modal('openModal');
    }
});