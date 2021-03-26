<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Unit;
use App\Models\Floor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

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
            'name' => ['required', 'string', 'max:255'],
            'property_prefix' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
            'floors' => ['required', 'string'],
            'units_per_floor' => ['required', 'string']
        ]);

        // New Property
        $property = new Property;
        $property->name = request('name');
        $property->property_prefix = request('property_prefix');
        $property->description = request('description');
        $property->image_url = request('image_url');
        $property->floors = request('floors');
        $property->units_per_floor = request('units_per_floor');
        $property->save();

        $floors = $property->floors;
        $units = $property->units_per_floor;
        // New Floors for Property
        foreach(range(1, $floors) as $flooridx) {
            DB::table('floors')->insert([
                'property_id' => $property->id,
                'floor_num' => $flooridx,
                'num_of_units' => $units,
                'prefix' => $property->property_prefix
            ]);

            // New Units for Floors
            foreach(range(1, $units) as $unitidx) {
                DB::table('units')->insert([
                    'property_id' => $property->id,
                    'floor_id' => $flooridx,
                    'beds' => rand(0,4),
                    'baths' => rand(1,2),
                    'rent_price' => rand(1000,1600),
                    'unit_num' => $unitidx,
                    'apartment_num' => $property->property_prefix . '-' . $flooridx . '-' . $unitidx
                ]);
            }
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
            'name' => ['required', 'string', 'max:255'],
            'property_prefix' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
            'floors' => ['required', 'string'],
            'units_per_floor' => ['required', 'string']
        ]);

        $property = Property::find($id);
        $curr_floor_count = $property->floors;
        $curr_unit_count = $property->units_per_floor;

        // Update Property
        $property->name = request('name');
        $property->property_prefix = request('property_prefix');
        $property->description = request('description');
        $property->image_url = request('image_url');
        $property->floors = request('floors');
        $property->units_per_floor = request('units_per_floor');
        $property->save();

        // Update Floors
        $new_floor_count = $property->floors;
        $new_unit_count = $property->units_per_floor;
        if($curr_floor_count < $new_floor_count) {
            // Adding Floors
            foreach(range($curr_floor_count + 1, $new_floor_count) as $flooridx) {
                DB::table('floors')->insert([
                    'property_id' => $property->id,
                    'floor_num' => $flooridx,
                    'num_of_units' => $property->units_per_floor,
                    'prefix' => $property->property_prefix
                ]);
            }
        } elseif($curr_floor_count > $new_floor_count) {
            // Deleting Floors
            $floors_to_delete = Floor::where('property_id', $id)->where('floor_num', '>', $new_floor_count)->delete();
        }

        // Adding Units
        $floors = Floor::where('property_id', '=', $property->id)->get();
        foreach($floors as $floor) {
            $floor->num_of_units = $property->units_per_floor;
            $floor->save();
            $curr_units_in_floor_count = Unit::where('floor_id', '=', $floor->id)->count();
            if($curr_units_in_floor_count < $new_unit_count) {
                // Adding Units
                foreach(range($curr_units_in_floor_count + 1, $new_unit_count) as $unitidx) {
                    DB::table('units')->insert([
                        'property_id' => $property->id,
                        'floor_id' => $floor->id,
                        'beds' => rand(0,4),
                        'baths' => rand(1,2),
                        'rent_price' => rand(1000,1600),
                        'unit_num' => $unitidx,
                        'apartment_num' => $property->property_prefix . '-' . $floor->floor_num . '-' . $unitidx
                    ]);
                }
            } elseif($curr_units_in_floor_count > $new_unit_count) {
                // Removing Units
                $units_to_delete = Unit::where('floor_id', $floor->id)->where('unit_num', '>', $new_unit_count)->delete();
            }
        }

        return redirect('manager/properties');
    }

    public function delete($id) {
        $property = Property::find($id);
        $property->delete();
        return redirect('/manager/properties');
    }
}