<?php
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

namespace Espo\Modules\Advanced\Core\Workflow\Actions;

use Espo\ORM\Entity;

class UpdateEntity extends BaseEntity
{
    protected function run(Entity $entity, $actionData)
    {
        $entityManager = $this->getEntityManager();

        $reloadedEntity = $entityManager->getEntity($entity->getEntityType(), $entity->id);

        $data = $this->getDataToFill($reloadedEntity, $actionData->fields);

        $reloadedEntity->set($data);
        $entity->set($data);

        if (!empty($actionData->formula)) {
            $this->getFormulaManager()->run($actionData->formula, $reloadedEntity, $this->getFormulaVariables());

            $clonedVariables = clone $this->getFormulaVariables();

            $this->getFormulaManager()->run($actionData->formula, $entity, $clonedVariables);
        }

        $entityManager->saveEntity($reloadedEntity, [
            'modifiedById' => 'system',
            'skipWorkflow' => !$this->bpmnProcess,
            'workflowId' => $this->getWorkflowId(),
        ]);

        return true;
    }
}