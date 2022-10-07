@extends('Admin')
@section('content')
  <h2 style="text-align:center">Thêm user</h2>
  @if(count($errors)>0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $err)
				{{$err}}<br>
			@endforeach
		</div>
	@endif
	@if(session('thongbao'))
		<div class="alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif
  <form action="/User/AddUser" method='post'>
      @csrf
    <div class="form-group">
      <label for="txtname">Tên:</label>
      <input type="text" class="form-control" id="txtname" placeholder="Nhập họ tên" name="txtname">
      
    </div>
    <div class="form-group">
      <label for="mail">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
      
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password">
      
    </div>
    <div class="form-group">
      <label for="repass">Xác nhận:</label>
      <input type="password" class="form-control" id="repass" placeholder="Xác nhận mật khẩu" name="repass">
      
    </div>
    <div class="form-group">
        <div><label for="group">Nhóm:</label></div>
        <select class='form-control' name='group' id="group" aria-placeholder="Chọn trạng thái">
            <option disabled selected hidden>Chọn nhóm</option>
            <option value="1">Admin</option>
            <option value="2">Editor</option>
            <option value="3">Reviewer</option>
        </select>
    </div>
    <div class="form-group">
        <label class="">
            <input id="check" name='check' type="checkbox" class="form-check-input" value="1"> Hoạt động
        </label>
    </div>
    <button style="display: block;text-align: center" type="submit" class="btn btn-primary">Add</button>
    
  </form>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $('#check').prop('checked'){         
            alert("Đã check");
        });
    });
</script>
@endsection
