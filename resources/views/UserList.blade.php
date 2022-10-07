@extends('Admin')
@section('content')
<h3 style="text-align: center;">Danh sách User</h3>
<hr>
<div class="row">
    <form class="form-inline" >
        <div class="form-group col-sm-3"> 
            <div><label for="product">Họ và Tên</label></div>
            <input  type="text" name="cus_name" placeholder="Nhập họ tên">
        </div>
        <div class="col-sm-3">
            <div><label>Email</label></div>
            <input type="text" name="email" placeholder="Nhập email" >
        </div>
        <div class="col-sm-3">
            <div><label>Nhóm</label></div>
            <select id="sel1">
                <option disabled selected hidden>Chọn nhóm</option>
                <option value="">Admin</option>
                <option value="">Editor</option>
                <option value="">Reviewer</option>
            </select>
        </div>
        <div class="col-sm-3">
            <div><label>Trạng thái</label></div>
            <select id="sel1">
                <option disabled selected hidden>Chọn trạng thái</option>
                <option value="">Đang hoạt động</option>
                <option value="">Tạm khóa</option>
            </select>
        </div>                    
        <div class="bt-form">
            <input type="submit" class="btn btn-primary" value="Tìm kiếm">
        </div>
        <div class="bt-form" >
            <input type="reset" class="btn btn-success" value="Xóa tìm">
        </div>
    </form>
    <div class="add">
        <input type="submit" class="btn btn-primary" value="Thêm mới">
    </div>
</div>
<div>
    <table class="table table-hover">
        <thead>
            <tr >
            <th>#</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Nhóm</th>
            <th>Trạng thái</th>
            <th colspan='3'></th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
            <tr>
            <td id='Stt'></td>
            <td>
                {{$u->name}}
            </td>
            <td>{{$u->email}}</td>
            @if($u->group_role==1)
            <td>Admin</td>
            @elseif($u->group_role==2)
            <td>Editor</td>
            @else
            <td>Reviewer</td>
            @endif
            @if($u->is_active=0)
            <td>Tạm khóa</td>
            @else
            <td>Đang hoạt động</td>
            @endif
            <td >
                <a href="#"><i class="fa fa-pen"></i></a>
            </td>
            <td >
                <a href="#"><i class="fa fa-trash"></i></a>
            </td>
            <td >
                <a href="#"><i class="fa fa-user-times"></i></a>
            </td>                        
            </tr>
            @endforeach                    
        </tbody>
        </table>                  
</div>
@endsection

