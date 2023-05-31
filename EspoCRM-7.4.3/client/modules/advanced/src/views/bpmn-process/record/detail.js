/*********************************************************************************
 * The contents of this file are subject to the EspoCRM Advanced Pack
 * Agreement ("License") which can be viewed at
 * https://www.espocrm.com/advanced-pack-agreement.
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * sublicense, resell, rent, lease, distribute, or otherwise  transfer rights
 * or usage to the software.
 *
 * Copyright (C) 2015-2021 Letrium Ltd.
 *
 * License ID: b5ceb96925a4ce83c4b74217f8b05721
 ***********************************************************************************/

define('advanced:views/bpmn-process/record/detail', 'views/record/detail', function (Dep) {

    return Dep.extend({

        duplicateAction: false,

        setup: function () {
            Dep.prototype.setup.call(this);
            this.hideField('startElementId');

            if (~['Started', 'Paused'].indexOf(this.model.get('status')) && this.getAcl().checkModel(this.model, 'edit')) {
                this.dropdownItemList.push({
                    'label': 'Stop Process',
                    'name': 'stopProcess'
                });
            }
        },

        actionStopProcess: function () {
            this.confirm(this.translate('confirmation', 'messages'), function () {
                this.ajaxPostRequest('BpmnProcess/action/stop', {
                    id: this.model.id
                }).then(function () {
                    this.model.set('status', 'Stopped');
                    Espo.Ui.success(this.translate('Done', 'labels'));
                    this.removeButton('stopProcess');
                    this.model.trigger('after:relate');

                    this.model.fetch();
                }.bind(this));
            }.bind(this));
        },

    });
});
