<?php
/**
 * Created by PhpStorm.
 * User: michele.papagni
 * Date: 05/02/18
 * Time: 12:23
 */

namespace Mike\Repositories\Interfaces;


use Illuminate\Support\Collection;
use Mike\Models\Person\PersonInterface;

/**
 * Interface PersonRepositoryInterface
 * @package Mike\Repositories\Interfaces
 */
interface PersonRepositoryInterface
{

    /**
     * @param $id
     * @return PersonInterface
     */
    public function findById($id): PersonInterface;

    /**
     * @return Collection
     */
    public function getAll(): Collection;

    /**
     * @param PersonInterface $person
     * @param $data
     */
    public function update(PersonInterface $person, $data): void;

    /**
     * @param $data
     */
    public function add($data): void;

    /**
     * @param PersonInterface $person
     */
    public function delete(PersonInterface $person): void;

}