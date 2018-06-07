define([
    'jquery',
    'Magento_Ui/js/grid/columns/actions',
    'SSS_ProductNews/js/modal-popup'
],
function($, Actions, modalPopup) {
    return Actions.extend({
        _formatActions: function (row, rowIndex) {
            var rowActions = row[this.index] || {};
            return rowActions;
        },
        showModal: function () {
            console.log(this);
            $.get(this.actions.edit.href, function(data) {
                console.log(data);
            });
            modalPopup({title: "Feel free to edit news #" + this.news_id});
        }
    })
});