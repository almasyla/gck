<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    function getStartTimeAttribute($value){
    	return Date('H:i A',strtotime($value));
    }
	function getEndTimeAttribute($value){
    	return Date('H:i A',strtotime($value));
    }
    function getStartEndDateAttribute(){

    	$start_month = Date('F',strtotime($this->attributes['start_date']));
    	$end_month = Date('F',strtotime($this->attributes['end_date']));

		$year = Date('Y',strtotime($this->attributes['end_date']));
		$start_day = Date('d',strtotime($this->attributes['start_date']));
		$end_day = Date('d',strtotime($this->attributes['end_date']));

    	if($start_month == $end_month){
    		return $start_month . " " . $start_day . "-" . $end_day	. "," . $year;//January 14-21, 2016
    	}
    	else{
    		return $start_month . " " . $start_day . "-"  . $end_month . " " . $end_day	. "," . $year;////January 14-Febuary 21, 2016
    	}
    	
    }
}
