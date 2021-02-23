<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Unit;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller {
    public function index() {
        $properties = Property::paginate(10);
        foreach($properties as $property) {
            $available_units = Unit::where([
                ['property_id', '=', $property->id],
                ['tenant_id', '=', null]
            ])->count();
            $property->available_units = $available_units;
        }
        return view('manager/properties/all', [
            'properties' => $properties
        ]);
    }

    public function create() {
        return view('manager/properties/create');
    }

    public function store() {
        request()->validate([
            'property_name' => ['required', 'string', 'max:255'],
            'property_abbreviation' => ['required', 'string'],
            'property_description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
            'floors' => ['required', 'string'],
            'units_per_floor' => ['required', 'string']
        ]);

        $property = new Property();
        $property->property_name = request('property_name');
        $property->property_abbreviation = request('property_abbreviation');
        $property->property_description = request('property_description');
        $property->image_url = request('image_url');
        $property->floors = request('floors');
        $property->units_per_floor = request('units_per_floor');
        $property->save();
        $total_units = $property->floors * $property->units_per_floor;
        foreach(range(1, $total_units) as $idx) {
            DB::table('units')->insert([
                'property_id' => $property->id,
                'beds' => rand(0,4),
                'baths' => rand(1,2),
                'rent_price' => rand(1000,1600),
                'unit_prefix' => $property->property_abbreviation
            ]);
        }
        return redirect('/manager/properties');
    }

    public function edit($id) {
        $property = Property::find($id);
        return view('manager/properties/edit', [
            'property' => $property
        ]);
    }

    public function update($id) {
        request()->validate([
            'property_name' => ['required', 'string', 'max:255'],
            'property_abbreviation' => ['required', 'string'],
            'property_description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
            'floors' => ['required', 'string'],
            'units_per_floor' => ['required', 'string']
        ]);

        $property = Property::find($id);
        $property->property_name = request('property_name');
        $property->property_abbreviation = request('property_abbreviation');
        $property->property_description = request('property_description');
        $property->image_url = request('image_url');
        $property->floors = request('floors');
        $property->units_per_floor = request('units_per_floor');
        $property->save();

        $new_unit_total = $property->floors * $property->units_per_floor;
        $old_unit_total = Unit::where('property_id', $id)->count();

        if($new_unit_total > $old_unit_total) {
            $units_to_make = $new_unit_total - $old_unit_total;
            foreach(range(1, $units_to_make) as $idx) {
                DB::table('units')->insert([
                    'property_id' => $property->id,
                    'beds' => rand(0,4),
                    'baths' => rand(1,2),
                    'rent_price' => rand(1000,1600),
                    'unit_prefix' => $property->property_abbreviation
                ]);
            }
        } elseif($new_unit_total < $old_unit_total) {
            $units_to_delete = $old_unit_total - $new_unit_total;
            $units_last_id = Unit::where('property_id', $id)->last()->id;
            $all_unit_count = Unit::all()->count();
            foreach(range(1, $units_to_delete) as $idx) {
                $unit = Unit::find($all_unit_count);
                $flight->delete();
                $all_unit_count = $all_unit_count - 1;
            }
        }

        return redirect('/manager/properties');
    }
}