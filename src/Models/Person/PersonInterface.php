<?php
/**
 * Created by PhpStorm.
 * User: michele.papagni
 * Date: 05/02/18
 * Time: 12:13
 */

namespace Mike\Models\Person;


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
interface PersonInterface
{

    /**
     * @param FirstName $string
     * @return string
     */
    public static function setFirstName(FirstName $string): string;

    /**
     * @param LastName $string
     * @return string
     */
    public static function setLastName(LastName $string): string;

    /**
     * @param Age $int
     * @return int
     */
    public static function setAge(Age $int): int;

    /**
     * @param IsActive $bool
     * @return bool
     */
    public static function setIsActive(IsActive $bool): bool;

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function first_name(): string;

    /**
     * @return string
     */
    public function last_name(): string;

    /**
     * @return int
     */
    public function age(): int;

    /**
     * @return bool
     */
    public function is_active(): bool;

}