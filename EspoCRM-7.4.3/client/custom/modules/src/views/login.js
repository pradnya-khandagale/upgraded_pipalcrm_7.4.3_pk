define('custom:views/login', 'views/login', function (Dep) {

    return Dep.extend({

        // specify your custom template
        template: 'custom:login',

        // specify your own custom values for any custom placeholders that you are including in the template
        // in this example, a background image, company name, custom button for self-registration and captcha are included
        landingPageData: {
            logo: 'client/img/logo-37.png',
            backgroundImage: 'client/img/crmbg.png',
            companyName: 'mPhatekcrm',
            selfRegistrationEnabled: true,
            captchaEnabled: false            
        },

        // include the custom values in the standard "data" function which will provide the placeholder values to the template
        // the values for "logoSrc" and "showForgotPassword" are the standard values specified in the core login script
        data: function () {
            //console.log(this.getConfig());   this.getConfig().get('passwordRecoveryEnabled') 
            return{     
              logoSrc: this.getLogoSrc(),
              showForgotPassword: true,
              companyName: this.landingPageData.companyName,
              backgroundImage: this.landingPageData.backgroundImage,
              selfRegistrationEnabled: this.landingPageData.selfRegistrationEnabled
           };          
        },

        // this is the function that will be triggered when the visitor clicks on the custom "Register" button
        showRegistrationRequest: function () {

            // to keep things simple, the implementation of the self registration is not included in this tutorial
            // but this shows how a custom button can be implemented in your own custom landing page
            Espo.Ui.notify(this.translate('pleaseWait', 'messages'));
            this.createView('registrationRequest', 'custom:views/registration-request', {
                url: window.location.href
            }, function (view) {
                view.render();
                Espo.Ui.notify(false);
            });

        }

    });
});