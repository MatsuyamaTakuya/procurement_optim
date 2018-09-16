<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Validator;

class SupplierController extends Controller
{
    //コンストラクタ 最初に必ず実行する関数
    public function __construct()
    {
        $this->middleware('auth');
    }   
    
    public function update(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required', 
            'company_name' => 'required|max:255',
            'supplier_id' => 'required|max:10',
            // 'funded_date' => 'required|max:255',
            // 'revenue' => 'required|max:255',
            // 'rep_name' => 'required|max:255',
            // 'capital' => 'required|max:255',
            // 'address' => 'required|max:255',
            // 'employers_number' => 'required|max:255',
            // 'url' => 'required|max:255',
            
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        // Eloquent モデル
        $suppliers = Supplier::find($request->id);
        $suppliers->company_name = $request->company_name; 
        $suppliers->supplier_id = $request->supplier_id; 
        $suppliers->funded_date = $request->funded_date; 
        $suppliers->revenue = $request->revenue;  
        $suppliers->rep_name = $request->rep_name; 
        $suppliers->capital = $request->capital; 
        $suppliers->address = $request->address; 
        $suppliers->employers_number = $request->employers_number; 
        $suppliers->url = $request->url; 
        $suppliers->save(); 
        //「/」ルートにリダイレクト 
        return redirect('/menu');
        }
    
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|max:255',
            'supplier_id' => 'required|max:10',
            // 'funded_date' => 'required|max:255',
            // 'revenue' => 'required|max:255',
            // 'rep_name' => 'required|max:255',
            // 'capital' => 'required|max:255',
            // 'address' => 'required|max:255',
            // 'employers_number' => 'required|max:255',
            // 'url' => 'required|max:255',
            
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
    
        // Eloquent モデル
        $suppliers = new Supplier;
        $suppliers->company_name = $request->company_name; 
        $suppliers->supplier_id = $request->supplier_id; 
        $suppliers->funded_date = $request->funded_date; 
        $suppliers->revenue = $request->revenue;  
        $suppliers->rep_name = $request->rep_name; 
        $suppliers->capital = $request->capital; 
        $suppliers->address = $request->address; 
        $suppliers->employers_number = $request->employers_number; 
        $suppliers->url = $request->url; 
        $suppliers->save(); 
        //「/」ルートにリダイレクト 
        return redirect('/');
    }
    
    public function menu (){
        $suppliers = Supplier::orderBy('id','asc')->get();
        return view("menu", [
            'suppliers' => $suppliers
        ]);
    }
    
    public function edit (Supplier $suppliers){
        return view ('supplier_edit',[
        'supplier'=> $suppliers
        ]);
    }
    
    public function home(){
        $suppliers = Supplier::orderBy('id','asc')->get();
        return view("supplier_index", [
            'suppliers' => $suppliers
        ]);
    }
}
