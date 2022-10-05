@extends('Admin')
@section('content')
<h3 style="text-align: center;">Danh sách sản phẩm</h3>
<hr>
<div class="row">
    <form class="form-inline" >
        <div class="form-group col-sm-3"> 
            <div><label for="product">Tên sản phẩm</label></div>
            <input  type="text" name="product" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="col-sm-3">
            <div><label for="sel1">Trạng thái:</label></div>
            <select id="sel1" aria-placeholder="Chọn trạng thái">
            <option disabled selected hidden>Chọn trạng thái</option>
                <option value="">Đang bán</option>
                <option value="">Hết bán</option>
                <option value="">Ngừng bán</option>
            </select>
        </div>
        <div class="col-sm-3">
            <div><label>Giá bán từ</label></div>
            <input type="text" >
        </div>
        <div class="col-sm-3">
            <div><label>Giá bán đến</label></div>
            <input type="text" >
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
            <tr>
            <th>#</th>
            <th>Tên sản phẩm</th>
            <th>Mô tả</th>
            <th>Giá</th>
            <th>Tình trạng</th>
            <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $p)
            <tr>
                <td></td>
                <td class="product">
                    <a  href="#">{{$p->product_name}}</a>
                </td>
                <td>{{$p->description}}</td>
                <td>$ {{$p->product_price}}</td>
                @if($p->is_sales==0)
                <td>Ngừng bán</td>
                @else
                <td>Đang bán</td>
                @endif
                <td >
                    <a href="#"><i class="fa fa-pen"></i></a>
                </td>
                <td>
                    <a name="Del" href="#myModal" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i></a>    
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                            <!-- Modal content-->
                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Nhắc nhở</h4>
                            </div>
                            <div class="modal-body">
                                <p>Bạn có muốn xóa sản phẩm XXX không?</p>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-danger" value="Ok">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                            
                        </div>
                        </div>                        
                </td>
            </tr>
            @endforeach                 
        </tbody>
        </table>                  
</div>
@endsection