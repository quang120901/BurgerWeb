@extends('layouts.main')

@section('content')
<div style="padding: 20px;">
    <h1>Quản lý Users & Phân quyền</h1>
    
    @if(session('success'))
        <div class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 15px; margin: 20px 0; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session('error'))
        <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 15px; margin: 20px 0; border-radius: 5px;">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-striped" style="width: 100%; margin-top: 20px;">
        <thead>
            <tr style="background-color: #f8f9fa;">
                <th style="text-align: left; padding: 12px;">ID</th>
                <th style="text-align: left; padding: 12px;">Tên</th>
                <th style="text-align: left; padding: 12px;">Email</th>
                <th style="text-align: left; padding: 12px;">Quyền hiện tại</th>
                <th style="text-align: left; padding: 12px;">Thay đổi quyền</th>
                <th style="text-align: center; padding: 12px;">Hành động</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td style="text-align: left; padding: 12px;">{{ $user->id }}</td>
            
            <td style="text-align: left; padding: 12px;">{{ $user->name }}</td>
            
            <td style="text-align: left; padding: 12px;">{{ $user->email }}</td>
            
            <td style="text-align: left; padding: 12px;">
                <span style="padding: 5px 10px; border-radius: 3px; 
                    {{ $user->role == 'admin' ? 'background-color: #ffc107; color: #000;' : 'background-color: #28a745; color: #fff;' }}">
                    {{ $user->role == 'admin' ? '👑 Admin' : '👤 User' }}
                </span>
            </td>
            
            <td style="text-align: left; padding: 12px;">
                <form action="{{ route('update_user_role', ['id' => $user->id]) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('PUT')
                    <select name="role" style="padding: 5px; border-radius: 3px; border: 1px solid #ccc;">
                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    <button type="submit" style="padding: 5px 15px; background-color: #007bff; color: white; border: none; border-radius: 3px; cursor: pointer; margin-left: 5px;">
                        Cập nhật
                    </button>
                </form>
            </td>
            
            <td style="text-align: center; padding: 12px;">
                @if($user->id != Auth::id())
                <form action="{{ route('delete_user', ['id' => $user->id]) }}" method="POST" style="display: inline-block;" 
                      onsubmit="return confirm('Bạn có chắc chắn muốn xóa user này?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="padding: 5px 15px; background-color: #dc3545; color: white; border: none; border-radius: 3px; cursor: pointer;">
                        Xóa
                    </button>
                </form>
                @else
                <span style="color: #6c757d; font-style: italic;">Tài khoản của bạn</span>
                @endif
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
    <hr style="margin: 30px 0;">
    
    <div style="margin-top: 20px;">
        <a href="{{ route('list_products_admin') }}" style="color: #007bff; text-decoration: none;">
            ← Quay lại quản lý sản phẩm
        </a>
    </div>
</div>

<style>
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0,0,0,.05);
    }
    
    .table {
        border-collapse: collapse;
        border: 1px solid #dee2e6;
    }
    
    .table th, .table td {
        border: 1px solid #dee2e6;
    }
    
    button:hover {
        opacity: 0.9;
    }
</style>

@endsection
