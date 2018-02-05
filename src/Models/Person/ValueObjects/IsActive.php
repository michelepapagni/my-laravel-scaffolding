<?php
/**
 * Created by PhpStorm.
 * User: michele.papagni
 * Date: 05/02/18
 * Time: 17:58
 */

namespace Mike\Models\Person\ValueObjects;


/**
 * @property bool isActive
 */
final class IsActive
{

    public function __construct(bool $isActive)
    {
        $this->isActive = $isActive;
    }

}