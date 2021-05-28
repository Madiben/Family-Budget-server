<?php

namespace App\Http\Controllers;

use App\Models\budget;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class budgetController extends Controller
{
    public function index()
    {
        return budget::all();
    }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'title'=> 'required',
            'amount'=> 'required',
            'category'=> [
                'required'
              //  Rule::in(['Housing','Transportation','Food','Utilities','Education','Gifts/Donations','Entertainment','Clothing','Savings','Insurance','Medical/Healthcare','Household Items/Supplies','Debt','Retirement'])
            ]
        ]);
        return budget::create($validated_data);
    }
    public function show(budget $budget)
    {
        return $budget;
    }
    public function update(Request $request,budget $budget)
    {
        $validated_data = $request->validate([
            'title'=> 'sometimes|required',
            'amount'=> 'sometimes|required',
            'category'=> [
                'sometimes',
                'required'
               // Rule::in(['Housing','Transportation','Food','Utilities','Education','Gifts/Donations','Entertainment','Clothing','Savings','Insurance','Medical/Healthcare','Household Items/Supplies','Debt','Retirement'])
            ]
        ]);

        $budget->update($validated_data);

        return $budget;
    }
    public function destroy(budget $budget)
    {
        $budget->delete();
        return response()->json(null,204);
    }
}
