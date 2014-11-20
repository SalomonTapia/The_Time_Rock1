<?php

class Event extends \Eloquent {
	protected $fillable = ['nom_evento', 'lugar', 'desc_evento','user_id'];
}