<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use Validator;

class ContractController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index (){
        $contracts = Contract::orderBy('con_number','asc')->get();
        return view('contract_index',[
        'contracts' => $contracts
        ]);
    }
    
     public function contract_supplier ($supplier_id){
         $contracts = Contract::where('supplier_id',$supplier_id)->get();
         return view('contract_supplier',[
            'contracts' => $contracts
         ]);
     }
    
    public function store(){
        return view('contract_store');
    }
    
    public function apply (Request $request){
        //バリデーション
        $validator = Validator::make($request->all(), [
            'con_number' => 'required|max:255',
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
        $contracts = new Contract;
        $contracts->con_number = $request->con_number; 
        $contracts->con_type = $request->con_type; 
        $contracts->part_number = $request->part_number; 
        $contracts->supplier_id = $request->supplier_id;  
        $contracts->con_start = $request->con_start; 
        $contracts->con_end = $request->con_end; 
        // $contracts->con_file = $request->con_file; 
        $contracts->save(); 
        //「/」ルートにリダイレクト 
        return redirect('/contract_store');
    
    }
    
    public function edit (Contract $contracts){
        return view ('contract_edit',[
        'contract'=> $contracts
        ]);
   }
    
    public function update (Request $request){
        //バリデーション
        $validator = Validator::make($request->all(), [
            'con_number' => 'required|max:255',
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
        $contracts = new Contract;
        $contracts->con_number = $request->con_number; 
        $contracts->con_type = $request->con_type; 
        $contracts->part_number = $request->part_number; 
        $contracts->supplier_id = $request->supplier_id;  
        $contracts->con_start = $request->con_start; 
        $contracts->con_end = $request->con_end; 
        // $contracts->con_file = $request->con_file; 
        $contracts->save(); 
        //「/」ルートにリダイレクト 
        return redirect('/contract_store');
    
    }

    
}
