<?php
/**
 * Created by PhpStorm.
 * User: michele.papagni
 * Date: 05/02/18
 * Time: 17:33
 */

namespace Mike\Models\Person\ValueObjects;

/**
 * @property string firstName
 */
final class FirstName
{

    /**
     * FirstName constructor.
     * @param string $firstName
     * @throws \Exception
     */
    public function __construct(string $firstName)
    {
        if (strlen($firstName) < 5) {
            throw new \Exception($firstName);
        }

        $this->firstName = $firstName;
    }

}