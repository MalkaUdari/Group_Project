<!--header-->
<?php include 'INC_HEAD.php' ?>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/x5-css.css">
    <title>contact</title>
    <style>
        :root{
    --color-1:#fca702;
    --color-2:#0dd0a0;
    --font-1:'Abril Fatface','cursive';
    --font-2:'PT Sans', sans-serif;
    --font-4:'DM Serif Text', serif;


    }
        #zd1{
            /* padding: 150px 0; */
            display: flex;
            justify-content: space-between;

        }
        iframe{
            width: 47%;
            border:0;
        }
        .zd3{
            width: 47%;
        }
        .zh21{
            font-family: var(--font-1);
            color: #051242;
            font-size: 33px;
            text-transform: capitalize;
            font-weight: 100;
            
        }
        .zd3 > p{
            color: #051242;

        }
        .zd4{
            display: flex;
            justify-content: space-between;
        }
        .in1{
            width: 49%;
            padding: 23px;
            height: 39px;
            border: 1px solid #cfcfcf;
            border-radius: 12px;
            font-family: var(--font-2);
            text-transform: capitalize;
            font-size:16px;
            margin-top: 35px;
        }
        .in4{
            width: 100%;
            padding: 23px;
            height: 39px;
            border: 1px solid #cfcfcf;
            border-radius: 12px;
            font-family: var(--font-2);
            text-transform: capitalize;
            font-size:16px;
            margin-top: 13px;


        }
        .in3{
            width: 100%;
            padding: 23px;
            height: 120px;
            border: 1px solid #cfcfcf;
            border-radius: 12px;
            font-family: var(--font-2);
            text-transform: capitalize;
            font-size:16px;
            margin-top: 13px;

        }
        .zin2{
            width: 23px;
             height: 23px;
        }
        .zd5{
            padding: 25px 0;
        }
        #bt1{
            width: 38%;
            padding: 11px 0;
            border: none;
            background: var(--color-1);
            text-transform: capitalize;
            font-family: var(--font-2);
            color: #fff;
            display: flex;
            justify-content: center;
            border-radius: 43px;
            font-size: 21px;
            align-items: center;
        }
        #bt1::before{
            content: "";
            width: 36px;
            height: 35px;
            background-size: 21px 38px;
            background-image: url(img/icon/send.svg);
            background-repeat: no-repeat;
            display: block;
            background-position-x: 12px;
        }
        .zin3{
            width: 40px;
            height: 40px;
            display: block;
            margin: 0 auto;
        }
        .zd7{
            width: 23%;
            padding: 32px 0;
            box-shadow: 0px 0px 10px 6px #80808026;
            border-radius: 12px;
        }
            .zh31{
            font-family: var(--font-4);
            color: var(--color-1);
            font-size: 22px;
            text-transform: capitalize;
            text-align: center;
            padding: 10px 0;


        }
        .zs1{
            font-family: var(--font-2);
            color: black;
            font-size: 16px;
            font-weight: 300;
            text-transform:capitalize;
            text-align:center;   
            margin: 0 auto;
            display: block;

        }
        #zd6{
            display: flex;
            justify-content: space-around;
            padding: 97px 0;

        }
        /*media query*/
        @media screen and (max-width:1200px) {
            .w{
                width: 96%;
                margin: 0 2%;
            }
            
        }
        @media screen and (max-width:990px) {

            
            #bt1{
                font-size:18px;
                width: 45%;
            }
            #bt1::before{
                background-position:top;
                width: 25px;
                height: 28px;
                background-size: 20px 30px;

            }
            #zd1{
                margin-top: -61px;

            }
            #zd6{
                flex-wrap: wrap;
            }
            .zd7{
                width:48%;
                margin: 10px 0;

            }
            #zd6{
                padding:55px 0;
            }
            iframe{
                width:50%;
            }
        }
        @media screen and (max-width:670px) {

            iframe{
                width: 90%;
                margin: 0 auto;
                height:250px;

            }
            #zd1{
                flex-wrap:wrap;
                margin-top:-90px;
            }
            .zd3{
                width: 100%;
                margin:0 auto;
              padding-top: 55px;

            }
            #bt1{
                padding: 25px 4px 25px 4px;
                width: 28%;
                height:0;
                justify-content: space-evenly;
                font-size:14px
            }

            #zd6{
                padding:15px 0;
            }
            .zh21{
                text-align:center;
            }
            .zd3 > p {
                text-align:center;
            }
        }
        @media screen and (max-width:440px) {
            #bt1{
                width:50%;
            }
            #bt1::before{
                display: none
            }
            .zd7{
                width:86%;
            }
            .zd3{
                width: 86%;
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
                            <h1 class="x5h1">contact us</h1>
                            <span class="x5s1">
                                <a href="index.php" class="x5a1">home</a>
                                <a href="contact.php" class="x5a1">contact</a>
                            </span>
                        </div>
                </div>
            </div>
        </div>
        <div class="w">
            <div id="zd1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.3136633561826!2d80.00222281477387!3d7.089591894880004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fbf460edc0b1%3A0x4e525cbf1145250e!2sKFC!5e0!3m2!1sen!2slk!4v1668100247164!5m2!1sen!2slk"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="zd3">
                    <h2 class="zh21">get in touch</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, repellendus sunt in sapiente commodi est officia. Ut amet numquam dolores.</p>
                    <div class="zd4">
                        <input type="text" placeholder="email" class="in1">
                        <input type="text" placeholder="email" class="in1">
                    </div>
                    <input type="text" placeholder="your subject" class="in4">
                    <input type="text" placeholder="enter your message" class="in3">

                    <div class="zd5">
                         <button id="bt1">sent message</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="zd6" class="w">
                <div class="zd7">
                    <img src="img/icon/clock.svg" alt="Clock" class="zin3">
                    <h3 class="zh31">office addres</h3>
                    <span class="zs1">15/b/road,new york,USA</span>
                </div>
                <div class="zd7">
                    <img src="img/icon/phone-call.svg" alt="Phone" class="zin3">
                    <h3 class="zh31">call us</h3>
                    <span class="zs1">-+ 123 4566 789</span>
                </div>
                <div class="zd7">
                    <img src="img/icon/email.svg" alt="Email" class="zin3">
                    <h3 class="zh31">email us</h3>
                   <span class="zs1">info@example</span>
                </div>
                <div class="zd7">
                    <img src="img/icon/clocks.svg" alt="CLocks" class="zin3">
                    <h3 class="zh31">office open</h3>
                    <span class="zs1">sun-fri(10am-08pm)</span>
                </div>
        </div>
    </section>
</body>

    <!---footer-->
    <?php include 'INC_FOOT.php' ?>