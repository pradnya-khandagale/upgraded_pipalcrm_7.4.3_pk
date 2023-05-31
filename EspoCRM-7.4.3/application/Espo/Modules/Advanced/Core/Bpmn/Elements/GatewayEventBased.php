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

namespace Espo\Modules\Advanced\Core\Bpmn\Elements;

use \Espo\Core\Exceptions\Error;

class GatewayEventBased extends Gateway
{
    protected function processDivergent()
    {
        $flowNode = $this->getFlowNode();

        $item = $flowNode->get('elementData');
        $nextElementIdList = $item->nextElementIdList;

        $flowNode->set('status', 'In Process');
        $this->getEntityManager()->saveEntity($flowNode);
        foreach ($nextElementIdList as $nextElementId) {
            $nextFlowNode = $this->processNextElement($nextElementId, false, true);
            if ($nextFlowNode->get('status') === 'Processed') {
                break;
            }
        }
        $this->setProcessed();
        $this->getManager()->tryToEndProcess($this->getProcess());
    }

    protected function processConvergent()
    {
        $this->processNextElement();
    }
}
