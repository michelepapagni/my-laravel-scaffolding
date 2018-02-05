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

interface PersonRepositoryInterface
{

    public function findById($id): PersonInterface;

    public function getAll(): Collection;

    public function update(PersonInterface $person, $data): void;

}