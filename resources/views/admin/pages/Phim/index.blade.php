@extends('admin.share.master')
@section('content')
    <div class="row" id="app">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Thêm Mới Phim</div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="">Tên Phim</label>
                        <input v-on:keyup="chuyenThangTenPhimSangSlug()" v-model="them_moi.ten_phim" type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Slug Tên Phim</label>
                        <input v-model="slug" type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Hình Ảnh</label>
                        <div class="input-group">
                            <input id="hinh_anh" class="form-control" type="text" name="filepath">
                            <span class="input-group-prepend">
                                <a id="lfm" data-input="hinh_anh" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                        </div>
                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Thời Lượng</label>
                        <input v-model="them_moi.thoi_luong" type="number" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Thể Loại</label>
                        <input type="text" v-model="them_moi.the_loai" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Quốc Gia</label>
                        <input type="text" v-model="them_moi.quoc_gia" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Đạo diễn</label>
                        <input v-model="them_moi.dao_dien" type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Diễn Viên</label>
                        <input v-model="them_moi.dien_vien" type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Trailer</label>
                        <input v-model="them_moi.trailer" type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Mô Tả</label>
                        <textarea v-model="them_moi.mo_ta" name="mo_ta" id="mo_ta" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Trạng Thái</label>
                        <select v-model="them_moi.trang_thai" class="form-control">
                            <option value="1">Phim Đề Cử</option>
                            <option value="2">Phim Nổi Bật</option>
                            <option value="3">Phim Lẻ Mới Cập Nhật</option>
                            <option value="4">Phim Hoạt Hình</option>
                            <option value="5">Phim Mới</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Link Phim</label>
                        <input v-model="them_moi.link_phim" type="text" class="form-control">
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="button" class="btn btn-primary" v-on:click="addPhim()">Thêm Mới Phim</button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Danh Sách Phim</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center align-middle">
                                    <th>#</th>
                                    <th>Tên Phim</th>
                                    <th>Slug Tên Phim</th>
                                    <th>Hình Ảnh</th>
                                    <th>Thời Lượng</th>
                                    <th>Thể Loại</th>
                                    <th>Quốc Gia</th>
                                    <th>Đạo Diễn</th>
                                    <th>Diễn Viên</th>
                                    <th>Trailer</th>
                                    <th>Mô Tả</th>
                                    <th>Trạng Thái</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(value, key) in list_phim" class="text-center align-middle">
                                    <th>@{{ key + 1 }}</th>
                                    <td>@{{ value.ten_phim }}</td>
                                    <td>@{{ value.slug_ten_phim }}</td>
                                    <td>
                                        <img v-bind:src="value.hinh_anh" class="img-fluid" style="max-width: 100px;">
                                    </td>
                                    <td>@{{ value.thoi_luong }}</td>
                                    <td>@{{ value.the_loai }}</td>
                                    <td>@{{ value.quoc_gia }}</td>
                                    <td>@{{ value.dao_dien }}</td>
                                    <td>@{{ value.dien_vien }}</td>
                                    <td>
                                        <a v-bind:href="value.trailer" target="_blank" class="btn btn-primary">Link Video</a>
                                    </td>
                                    <td class="align-middle" v-html="value.mo_ta.substring(0, 100)+ '...'"></td>
                                    <td>
                                        <button class="btn btn-success" v-if="value.trang_thai == 1">Phim Đề Cử</button>
                                        <button class="btn btn-primary" v-if="value.trang_thai == 2">Phim Nổi Bật</button>
                                        <button class="btn btn-secondary" v-if="value.trang_thai == 3">Phim Lẻ Mới Cập Nhật</button>
                                        <button class="btn btn-warning" v-if="value.trang_thai == 4">Phim Hoạt Hình</button>
                                        <button class="btn btn-warning" v-if="value.trang_thai == 5">Phim Mới</button>
                                    </td>
                                    <td>@{{ value.link_phim }}</td>
                                    <td>
                                        <button v-on:click="showUpdate(value)" data-bs-toggle="modal" data-bs-target="#updateModal" class="btn btn-info">Cập nhật</button>
                                        <button v-on:click="xoa_phim = value" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Xoá huỷ</button>
                                    </td>
                                </tr>
                            </tbody>
                            {{-- xoá phim --}}
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Xóa Phim</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn chắc chắn muốn xóa phim này!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button v-on:click="xoaPhim()" type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Xóa Phim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- cập nhật --}}
                            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Phim</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <input v-model="phim_update.id" type="hidden" name="" id="">
                                            <div class="form-group mt-3">
                                                <label>Tên Phim</label>
                                                <input v-model="phim_update.ten_phim" type="text" class="form-control">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Slug Tên Phim</label>
                                                <input v-model="phim_update.slug_ten_phim" type="text"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Hình Ảnh</label>
                                                <div class="input-group">
                                                    <input id="hinh_anh_update" class="form-control" type="text"
                                                        name="filepath">
                                                    <span class="input-group-prepend">
                                                        <a id="lfm_update" data-input="hinh_anh_update"
                                                            data-preview="holder_update" class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                    </span>
                                                </div>
                                                <div id="holder_update" style="margin-top:15px;max-height:100px;"></div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Thời Lượng</label>
                                                <input v-model="phim_update.thoi_luong" type="number" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Thể Loại</label>
                                                <input type="text" v-model="phim_update.the_loai" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Quốc Gia</label>
                                                <input type="text" v-model="phim_update.quoc_gia" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Đạo diễn</label>
                                                <input v-model="phim_update.dao_dien" type="text" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Diễn Viên</label>
                                                <input v-model="phim_update.dien_vien" type="text" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Trailer</label>
                                                <input v-model="phim_update.trailer" type="text" class="form-control">
                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Mô Tả</label>
                                                <textarea name="update_mo_ta" id="update_mo_ta" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Tình Trạng</label>
                                                <select v-model="phim_update.trang_thai" class="form-control">
                                                    <option value="1">Phim Đề Cử</option>
                                                    <option value="2">Phim Nổi Bật</option>
                                                    <option value="3">Phim Lẻ Mới Cập Nhật</option>
                                                    <option value="4">Phim Hoạt Hình</option>
                                                    <option value="5">Phim Mới</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="">Link Phim</label>
                                                <input v-model="phim_update.link_phim" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button v-on:click="capNhatPhim()" type="button"
                                                class="btn btn-primary" data-bs-dismiss="modal">Cập Nhật Phim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#app',
            data: {
                them_moi: {},
                list_phim: [],
                xoa_phim: {},
                phim_update: {},
                slug: '',
            },
            created() {
                this.loadPhim();
            },
            methods: {
                showUpdate(value) {
                    this.phim_update = value;
                    CKEDITOR.instances['update_mo_ta'].setData(value.mo_ta);
                    $("#hinh_anh_update").val(value.hinh_anh);
                    var text = '<img src="'+ value.hinh_anh + '" style="margin-top:15px;max-height:100px;">'
                    $("#holder_update").html(text);
                },
                addPhim() {
                    this.them_moi.slug_ten_phim = this.slug;
                    this.them_moi.mo_ta = CKEDITOR.instances['mo_ta'].getData();
                    this.them_moi.hinh_anh = $("#hinh_anh").val();
                    axios
                        .post('/admin/phim/create', this.them_moi)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message);
                                this.loadPhim();
                                this.them_moi = {};
                                this.slug = '';
                                this.slug = '';
                                $("#hinh_anh").val("");
                                CKEDITOR.instances['mo_ta'].setData('');
                            } else {
                                toastr.error(res.data.message);
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },

                xoaPhim() {
                    axios
                        .post('/admin/phim/delete', this.xoa_phim)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success('Đã xóa phim thành công!');
                                this.loadPhim();
                            } else {
                                toastr.error('Có lỗi không mong muốn!');
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },

                capNhatPhim() {
                    this.phim_update.mo_ta = CKEDITOR.instances['update_mo_ta'].getData();
                    this.phim_update.hinh_anh = $("#hinh_anh_update").val();
                    axios
                        .post('/admin/phim/update' , this.phim_update)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success('Đã cập nhật thành công!');
                                this.loadPhim();
                            } else {
                                toastr.error('Có lỗi không mong muốn!');
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },

                loadPhim() {
                    axios
                        .get('/admin/phim/data')
                        .then((res) => {
                            this.list_phim = res.data.phim;
                        });
                },
                toSlug(str) {
                    str = str.toLowerCase();
                    str = str
                        .normalize('NFD')
                        .replace(/[\u0300-\u036f]/g, '');
                    str = str.replace(/[đĐ]/g, 'd');
                    str = str.replace(/([^0-9a-z-\s])/g, '');
                    str = str.replace(/(\s+)/g, '-');
                    str = str.replace(/-+/g, '-');
                    str = str.replace(/^-+|-+$/g, '');

                    return str;
                },
                chuyenThangTenPhimSangSlug() {
                    this.slug = this.toSlug(this.them_moi.ten_phim);
                },
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.19.1/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('mo_ta'); // replace name mô tả
        CKEDITOR.replace('update_mo_ta'); // replace name mô tả
    </script>
    <script>
        var route_prefix = "/laravel-filemanager";
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $("#lfm").filemanager('image', {prefix : route_prefix});
        $("#lfm_update").filemanager('image', {prefix : route_prefix});
    </script>
@endsection
