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

Espo.define('advanced:views/bpmn-user-task/detail', 'views/detail', function (Dep) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);
            if (!this.model.get('resolution')) {
                if (this.getAcl().checkModel(this.model, 'edit')) {
                    this.addMenuItem('buttons', {
                        label: 'Resolve',
                        action: 'showResolveModal',
                        acl: 'edit'
                    });
                    this.listenTo(this.model, 'sync', function () {
                        if (this.model.get('resolution')) {
                            this.removeMenuItem('showResolveModal');
                        }
                    }, this);

                    this.listenTo(this.model, 'change:resolution', function () {
                        if (this.model.get('resolution')) {
                            this.disableMenuItem('showResolveModal');
                        } else {
                            this.enableMenuItem('showResolveModal');
                        }
                    }, this);
                }
            }
        },

        actionShowResolveModal: function () {
            this.createView('modal', 'advanced:views/bpmn-user-task/modals/resolve', {
                model: this.model
            }, function (view) {
                view.render();
            });
        }

    });
});

