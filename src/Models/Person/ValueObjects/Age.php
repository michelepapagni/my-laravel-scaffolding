<?php
/**
 * Created by PhpStorm.
 * User: michele.papagni
 * Date: 05/02/18
 * Time: 17:57
 */

namespace Mike\Models\Person\ValueObjects;


/**
 * @property int age
 */
final class Age
{

    public function __construct(int $age)
    {
        $this->age = $age;
    }

}