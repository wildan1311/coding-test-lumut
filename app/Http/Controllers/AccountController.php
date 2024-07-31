<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'name' => 'required',
            'role' => 'required',
        ]);

        $data = Account::create([
            'username' => $request->username,
            'password' => $request->password,
            'name' => $request->name,
            'role' => $request->role,
        ]);

        if($data){
            return redirect()->route('account.index')->with([
                'status' => 'Failed',
                'message' => 'Account created Failed',
            ]);
        }
        return redirect()->route('account.index')->with([
            'status' => 'Success',
            'message' => 'Account created successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $username)
    {
        $account = Account::where('username', $username)->get()->first();
        return view('accounts.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $username)
    {
        $account = Account::where('username', $username)->get()->first();
        return view('accounts.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $username)
    {
        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'role' => 'required',
        ]);

        $account = Account::where('username', $username);

        $data = $account->update([
            'username' => $request->username,
            'password' => $request->password,
            'name' => $request->name,
            'role' => $request->role,
        ]);

        if($data){
            return redirect()->route('account.index')->with([
                'status' => 'Failed',
                'message' => 'Account Edited Failed',
            ]);
        }
        return redirect()->route('account.index')->with([
            'status' => 'Success',
            'message' => 'Account Edited successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $username)
    {
        $data = Account::where('username', $username);
        $data->delete();
        return redirect()->route('account.index')->with([
            'status' => 'Success',
            'message' => 'Account Deleted successfully',
        ]);
    }
}
