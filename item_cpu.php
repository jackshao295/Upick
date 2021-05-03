<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/parts/html_head.php'; ?>

    <!--固定元件:UMA小幫手-->
    <link rel="stylesheet" href="./css/style_fixed_element.css">

    <!--首頁landing style-->
    <link rel="stylesheet" href="./css/style_item.css">

</head>

<body>
    <?php include __DIR__ . '/parts/html_navbar.php'; ?>

    <!--固定元件:UMA小幫手,-->
    <?php include __DIR__ . '/parts/html_fixed_element.php'; ?>



    <!--SiteButton,此為固定元件-->
    <div class="siteBtn-CL">
        <a class="sitBtnGo-CL" href="#shpTopSection_CL">
            <div class="siteBtnInnerTop-CL">
                <p>TOP</p>
            </div>
        </a>
    </div>



    <div class="aniContainerOut-CL">

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
                    <h1>主機板 / CPU</h1>
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

                <!--零件篩選區-->
                <div class="itemFilter-CL">
                    <div class="itemFilterClear-CL">
                        <button>篩選項目</button>
                        <button>篩選項目</button>
                        <button>篩選項目</button>
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">圖形記憶體類型</th>
                                <td> <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">篩選項目</label>
                                </td>
                                <td> <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">篩選項目</label>
                                </td>
                                <td> <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">篩選項目</label>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">圖形記憶體類型</th>
                                <td> <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">篩選項目</label>
                                </td>
                                <td> <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">篩選項目</label>
                                </td>
                                <td> <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">篩選項目</label>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">圖形記憶體類型</th>
                                <td> <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">篩選項目</label>
                                </td>
                                <td> <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">篩選項目</label>
                                </td>
                                <td> <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">篩選項目</label>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="itemFilterBrandImg-CL">
                        <div class="itemFilterBrand-CL"><img src="" alt="">brand</div>
                        <div class="itemFilterBrand-CL"><img src="" alt="">brand</div>
                        <div class="itemFilterBrand-CL"><img src="" alt="">brand</div>
                        <div class="itemFilterBrand-CL"><img src="" alt="">brand</div>
                    </div>
                    <!--篩選區收合btn-->
                    <div class="itemCollapse-CL"><i class="fas fa-chevron-up"></i></div>
                </div>


                <!--排序按鈕-->
                <div class="itemSort-CL">
                    <button>最新上架</button>
                    <button>價格 <i class="fas fa-chevron-up"></i></button>
                    <button>銷量</button>
                    <button class="itemCount-CL">79</button>
                </div>



                <!--CPU零件區-->
                <section id="shpCpuSection_CL"></section>
                <div class="shpItem-CL shpCpu-CL">

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

        $(document).ready(function() {
            //searchBar出現
            $('.navSearch-CL').css('display', 'block');

            $('body').css('height', '100vh');

            //searchBar下滑效果
            setTimeout(function() {
                $('.navSearch-CL').css('transform', 'translateY(0vh)').css('transition', '1s')
                    .css('opacity', '1');
            }, 1000);

        })

        //排序按鈕btn效果
        $('.itemSort-CL button').click(function() {
            $(this).css('boxShadow', 'inset 1px 1px 2px gray').siblings().css('boxShadow', 'none');
        })
        $('.itemCount-CL').click(function() {
            $(this).css('boxShadow', 'inset 1px 1px 2px #000');
        })


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