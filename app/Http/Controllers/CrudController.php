<?php

namespace App\Http\Controllers;

use App\Models\crud;
use App\Models\Data; 
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function showData(){
        $showData=crud::paginate(5);
        return view('show-data',compact('showData'));
    }

    public function addData(){
        return view('add-data');
    }
    public function storeData(Request $request) {
        // Validate the data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
    
        // Store the data in the 'data' table
        crud::create($validated);
    
        // Redirect after storing data
        return redirect()->route('showData');
    }

    public function editData($id) {
        // Find the data by ID
        $editData = crud::find($id);
    
        // Pass data to the edit form
        return view('edit-data', compact('editData'));
    }

    public function updateData(Request $request, $id) {
        // Validate the data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
    
        // Find the existing record and update it
        $data = crud::find($id);
        $data->update($validated);
    
        // Redirect to a route after update
        return redirect()->route('showData')->with('success', 'Data updated successfully!');
    }
    
    public function deleteData($id) {
        // Find the record and delete it
        $data = crud::find($id);
        $data->delete();
    
        // Redirect to a route after deletion
        return redirect()->route('showData')->with('success', 'Data deleted successfully!');
    }
    
}