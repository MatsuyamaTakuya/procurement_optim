<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Supplier;
use App\Contract;
use App\Order;
use App\Development;
use Illuminate\Http\Request;


// Route::get('/', 'SupplierController@home') ;

Route::get('/', 'SupplierController@menu');

Route::post('/supplier_edit/{suppliers}', 'SupplierController@edit');

Route::get('/supplier_index',function(){
    return view('supplier_index');
});

Route::post('/supplier_store', 'SupplierController@store');

Route::post('supplier_index/update', 'SupplierController@update');

 //契約一覧表示
Route:: get('/contract','ContractController@index');

 //契約一覧（menu）
Route:: get('/contract/supplier/{supplier_id}/','ContractController@contract_supplier');

//契約登録画面
Route:: get('/contract_store','ContractController@store');

//編集画面
Route::post('/contract_edit/{contracts}','ContractController@edit');
    
//契約登録
Route:: post('/contract_apply','ContractController@apply');

//契約更新
Route:: post('/contract_update','ContractController@update');

//メニューに$contractの引き渡し
Route:: get('/menu',function(){
    $suppliers = Supplier::orderBy('id','asc')->get();
    $contracts = Contract::orderBy('con_number','asc')->get();
    $developments = Development::orderBy('id','asc')->get();
    $orders = Order::orderBy('id','asc')->get();
    return view('menu',[
        'contract'=> $contracts,
        'suppliers' => $suppliers,
        'development' => $developments,
        'orders' => $orders
        ]);
});

//PO登録画面
Route:: get('/order_store',function(){
    return view('order_store');
});

//PO登録
Route:: post('/order_apply',function(Request $request){
        //バリデーション
        $validator = Validator::make($request->all(), [
            'order_number' => 'required|max:255',
            'part_number' => 'required|max:25',
            'order_qty' => 'required|max:10',
            'supplier_id' => 'required|max:10',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
    
        // Eloquent モデル
        $orders = new Order;
        $orders->order_number = $request->order_number; 
        $orders->part_number = $request->part_number; 
        $orders->order_qty = $request->order_qty;
        $orders->unit_price = $request->unit_price;
        $orders->con_date = $request->con_date;  
        $orders->supplier_id = $request->supplier_id; 
        $orders->received_qty = $request->received_qty;
        $orders->save(); 
        //「/」ルートにリダイレクト 
        return redirect('/order_store');
    
});
    
//編集画面
   Route::post('/contract_edit/{contracts}',function(Contract $contracts){
        return view ('contract_edit',[
        'contract'=> $contracts
        ]);
   });

//一覧表示
Route:: get('/order_index',function(){
    $orders = Order::orderBy('order_number','asc')->get();
    return view('order_index',[
        'orders' => $orders
    ]);
});

//編集画面
Route::post('/order_edit/{orders}',function(Order $orders){
    return view ('order_edit',[
    'order'=> $orders
    ]);
});
    
//Order更新
    Route:: post('/order_index/update',function(Request $request){
       //バリデーション
        $validator = Validator::make($request->all(), [
            'order_number' => 'required|max:255',
            'part_number' => 'required|max:25',
            'order_qty' => 'required|max:10',
            'supplier_id' => 'required|max:10',
        ]);
        
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
    
    
        // Eloquent モデル
        $orders = Order::find($request->id);
        $orders->order_number = $request->order_number; 
        $orders->part_number = $request->part_number; 
        $orders->order_qty = $request->order_qty;
        $orders->unit_price = $request->unit_price;
        $orders->con_date = $request->con_date;  
        $orders->supplier_id = $request->supplier_id; 
        $orders->received_qty = $request->received_qty;
        $orders->save(); 
        //「/」ルートにリダイレクト 
        return redirect('/order_index');
});

//menuへ表示
Route::get('order/supplier/{supplier_id}/',function($supplier_id){
         $orders = Order::where('supplier_id',$supplier_id)->get();
         return view('order_supplier',[
            'orders' => $orders
         ]);
     });


//Development
//登録画面
Route:: get('/development_store',function(){
    return view('development_store');
});

//input transaction
Route:: post('/development_apply',function(Request $request){
        //バリデーション
        $validator = Validator::make($request->all(), [
            'supplier_id' => 'required',
            'part_number' => 'required',
            'start_date' => 'required|max:10',
            'end_date' => 'required|max:10',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/development_store')
                ->withInput()
                ->withErrors($validator);
        }
    
        // Eloquent モデル
        $developments = new Development;
        $developments->supplier_id = $request->supplier_id; 
        $developments->part_number = $request->part_number; 
        $developments->start_date = $request->start_date;
        $developments->end_date = $request->end_date;
        $developments->save(); 
        //「/」ルートにリダイレクト 
        return redirect('/development_store');
    
});

//一覧表示
Route:: get('/development',function(){
    $developments = Development::orderBy('id','asc')->get();
    return view('development',[
        'developments' => $developments
        ]);
});

//編集画面
Route::post('/development_edit/{developments}',function(Development $developments){
    return view ('development_edit',[
    'development'=> $developments
    ]);
});

//Order更新
Route:: post('/development/update',function(Request $request){
   //バリデーション
    $validator = Validator::make($request->all(),[
        'supplier_id' => 'required',
        'part_number' => 'required',
        'start_date' => 'required|max:10',
        'end_date' => 'required|max:10',
        ]);
    
    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }


    // Eloquent モデル
    $developments = Development::find($request->id);
    $developments->supplier_id = $request->supplier_id; 
    $developments->part_number = $request->part_number; 
    $developments->start_date = $request->start_date;
    $developments->end_date = $request->end_date;
    $developments->save(); 
    //「/」ルートにリダイレクト 
    return redirect('/development');
});

Route::get('development/supplier/{supplier_id}/',function($supplier_id){
         $developments = Development::where('supplier_id',$supplier_id)->get();
         return view('development_supplier',[
            'developments' => $developments
         ]);
});

//認証用ルーティング
Auth::routes();

Route::get('/home', 'SupplierController@menu');

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});