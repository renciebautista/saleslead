<?php

class ProjectContact extends Eloquent {
	
	public function contractorGroup(){
		return $this->belongsTo('ContractorGroup');
	}

	public function contact(){
		return $this->belongsTo('Contact');
	}
	
}