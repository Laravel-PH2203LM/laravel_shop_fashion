@extends('admin/index')
@section('title','Danh sách khách hàng')
@section('main')
<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">

          <div class="row element-button">
            <div class="col-sm-2">

              <a class="btn btn-add btn-sm" href="form-add-nhan-vien.html" title="Thêm"><i class="fas fa-plus"></i>
                Tạo mới nhân viên</a>
            </div>
          </div>
          <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
            id="sampleTable">
            <thead>
              <tr>
                <th width="10"><input type="checkbox" id="all"></th>
                <th>ID nhân viên</th>
                <th width="150">Họ và tên</th>
                <th width="300">Địa chỉ</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>SĐT</th>
                <th>Chức vụ</th>
                <th width="100">Tính năng</th>
              </tr>
            </thead>
            <tbody>
                @foreach($user as $users)
              <tr>
                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                <td>{{$users->id}}</td>
                <td>{{$users->name}}</td>
                <td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh </td>
                <td>12/02/1999</td>
                <td>Nữ</td>
                <td>0926737168</td>
                <td>Bán hàng</td>
                <td class="table-td-center"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                    onclick="myFunction(this)"><i class="fas fa-trash-alt"></i>
                  </button>
                  <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                    data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
                  </button>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection
