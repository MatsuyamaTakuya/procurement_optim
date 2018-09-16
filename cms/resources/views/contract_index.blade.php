@extends('layouts.app')
@section('content')
    
<div class="panel-body">
    <!-- バリデーションエラーの表示に使用-->
    @include('common.errors')
    <!-- バリデーションエラーの表示に使用-->
    
    <!-- 一覧 -->
    @if (count($contracts) > 0)
        <div class="panel panel-default">
           <div class="panel-heading"> </div>
            <div class="panel-body">
                <table class="table table-striped task-table table-bordered">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>契約一覧</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($contracts as $contract)
                            <tr>
                            <!-- 契約番号 -->
                            <td class="table-text">
                                <div>{{ $contract->con_number }}</div>
                            </td>
                            <!-- 契約種類 -->                                                               <!-- 本タイトル -->
                            <td class="table-text">
                                <div>{{ $contract->con_type}}</div>
                            </td>
                            
                            <!-- パーツ -->                                                               <!-- 本タイトル -->
                            <td class="table-text">
                                <div>{{ $contract->part_number}}</div>
                            </td>           
                            
                            <!-- サプライヤーid-->                                                               <!-- 本タイトル -->
                            <td class="table-text">
                                <div>{{ $contract->supplier_id}}</div>
                            </td>  
                            
                            <!-- スタート-->                                                               <!-- 本タイトル -->
                            <td class="table-text">
                                <div>{{ $contract->con_start}}</div>
                            </td>          
                            <!-- エンド -->                                                               <!-- 本タイトル -->
                            <td class="table-text">
                                <div>{{ $contract->con_end}}</div>
                            </td>          
                            
                            <!-- 更新ボタン -->
                            <td>
                                  
                            </td>
                            </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    <!--  ook: 既に登録されてる本 リスト -->
   
    </div>
@endsection
