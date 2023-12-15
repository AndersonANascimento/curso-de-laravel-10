<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        // $support = new Support();
        $supports = $support->all();
        // dd($supports);

        return view('admin/supports/index', compact('supports'));
    }

    public function create()
    {
        return view('admin/supports/create');
    }

    public function store(Request $request, Support $support)
    {
        // dd($request->all());
        // dd($request->only(['subject', 'body']));
        // dd($request->body);
        // dd($request->get('body'));
        // dd($request->get('xpto', 'default'));
        // $request->only(['subject', 'body']);
        $data = $request->all();
        $data['status'] = 'a';

        $support->create($data);
        // dd($support);
        return redirect()->route('supports.index');
    }
}
