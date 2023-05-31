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

Espo.define('advanced:views/report/fields/joined-reports', 'views/fields/link-multiple-with-columns', function (Dep) {

    return Dep.extend({

        columnList: ['label'],

        selectPrimaryFilterName: 'grid',

        createDisabled: true,

        columnsDefs: {
            'label': {
                type: 'varchar',
                scope: 'Report',
                field: 'joinedReportLabel',
            }
        },

        fetch: function () {
            var data = Dep.prototype.fetch.call(this);

            var dataList = [];

            data[this.idsName].forEach(function (id) {
                dataList.push({
                    id: id,
                    label: ((data[this.columnsName] || {})[id] || {}).label,
                });
            }, this);

            data.joinedReportDataList = dataList;

            return data;
        },
    });
});
