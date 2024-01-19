<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = Transaction::orderBy('id', 'asc')->paginate(10);

        return view('backend.transactions.index', compact('transactions'));
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'travel_package_id' => 'required|exists:travel_packages,id',
            'user_id' => 'required|exists:users,id',
            'transaction_total' => 'required|integer',
            'transaction_status' => 'required|string',
        ]);

        Transaction::create($request->all());

        return redirect()->route('transactions.index')->with('success', 'Transaction created successfully!');
    }

    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);

        return view('transactions.edit', compact('transaction'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'travel_package_id' => 'required|exists:travel_packages,id',
            'user_id' => 'required|exists:users,id',
            'transaction_total' => 'required|integer',
            'transaction_status' => 'required|string',
        ]);

        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());

        return redirect()->route('transactions.index')->with('success', 'Transaction updated successfully!');
    }

    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->route('transactions.index')->with('success', 'Transaction deleted successfully!');
    }
}
