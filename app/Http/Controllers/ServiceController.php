<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required',
            'url_title' => 'required|string|max:255',
            'url' => 'required|url|max:255',
        ]);

        Service::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'url_title' => $request->url_title,
            'url' => $request->url,
        ]);

        return redirect()->route('service')->with('success', 'Service created successfully');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required',
            'url_title' => 'required|string|max:255',
            'url' => 'required|url|max:255',
        ]);

        $service = Service::findOrFail($id);
        $service->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'url_title' => $request->url_title,
            'url' => $request->url,
        ]);

        return redirect()->route('service');
    }

    public function destroy($id)
    {
        $checkData = Service::where('id', $id)->first();
        $checkData->delete();
        return redirect()->route('service');
    }

    public function status($id)
    {
        $checkData = Service::where('id', $id)->first();
        if ($checkData->status == 0) {
            $checkData->update(['status' => 1]);
        } else {
            $checkData->update(['status' => 0]);
        }
        return redirect()->route('service');
    }
}
