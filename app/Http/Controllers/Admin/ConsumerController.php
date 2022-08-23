<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConsumerRequest;
use App\Models\User;

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

    public function update(ConsumerRequest $request, $id)
    {
        $consumers = User::find($id);

        $validates = $request->validated();

        $consumers->name = $validates['name'];
        $consumers->email = $validates['email'];
        $consumers->age = $validates['age'];
        $consumers->gender = $validates['gender'];
        $consumers->number = $validates['number'];
        $consumers->address = $validates['address'];

        $consumers->update();
        return redirect()->route('consumers.index')->with('update', 'Consumers updated successfully!');
    }

    public function destroy($id)
    {
        $consumers = User::find($id);

        $consumers->delete();
        return redirect()->route('consumers.index')->with('destroy', 'Consumers deleted successfully!');
    }
}
