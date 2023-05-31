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

Espo.define('advanced:views/bpmn-process/fields/target', 'views/fields/link-parent', function (Dep) {

    return Dep.extend({

        setup: function () {
            this.params.entityList = ['BpmnProcess'];

            Dep.prototype.setup.call(this);

            if (this.model.isNew() && this.mode !== 'search') {
                this.setupForeignScope();

                this.listenTo(this.model, 'change:targetType', function () {
                    this.setupForeignScope();
                    this.reRender();
                }, this);

            } else {
                var scopes = this.getMetadata().get('scopes');
                var entityListToIgnore = this.getMetadata().get('entityDefs.Workflow.entityListToIgnore') || [];
                var scopeList = Object.keys(scopes).filter(function (scope) {
                    if (~entityListToIgnore.indexOf(scope)) {
                        return;
                    }
                    var defs = scopes[scope];
                    return (defs.entity && (defs.tab || defs.object || defs.workflow));
                }).sort(function (v1, v2) {
                    return this.translate(v1, 'scopeNamesPlural').localeCompare(this.translate(v2, 'scopeNamesPlural'));
                }.bind(this));

                this.foreignScopeList = scopeList;
            }
        },

        setupForeignScope: function () {
            if (this.model.get('targetType')) {
                this.foreignScopeList = [this.model.get('targetType')];
            } else {
                this.foreignScopeList = ['BpmnProcess'];
            }
        }

    });

});