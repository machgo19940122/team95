@extends('common/header_side')

@section('content')
 <!-- バリデーションエラーメッセージ-->
@if ($errors->any())
    <div class="alert alert-info">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <div>
      
        <nav>
          <div>会員情報編集</div>
            <form method="POST" action="{{ route('edit_member', $user->id) }}">

             <input type="text" class="form-control" name="user_id" id="user_id" value="{{$user->id}}" disabled>

              <div class="form-group">
                <label for="user_rule">会員区分</label>
                <select id="user_role" type="text" class="form-control" name="user_role">
                                    <option value="0"  <?php if($user->role == "0"): ?>selected<?php endif ?>>一般社員</option>
                                    <option value="1"  <?php if($user->role == "1"): ?>selected<?php endif ?>>管理者</option>
                                </select>
              </div>


              <div class="form-group">
                <label for="user_name">名前</label>
                <input type="text" class="form-control" name="user_name" id="user_name" value="{{$user->name}}">
              </div>

              <div class="form-group">
                <label for="password" >パスワード</label>
                <input type="password" class="form-control" name="user_password" id="textPassword" placeholder="パスワードを変更する場合のみ入力して下さい">
              </div>
              @csrf 

              <div class="btn-toolbar">
                <div class="btn-group">
                            <button type="submit" class="btn btn-primary">更新</button>
                </div>   
            
      </form>
              
                            
             </div>
          </div>
        </nav>
    
    </div>
  </div>

@endsection