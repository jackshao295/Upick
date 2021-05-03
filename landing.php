<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/parts/html_head.php'; ?>

    <!--固定元件:UMA小幫手-->
    <link rel="stylesheet" href="./css/style_fixed_element.css">

    <!--首頁landing style-->
    <link rel="stylesheet" href="./css/style_landingAni.css">
</head>

<body>
    <?php include __DIR__ . '/parts/html_navbar.php'; ?>

    <!--固定元件:UMA小幫手,-->
    <?php include __DIR__ . '/parts/html_fixed_element.php'; ?>

    <!--自製scrollbar-->
    <!--<div class="scrollBar-CL">
        <div class="scrollTP-CL"></div>
    </div>-->



    <!--SiteButton,此為固定元件-->
    <div class="siteBtn-CL">
        <a class="sitBtnGo-CL" href="#shpCpuSection_CL">
            <div class="siteBtnInner-CL">
                <p>CPU</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpBoardSection_CL">
            <div class="siteBtnInner-CL">
                <p>主機板</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpRamSection_CL">
            <div class="siteBtnInner-CL">
                <p>記憶體</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpHddSection_CL">
            <div class="siteBtnInner-CL">
                <p>傳統<br>硬碟</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpSddSection_CL">
            <div class="siteBtnInner-CL">
                <p>固態<br>硬碟</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpVgaSection_CL">
            <div class="siteBtnInner-CL">
                <p>顯示卡</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpShellSection_CL">
            <div class="siteBtnInner-CL">
                <p>電腦<br>機殼</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpPowerSection_CL">
            <div class="siteBtnInner-CL">
                <p>電源<br>供應器</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpFanSection_CL">
            <div class="siteBtnInner-CL">
                <p>散熱<br>模組</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpAcceSection_CL">
            <div class="siteBtnInner-CL">
                <p>週邊<br>零件</p>
            </div>
        </a>
        <a class="sitBtnGo-CL" href="#shpTopSection_CL">
            <div class="siteBtnInnerTop-CL">
                <p>TOP</p>
            </div>
        </a>
    </div>



    <div class="aniContainerOut-CL">
        <!--撐高頂部的navbar區塊-->
        <div class="aniTopSpace"></div>

        <div class="aniContainer-CL">
            <!--UPICK外層-->
            <div class="aniUpickOut-CL">
                <!--UPICK區塊-->
                <div class="aniUpick-CL">
                    <h1>UPICK</h1>
                    <h4>想組裝適合自己的電腦嗎？</h4>
                    <h4 class="aniUpickWord-CL">那就交給UPICK吧！ <i class="fas fa-angle-double-right"></i></h4>

                    <!--upick大LOGO圖-->
                    <div class="aniLogoU-CL">
                        <img src="./icon/logo-w.svg" alt="">
                    </div>
                </div>
            </div>

            <!--WEPICK外層具有遮罩-->
            <div class="aniWepickOut-CL">
                <!--WEPICK區塊-->
                <div class="aniWepick-CL">
                    <h1>WEPICK</h1>
                    <h4> 覺得組裝電腦跟挑選適合自己的筆電很困難嗎？</h4>
                    <h4 class="aniWepickWord-CL"><i class="fas fa-angle-double-left"></i> 讓WEPICK來幫助你吧！</h4>

                    <!--wepick大LOGO圖-->
                    <div class="aniLogoW-CL">
                        <img src="./icon/logo-b.svg" alt="">
                    </div>

                </div>
            </div>

            <!--scroll文字-->
            <div class="aniScroll-CL">
                <h3>下滑至商場</h3>
                <i class="fas fa-angle-double-down"></i>
            </div>

        </div>

        <!--商場區首頁-->
        <div class="shpTop-CL">
            <section id="shpTopSection_CL"></section>
            <!--商場頂部預留200px給navbar-->
            <div class="shpTopSpace-CL"></div>
            <!--商場內容區-->
            <div class="container shpContainer-CL">

                <!--頂部輪播牆-修改輪播牆寬度-->
                <div id="carouselExampleIndicators" class="carousel slide shpCarouselOut-CL" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <!--修改輪播牆內容高度-->
                    <div class="carousel-inner shpCarousel-CL">
                        <div class="carousel-item active">
                            <img src="./images/topCaro_01.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/topCaro_01.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/topCaro_01.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <!--修改商品輪播牆上一頁之icon與顏色-->
                        <i class="fas fa-angle-left shpCaroBtnIcon-CL"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <!--修改商品輪播牆下一頁之icon與顏色-->
                        <i class="fas fa-angle-right shpCaroBtnIcon-CL"></i>
                    </a>
                </div>

                <!--精選熱銷標題-->
                <div class="shpHotTitle-CL">
                    <h1>精選熱銷</h1>
                </div>

                <!--面包屑-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <i class="fas fa-map-marker-alt"></i>
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>


                <!--熱銷商品區-->
                <div class="shpHotSale-CL">
                    <!--熱銷商品標題-->
                    <div class="shpHotSaleTitle-CL">
                        <h1>熱銷商品</h1>
                    </div>
                    <!--熱銷商品內容-商品輪播牆-->
                    <div id="carouselExampleControls" class="carousel slide shpHotSaleContain-CL" data-bs-ride="carousel">
                        <!--商品輪播牆內容-修改商品內容顯示區總高度-->
                        <div class="carousel-inner shpHotSaleInner-CL">
                            <!--商品輪播牆單頁內容-->
                            <div class="carousel-item active shpHotItemCaro-CL">
                                <div class="row">
                                    <div class="col">
                                        <a href="">
                                            <img src="./images/item_01.png" alt="">
                                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <img src="./images/item_01.png" alt="">
                                        <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                        <!--加入追蹤之愛心,購物車,金額-->
                                        <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                    </div>
                                    <div class="col">
                                        <img src="./images/item_01.png" alt="">
                                        <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                        <!--加入追蹤之愛心,購物車,金額-->
                                        <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                    </div>
                                    <div class="col">
                                        <img src="./images/item_01.png" alt="">
                                        <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                        <!--加入追蹤之愛心,購物車,金額-->
                                        <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">

                            </div>

                        </div>
                        <a class="carousel-control-prev shpCaroBtn-CL" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                            <!--修改商品輪播牆上一頁之icon與顏色-->
                            <i class="fas fa-angle-left shpCaroBtnIcon-CL"></i>
                        </a>
                        <a class="carousel-control-next shpCaroBtn-CL" href="#carouselExampleControls" role="button" data-bs-slide="next">
                            <!--修改商品輪播牆下一頁之icon與顏色-->
                            <i class="fas fa-angle-right shpCaroBtnIcon-CL"></i>
                        </a>
                    </div>
                </div>

                <!--UPICK熱銷商品區-->
                <div class="row shpUpHot-CL">
                    <!--左邊藍色塊-預設填滿圖片-->
                    <div class="col-2 shpHotImg-CL"><img src="./images/img_01.png" alt=""></div>
                    <!--右邊商品輪播牆區-->
                    <div class="col-10">
                        <!--輪播牆上頁籤btn-->
                        <div class="shpPageMark-CL">
                            <div class="shpPageMartBtn-CL">CPU</div>
                            <div class="shpPageMartBtn-CL">主機板</div>
                            <div class="shpPageMartBtn-CL">顯示卡</div>
                        </div>

                        <!--熱銷商品內容-商品輪播牆-->
                        <div id="carouselExampleControls-U" class="carousel slide shpHotSaleContain-CL shpUpHotCaro-CL" data-bs-ride="carousel">
                            <!--商品輪播牆內容-修改商品內容顯示區總高度-->
                            <div class="carousel-inner shpHotSaleInner-CL">
                                <!--商品輪播牆單頁內容-->
                                <div class="carousel-item active shpHotItemCaro-CL">
                                    <div class="row">
                                        <div class="col">
                                            <a href="">
                                                <img src="./images/item_01.png" alt=""></a>
                                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                        </div>
                                        <div class="col">
                                            <img src="./images/item_01.png" alt="">
                                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                        </div>
                                        <div class="col">
                                            <img src="./images/item_01.png" alt="">
                                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">

                                </div>

                            </div>
                            <a class="carousel-control-prev shpCaroBtn-CL" href="#carouselExampleControls-U" role="button" data-bs-slide="prev">
                                <!--修改商品輪播牆上一頁之icon與顏色-->
                                <i class="fas fa-angle-left shpCaroBtnIcon-CL"></i>
                            </a>
                            <a class="carousel-control-next shpCaroBtn-CL" href="#carouselExampleControls-U" role="button" data-bs-slide="next">
                                <!--修改商品輪播牆下一頁之icon與顏色-->
                                <i class="fas fa-angle-right shpCaroBtnIcon-CL"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!--WEPICK熱銷商品區-->
                <div class="row shpWpHot-CL">
                    <!--左邊藍色塊-預設填滿圖片-->
                    <div class="col-2 shpHotImg-CL"><img src="./images/img_01.png" alt=""></div>
                    <!--右邊商品輪播牆區-->
                    <div class="col-10">
                        <!--輪播牆上頁籤btn-->
                        <div class="shpPageMark-CL">
                            <div class="shpPageMartBtn-CL">文書主題</div>
                            <div class="shpPageMartBtn-CL">繪圖主題</div>
                            <div class="shpPageMartBtn-CL">電競主題</div>
                        </div>

                        <!--熱銷商品內容-商品輪播牆-->
                        <div id="carouselExampleControls-W" class="carousel slide shpHotSaleContain-CL shpUpHotCaro-CL" data-bs-ride="carousel">
                            <!--商品輪播牆內容-修改商品內容顯示區總高度-->
                            <div class="carousel-inner shpHotSaleInner-CL">
                                <!--商品輪播牆單頁內容-->
                                <div class="carousel-item active shpHotItemCaro-CL">
                                    <div class="row">
                                        <div class="col">
                                            <a href="">
                                                <img src="./images/item_01.png" alt=""></a>
                                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                        </div>
                                        <div class="col">
                                            <img src="./images/item_01.png" alt="">
                                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                        </div>
                                        <div class="col">
                                            <img src="./images/item_01.png" alt="">
                                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">

                                </div>

                            </div>
                            <a class="carousel-control-prev shpCaroBtn-CL" href="#carouselExampleControls-U" role="button" data-bs-slide="prev">
                                <!--修改商品輪播牆上一頁之icon與顏色-->
                                <i class="fas fa-angle-left shpCaroBtnIcon-CL"></i>
                            </a>
                            <a class="carousel-control-next shpCaroBtn-CL" href="#carouselExampleControls-W" role="button" data-bs-slide="next">
                                <!--修改商品輪播牆下一頁之icon與顏色-->
                                <i class="fas fa-angle-right shpCaroBtnIcon-CL"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--全站熱銷零組件圖片-->
                <div class="shpHotItemImg-CL"><img src="./images/img_03.png" alt=""></div>

                <!--CPU零件區-->
                <section id="shpCpuSection_CL"></section>
                <div class="shpItem-CL shpCpu-CL">
                    <a href="">
                        <div class="shpItemSkew-CL">
                            <h3>中央處理器CPU</h3>
                        </div>
                    </a>
                    <div class="row">
                        <div class="col">
                            <a href="">
                                <img src="./images/item_01.png" alt=""></a>
                            <div class="shpItemInfo-CL">
                                <p class="shpItemInfoP-CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--主機板零件區-->
                <section id="shpBoardSection_CL"></section>
                <div class="shpItem-CL shpBoard-CL">
                    <a href="">
                        <div class="shpItemSkew-CL">
                            <h3>主機板</h3>
                        </div>
                    </a>
                    <div class="row">
                        <div class="col">
                            <a href="">
                                <img src="./images/item_01.png" alt=""></a>
                            <div class="shpItemInfo-CL">
                                <p class="shpItemInfoP-CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--記憶體RAM零件區-->
                <section id="shpRamSection_CL"></section>
                <div class="shpItem-CL shpRam-CL">
                    <a href="">
                        <div class="shpItemSkew-CL">
                            <h3>記憶體RAM</h3>
                        </div>
                    </a>
                    <div class="row">
                        <div class="col">
                            <a href="">
                                <img src="./images/item_01.png" alt=""></a>
                            <div class="shpItemInfo-CL">
                                <p class="shpItemInfoP-CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--傳統硬碟HDD零件區-->
                <section id="shpHddSection_CL"></section>
                <div class="shpItem-CL shpHdd-CL">
                    <a href="">
                        <div class="shpItemSkew-CL">
                            <h3>傳統硬碟HDD</h3>
                        </div>
                    </a>
                    <div class="row">
                        <div class="col">
                            <a href="">
                                <img src="./images/item_01.png" alt=""></a>
                            <div class="shpItemInfo-CL">
                                <p class="shpItemInfoP-CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                </div>



                <!--固態硬碟SDD零件區-->
                <section id="shpSddSection_CL"></section>
                <div class="shpItem-CL shpSdd-CL">
                    <a href="">
                        <div class="shpItemSkew-CL">
                            <h3>固態硬碟SDD</h3>
                        </div>
                    </a>
                    <div class="row">
                        <div class="col">
                            <a href="">
                                <img src="./images/item_01.png" alt=""></a>
                            <div class="shpItemInfo-CL">
                                <p class="shpItemInfoP-CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                </div>



                <!--顯示卡零件區-->
                <section id="shpVgaSection_CL"></section>
                <div class="shpItem-CL shpVga-CL">
                    <a href="">
                        <div class="shpItemSkew-CL">
                            <h3>顯示卡</h3>
                        </div>
                    </a>
                    <div class="row">
                        <div class="col">
                            <a href="">
                                <img src="./images/item_01.png" alt=""></a>
                            <div class="shpItemInfo-CL">
                                <p class="shpItemInfoP-CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                </div>



                <!--電腦機殼零件區-->
                <section id="shpShellSection_CL"></section>
                <div class="shpItem-CL shpShell-CL">
                    <a href="">
                        <div class="shpItemSkew-CL">
                            <h3>電腦機殼</h3>
                        </div>
                    </a>
                    <div class="row">
                        <div class="col">
                            <a href="">
                                <img src="./images/item_01.png" alt=""></a>
                            <div class="shpItemInfo-CL">
                                <p class="shpItemInfoP-CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                </div>



                <!--電源供應器零件區-->
                <section id="shpPowerSection_CL"></section>
                <div class="shpItem-CL shpPower-CL">
                    <a href="">
                        <div class="shpItemSkew-CL">
                            <h3>電源供應器</h3>
                        </div>
                    </a>
                    <div class="row">
                        <div class="col">
                            <a href="">
                                <img src="./images/item_01.png" alt=""></a>
                            <div class="shpItemInfo-CL">
                                <p class="shpItemInfoP-CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                </div>



                <!--散熱零件區-->
                <section id="shpFanSection_CL"></section>
                <div class="shpItem-CL shpFan-CL">
                    <a href="">
                        <div class=" shpItemSkew-CL">
                            <h3>散熱零件</h3>
                        </div>
                    </a>
                    <div class="row">
                        <div class="col">
                            <a href="">
                                <img src="./images/item_01.png" alt=""></a>
                            <div class="shpItemInfo-CL">
                                <p class="shpItemInfoP-CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                </div>



                <!--週邊零件區-->
                <section id="shpAcceSection_CL"></section>
                <div class="shpItem-CL shpAcce-CL">
                    <a href="">
                        <div class="shpItemSkew-CL">
                            <h3>週邊零件</h3>
                        </div>
                    </a>

                    <div class="row">
                        <div class="col">
                            <a href="">
                                <img src="./images/item_01.png" alt=""></a>
                            <div class="shpItemInfo-CL">
                                <p class="shpItemInfoP-CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="./images/item_01.png" alt="">
                            <div class="shpItemInfo-CL">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--區隔撐開頁尾的空間-->
                <div class="shpFooterSpace-CL"></div>

            </div>
            <!--頁尾-->
            <?php include __DIR__ . '/parts/html_footer.php'; ?>

        </div>

    </div>



    <!--SCRIPT-->
    <?php include __DIR__ . '/parts/scripts.php'; ?>

    <script>
        <?php include __DIR__ . '/js/fixed_element.js'; ?>
        //網頁初始商場與頁尾全display:none; scrollBar也消失
        $(document).ready(function() {
            //商場不出現
            $('.shpTop-CL').css('display', 'none');
            //頁尾不出現
            $('.shpFooterOut-CL').css('display', 'none');
            $('.shpFooterColor-CL').css('display', 'none');
            //scroll不出現
            $('.scrollBar-CL').css('display', 'none');
            //搜尋BAR不出現
            $('.navSearch-CL').css('display', 'none');
            //UMA小幫手不出現
            $('.umaHelper-CL').css('display', 'none');

            //UMA對話區不出現
            $('.umaConvert-CL').css('display', 'none');

            //頁面初始LOGO出現效果
            setTimeout(function() {
                $('.aniLogoU-CL img').css('transform', 'translateY(0vh)').css('opacity',
                    '0.3');
            }, 800);


            //按下向下滑動之btn後
            $('.aniScroll-CL').click(function() {
                //商場出現
                $('.shpTop-CL').css('display', 'block');
                //頁尾出現
                $('.shpFooterOut-CL').css('display', 'block');
                $('.shpFooterColor-CL').css('display', 'block');
                //首頁向上滑動
                $('.aniContainerOut-CL').css('transform', 'translateY(-100vh)').css('transition', '2s');
                //scrollBar出現
                $('.scrollBar-CL').css('display', 'block');
                //searchBar出現
                $('.navSearch-CL').css('display', 'block');

                $('body').css('height', '100vh');

                //searchBar下滑效果
                setTimeout(function() {
                    $('.navSearch-CL').css('transform', 'translateY(0vh)').css('transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            })
            //UPICK熱銷商品頁籤預設顯示
            $('.shpUpHot-CL .shpPageMartBtn-CL:nth-child(1)').css('backgroundColor', '#01FFC3');

            //WEPICK熱銷商品頁籤預設顯示
            $('.shpWpHot-CL .shpPageMartBtn-CL:nth-child(1)').css('backgroundColor', '#01FFC3');


        })






        //動態更新scrollbar高度
        var newScrollTP = $('.scrollTP-CL').height() * $(window).height() / $('.aniContainerOut-CL').height();
        $('.scrollTP-CL').css('height', newScrollTP + 'px');
        //scrollbar效果
        $(window).scroll(function() {
            //偵測滑鼠高度
            let mouseScroll = $(window).scrollTop();
            console.log(`mouse scroll is `, mouseScroll);
            //scrollbar可動範圍
            var scrollRange = $('.scrollBar-CL').height() - $('.scrollTP-CL').height();
            //隨網頁總長度動態改變bar的高度,計算方式為: 可動範圍*(滑鼠高度/(BODY總高-"2"個視窗的高度(會多減100vh是因為首頁被display掉,所以又再少一個視窗高度)))
            let newScrollHeight = scrollRange * (mouseScroll / ($('.aniContainerOut-CL').height() - ($(window)
                .height() * 2)));

            $('.scrollTP-CL').css('transform', 'translateY(' + newScrollHeight + 'px)');
        })


        //scrollBar移動效果
        $(".scrollTP-CL").draggable({
            axis: "y",
            containment: ".scrollBar-CL",

            drag: function(event, ui) {
                var dragTopPosition = $('.scrollTP-CL').offset().top;
                console.log(`leftPosition is`, dragTopPosition);

                $(window).scrollTop(dragTopPosition);
            }
        });

        //siteBtn在一開始不出現,當mouse scroll超過wepick熱銷商品區才出現
        $(window).scroll(function(siteBtndisplay) {
            let mouseScroll2 = $(window).scrollTop();
            let siteBtnShow = $('.shpWpHot-CL').offset().top;
            if (mouseScroll2 > siteBtnShow) {
                $('.siteBtn-CL').css('transform', 'translateY(0vh)');
            } else {
                $('.siteBtn-CL').css('transform', 'translateY(150vh)');
            }
        })

        //siteBtn按鈕選擇效果
        $('.siteBtnInner-CL').click(function() {
            $(this).css('backgroundColor', '#374052').children('p').css('color', '#ffffff');
            $(this).parent('.sitBtnGo-CL').siblings().children('.siteBtnInner-CL').css('backgroundColor', '#ffffff')
                .children('p').css('color', '#374052');

        })




        //上滑至商場特效
        $('.sitBtnGo-CL').click(function() {
            //取得點選按鈕的href屬性的內容, 也就是連結的目標
            var result = $(this).attr('href');
            //偵測對應前往的section的top距離(減200是因為navbar佔了200的高度,若不減掉當到達指定位置時會被navBar蓋掉內容)
            targetTop = $(result).position().top - 200;
            //滑動整頁到指定的位置     
            $('html,body,.aniContainerOut-CL').animate({
                scrollTop: targetTop
            }, 500);

        });

        //upick,wepick熱銷商品區頁籤按鈕效果
        $('.shpPageMartBtn-CL').click(function() {
            $(this).css('backgroundColor', '#01FFC3').siblings().css('backgroundColor', 'transparent');
        })


        //取得首頁遮罩寬度的固定值
        var maskWidth = $('.aniWepickOut-CL').width();
        $(document).mousemove(function() {
            //取得滑鼠位置
            xPosi = event.clientX;
            //若滑鼠位置大於等於1600則遮罩寬直接等於660px並跳出;若滑鼠位置小於等於460,則遮罩寬直接等於1600px並跳出
            if (xPosi >= 1600) {
                $('.aniWepickOut-CL').css('width', '580px');
                return false;
            }
            if (xPosi <= 460) {
                $('.aniWepickOut-CL').css('width', '1750px');
                return false;
            }

            //取得視窗中線x位置
            var moveMiddle = $(window).width() / 2;
            //若滑鼠位置大於中線位置, 則
            if (xPosi >= moveMiddle) {
                //滑鼠離中線的距離為:滑鼠位置-中線位置
                var mouseMoveRange = parseInt(xPosi - moveMiddle);
                var finalWidth = maskWidth - mouseMoveRange;

                $('.aniWepickOut-CL').css('transform', 'translateX(-10vw) skewX(10deg)');
                $('.aniWepick-CL').css('transform', 'translateX(5vw) skewX(-10deg)');

                //滑鼠位置偏向UPICK時則左邊LOGO移出,右邊LOGO移入
                $('.aniLogoU-CL img').css('transform', 'translateX(0vw)').css('opacity', '0.3');
                $('.aniLogoW-CL img').css('transform', 'translateX(-30vw)').css('opacity', '0');
            }

            if (xPosi < moveMiddle) {
                var mouseMoveRange = parseInt(moveMiddle - xPosi);
                var finalWidth = maskWidth + mouseMoveRange;

                $('.aniWepickOut-CL').css('transform', 'translateX(-10vw) skewX(-10deg)');
                $('.aniWepick-CL').css('transform', 'translateX(5vw) skewX(10deg)');

                //滑鼠位置偏向WEPICK時左邊LOGO移入,右邊LOGO移出
                $('.aniLogoU-CL img').css('transform', 'translateX(130vw)').css('opacity', '0');
                $('.aniLogoW-CL img').css('transform', 'translateX(0vw)').css('opacity', '0.3');
            }

            setTimeout(function() {
                $('.aniWepickOut-CL').css('width', finalWidth)
            }, 20);
        })


        //點擊navBar首頁button即導回首頁
        $('.navHome-CL').click(function() {
            location.reload();
        })



        //UPICK與WEPICK熱銷商品的輪播牆下滑效果
        $(window).scroll(function() {
            var mouseScroll = $(window).scrollTop();
            //UPIC輪播下滑效果
            var upickCaroShow = $('.shpCarouselOut-CL').offset().top;

            if (mouseScroll > upickCaroShow) {
                setTimeout(function() {
                    $('.shpUpHot-CL .shpUpHotCaro-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //WEPICK輪播下滑效果
            var wepickCaroShow = $('.shpHotTitle-CL').offset().top;
            if (mouseScroll > wepickCaroShow) {
                setTimeout(function() {
                    $('.shpWpHot-CL .shpUpHotCaro-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //CPU輪播牆下滑效果
            var cpuaroShow = $('.shpUpHot-CL').offset().top;
            if (mouseScroll > cpuaroShow) {
                setTimeout(function() {
                    $('.shpCpu-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //主機板輪播牆下滑效果
            var boardCaroShow = $('.shpWpHot-CL').offset().top;
            if (mouseScroll > boardCaroShow) {
                setTimeout(function() {
                    $('.shpBoard-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //記憶體輪播牆下滑效果
            var ramCaroShow = $('.shpCpu-CL').offset().top;
            if (mouseScroll > ramCaroShow) {
                setTimeout(function() {
                    $('.shpRam-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //HDD輪播牆下滑效果
            var hddCaroShow = $('.shpBoard-CL').offset().top;
            if (mouseScroll > hddCaroShow) {
                setTimeout(function() {
                    $('.shpHdd-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //SDD輪播牆下滑效果
            var sddCaroShow = $('.shpRam-CL').offset().top;
            if (mouseScroll > sddCaroShow) {
                setTimeout(function() {
                    $('.shpSdd-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //VGA輪播牆下滑效果
            var vgaCaroShow = $('.shpHdd-CL').offset().top;
            if (mouseScroll > vgaCaroShow) {
                setTimeout(function() {
                    $('.shpVga-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //SHELL輪播牆下滑效果
            var shellCaroShow = $('.shpSdd-CL').offset().top;
            if (mouseScroll > shellCaroShow) {
                setTimeout(function() {
                    $('.shpShell-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //POWER輪播牆下滑效果
            var powerCaroShow = $('.shpVga-CL').offset().top;
            if (mouseScroll > powerCaroShow) {
                setTimeout(function() {
                    $('.shpPower-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //FAN輪播牆下滑效果
            var fanCaroShow = $('.shpShell-CL').offset().top;
            if (mouseScroll > fanCaroShow) {
                setTimeout(function() {
                    $('.shpFan-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //ACCE輪播牆下滑效果
            var acceCaroShow = $('.shpPower-CL').offset().top;
            if (mouseScroll > acceCaroShow) {
                setTimeout(function() {
                    $('.shpAcce-CL').css('transform', 'translateY(0vh)').css(
                            'transition', '1s')
                        .css('opacity', '1');
                }, 1000);
            }
            //umahelper在超過熱銷商品時出現,超過power時消失
            var hotItemTop = $('.shpHotSale-CL').offset().top;
            if ((mouseScroll > hotItemTop) && (mouseScroll < acceCaroShow)) {
                $('.umaHelper-CL').css('display', 'block');
                $('.umaConvert-CL').css('display', 'block');

            }
            if ((mouseScroll >= acceCaroShow) || (mouseScroll <= hotItemTop)) {
                $('.umaHelper-CL').css('display', 'none');
                $('.umaConvert-CL').css('display', 'none');

            }

        })
    </script>



</body>

</html>