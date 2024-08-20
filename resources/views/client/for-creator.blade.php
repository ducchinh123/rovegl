@extends('client.layouts.master')

@section('content')
    <div class="pt-lg-8 py-7 pb-0 overflow-hidden">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-7 text-start my-auto z-index-2">
                    <h2 class="text-gradient text-info">Bạn đang tìm kiếm nền tảng để đưa nội dung của mình ra thế giới?
                        <br />Bạn muốn tạo ra thu nhập từ chính sản phẩm của mình và tự do sáng tạo?
                    </h2>
                    <h3 class="mb-4">Nếu đó là điều bạn đang tìm kiếm, hãy đến với chúng tôi</h3>
                    <p class="mb-4 lead text-justify text-sm-start  pe-lg-5">
                        Rove Global giúp các nhà sáng tạo nội dung xây dựng fanpage trên nền tảng Facebook và kiếm tiền với
                        nó. Chúng tôi không chỉ là một agency, chúng tôi đồng hành cùng bạn trong chặng đường xây dựng
                        thương hiệu cá nhân và cộng đồng trên nền tảng. <br />
                        Chúng tôi giúp bạn dễ dàng kiếm tiền từ lượt xem bằng cách cung cấp lượt xem thực, chia sẻ thực và
                        mức độ tương tác cao với nội dung thông qua hệ sinh thái các page và group của mình. Bạn có thể chắc
                        chắn rằng khi bạn đồng hành cùng chúng tôi, chúng tôi sẽ giúp bạn có được nguồn thu lớn nhất từ sự
                        sáng tạo của mình để biến đam mê thành thu nhập. Bạn còn chần chừ gì nữa. </p>
                </div>
                <!-- <div class="position-absolute fixed-top ms-auto w-50 h-100 rounded-3 z-index-0 d-none d-sm-none d-md-block me-n4" style="background-image: url('../assets/img/ivancik.jpg'); background-size: cover;">
                </div> -->
                <div class="col-lg-5">
                    <img class="d-lg-block d-none w-100 rounded"
                        src="https://rovegl.com/resize/1690775519_8289581.png?w=500&h=500"
                        alt="image services rovegl global">
                </div>
            </div>
        </div>
    </div>

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center text-center mt-sm-5">
                    <div class="col-lg-6">
                        <h2 class="text-dark mb-0">Nhà sáng tạo</h2>
                        <h2 class="text-info text-gradient">Chúng tôi hân hạnh được đồng hành cùng các nhà sáng tạo nội dung
                            trên toàn thế giới</h2>
                        <p class="lead">Chúng tôi luôn tìm kiếm những đối tác mới từ khắp nơi trên thế giới nhằm xây dựng
                            một hệ thống ngày càng lớn hơn và vững chãi hơn</p>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            .creator_thumbnail {
                object-fit: cover;
                opacity: .9;
                width: 100%;
            }

            .creator_link {
                display: block;
                position: relative;
                overflow: hidden;
            }

            .creator_detail {
                position: absolute;
                padding-left: 10px;
                padding-right: 10px;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 130px;
                padding-top: 40px;
            }

            .creator_title {
                margin-bottom: 8px;
                font-weight: 700;

            }

            h3.creator_title {
                font-size: 20px;
            }

            .creator_title,
            .creator_description {
                color: #344767;
            }

            .creator_description {
                font-size: 15px;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .creator_social {
                display: flex;
                flex-direction: column;
                margin-top: 3.5%;
                justify-content: center;
            }

            .creator_social {
                display: flex;
                flex-direction: row;
                margin-top: 3.5%;
            }

            .creator_social a {
                width: 100%;
                text-align: justify;
                margin-bottom: 5px;
                color: #fff;
                transition: .3s;
            }

            .creator_social a {
                width: 25%;
                text-align: center;
            }

            .creator_social i,
            .creator_social svg {
                width: 40px;
                height: 40px;
                line-height: 30px;
                border: 2.5px solid #d42630;
                padding: 3px;
                border-radius: 50%;
                font-size: 20px;
                color: #ec1b26;
                fill: #ec1b26;
                vertical-align: middle;
            }

            .creator_social i.nolink,
            .creator_social svg.nolink {
                border: 2.5px solid #ddd;
                color: #ddd;
                fill: #ddd;
            }

            @media (max-width: 576px) {

                .creator_social i,
                .creator_social svg {
                    width: 30px;
                    height: 30px;
                    line-height: 20px;
                    border: 2px solid #d42630;
                    font-size: 14px;
                }
            }
        </style>
        <div class="container mt-sm-5 mt-3">
            <div class="row gy-5 d-flex justify-content-center">
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@LanBeauty/about" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1694762279-7463524.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> Wild Beauty / Off Grid</h3> <span
                                class="creator_description">Nature</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@LanBeauty/about" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/WildbeautyxRoveglobal" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/user/markangelcomedy?app=desktop" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1692265640-9482886.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> Mark Angel Comedy</h3> <span
                                class="creator_description">Comedy</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/user/markangelcomedy?app=desktop" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/markangel111" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@DIYWoodworkingProjects3489/about"
                        target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1693361540-9559338.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> WT Woodwworking Team</h3> <span
                                class="creator_description">DIY</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@DIYWoodworkingProjects3489/about" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-facebook-f nolink"></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@peterbeaver6523/about" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1693361608-5648043.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> Peter Beaver</h3> <span class="creator_description">DIY</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@peterbeaver6523/about" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-facebook-f nolink"></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/channel/UCjFHimEUT5uo52vNV_ldCCw"
                        target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1692265713-5025636.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> Clean House Comedy</h3> <span
                                class="creator_description">Comedy</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/channel/UCjFHimEUT5uo52vNV_ldCCw" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/cleanhousecomedy" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@freefootsteps877" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1694762382-5804212.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> Free Footsteps </h3> <span
                                class="creator_description">Nature</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@freefootsteps877" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/WildBeautyRove" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@GoingBeyondMinistries" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1692265774-3318562.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> Going Beyond Ministries</h3> <span class="creator_description">Life
                                Style</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@GoingBeyondMinistries" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/GoingBeyondMinistries" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@thuyduongmientay" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1698222221-4892714.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> Thùy Dương TV</h3> <span class="creator_description">Nature</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@thuyduongmientay" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-facebook-f nolink"></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@utsfarm6368" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1698222617-2852153.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> Ut's Farm</h3> <span class="creator_description">Nature</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@utsfarm6368" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/TranquilTerrain.Rovegl" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@mybushcraftnhat6368" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1698222700-7162066.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> My Bushcraft / Nhất</h3> <span
                                class="creator_description">Nature</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@mybushcraftnhat6368" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/TranquilTerrain.Rovegl" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@primitivelivingoffgrid8713" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1698222743-1296599.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> Primitive / Living Off Grid</h3> <span
                                class="creator_description">Nature</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@primitivelivingoffgrid8713" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/TranquilTerrain.Rovegl" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@quanthiky-peacefullife3868" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1698222803-4122222.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> Quân Thị Kỳ - Peaceful Life</h3> <span
                                class="creator_description">Life Style</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@quanthiky-peacefullife3868" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/TranquilTerrain.Rovegl" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@tienluong8669" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1698222849-4179061.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> My Farm / Đào</h3> <span class="creator_description">DIY</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@tienluong8669" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/TranquilTerrain.Rovegl" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@BuildingMyFarm" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1698222887-3042751.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> Building My Farm</h3> <span class="creator_description">DIY</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@BuildingMyFarm" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/TranquilTerrain.Rovegl" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@dtrestoration8590/featured" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1698381648-9050244.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> DT Restoration </h3> <span class="creator_description">DIY</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@dtrestoration8590/featured" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/search/top?q=mechanical%20tv" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 creator">
                    <a class="creator_link" href="https://www.youtube.com/@anvswild/featured" target="_blank">
                        <img class="creator_thumbnail" src="https://rovegl.com/resize/1698388778-5562741.png?w=316&h=316"
                            alt="Logo">
                        <div class="creator_detail">
                            <h3 class="creator_title"> AN VS WILD</h3> <span class="creator_description">Nature</span>
                        </div>
                    </a>
                    <div class="creator_social">
                        <a href="https://www.youtube.com/@anvswild/featured" target="_blank"><i
                                class="fab fa-youtube "></i></a>
                        <a href="https://www.facebook.com/WildbeautyxRoveglobal" target="_blank"><i
                                class="fab fa-facebook-f "></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-instagram nolink"></i></a>
                        <a href="javascript:void(0);"> <svg class="nolink" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5">
        <style>
            #btnFormRegister {
                margin-right: 0px;
            }

            .box-child .box-item-child {
                clear: both;
            }

            .box-older-people .box-item-older-people {
                clear: both;
            }

            /*fix mà hình điện thoại*/
            @media only screen and (max-width: 375px) {
                .home-content h1 {
                    font-size: 16px;
                    line-height: 24px;
                }
            }

            @media only screen and (max-width: 320px) {
                .home-content h1 {
                    font-size: 16px;
                    line-height: 24px;
                }

                #home.influencer-page .home-wrapper {
                    margin-top: 48px;
                }
            }

            .div-box-login {
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
            }

            /*css đăng ký nhận tư vấn*/

            @media only screen and (min-width: 415px) {
                #registerAdvisory {
                    margin-top: 64px;
                }
            }

            @media only screen and (max-width: 414px) {
                #registerAdvisory {
                    margin-top: 0px;
                }
            }

            #registerAdvisory img {
                width: 100%;
                height: auto;
                position: relative;
                box-shadow: 4px 4px 4px #1d243e0a;
                margin-bottom: 16px;
                cursor: pointer;
            }

            #registerAdvisory .div-trai {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 16px;
            }

            @media only screen and (max-width: 540px) {
                #registerAdvisory .div-trai .div-content {
                    flex-direction: column;
                    position: absolute;
                    padding: 8px;
                    background: rgba(255, 255, 255, 0.5);
                    width: 80%;
                    border-radius: 8px;
                    display: flex;
                    box-shadow: 4px 4px 4px #8888882b;
                }
            }

            @media only screen and (min-width: 541px)and (max-width: 991px) {
                #registerAdvisory .div-trai .div-content {
                    flex-direction: column;
                    position: absolute;
                    padding: 24px 64px;
                    background: rgba(255, 255, 255, 0.5);
                    width: 80%;
                    border-radius: 8px;
                    display: flex;
                    box-shadow: 4px 4px 4px #8888882b;
                }
            }

            @media only screen and (min-width: 992px)and (max-width: 1199px) {
                #registerAdvisory .div-trai .div-content {
                    flex-direction: column;
                    position: absolute;
                    padding: 24px 64px;
                    background: rgba(255, 255, 255, 0.5);
                    width: 80%;
                    border-radius: 8px;
                    display: flex;
                    box-shadow: 4px 4px 4px #8888882b;
                }

                #registerAdvisory .div-trai .div-content .km-a {
                    margin-top: 0px !important;
                }

                #registerAdvisory .div-trai .div-content p {
                    margin-top: 16px !important;
                }
            }

            @media only screen and (min-width: 1200px) {
                #registerAdvisory .div-trai .div-content {
                    flex-direction: column;
                    position: absolute;
                    padding: 64px;
                    background: rgba(255, 255, 255, 0.5);
                    width: 80%;
                    border-radius: 8px;
                    display: flex;
                    box-shadow: 4px 4px 4px #8888882b;
                }
            }

            #registerAdvisory .div-trai .div-content .title1 {
                font-size: 24px;
                text-align: center;
                color: #09BFEE;
            }

            #registerAdvisory .div-trai .div-content .title2 {
                font-size: 28px;
                color: #F03BA9;
                text-align: center;
                font-weight: bold;
            }

            #registerAdvisory .div-trai .div-content .title3 {
                margin-top: 8px;
                font-size: 17px;
                text-align: center;
                color: #727272;
                line-height: 24px;
            }

            @media only screen and (max-width: 414px) {
                #registerAdvisory .div-trai .div-content .title1 {
                    font-size: 18px;
                }

                #registerAdvisory .div-trai .div-content .title2 {
                    font-size: 20px;
                }

                #registerAdvisory .div-trai .div-content .title3 {
                    font-size: 14px;
                }

                #registerAdvisory .div-trai .div-content .km-a {
                    margin-top: 16px !important;
                }

                #registerAdvisory .div-phai {
                    padding: 16px !important;
                }
            }

            #registerAdvisory .div-trai .div-content .km-a {
                cursor: pointer;
                margin-right: auto;
                margin-left: auto;
                display: inline-block;
                color: #fff;
                padding: 8px 16px;
                background: #FF9D44;
                box-shadow: 4px 4px 4px #88888863;
                border-radius: 4px;
                margin-top: 32px;
            }

            #registerAdvisory .div-phai {
                display: flex;
                flex-direction: column;
                justify-content: center;
                box-shadow: -5px 4px 4px #1d243e2b, 4px 4px 4px #1d243e0f, 4px 4px 4px #1d243e1a;
                height: 100%;
                border: 0.25px solid #ff9d4438;
                padding: 64px;
                height: 714px;
            }

            #registerAdvisory .div-phai .title-header {
                text-align: center;
                font-size: 22px;
                margin-bottom: 24px;
            }

            #registerAdvisory .div-phai .title-input {
                font-size: 18px;
                margin-left: 8px;
                margin-top: 8px;
            }

            #registerAdvisory .div-phai input,
            #registerAdvisory .div-phai select {
                padding: 10px 16px;
                border: 1px solid #969696;
                border-radius: 4px;
                background: white;
                color: #1d243e;
                margin-top: 4px;
            }

            #registerAdvisory .div-phai a {
                padding: 8px 32px;
                color: #065ff3;
                background: #fff;
                border: 1px solid #065ff3;
                font-size: 16px;
                display: flex;
                margin-left: auto;
                margin-right: auto;
                border-radius: 4px;
                cursor: pointer;
                margin-top: 20px;
            }

            #registerAdvisory .div-phai a:hover {
                color: #fff;
                background: #065ff3;
            }

            @media only screen and (max-width:414px) {
                #registerAdvisory .div-phai .title-header {
                    font-size: 18px;
                    text-transform: uppercase;
                    font-weight: bold;
                }
            }

            .text-bug {
                padding-top: 8px;
                color: red;
                font-size: 14px;
                clear: both;
            }

            .border-red {
                border: 1px solid red !important;
            }

            #txtPhone:focus {
                outline: none;
            }

            #email-regis:focus {
                outline: none;
            }

            .cityCssIndex {
                font-size: 16px;
                width: 100%;
                padding: 11px 27px;
                border: 1px solid #D8DDE6;
                border-radius: 8px;
                min-width: 276px;
                margin-top: 4px;
            }
        </style>

        <div id="registerAdvisory">
            <div class="container">
                <div class="row">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-lg-6">
                            <h2 class="text-info text-gradient">Để lại thông tin để trải nghiệm chiến dịch ngay</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 m-auto"><img
                            src="https://rovegl.com/resize/1693297357_1050871.png?w=642&h=642"></div>
                    <div class="col-md-6 col-sm-12">
                        <div class="div-phai" id="contact-form">
                            <span class="title-header">Đăng ký thông tin để nhận ưu đãi</span> <span
                                class="title-input">Họ và tên<span style="color: red;">*</span></span> <input
                                type="text" name="full_name" placeholder="Họ và tên">
                            <div style="display: flex; align-items: center;"><span class="title-input">Số điện thoại<span
                                        style="color: red;">*</span></span> </div> <input type="text" name="phone"
                                placeholder="Số điện thoại" id="txtPhone"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                class=""> <!----> <span class="title-input">
                                Email<span style="color: red;">*</span></span>
                            </span> <input type="text" placeholder="Email" name="email" id="email-regis"
                                class=""> <!----> <span class="title-input">
                                Tỉnh, thành phố<span style="color: red;">*</span></span>
                            <div>
                                <select class="cityCssIndex" name="address" id="address">
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
                            <span class="title-input">
                                Link social</span>
                            <input type="text" placeholder="Youtube" name="youtube">
                            <input type="text" placeholder="Fanpage facebook" name="fanpage">
                            <input type="text" placeholder="Tiktok" name="tiktok">
                            <a href="javascript:void(0);" id="SendInfo">ĐĂNG KÍ NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownItems = document.querySelectorAll(".dropdown-item");
            const dropdownToggle = document.getElementById("languageDropdown");
            const flagIcon = dropdownToggle.querySelector(".flag-icon");
            dropdownItems.forEach(function(item, index) {
                item.addEventListener("click", function(event) {
                    event.preventDefault();
                    const selectedLanguage = item.innerText;
                    var selectedFlag = item.querySelector(".flag-icon").className;
                    const parts = selectedFlag.split('flag-icon ');
                    selectedFlag = parts.join('');
                    const newFlagElement = document.createElement("span");
                    console.log(index);
                    if (index <= 1) {
                        newFlagElement.classList.add("flag-icon", selectedFlag, 'me-1');
                    } else {
                        newFlagElement.classList.add("flag-icon", selectedFlag);
                    }
                    dropdownToggle.innerHTML = '';
                    dropdownToggle.appendChild(newFlagElement);
                    dropdownToggle.innerHTML += selectedLanguage;
                });
            });
            document.querySelectorAll("#list_lang1 a.dropdown-item, #list_lang2 a.dropdown-item").forEach(function(
                item) {
                item.addEventListener("click", function(event) {
                    event.preventDefault();
                    var language = item.getAttribute("data-lang")
                    console.log(language);
                    $.ajax({
                        type: "POST",
                        url: "/ajax/language.php",
                        data: "language=" + language,
                        success: function() {
                            location.reload();
                        }
                    })
                });
            });
        });
    </script>
  
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            if (document.getElementById('state1')) {
                const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
                if (!countUp.error) {
                    countUp.start();
                } else {
                    console.error(countUp.error);
                }
            }
            if (document.getElementById('state2')) {
                const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
                if (!countUp1.error) {
                    countUp1.start();
                } else {
                    console.error(countUp1.error);
                }
            }
            if (document.getElementById('state3')) {
                const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
                if (!countUp2.error) {
                    countUp2.start();
                } else {
                    console.error(countUp2.error);
                };
            }
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#SendInfo").click(function() {
                var full_name = $("input[name='full_name']").val();
                var phone = $("input[name='phone']").val();
                var email = $("input[name='email']").val();
                var address = $("input[name='address']").val();
                var youtube = $("input[name='youtube']").val();
                var fanpage = $("input[name='fanpage']").val();
                var tiktok = $("input[name='tiktok']").val();
                if (full_name == '' || phone == '' || email == '' || address == '') {
                    alert("Please enter information for the blank boxes marked with *");
                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: "/ajax/contact.php",
                    data: {
                        full_name,
                        message: '',
                        phone,
                        email,
                        address,
                        youtube,
                        fanpage,
                        tiktok,
                        action: 'add',
                    },
                    dataType: "html",
                    success: function(b) {
                        var res = JSON.parse(b);
                        if (res.statusCode == 200) {
                            alert("Sent message successfully, we will get back to you soon")
                        } else {
                            alert("Sent message failed, has an error");
                        }
                        setTimeout(function() {
                            location.reload();
                        }, 5000)
                    }
                })
            })
        })
    </script>
@endsection
