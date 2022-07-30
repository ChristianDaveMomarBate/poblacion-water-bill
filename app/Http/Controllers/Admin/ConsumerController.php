<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    public function index()
    {
        $consumers = User::where('is_admin', '0')
            ->orderBy('id', 'ASC')
            ->get();

        return view('admin.consumers.index', compact('consumers'));
    }

    public function edit($id)
    {
        $consumers = User::find($id);

        return view('admin.consumers.edit', compact('consumers'));
    }

    public function update(Request $request, $id)
    {
        $consumers = User::find($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'age' => ['required', 'integer', 'max:100'],
            'gender' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
        ]);

        $consumers->name = $request->input('name');
        $consumers->email = $request->input('email');
        $consumers->age = $request->input('age');
        $consumers->gender = $request->input('gender');
        $consumers->number = $request->input('number');
        $consumers->address = $request->input('address');

        $consumers->update();
        return redirect()->route('consumers.index')->with('status', 'Consumers updated successfully!');
    }

    public function destroy($id)
    {
        $consumers = User::find($id);

        $consumers->delete();
        return redirect()->route('consumers.index')->with('status_del', 'Consumers deleted successfully!');
    }
}
