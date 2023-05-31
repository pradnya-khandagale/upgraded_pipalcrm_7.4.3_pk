define('custom:views/mass-whatsapp/panels/mass-whatsapp-logs', ['views/record/panels/bottom'], function (Dep) {

    return Dep.extend({

        template: 'custom:mass-whatsapp/panels/mass-whatsapp-logs',

        setup: function () {
            Dep.prototype.setup.call(this);
            this.id = this.model.get('id');
            // this holds off the rendering
            this.wait(true);

            Espo.Ajax.getRequest(`MyWPLogs/${this.id}`)
            .then(response => {
                this.logData = '';
                // console.log(response);
                response.forEach(arr => {
                    this.logData += `
                    <tr data-id="${this.id}" class="list-row">
                        <td class="cell" data-name="number">
                            <span class="text-default">${arr.phoneNumber}</span>
                        </td>
                        <td class="cell" data-name="target">
                            <a href="#${arr.entityType}/view/${arr.entityId}" title="${arr.entityType}">${arr.entityType}</a>
                        </td>
                        <td class="cell" data-name="status">
                            <span class="text-default">${arr.createdAt}</span>
                        </td>
                        <td class="cell" data-name="status">
                            <span class="text-default">${arr.status}</span>
                        </td>
                    </tr>
                    `;
                });    
                this.wait(false);
            });
        },

        afterRender: function () {
            // this.wait(true);
            this.$el.find(".logTable").html(this.logData);
            // this.wait(false);
        }
    });
});