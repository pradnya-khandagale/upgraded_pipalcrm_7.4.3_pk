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

namespace Espo\Modules\Advanced\Entities;

class BpmnFlowNode extends \Espo\Core\ORM\Entity
{

    public function getElementDataItemValue($name)
    {
        $data = $this->get('elementData');
        if (!$data) $data = (object) [];

        if (!property_exists($data, $name)) return null;

        return $data->$name;
    }

    public function getDataItemValue($name)
    {
        $data = $this->get('data');
        if (!$data) $data = (object) [];

        if (!property_exists($data, $name)) return null;

        return $data->$name;
    }

    public function setDataItemValue($name, $value)
    {
        $data = $this->get('data');
        if (!$data) $data = (object) [];

        $data->$name = $value;

        $this->set('data', $data);
    }
}
