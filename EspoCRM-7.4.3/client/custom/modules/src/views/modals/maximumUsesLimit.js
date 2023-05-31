define('custom:views/modals/maximumUsesLimit', ['views/modal', 'model'], function (Dep, Model) {

    return Dep.extend({

        className: 'dialog dialog-record',

        className: 'dialog dialog-centered maximumUsesLimit-modal',

        noFullHeight: true,

        // template content can be defined right here or externally
       // templateContent: '<div class="record">{{{record}}}</div>',

        // template content can be defined in external file client/custom/res/templates/my-dialog.tpl 
        template: 'custom:modals/maximumUsesLimit',

        // if true, clicking on the backdrop will close the dialog
        backdrop: true, // 'static', true, false

        setup: function () {
            // action buttons
            /*this.buttonList = [
                {
                    name: 'doSomething', // handler for 'doSomething' action is bellow
                    html: this.translate('Some Action', 'labels', 'MyScope'), // button label 
                    style: 'danger',
                },
                {
                    name: 'cancel',
                    label: 'Cancel',
                },
            ];*/

            var title = this.options.title || 'Maximum Uses Limit'; // passed from the parent view
            //this.headerHtml = this.translate('Package warning', 'labels', 'User');

            this.headerHtml = this.getHelper().escapeString(title); // escape to prevent XSS
            this.backdrop = 'static';
            this.isDraggable =true;
            this.formModel = new Model();
            this.formModel.name = 'None'; // dummy name

            // define fields
            this.formModel.setDefs({
                fields: {
                    'someString': {
                        type: 'varchar', // field type
                        view: 'views/fields/varchar', // can define custom view
                        required: true, // field params
                        trim: true,
                    },
                    'someCheckbox': {
                        type: 'bool',
                    },
                }
            });

            this.createView('record', 'views/record/edit-for-modal', {
                scope: 'None', // dummy name
                model: this.formModel,
                el: this.getSelector() + ' .record',
                // define layout
                detailLayout: [
                    {
                        rows: [
                            [
                                {
                                    name: 'someString',
                                    labelText: this.translate('someString', 'fields', 'MyScope'),
                                },
                                {
                                    name: 'someCheckbox',
                                    labelText: this.translate('Some Checkbox', 'labels', 'MyScope'),
                                }
                            ]
                        ]
                    }
                ],
            });
        },
        afterRender: function(){
            this.$el.find('.close').remove();
            this.$el.find('.maximum_uses_ct').html('You have reached maximum uses limit, Please try again');
        },
        actionDoSomething: function () {
            // fetch data from form to model and validate
            var isValid = this.getView('record').processFetch();

            if (isValid) { 
                // make POST request
                Espo.Ajax.postRequest('MyScope/action/doSomething', {
                    id: this.options.id, // passed from the parent view
                    someString: this.formModel.get('someString'),
                    someCheckbox: this.formModel.get('someCheckbox'),
                }).then(
                    function (response) {
                        Espo.Ui.success(this.translate('Done'));
                        // event 'done' will be catched by the parent view
                        this.trigger('done', response);
                        this.close();
                    }.bind(this)
                );
            }
        },
    });
});