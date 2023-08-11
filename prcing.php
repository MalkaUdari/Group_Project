<!--header-->
<?php include 'INC_HEAD.php' ?>

<link rel="stylesheet" href="css/x1-css.css">
<link rel="stylesheet" href="css/x5-css.css">
    <title>pricing</title>
    <style> 
    /*pagiation*/
    #zd18{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
        padding-bottom: 128px;

    }
    .za3{
        width: 50px;
        height: 50px;
        padding: 15px;
        border-radius: 50px;
        background-color: rgb(2, 2, 58);
        margin: 10px;
        font-size: 22px;
        text-decoration: none;
        color: white;
        padding: 12px 21px;
    }
    .za2{
        width: 50px;
        height: 50px;
        padding: 15px;
        border-radius: 50px;
        background-color: rgb(2, 2, 58);
        margin: 10px;
        font-size: 22px;
        text-decoration: none;
        color: white;
    }

    .za2::before{
        content: "";
        width: 20px;
        height: 20px;
        background: url(img/icon/right-arrows-white.svg)no-repeat;
        background-repeat: no-repeat;
        display: block;
        background-size: 20px 24px;
    }
    .za2:last-child::before{
        rotate:180deg;
    }

    .za3:hover{
        cursor: pointer;
        background: #fca702;
        transition: 0.5s all;
    }

#zd2{
    background:#5e565617;
    padding-top: 70px;
    box-shadow: 1px 0px 9px 9px #00000012;
    display:flex;
    flex-wrap:wrap;
    justify-content: space-between;


}
.zd5{
    background-repeat: no-repeat;
    width: 91%;
    margin: 12px 0px 10px 19px;
    padding: 10px;
    height: 228px;
    border-radius: 15px;
}


.zd11{
    background: url(img/1.Rooms.webp);
    height: 228px;
    border-radius: 15px;
    width: 95%;
    margin: 0 auto;
    margin-top: 9px;

}
.zd12{
    background: url(img/3.Rooms.webp);
    height: 228px;
    border-radius: 15px;
    width: 95%;
    margin: 0 auto;

    margin-top: 9px;

}
.zd13{
    background: url(img/4.Rooms.webp);
    height: 228px;
    border-radius: 15px;
    width: 95%;
    margin: 0 auto;
    margin-top: 9px;

}
.zd14{
    background: url(img/5.Rooms.webp);
    height: 228px;
    border-radius: 15px;
    width: 95%;
    margin: 0 auto;
    margin-top: 9px;

}
.zd15{
    background: url(img/1.Rooms.webp);
    height: 228px;
    border-radius: 15px;
    width: 95%;
    margin: 0 auto;
    margin-top: 9px;
}
.zd16{
    background: url(img/2.Rooms.webp);
    height: 228px;
    border-radius: 15px;
    width: 95%;
    margin: 0 auto;
    margin-top: 9px;
}
.zd6{
    display: flex;
    justify-content: space-between;
    flex-direction: row-reverse;
    padding: 10px 0;
}
.zd10{
    padding: 10px;
    margin-bottom: 31px;
    margin-top:19px;
    display: flex;
    justify-content: space-between;
}

.x1i5{
    position: relative;
    top: -29px;
    border-radius: 9px;
    width: 100%;
}
.zi1{
    background: var(--color-1);
    border-radius: 50px;
    margin-right: 11px;
}
.zs6{
    width: 32%;
    border-radius: 23px;
    border: none;
    background: var(--color-2);
    font-size: 20px;
    font-family: var(--font-2);
    color: #fff;
    padding: 0;
    text-align: center;
    text-transform: capitalize;
    height: 38px;
    padding: 7px;
    margin-left: 11px;

}
.zh21{
    font-size: 24px;
    font-family:var(--font-1);
    color: #14212bde;
    text-transform:capitalize;
    letter-spacing: 1.2px;
    width: 63%;
    font-weight: 100;

}


.zs1{
    color: var(--color-2);
    font-size: 27px;
    font-weight: 800;
    text-transform: capitalize;
    font-family: var(--font-3);

    
}
.zs2{
    color: #9fa6ae;
    font-family: var(--font-2);
    text-transform: capitalize;
    font-size: 17px;
    font-weight: 600;
}
.zs3, .zs4, .zs5{
    text-transform: capitalize;
    font-family: var(--font-2);
    font-size: 17px;
    color: #373839;
    vertical-align: middle;
    display: flex;
}
.zs3::before{
    content: "";
    display: inline-block;
    background-size: 18px 20px;
    background-image: url(img/icon/ded.svg);
    background-repeat: no-repeat;
    width: 28px;
    height: 23px;
    vertical-align: middle;
    background-position-x: 5px;

}
.zs4::before{
    content: "";
    display: inline-block;
    background-size: 19px 20px;
    background-image: url(img/icon/bath-2.svg);
    background-repeat: no-repeat;
    width: 29px;
    height: 21px;
    vertical-align: middle;

}
.zs5::before{
    content: "";
    display: inline-block;
    background-size: 19px 20px;
    background-image: url(img/icon/move.svg);
    background-repeat: no-repeat;
    width: 29px;
    height: 21px;
    vertical-align: middle;

}

.za1{

    font-size: 19px;
    color: var(--color-2);
    font-family: var(--font-2);
    text-transform: capitalize;
    display: flex;
    align-items: center;
    border: 2px solid var(--color-2);
    background: transparent;
    border-radius: 50px;
    justify-content: space-evenly;
    transition: 0.10s all;
    text-decoration: none;
    width: 42%;
    padding: 6px 0px 6px 4px;


    
}
.za1::after{
    content: "";
    width: 20px;
    height: 26px;
    background-size: 17px 30px;
    background-image: url(img/icon/right-arrow-lightblue.svg);
    background-repeat: no-repeat;
    display: block;
}
/*best room*/
.zd3{
    background: #fff;
    border-radius: 12px;
    width:32%;
    margin: 10px 0;

}

.zd5{
    background-repeat: no-repeat;
    width: 91%;
    margin: 12px 0px 10px 19px;
    padding: 10px;
    height: 228px;
    border-radius: 15px;
}
.x1i5{
    position: relative;
    top: -29px;
    border-radius: 9px;
    width: 100%;
}
.zs6{
    width: 32%;
    border-radius: 23px;
    border: none;
    background: var(--color-2);
    font-size: 20px;
    font-family: var(--font-2);
    color: #fff;
    padding: 0;
    text-align: center;
    text-transform: capitalize;
    height: 38px;
    padding: 7px;
    margin-left: 11px;

}
.zd8{
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding-bottom: 15px;
}
.zd7{
    padding: 24px 17px;
    width: 100%;

}

.zi2{
    margin-top: 10px;
    padding: 5px 0;
    width: 18px;

}

.zd17{
    display:flex;
    justify-content:space-between;
    align-items:center;
}


@media screen and (max-width:1200px) {
    .w{
        width:96%;
        margin:0 2%;
    }
    
}
@media screen and (max-width:1045px) {
    .zd3{
        width: 32%;
    }
    .zh21{
        width:58%;
        font-size: 20px;
    }
    .zi2{
        padding: 0px 0;
        width: 15px
    }
    .za1{
        width: 48%;
    }
    .zd7{
        padding:24px 11px;
    }
    .zs6{
        height: 36px;
        padding: 6px 0;
        width: 35%;
        font-size:18px;

    }
    .zd10{
        padding:0;
    }
    #zd18{
        padding-bottom: 75px;
    }
    
}
@media screen and (max-width:885px) {
    #zd2{
        flex-wrap:wrap;
        padding: 10px;
        margin-top: 90px;
    }
    .zd3{
        width: 48%;
    }
    .d37{
        margin-top:-161px;
    }
    #zd18{
        padding-bottom: 225px;
    }
}
@media screen and (max-width:595px) {
    .zd3{
        width:65%;
    }
    #zd2{
        justify-content:center;
    }
    
}
@media screen and (max-width:440px) {
    .zh21{
        width: 62%;
        font-size: 16px;
    }
    .zs3,.zs4,.zs5{
        font-size:14px;
    }
    .zs3,.zs5::before{
        background-size: 15px 20px;
        background-position-x: 6px;
    }
    .zs4::before{
        background-size: 15px 20px;
        background-position-x: 6px;
    }
    .zs1{
        font-size: 22px;
    }
    .za1{
        padding: 0px 0px 0px 0px;
        font-size: 16px;

    }
    .zd10{
        margin-bottom: 10px;
        margin-top: 4px;
    }
    .zd17{
        display: block;
        display: flex;
    align-items: center;
    }
    .zd3{
        width: 91%;
    }
    .za3{
        width: 40px;
        height: 40px;
        margin: 5px;
        padding: 7px 13px;
    }
    .za2{
        width: 40px;
        height: 40px;
        padding: 14px;
        margin: 4px;
    }
    .za2:first-child::before{
        background-position-y: -4px;

    }
}



</style>
</head>
<body>
    <!--navi-->
<?php include 'INC_NAVI.php' ?>

    <section id="xse1">
        <div class="x5d1">
            <div class="x5d4">
                <div class="w">
                    <div class="x5d3">
                        <h1 class="x5h1">rooms</h1>
                            <span class="x5s1">
                                <a href="index.php" class="x5a1">home</a>
                                <a href="pricing.php" class="x5a1">rooms</a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
            <!--booking section-->
            <div id="x1d22">
        <div class="w">
            <div class="x1d1" id="zd100">
                <div class="x1d2">
                    <label for="x1in2" class="x1lb">check in
                        <input type="date" class="x1in1" id="x1in2">
                    </label>
                </div>
                <div class="x1d2">
                    <label for="x1in3" class="x1lb">check out
                        <input type="date" class="x1in1" id="x1in3">
                    </label>
                </div>
                <div class="x1d2">
                    <label for="x1sl2" class="x1lb">rooms</label>
                    <select name="rooms" class="x1sl1" id="x1sl2">
                        <option value="rooms">rooms</option>
                        <option value="rooms">royal deluex</option>
                        <option value="rooms">royal deluex</option>
                        <option value="rooms">murphy room</option>
                    </select>
                </div>
                <div class="x1d2">
                    <label for="x1sl3" class="x1lb">adults</label>
                    <select name="rooms" class="x1sl1" id="x1sl3">
                        <option value="rooms">adults</option>
                        <option value="rooms">royal deluex</option>
                        <option value="rooms">royal deluex</option>
                        <option value="rooms">murphy room</option>
                    </select>
                </div>
                <div class="x1d2">
                    <label for="x1sl4" class="x1lb">childes</label>
                    <select name="rooms" class="x1sl1" id="x1sl4">
                        <option value="rooms">childes</option>
                        <option value="rooms">royal deluex</option>
                        <option value="rooms">royal deluex</option>
                        <option value="rooms">murphy room</option>
                    </select>
                </div>
                <div class="x1d2">
                    <button class="x1bt1"> search</button>
                </div>
            </div>
        </div>
        </div>
        <div id="x1d23">
        <div class="w">
            <div id="zd2">
                <div  class="zd3">
                        <div class="zd11"  class="zd4" >
                            <div class="zd6">
                                <img src="img/icon/heart.svg" alt="Mini_Heart" class="zi1">
                            </div>
                        </div>
                        <div class="zd7">
                            <div class="zd8">
                                <h2 class="zh21">super deluex</h2>
                                <div class="zd9">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                </div>
                            </div>
                                <div class="zd10">
                                    <span class="zs3">3 Beds</span>
                                    <span class="zs4">2 Baths</span>
                                    <span class="zs5">30 m<sup>2</span>
                                </div>
                                <div class="zd17">
                                    <span class="zs1">$250<span></span><span class="zs2">/night</span></span>
                                    <a href="#" class="za1">book now</a>
                                </div>
                        </div>
                </div>
                <div  class="zd3">
                        <div class="zd12"  class="zd4" >
                            <div class="zd6">
                                <img src="img/icon/heart.svg" alt="Mini_Heart" class="zi1">
                                <span class="zs6">populer</span>
                            </div>
                        </div>
                        <div class="zd7">
                            <div class="zd8">
                                <h2 class="zh21">royal deluxe</h2>
                                <div class="zd9">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                </div>
                            </div>
                                <div class="zd10">
                                    <span class="zs3">3 Beds</span>
                                    <span class="zs4">2 Baths</span>
                                    <span class="zs5">30 m<sup>2</span>
                                </div>
                                <div class="zd17">
                                    <span class="zs1">$250<span></span><span class="zs2">/night</span></span>
                                    <a href="#" class="za1">book now</a>
                                </div>
                        </div>
                </div>
                <div  class="zd3">
                        <div class="zd13"  class="zd4" >
                            <div class="zd6">
                                <img src="img/icon/heart.svg" alt="Mini_Heart" class="zi1">
                                <span class="zs6">populer</span>
                            </div>
                        </div>
                        <div class="zd7">
                            <div class="zd8">
                                <h2 class="zh21">murphu room</h2>
                                <div class="zd9">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                </div>
                            </div>
                                <div class="zd10">
                                    <span class="zs3">3 Beds</span>
                                    <span class="zs4">2 Baths</span>
                                    <span class="zs5">30 m<sup>2</span>
                                </div>
                                <div class="zd17">
                                    <span class="zs1">$250<span></span><span class="zs2">/night</span></span>
                                    <a href="#" class="za1">book now</a>
                                </div>
                        </div>
                </div>
                <div  class="zd3">
                        <div class="zd14"  class="zd4" >
                            <div class="zd6">
                                <img src="img/icon/heart.svg" alt="Mini_Heart" class="zi1">
                            </div>
                        </div>
                        <div class="zd7">
                            <div class="zd8">
                                <h2 class="zh21">double room</h2>
                                <div class="zd9">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                </div>
                            </div>
                                <div class="zd10">
                                    <span class="zs3">3 Beds</span>
                                    <span class="zs4">2 Baths</span>
                                    <span class="zs5">30 m<sup>2</span>
                                </div>
                                <div class="zd17">
                                    <span class="zs1">$250<span></span><span class="zs2">/night</span></span>
                                    <a href="#" class="za1">book now</a>
                                </div>
                        </div>
                </div>
                <div  class="zd3">
                        <div class="zd15"  class="zd4" >
                            <div class="zd6">
                                <img src="img/icon/heart.svg" alt="Mini_Heart" class="zi1">
                                <span class="zs6">populer</span>
                            </div>
                        </div>
                        <div class="zd7">
                            <div class="zd8">
                                <h2 class="zh21">luxury room</h2>
                                <div class="zd9">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                </div>
                            </div>
                                <div class="zd10">
                                    <span class="zs3">3 Beds</span>
                                    <span class="zs4">2 Baths</span>
                                    <span class="zs5">30 m<sup>2</span>
                                </div>
                                <div class="zd17">
                                    <span class="zs1">$250<span></span><span class="zs2">/night</span></span>
                                    <a href="#" class="za1">book now</a>
                                </div>
                        </div>
                </div>
                <div  class="zd3">
                        <div class="zd16"  class="zd4" >
                            <div class="zd6">
                                <img src="img/icon/heart.svg" alt="Mini_Heart" class="zi1">
                            </div>
                        </div>
                        <div class="zd7">
                            <div class="zd8">
                                <h2 class="zh21">single room</h2>
                                <div class="zd9">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                    <img src="img/icon/star5.svg" alt="Stars" class="zi2">
                                </div>
                            </div>
                                <div class="zd10">
                                    <span class="zs3">3 Beds</span>
                                    <span class="zs4">2 Baths</span>
                                    <span class="zs5">30 m<sup>2</span>
                                </div>
                                <div class="zd17">
                                    <span class="zs1">$250<span></span><span class="zs2">/night</span></span>
                                    <a href="#" class="za1">book now</a>
                                </div>
                        </div>
                </div>
                </div>
            <!-- </div> -->
                <div id="zd18">
                    <a href="#" class="za2" ></a>
                    <a href="#" class="za3" >1</a>
                    <a href="#" class="za3" >2</a>
                    <a href="#" class="za3" >3</a>
                    <a href="#" class="za2" ></a>
                </div>
        </div>
        </div>
    </section>
    </section>
    <!--footer-->
    <?php include 'INC_FOOT.php' ?>