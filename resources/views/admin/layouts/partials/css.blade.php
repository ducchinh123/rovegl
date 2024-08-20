<!-- ===============================================-->
<!--    Favicons-->
<!-- ===============================================-->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets_ad') }}/img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets_ad') }}/img/favicons/icon_R_rovegl.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets_ad') }}/img/favicons/icon_R_rovegl.png">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_ad') }}/img/logos/logo_rovegl.png">
<link rel="manifest" href="{{ asset('assets_ad') }}/img/favicons/manifest.json">
<meta name="msapplication-TileImage" content="{{ asset('assets_ad') }}/img/favicons/mstile-150x150.png">
<meta name="theme-color" content="#ffffff">
<script src="{{ asset('vendors') }}/simplebar/simplebar.min.js"></script>
<script src="{{ asset('assets_ad') }}/js/config.js"></script>

<!-- ===============================================-->
<!--    Stylesheets-->
<!-- ===============================================-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">
<link href="{{ asset('vendors') }}/simplebar/simplebar.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
<link href="{{ asset('assets_ad') }}/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
<link href="{{ asset('assets_ad') }}/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
<link href="{{ asset('assets_ad') }}/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
<link href="{{ asset('assets_ad') }}/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
<script>
    var phoenixIsRTL = window.config.config.phoenixIsRTL;
    if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    }
</script>
<link href="{{ asset('vendors') }}/leaflet/leaflet.css" rel="stylesheet">
<link href="{{ asset('vendors') }}/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
<link href="{{ asset('vendors') }}/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">

<style>
    .content{
        /* padding: calc(var(--phoenix-navbar-top-height) + 2rem) 0 6.375rem 1.5rem !important; */
    }
</style>

{{-- <style>
    .alert {
        position: fixed;
        /* Đảm bảo thông báo luôn xuất hiện trên màn hình */
        top: 20px;
        /* Điều chỉnh khoảng cách từ phía trên màn hình */
        right: 20px;
        /* Điều chỉnh khoảng cách từ phía bên phải màn hình */
        z-index: 1050;
        /* Đặt z-index cao hơn các thành phần khác */
        width: 300px;
        /* Điều chỉnh kích thước thông báo nếu cần */
    }

    .alert {
        position: absolute;
        top: 80px;
        /* Điều chỉnh tùy theo chiều cao của nav-top */
        z-index: 1050;
        /* Đặt giá trị cao hơn navbar */
    }

    .main {
        position: relative;
        /* Điều này đảm bảo các phần tử con không bị ảnh hưởng */
    }

    .navbar-top {
        z-index: 1000;
        /* Giữ navbar nhưng không đè lên các thông báo */
    }

    .navbar-vertical {
        z-index: 900;
        /* Giảm thứ tự của sidebar */
    }
</style> --}}

