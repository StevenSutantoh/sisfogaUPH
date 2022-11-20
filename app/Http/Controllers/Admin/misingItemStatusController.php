<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\misingItemStatus;
use Illuminate\Http\Request;

class misingItemStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $misingitemstatus = misingItemStatus::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $misingitemstatus = misingItemStatus::latest()->paginate($perPage);
        }

        return view('admin.mising-item-status.index', compact('misingitemstatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.mising-item-status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        misingItemStatus::create($requestData);

        return redirect('admin/mising-item-status')->with('flash_message', 'misingItemStatus added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $misingitemstatus = misingItemStatus::findOrFail($id);

        return view('admin.mising-item-status.show', compact('misingitemstatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $misingitemstatus = misingItemStatus::findOrFail($id);

        return view('admin.mising-item-status.edit', compact('misingitemstatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $misingitemstatus = misingItemStatus::findOrFail($id);
        $misingitemstatus->update($requestData);

        return redirect('admin/mising-item-status')->with('flash_message', 'misingItemStatus updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        misingItemStatus::destroy($id);

        return redirect('admin/mising-item-status')->with('flash_message', 'misingItemStatus deleted!');
    }
}
