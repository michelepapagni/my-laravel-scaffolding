<?php
/**
 * Created by PhpStorm.
 * User: michele.papagni
 * Date: 05/02/18
 * Time: 17:10
 */

namespace Mike\Managers;

/**
 * @property array manageableFields
 */
class PersonManager
{

    /**
     * PersonManager constructor.
     */
    public function __construct()
    {
        $this->manageableFields = ['first_name', 'last_name', 'age', 'is_active'];
    }

    public function processData($request)
    {
        $data          = $request->all();
        $processedData = [];

        foreach ($data as $k => $datum) {
            if (in_array($k, $this->manageableFields)) {
                $processedData[$k] = $datum;
            }
        }

        return $processedData;
    }

}