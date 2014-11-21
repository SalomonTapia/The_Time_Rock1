<?php

class EventsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /events
	 *
	 * @return Response
	 */
	public function index()
	{
	//	$events = Event::all();
		$this->layout->content = View::make('events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /events/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('events.create', compact('events'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /events
	 *
	 * @return Response
	 */
	public function store()
	{
		$input=Input::all();
		$input['user_id']=1;
		Event::create($input);
		return Redirect::route('events.index')->with('message','El nuevo post se ha creado');
	}

	/**
	 * Display the specified resource.
	 * GET /events/{id}
	 *
	 * @param  Event $event
	 * @return Response
	 */
	public function show()
	{
		//$event = Event::all();
		$this->layout->content = View::make('events.show', compact('event'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /events/{id}/edit
	 *
	 * @param  Event $event
	 * @return Response
	 */
	public function edit(Event $event)
	{
		$this->layout->content = View::make('events.edit', compact('event'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /events/{id}
	 *
	 * @param  Event $event
	 * @return Response
	 */
	public function update(Event $event)
	{
		$input = array_except(Input::all(), '_method');
		$event->update($input);

		$this->layout->content = View::make('events.show', compact('event'))->with('message', 'Post actualizado');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /events/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}