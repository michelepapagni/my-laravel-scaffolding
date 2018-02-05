<?php
/**
 * Created by PhpStorm.
 * User: michele.papagni
 * Date: 05/02/18
 * Time: 17:55
 */

namespace Mike\Models\Person\ValueObjects;


/**
 * @property string lastName
 */
final class LastName
{

    public function __construct(string $lastName)
    {
        if (strlen($lastName) < 5) {
            throw new \Exception($lastName);
        }

        $this->lastName = $lastName;
    }

}