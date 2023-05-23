<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    
    public function index()
    {
      $cars = Car::all();
      return view('home', compact('cars'));
    }

   
    public function create()
    {
        return view('create');
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

       return redirect()->route('cars.index');

    }

   
    public function show($id)
    {
   
    }

    
    public function edit($id)
    {
        $car = Car::findOrFail($id);

        return view('edit', compact('car'));
    }

   
    public function update(Request $request, $id)
    {
        $newCar = Car::findOrFail($id);
        $data = $request->all();
        $newCar->update($data);

        return redirect()->route('cars.index');
    }

    
    public function destroy($id)
    {
        //
    }
}
