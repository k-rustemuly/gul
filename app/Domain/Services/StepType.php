<?php
namespace App\Domain\Services;

use App\Domain\Payloads\SuccessPayload;

abstract class StepType
{
    abstract public function handle();

    public function getData()
    {
        $row = array();
        if(isset($this->headers)){
            $row["header"] = $this->headers;
        }
        $message = $this->message??"";
        return new SuccessPayload($message, $this->parse($row));
    }

    private function parse(array $row = array())
    {
        $name = $this->name;
        if(isset($row["header"]))
        {
            foreach($row["header"] as $key => $settings)
            {
                $row["header"][$key]["name"] = __($name.".header.".$key.".name");
                $row["header"][$key]["hint"] = __($name.".header.".$key.".hint");
            }
        }
        return $row;
    }
}