@extends('client.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-7 d-flex justify-content-center flex-column mx-auto">
            <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                <div class="text-center">
                    <h3 class="text-gradient text-info">
                        Liên hệ                                </h3>
                    <p class="mb-0">
                        Đối với các câu hỏi, bao gồm các cơ hội hợp tác, vui lòng liên hệ bằng biểu mẫu liên hệ của chúng tôi.                                </p>
                </div>
                <form id="contact-form" class="needs-validation" action="">
                    <input name="action" value="add" type="hidden" class="d-none">
                    <div class="card-body pb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    Họ và tên                                            </label><span style="color: red;">*</span>
                                <div class="input-group mb-4">
                                    <input class="form-control" name="full_name" placeholder="Họ và tên" aria-label="Họ và tên" type="text" required="" onfocus="focused(this)" onfocusout="defocused(this)" fdprocessedid="oe01a">
                                </div>
                                <div class="invalid-feedback">
                                    Valid full name is required.
                                </div>
                            </div>
                            <div class="col-md-6 ps-md-2">
                                <label>Email</label><span style="color: red;">*</span>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" placeholder="Nhập địa chỉ email của bạn" required="" onfocus="focused(this)" onfocusout="defocused(this)" fdprocessedid="94p67j">
                                </div>
                                <div class="invalid-feedback">
                                    Valid email is required.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    Số điện thoại                                            </label><span style="color: red;">*</span>
                                <div class="input-group mb-4">
                                    <input class="form-control" name="phone" placeholder="" aria-label="phone" type="number" required="" onfocus="focused(this)" onfocusout="defocused(this)" fdprocessedid="eeqr85">
                                </div>
                                <div class="invalid-feedback">
                                    Valid full name is required.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    Tỉnh, thành phố                                            </label><span style="color: red;">*</span>
                                                                                <select class="form-control" name="address" id="address" fdprocessedid="wgcjab">
                                        <option value="Hà Nội" selected="">Hà Nội</option>
                                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                        <option value="An Giang">An Giang</option>
                                        <option value="Bà Rịa Vũng Tàu">Bà Rịa Vũng Tàu</option>
                                        <option value="Bắc Giang">Bắc Giang</option>
                                        <option value="Bắc Kạn">Bắc Kạn</option>
                                        <option value="Bạc Liêu">Bạc Liêu</option>
                                        <option value="Bắc Ninh">Bắc Ninh</option>
                                        <option value="Bến Tre">Bến Tre</option>
                                        <option value="Bình Định">Bình Định</option>
                                        <option value="Bình Dương">Bình Dương</option>
                                        <option value="Bình Phướ">Bình Phước</option>
                                        <option value="Bình Thuận">Bình Thuận</option>
                                        <option value="Cà Mau">Cà Mau</option>
                                        <option value="Cao Bằng">Cao Bằng</option>
                                        <option value="Cần Thơ">Cần Thơ</option>
                                        <option value="Đắk Lắk">Đắk Lắk</option>
                                        <option value="Đắk Nông">Đắk Nông</option>
                                        <option value="Điện Biên">Điện Biên</option>
                                        <option value="Đồng Nai">Đồng Nai</option>
                                        <option value="Đồng Tháp">Đồng Tháp</option>
                                        <option value="Gia Lai">Gia Lai</option>
                                        <option value="Hà Giang">Hà Giang</option>
                                        <option value="Hà Nam">Hà Nam</option>
                                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                                        <option value="Hải Dương">Hải Dương</option>
                                        <option value="Hậu Giang">Hậu Giang</option>
                                        <option value="Hải Phòng">Hải Phòng</option>
                                        <option value="Hòa Bình">Hòa Bình</option>
                                        <option value="Hưng Yên">Hưng Yên</option>
                                        <option value="Khánh Hòa">Khánh Hòa</option>
                                        <option value="Kiên Giang">Kiên Giang</option>
                                        <option value="Kon Tum">Kon Tum</option>
                                        <option value="Lai Châu">Lai Châu</option>
                                        <option value="Lâm Đồng">Lâm Đồng</option>
                                        <option value="Lạng Sơn">Lạng Sơn</option>
                                        <option value="Lào Cai">Lào Cai</option>
                                        <option value="Long An">Long An</option>
                                        <option value="Nam Định">Nam Định</option>
                                        <option value="Nghệ An">Nghệ An</option>
                                        <option value="Ninh Bình">Ninh Bình</option>
                                        <option value="Ninh Thuận">Ninh Thuận</option>
                                        <option value="Phú Thọ">Phú Thọ</option>
                                        <option value="Quảng Bình">Quảng Bình</option>
                                        <option value="Quảng Nam">Quảng Nam</option>
                                        <option value="Quảng Ngãi">Quảng Ngãi</option>
                                        <option value="Quảng Ninh">Quảng Ninh</option>
                                        <option value="Quảng Trị">Quảng Trị</option>
                                        <option value="Sóc Trăng">Sóc Trăng</option>
                                        <option value="Sơn La">Sơn La</option>
                                        <option value="Tây Ninh">Tây Ninh</option>
                                        <option value="Thái Bình">Thái Bình</option>
                                        <option value="Thái Nguyên">Thái Nguyên</option>
                                        <option value="Thanh Hóa">Thanh Hóa</option>
                                        <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                        <option value="Tiền Giang">Tiền Giang</option>
                                        <option value="Trà Vinh">Trà Vinh</option>
                                        <option value="Tuyên Quang">Tuyên Quang</option>
                                        <option value="Vĩnh Long">Vĩnh Long</option>
                                        <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                        <option value="Yên Bái">Yên Bái</option>
                                        <option value="Phú Yên">Phú Yên</option>
                                        <option value="Nước ngoài">Nước ngoài</option>
                                    </select>
                                                                            </div>
                            <div class="col-md-4">
                                <label>Link Tiktok</label>
                                <div class="input-group mb-4">
                                    <input class="form-control" name="tiktok" placeholder="" aria-label="tiktok" type="text" onfocus="focused(this)" onfocusout="defocused(this)" fdprocessedid="yit0f">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Link Fanpage</label>
                                <div class="input-group mb-4">
                                    <input class="form-control" name="fanpage" placeholder="" aria-label="fanpage" type="text" onfocus="focused(this)" onfocusout="defocused(this)" fdprocessedid="kuckew">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Link Youtube</label>
                                <div class="input-group mb-4">
                                    <input class="form-control" name="youtube" placeholder="" aria-label="youtube" type="text" onfocus="focused(this)" onfocusout="defocused(this)" fdprocessedid="wjb8df">
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-group mb-0 mt-md-0">
                                    <label>
                                        Làm thế nào chúng tôi có thể giúp bạn?                                                </label><span style="color: red;">*</span>
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Mô tả vấn đề của bạn trong ít nhất 250 ký tự" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Valid message is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="my-3">
                                    <div class="alert alert-success" role="alert" style="display: none;">
                                        Gửi                                                    <strong>
                                            tin nhắn thành công                                                    </strong>,
                                        chúng tôi sẽ liên hệ với bạn sớm.                                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="my-3">
                                <div class="alert alert-danger" role="alert" style="display: none;">
                                    Gửi <strong>
                                        tin nhắn lỗi                                                </strong>,
                                    có lỗi xảy ra.                                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button id="sm_contact" type="button" class="btn bg-gradient-info mt-3 mb-0" fdprocessedid="0cyjap">
                                    ĐĂNG KÍ NGAY                                            </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection