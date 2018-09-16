


@extends('layouts.app')
@section('content')






         <!-- 現在 本 -->
    @if (count($suppliers) > 0)
        <div class="panel panel-default">
           <div class="panel-heading"> </div>
            <div class="panel-body">
                <table class="table table-striped task-table table-bordered">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>サプライヤ</th>
                        <th>ID</th>
                        <th>更新</th>
                        <th>契約</th>
                        <th>注文</th>
                        <th>開発</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                            <!-- タイトル -->
                            <td class="table-text">
                                <div>{{ $supplier->company_name }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $supplier->supplier_id }}</div>
                            </td>                            
                                
                            <!-- 更新ボタン -->
                            <td>
                                <form action="{{ url('supplier_edit/'.$supplier->id) }}" method="POST">
                                   {{ csrf_field() }}
                                   <button type="submit" class="btn btn-primary">
                                       <i class="glyphicon glyphicon-refresh"></i>更新
                                   </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ '/contract/supplier/'.$supplier->supplier_id }}" method="GET">
                                   {{ csrf_field() }}
                                   <button type="submit" class="btn btn-primary">
                                       <i class="glyphicon glyphicon-tag"></i>契約
                                   </button>
                                </form>
                            </td>
                             <td>
                                <form action="{{ '/order/supplier/'.$supplier->supplier_id }}" method="GET">
                                   {{ csrf_field() }}
                                   <button type="submit" class="btn btn-primary">
                                       <i class="glyphicon glyphicon-usd"></i>注文
                                   </button>
                                </form>
                            </td>
                            
                             <td>
                                <form action="{{ '/development/supplier/'.$supplier->supplier_id }}" method="GET">
                                   {{ csrf_field() }}
                                   <button type="submit" class="btn btn-primary">
                                       <i class="glyphicon glyphicon-circle-arrow-up"></i>開発
                                   </button>
                                </form>
                            </td>
            
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    <!--  ook: 既に登録されてる本 リスト -->
   
@endsection
