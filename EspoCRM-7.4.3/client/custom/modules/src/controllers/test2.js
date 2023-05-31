define('custom:controllers/test2', ['controllers/record'], function (Dep) {

    return Dep.extend({

        //defaultAction: 'ak',

        actionAk: function () {
            // this.main('About', {}, function (view) {
            //     view.render();
            // });
            // console.log('action: Ak');
            // console.log(options);
        },

        actionHello: function (options) {
            // console.log('action: hello');
            // console.log(options);
        },

        actionIndex: function () {
            // console.log('action: dfddg');
            // console.log(options);
            //this.main('views/home', null);
        },

        actionTest2: function (options) {
            //if (!options.id) throw new Espo.Exceptions.NotFound();

            // console.log('action: test');
            // console.log(options);
        },

    });
});