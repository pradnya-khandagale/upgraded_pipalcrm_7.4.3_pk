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

namespace Espo\Modules\Advanced\Services;

use Espo\ORM\Entity;

use Espo\Core\Exceptions\Forbidden;

class BpmnFlowchart extends \Espo\Services\Record
{
    protected $readOnlyAttributeList = [
        'elementsDataHash',
        'isManuallyStartable',
        'eventStartIdList',
    ];

    /**
     * @todo Remove.
     */
    protected $exportSkipAttributeList = [
        'hasNoneStartEvent',
        'elementsDataHash',
    ];

    protected $forceSelectAllAttributes = true;

    protected function beforeUpdateEntity(Entity $entity, $data)
    {
        if (!$entity->isNew() && $entity->isAttributeChanged('targetType')) {
            throw new Forbidden("BpmnFlowchart: Can't change targetType.");
        }
    }
}
