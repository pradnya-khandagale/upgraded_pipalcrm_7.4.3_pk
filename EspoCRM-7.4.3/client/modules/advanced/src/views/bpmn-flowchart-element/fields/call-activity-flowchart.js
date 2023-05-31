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

Espo.define('advanced:views/bpmn-flowchart-element/fields/call-activity-flowchart', 'views/fields/link', function (Dep) {

    return Dep.extend({

        selectPrimaryFilterName: 'activeHasNoneStartEvent',

        createDisabled: true,

        getSelectFilters: function () {
            var entityType = this.model.elementHelper.getEntityTypeFromTarget(this.model.get('target'));

            if (!entityType) return;

            var data = {};

            if (entityType) {
                data.targetType = {
                    type: 'in',
                    value: [entityType]
                };
            }

            return data;
        },

    });
});