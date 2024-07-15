<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elabel;

class ImageUploadController extends Controller
{
    public function create()
    {
        return view('upload');
    }

    public function store(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the upload
        if ($request->file('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            $record = Elabel::find($id);
            $record->sub_image = $name;
            $record->save();

            return back()->with('success', 'Image uploaded successfully')->with('image', $name);
        }

        return back()->with('error', 'Image upload failed');
    }

    public function storePreview(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the upload
        if ($request->file('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            $record = Elabel::find($id);
            $record->preview_image = $name;
            $record->save();

            return back()->with('success', 'Image uploaded successfully')->with('image', $name);
        }

        return back()->with('error', 'Image upload failed');
    }
}
