define('custom:views/test2/my-custom-view', 'view', function (Dep) {

    return Dep.extend({

        // template file, contents is printed below
        template: 'custom:test2/my-custom-view',

        // altertatively template can be defined right here
        //templateContent: '<div class="some-test-container">{{{someKeyName}}}</div>',

        // initializing logic
        setup: function () {
            // calling parent setup method, you can omit it
            Dep.prototype.setup.call(this);

            this.someParam1 = 'test 1';

            // when we create a child view in setup method, rendering of the view will be held off
            // until the child view is loaded (ready)
            this.createView('someKeyName', 'custom:test2/my-custom-child-view', {
                el: this.getSelector() + ' .some-test-container',
                someParam: 'test',
            });

            // console.log(this.options); // options passed from a parent view

            // all event listeners are recommended to be initialized here

            this.on('remove', function () {

            }, this);

            // use listenTo & listenToOnce methods for listening to events of another object
            // to prevent memory leakage

            // model changed
            this.listenTo(this.model, 'change', function () {
                // whether specific attribute changed        
                if (this.model.hasChanged('test')) {        
                }
            }, this);

            // model saved or fetched         
            this.listenTo(this.model, 'sync', function () {   
            }, this);
        },

        // called after contents is added to DOM
        afterRender: function () {
            // view container DOM element
            // console.log(this.$el); 

            // get child view
            var childView = this.getView('someKeyName'); 

            // destroy child view, will also remove it from DOM
            this.clearView('someKeyName');
        },

        // data passed to template
        data: function () {
            return {
                someParam2: 'test 2',
            };
        },

        // DOM event handlers
        events: {
            'click a[data-action="test"]': function (e) {
                // console.log(e.currentTarget);
                this.actionTest();
            },
        },

        // called when the view is removed
        // useful for destroying some event listeners inialized for the view
        onRemove: function () {

        },

        // custom method
        actionTest: function () {

        },
    });
});