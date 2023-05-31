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

Espo.define('advanced:views/workflow/condition-fields/shift-days', 'view', function (Dep) {

    return Dep.extend({

        template: 'advanced:workflow/condition-fields/shift-days',

        data: function () {
            return {
                shiftDaysOperator: this.shiftDaysOperator,
                value: this.value,
                readOnly: this.readOnly
            };
        },

        setup: function () {
            this.value = this.options.value;
            this.readOnly = this.options.readOnly;

            if (this.value < 0) {
                this.shiftDaysOperator = 'minus';
                this.value = (-1) * this.value;
            } else {
                this.shiftDaysOperator = 'plus';
            }
        },

    });
});

