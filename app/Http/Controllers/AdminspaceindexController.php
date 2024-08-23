<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Space;

class AdminspaceindexController extends Controller
{
    /**
     * Display a listing of the spaces.
     *
     * @return \Illuminate\View\View
     */
    public function index(): \Illuminate\View\View
    {
        // Retrieve all spaces with pagination
        $spaces = Space::paginate(10);
        
        // Return the view with the list of spaces
        return view('admin.spaces_index', compact('spaces'));
    }

    /**
     * Remove the specified space from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        // Find the space by ID
        $space = Space::findOrFail($id);

        // Delete the space
        $space->delete();

        // Redirect back with a success message
        return redirect()->route('admin.spaces_index')->with('success', 'Space deleted successfully');
    }
}
