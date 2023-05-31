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

namespace Espo\Modules\Advanced\Core\Workflow\Formula\Functions\BpmGroup;

use Espo\Core\Exceptions\Error;

use StdClass;

class BroadcastSignalType extends \Espo\Core\Formula\Functions\Base
{
    protected function init()
    {
        $this->addDependency('signalManager');
    }

    public function process(StdClass $item)
    {
        $args = $this->fetchArguments($item);

        $signal = $args[0] ?? null;

        if (!$signal) {
            throw new Error("Formula: bpm\\broadcastSignal: No signal name.");
        }

        if (!is_string($signal)) {
            throw new Error("Formula: bpm\\broadcastSignal: Bad signal name.");
        }

        $signalManager = $this->getInjection('signalManager');

        $signalManager->trigger($signal);
    }
}