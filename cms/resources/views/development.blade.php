@extends('layouts.app')
@section('content')
    
<div class="panel-body">
    <!-- バリデーションエラーの表示に使用-->
    @include('common.errors')
    <!-- バリデーションエラーの表示に使用-->
    
    <!-- 一覧 -->
    @if (count($developments) > 0)
        <div class="panel panel-default">
           <div class="panel-heading"> </div>
            <div class="panel-body">
                <table class="table table-striped task-table table-bordered">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>DEV#</th>
                        <th>part#</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($developments as $development)
                            <tr>
                                <!-- 番号 -->
                                <td class="table-text">
                                    <div>{{ $development->id }}</div>
                                </td>
                                
                                <!-- part-->  
                                <td class="table-text">
                                    <div>{{ $development->part_number}}</div>
                                </td>
                                
                                <!-- サプライヤーid- -->                                                               
                                <td class="table-text">
                                    <div>{{ $development->supplier_id}}</div>
                                </td>           
                                
                                <!-- スタート-->                                                               
                                <td class="table-text">
                                    <div>{{ $development->start_date}}</div>
                                </td>  
                                
                                <!-- エンド -->    
                                <td class="table-text">
                                    <div>{{ $development->end_date}}</div>
                                </td>   
                            
                                <!-- 更新ボタン -->
                                <td>
                                    <form action="{{ url('development_edit/'.$development->id) }}" method="POST">
                                       {{ csrf_field() }}
                                       <button type="submit" class="btn btn-primary">
                                           <i class="glyphicon glyphicon-trash"></i>更新
                                       </button>
                                    </form>
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
