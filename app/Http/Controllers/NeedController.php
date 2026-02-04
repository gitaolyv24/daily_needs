<?php

namespace App\Http\Controllers;

use App\Models\Need;
use Illuminate\Http\Request;

class NeedController extends Controller
{
    public function index()
{
    $needs = Need::where('status', 'not_bought')
        ->orderByRaw("FIELD(priority, 'high', 'medium', 'low')")
        ->orderBy('need_date', 'desc')
        ->get();

    return view('needs.index', compact('needs'));
}



    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required|string|max:100',
            'quantity' => 'required|integer|min:1',
            'priority' => 'required|in:high,medium,low',
            'need_date' => 'required|date',
        ]);

        $existing = Need::where('item_name', $request->item_name)
            ->where('status', 'not_bought')
            ->first();

        if ($existing) {
            $existing->quantity += $request->quantity;
            $existing->save();
        } else {
            Need::create([
                'item_name' => $request->item_name,
                'quantity' => $request->quantity,
                'priority' => $request->priority,
                'need_date' => $request->need_date,
                'status' => 'not_bought',
            ]);
        }

        return redirect('/needs')->with('success', 'Kebutuhan berhasil disimpan');
    }

    public function update($id)
    {
        $need = Need::findOrFail($id);
        $need->status = 'bought';
        $need->save();

        return redirect('/needs');
    }

    public function destroy($id)
    {
    Need::findOrFail($id)->delete();
    return redirect('/needs')->with('success', 'Data dihapus');
    }

}
