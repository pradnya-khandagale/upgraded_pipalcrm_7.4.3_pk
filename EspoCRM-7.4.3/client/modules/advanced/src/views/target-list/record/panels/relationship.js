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

Espo.define('advanced:views/target-list/record/panels/relationship', 'crm:views/target-list/record/panels/relationship', function (Dep) {

    return Dep.extend({

        actionPopulateFromReport: function (data) {
            var link = data.link;

            var filterName = 'list' + Espo.Utils.upperCaseFirst(link);

            this.notify('Loading...');
            this.createView('dialog', 'views/modals/select-records', {
                scope: 'Report',
                multiple: false,
                createButton: false,
                primaryFilterName: filterName,
            }, function (dialog) {
                dialog.render();
                this.notify(false);
                dialog.once('select', function (selectObj) {
                    var data = {};

                    data.id = selectObj.id;
                    data.targetListId = this.model.id;

                    $.ajax({
                        url: 'Report/action/populateTargetList',
                        type: 'POST',
                        data: JSON.stringify(data),
                        success: function () {
                            this.notify('Linked', 'success');
                            this.collection.fetch();
                        }.bind(this)
                    });
                }.bind(this));
            }.bind(this));
        }

    });
});
