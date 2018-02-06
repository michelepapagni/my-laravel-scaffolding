<?php
/**
 * Created by PhpStorm.
 * User: michele.papagni
 * Date: 05/02/18
 * Time: 12:21
 */

namespace Mike\Repositories;


use Illuminate\Support\Collection;
use Mike\Models\Person\PersonInterface;
use Mike\Models\Person\Person;
use Mike\Models\Person\ValueObjects\Age;
use Mike\Models\Person\ValueObjects\FirstName;
use Mike\Models\Person\ValueObjects\IsActive;
use Mike\Models\Person\ValueObjects\LastName;
use Mike\Repositories\Interfaces\PersonRepositoryInterface;

/**
 * Class PersonRepository
 * @package Mike\Repositories
 */
class PersonRepository implements PersonRepositoryInterface
{
    /**
     * @var Person
     */
    private $person;

    /**
     * PersonRepository constructor.
     * @param Person $person
     */
    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->person->all();
    }

    /**
     * @param $id
     * @return PersonInterface
     */
    public function findById($id): PersonInterface
    {
        return $this->person->where('id', $id)->first();
    }

    /**
     * @param PersonInterface $person
     * @param $data
     * @throws \Exception
     */
    public function update(PersonInterface $person, $data): void
    {
        $person->first_name = (!empty($data['first_name'])) ? $person->setFirstName(new FirstName($data['first_name'])) : $person->first_name();
        $person->last_name  = (!empty($data['last_name'])) ? $person->setLastName(new LastName($data['last_name'])) : $person->last_name();
        $person->age        = (!empty($data['age'])) ? $person->setAge(new Age($data['age'])) : $person->age();
        $person->is_active  = (!empty($data['is_active'])) ? $person->setIsActive(new IsActive($data['is_active'])) : $person->is_active();

        $updated = $person->update();

        if (!$updated) {
            throw new \Exception('An error occurred');
        }
    }

    /**
     * @param $data
     * @throws \Exception
     */
    public function add($data): void
    {
        $person = new Person;

        $person->first_name = $person->setFirstName(new FirstName($data['first_name']));
        $person->last_name  = $person->setLastName(new LastName($data['last_name']));
        $person->age        = $person->setAge(new Age($data['age']));
        $person->is_active  = $person->setIsActive(new IsActive($data['is_active']));

        $saved = $person->save();

        if (!$saved) {
            throw new \Exception('An error occurred');
        }
    }

    /**
     * @param PersonInterface $person
     * @throws \Exception
     */
    public function delete(PersonInterface $person): void
    {
        $deleted = $person->delete();

        if (!$deleted) {
            throw new \Exception('An error occurred');
        }
    }
}