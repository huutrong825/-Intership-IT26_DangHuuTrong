@extends('Admin')
@section('content')
<h3 style="text-align: center;">Danh sách khách hàng</h3>
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
            <div><label>Trạng thái</label></div>
            <select id="sel1">
                <option disabled selected hidden>Chọn trạng thái</option>
                <option value="">Đang hoạt động</option>
                <option value="">Tạm ngừng</option>
            </select>
        </div>
        <div class="col-sm-3">
            <div><label>Địa chỉ</label></div>
            <input type="text" name="address" placeholder="Nhập địa chỉ" >
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
    <div class="add">
        <input type="submit" class="btn btn-success" value="Import CSV">
    </div>
    <div class="add">
        <input type="submit" class="btn btn-success" value="Export CSV">
    </div>
</div>
<div>
    <table class="table table-hover">
        <thead>
            <tr>
            <th>#</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cus as $c)
            <tr>
            <td></td>
            <td>
                {{$c->customer_name}}
            </td>
            <td>{{$c->email}}</td>
            <td>{{$c->address}}</td>
            <td>{{$c->tel_num}}</td>
            <td >
                <a href="#"><i class="fa fa-pen"></i></a>
            </td>                        
            </tr>
            @endforeach                    
        </tbody>
        </table>                  
</div>
{{$cus->links()}}
@endsection