<?php namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonRequest;
use App\Http\Controllers\Controller;
use App\People;

use Illuminate\Http\Request;

class PeopleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$people = People::get();
        return view('people', ['people' => $people]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePersonRequest $req)
	{
		People::create($req->all());
        return redirect()->route('people');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$person = People::wherec_id($id)->first();
        return view('person', ['person' => $person]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$person = People::wherec_id($id)->first();
        return view('edit', ['person' => $person]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $req)
	{
		$person = People::wherec_id($id)->first();
        $person->fill($req->input())->save();
        return redirect()->route('people_show', [$id]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$person = People::wherec_id($id)->first();
		$person->delete();
		return redirect()->route('people');
	}

}
