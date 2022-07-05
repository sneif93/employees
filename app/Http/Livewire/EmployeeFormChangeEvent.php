<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\DocumentType;
use Livewire\Component;

class EmployeeFormChangeEvent extends Component
{  
     public $method = "POST";
    public $countries = [];
    public $country_id;
    public $cities = [];
    public $documentTypes = [];

    public function render()
    {
        $method = "POST";
        $route = '/employee/store';
        $countries = Country::all();
        $cities = City::all();
        $documentTypes = DocumentType::all();
        return view("employee.add", compact('method','route','countries','cities','documentTypes') );
    }
}
