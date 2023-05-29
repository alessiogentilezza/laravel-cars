<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Optional;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::all();
        return view('home', compact('cars'));
    }


    public function create()
    {
        $optionals = Optional::all();
        return view('create', compact('optionals'));
    }


    public function store(Request $request)
    {
        $data = $request->all();

        $newCar = new Car();
        $newCar->brand = $data['brand'];
        $newCar->price = $data['price'];
        $newCar->model = $data['model'];
        $newCar->cc = $data['cc'];
        $newCar->year_release = $data['year'];

        $newCar->fill($data);
        $newCar->save();

        
        if($request->has('optionals')){
            $newCar->optionals()->attach($request->optionals);
        }

        return redirect()->route('cars.index');
    }


    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('show', compact('car'));
    }


    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $optionals = Optional::all();
        return view('edit', compact('car','optionals'));
    }


    public function update(Request $request, $id)
    {
        $newCar = Car::findOrFail($id);
        $data = $request->all();
        $newCar->update($data);

        $newCar->optionals()->sync($request->optionals);



        return redirect()->route('cars.index');
    }


    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars.index');
    }
}
