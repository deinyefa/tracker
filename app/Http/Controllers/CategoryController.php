<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;
use App\Category;
use App\Income;
use App\Expense;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Auth::user()->categories;
        return view('category.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('category.create')->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->get('category-name');
        $category->description = $request->get('category-description');
        // get the user's id and save it as user_id
        $category->user_id = Auth::user()->id;
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);

        $income = $category->income;
        $incomeChart = Lava::DataTable();
        $incomeChart->addDateColumn('Date')
                    ->addNumberColumn('Income');
        foreach ($income as $i) { 
            $incomeChart->addRow([$i->created_at->format('d-m-Y'), number_format(($i->cents / 100), 2)]);
        }
        Lava::AreaChart('Income Chart', $incomeChart, [
            'title' => 'Income Growth',
            'legend' => [
                'position' => 'in'
            ]
        ]);
                    
        $expense = $category->expense;
        $expenseChart = Lava::DataTable();
        $expenseChart->addDateColumn('Date')
                    ->addNumberColumn('Expense');
        foreach ($expense as $e) {
            $expenseChart->addRow([$e->created_at->format('d-m-Y'), number_format(($e->cents / 100), 2)]);
        }
        Lava::AreaChart('Expense Chart', $expenseChart, [
            'title' => 'Expenditure',
            'legend' => [
                'position' => 'in'
            ]
        ]);

        return view('category.show', ['category' => $category, 'income' => $income, 'expense' => $expense]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
