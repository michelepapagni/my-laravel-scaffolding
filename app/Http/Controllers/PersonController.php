<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mike\Managers\PersonManager;
use Mike\Repositories\PersonRepository;

class PersonController extends Controller
{
    /**
     * @var PersonRepository
     */
    private $personRepository;

    /**
     * PersonController constructor.
     * @param PersonRepository $personRepository
     */
    public function __construct(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    public function index()
    {
        $people = $this->personRepository->getAll()->toArray();

        return view('people.index', compact('people'));
    }

    public function create()
    {
        $data = [
            'form_data' => [
                'method' => 'POST',
                'action' => route('people.store'),
                'files'  => false
            ],
        ];

        return view('people.edit', $data);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($personId)
    {
        //
    }

    public function edit($personId)
    {
        $data = [
            'form_data' => [
                'method' => 'PATCH',
                'action' => route('people.update', $personId),
                'files'  => false
            ],
            'person'    => $this->personRepository->findById($personId)->toArray()
        ];

        return view('people.edit', $data);
    }

    /**
     * @param Request $request
     * @param $personId
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function update(Request $request, $personId)
    {
        $personManager = new PersonManager;
        $data          = $personManager->processData($request);
        $person        = $this->personRepository->findById($personId);

        $this->personRepository->update($person, $data);

        return redirect()->route('people.index');
    }

    public function destroy($personId)
    {
        //
    }
}
