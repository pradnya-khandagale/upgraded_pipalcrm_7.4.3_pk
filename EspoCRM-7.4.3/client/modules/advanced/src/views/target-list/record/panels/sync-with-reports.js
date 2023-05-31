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

define('advanced:views/target-list/record/panels/sync-with-reports', 'views/record/panels/side', function (Dep) {

    return Dep.extend({

        fieldList: [
            'syncWithReportsEnabled',
            'syncWithReports',
            'syncWithReportsUnlink',
        ],

        actionList: [
            {
                "name": "syncWithReport",
                "label": "Sync Now",
                "acl": "edit",
                "action": "syncWithReports",
            }
        ],

        setup: function () {
            Dep.prototype.setup.call(this);
        },

        actionSyncWithReports: function () {
            if (!this.model.get('syncWithReportsEnabled')) {
                return;
            }

            this.notify('Please wait...');

            $.ajax({
                url: 'Report/action/syncTargetListWithReports',
                type: 'Post',
                data: JSON.stringify({
                    targetListId: this.model.id
                })
            }).done(function () {
                this.notify('Done', 'success');
                this.model.trigger('after:relate');
            }.bind(this));

        },
    });
});
