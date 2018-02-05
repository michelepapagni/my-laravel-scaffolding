<?php
/**
 * Created by PhpStorm.
 * User: michele.papagni
 * Date: 05/02/18
 * Time: 12:12
 */

namespace Mike\Models\Person;

use Illuminate\Database\Eloquent\Model;
use Mike\Models\Person\ValueObjects\Age;
use Mike\Models\Person\ValueObjects\FirstName;
use Mike\Models\Person\ValueObjects\IsActive;
use Mike\Models\Person\ValueObjects\LastName;

/**
 * @property mixed id
 * @property mixed first_name
 * @property mixed is_active
 * @property mixed age
 * @property mixed last_name
 */
class Person extends Model implements PersonInterface
{

    public static function setFirstName(FirstName $string): string
    {
        return $string->firstName;
    }

    public static function setLastName(LastName $string): string
    {
        return $string->lastName;
    }

    public static function setAge(Age $int): int
    {
        return $int->age;
    }

    public static function setIsActive(IsActive $bool): bool
    {
        return $bool->isActive;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function first_name(): string
    {
        return $this->first_name;
    }

    public function last_name(): string
    {
        return $this->last_name;
    }

    public function age(): int
    {
        return $this->age;
    }

    public function is_active(): bool
    {
        return $this->is_active;
    }

}