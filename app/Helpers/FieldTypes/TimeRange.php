<?php
namespace App\Helpers\FieldTypes;

class TimeRange {

    /**
     * @var array<mixed>
     */
    public $array = array(
        "type" => "timerange",
        "min_time" => null,
        "max_time" => null,
        "is_picker" => false,
    );
}