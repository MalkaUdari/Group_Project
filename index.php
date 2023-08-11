<?php include 'INC_HEAD.php' ?>
<link rel="stylesheet" href="css/x1-css.css">
<link rel="stylesheet" href="css/x2-css.css">
<link rel="stylesheet" href="css/x3-css.css">
<link rel="stylesheet" href="css/x4-css.css">

<title>index</title>
<style>
    .x2i1{
		  filter: brightness(1) saturate(0%);
	}
    /*section 1*/
    #zse1{
        background:url(img/cover1.jpg);
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
        top: -150px;
       height: 794px;
    }
    #zd6{
        width: 64%;
        position: relative;
        top: 216px;
        }
    #zd8{
        background: #00000082;
        height: 100%;
    }
    .zp7{
        font-size:19px;
        text-transform: uppercase;
        color: var(--color);
        font-family: var(--font1);
        font-weight: 400;
        margin-bottom: 30px;
		margin-left:10px;

    }
    #zh11{
       font-family: var(--font1);
       font-size: 60px;
        color: #fff;
       text-transform: uppercase;
       font-weight: 600;
       word-spacing: 8px;
       letter-spacing: 3.2px;
	   margin-left:10px;

    }
    .za6{
    width: 23%;
    padding: 11px;
    border-radius: 15px;
    background: var(--color);
    font-size: 18px;
    font-family: var(--font-2);
    color: #ffff;
    margin: 27px 40px 27px 0px;
    text-transform: capitalize;
    text-decoration: none;
    transition: 0.5s all;
    border: 2px solid var(--color);
    display: flex;
    align-items: center;
    justify-content: space-evenly

    }
    .za6::after{
        content: "";
        width: 18px;
        height: 16px;
        background-size: 18px 18px;
        background-image: url(img/icon/right-arrow-white.svg);
        background-repeat: no-repeat;
        display: block;
        background-position-x: 0px;
        position: relative;
        justify-content:space-evenly;


    }
    .za6:hover{
        background: transparent;
        cursor: pointer;
        transition:0.10s all;
        border: 2px solid var(--color);
    }

    #zd7{
        display: flex;
        align-items: center;
    }

    #zd11{
        padding: 84px 0;
        display: flex;
        justify-content: space-between;
    }
    .zd12{
        width: 23%;
        height: 138px;
        background: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 16px;
        border-radius: 8px;
        box-shadow: 3px -1px 28px 9px #00000014;
        }
    .zi2{
        width: 45px;
        height: 45px;
    }
    .zs5{
        font-size: 20px;
        font-family: var(--font2);
        color: black;
        text-transform: capitalize;
        font-weight: 600;
        padding: 14px;
    }
    .zh12{
        font-size: 38px;
        font-family: var(--font-1);
        color: #051242;
        text-transform: uppercase;
        letter-spacing: 2.2px;
        padding: 5px 0;
    }
    #zp2{
        color:#fff;
		margin-left:10px;
    }







    /*happy clines*/
    
    #zd13{
        background: #000000a3;
    
    }
    .zd13{
        background-image: url(img/img2.webp);
        background-size: cover;
        background-repeat: no-repeat;
        width: auto;
    }
    .zd14{
        width: 30%;
        display: block;
        text-align: center;
    }
    #zd15{
        display: flex;
        justify-content: space-around;
        padding: 72px 0 0;
    padding-bottom: 80px;;

    }
    .zi5{
        height: 56px;
      
    }
    .zs2{
        font-size: 56px;
        font-family: var(--font-3);
        color: #fff;
        display: block;
        font-weight: bold;
        padding: 20px;

    }
    .zs3{
        font-size: 18px;
        font-family:var(--font-2);
        color: var(--color);
        text-transform: capitalize;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }
    .zs3::before{
        content: "";
        background-size: 35px 35px;
        position: relative;
        display: block;
        background-image: url(img/icon/plus.svg);
        background-repeat: no-repeat;
        padding: 19px 18px 16px 16px;
        background-size: 13px 38px;
        background-position-x: 14px;
    }
    /*pricing plan*/
    #zd41{
        display: flex;
        justify-content: space-between;
        background: #f6f6f6ff;
        margin-top: 122px;
        margin-bottom: 130px;
    }
    .zd16{
        background: #fff;
         width:24%;
         box-shadow: 0px 8px 28px 15px #f6f6f6ff;
         border-radius: 16px;
    }
    .zd16:hover{
        transform: scale(1.1);
        transition: 0.5s all
    }
    .zd17{
        width: 100%;
        height: 259px;
        background: var(--color);
        border-radius: 15px 15px 150px 150px;
        overflow: hidden;
    }
    .zd45{
        
    background: #fffdfdc7;
    width: 87%;
    height: 243px;
    border-radius: 100px 100px 150px 134px;
    opacity: 29%;
    position: relative;
    left: -136px;
    top: -47px;
    overflow: hidden;

    }
    .zd46{
        background: #fffdfdc7;
    width: 56%;
    height: 221px;
    border-radius: 100% 100% 100% 100%;
    opacity: 29%;
    position: relative;
    left: 199px;
    top: -125px;
    overflow: hidden;

    }
    #zd17{
        background: var(--color-2);
    }
    .zi6{
        width: 100px;
    height: 100px;
    display: block;
    margin: 0 auto;
    position: relative;
    top: -72%;

    }
    .zs6{
        font-size: 26px;
    text-transform: capitalize;
    font-family: var(--font1);
    color: #fff;
    text-align: center;
    display: block;
    padding: 35px 0;
    letter-spacing: 1.2px;
    margin-top: -234px;;
    }
    .zs17{
        color: #666;
        font-size: 28px;
        font-weight: 500;
        display: block;
       text-align: center;
    }
    .zs4{
        font-size: 55px;
        color: #666;
        display: flex;
        text-align: center;
        justify-content: center;
        padding-top: 20px;
        font-weight: bold; 
        font-family: var(--font-3);

       }
    .zs9{
        font-size: 15px;
        color: #666;
        font-family: var(--font-2);
        text-transform: capitalize;
        display: block;
        text-align: center;
        font-weight: 500;
    }
    .zs7, .zs8{
        font-size: 16px;
        color: #666;
        font-family: var(--font-2);
        text-transform: capitalize;
        font-weight: 500;
        display: flex;
        align-items: center;
        display: flex;
        justify-content: center;
        padding: 8px 0;
    }
    .zs7::before{
        content: "";
        width: 31px;
        height: 30px;
        background-image: url(img/icon/check2.svg);
        position: relative;
        display: grid;
        align-items: center;
        background-size: 20px 32px;
        background-repeat: no-repeat;
    }
    .zs8::before{
        content: "";
        width: 31px;
        height: 30px;
        position: relative;
        background-image: url(img/icon/check.svg);
        display: grid;
        align-items: center;
        background-size: 20px 32px;
        background-repeat: no-repeat;


    }

    #a11{
        background:var(--color-2);
    }
    #bt4{
        background: var(--color-2);
    }
    #za4{
        list-style: none;
        text-decoration: none;
        color: var(--color-2);
        font-size: 17px;
        font-family: var(--font-2);
        text-transform: uppercase;
        margin: 0 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 46px;
        padding: 20px 0;
    }
    #za4::before{
        content: "";
        width: 31px;
        height: 30px;
        background-image: url(img/icon/check.svg);
        position: relative;
        display: grid;
        align-items: center;
        background-size: 20px 32px;
        background-repeat: no-repeat;
    }
    /*our awsome partner*/
    #zd19{
        background: var(--color);
        width: auto;

    }

    .zh13{
        font-size: 38px;
        font-family: var(--font-1);
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2.2px;
        padding: 10px 0;
    }
    .zs16{
        font-family: var(--font-2);
        color: #fff;
        text-transform: uppercase;
        font-size: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }
    .zs16::before{
        content: "";
        width: 50px;
        border: 2px solid #fff;
        margin: 0 18px 0 0px;
    }
    #zp5{
        color: #fff;
        padding: 0 25%;
    }
    .zd20{
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        padding-top: 100px;
    }
    .h10{
        text-transform: uppercase;
        font-family: var(--font-2);
        font-size: 23px;
        color: #fff;
    }
    .h11{
        font-family: var(--font1);
        color: #fff;
        font-size: 55px;
        text-transform: uppercase;
        text-align: center;
    }

    #zd21{
        display: flex;
        justify-content: space-between;
        padding:0px 0 120px 0;
        margin-top: 60px;

    }
    .zi14{
        border-radius: 12px;
        width:100%;
    
    
    }
    .zd70{
        width: 15%;
    }
    /*meat our team*/
    #zd22{
        padding-bottom: 159px;
        display: flex;
        justify-content: space-around;
        margin-top: 60px;
    }
    .zd23{
        width:23%;
        background:#fff;
    }
    .zd24{
        width:100%;
        height: 95%;
    }
    .zi3{
        width:100%;
        border-radius: 10px;
    }
    .zd25{
        width:100%;
    }
    .zi4{
        width: 90%;
        margin: 0 auto;
        display: block;
        padding: 0px 0;
        margin-top: -104px;
    }
    .zh22{
        margin-top: -113px;
        text-align: center;
        font-family: var(--font-2);
        color: #051242;;
        font-size: 23px;
        text-transform:capitalize;
    }
    .zs18{
        font-size: 15px;
        font-family: var(--font-2);
        color: #fca702;
        text-transform:capitalize;
        text-align: center;
        display: block;
        font-weight: bold;

    }
    .zi7{
        width: 16px;
        margin: 0 10px;
        display: flex;
        justify-content: center;
    }
    .zd53{
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }
    #zd47{
        display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    padding: 106px 0;
    }

/*get discount*/
    #zd26{
        background-image:url(img/video.webp) ;
        background-size: cover;
        width: 100%;
        background-position: center;
        background-repeat: no-repeat;
    }
    #zd28{
        background: #000000b8;
        padding-top: 65px;
         padding-bottom: 111px;


    }
    .zh14{
        font-family: var(--font1);
        font-size: 36px;
        color: #fff;
        text-transform: uppercase;
        padding: 20px 0;
        font-weight: 200;
    }
    .zs19{
        font-family: var(--font1);
        font-size: 45px;
        color: var(--color);
        font-weight: normal;

    }
    #zp3{
        font-size: 19px;
        font-family: var(--font-2);
        color: #fff;
        text-transform:uppercase;
        font-weight: 300;
        line-height: 32px;
    }
    .zd27{
        text-align: center;
        padding: 45px 0;
    }
    .i15{
        width: 29px;
        height: 44px;
        margin: 5px 0 0 17px;

    }
    .za5{
        width: 19%;
        padding: 6px 0px 6px 0px;
        font-family: var(--font-2);
        cursor: pointer;
        color: #fff;
        border-radius: 41px;
        background: var(--color);
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        text-transform: capitalize;
        margin: auto;
        text-decoration: none;
        }
        .za5::after{
        content: "";
        width: 35px;
        height: 35px;
        background-size: 18px 38px;
        background-image:url(img/icon/right-arrow-white.svg);
        background-repeat: no-repeat;
        display: block;
        background-position-x: 11px;
        }

        /*iframe*/
        iframe{
            width: 100%;
            height: 550px;
            border-radius: 12px;
            display: block; 
            margin: 0 auto;
            border:0;
            margin-top:70px;
        
        }
        
        /*leatest news and blogs*/
        #zd34{
            display: flex;
            justify-content: space-evenly;
            padding: 74px 0;
            margin-bottom: 50px;

        }
        .zd35{
            width: 23%;
        }
        .i22{
            width: 100%;
        }
        .zs21{
            font-family: var(--font-2);
            font-size: 17px;
            color: #051242;
            text-transform: capitalize;
            font-weight: 500;
            display: flex;
            align-items: center;

        }
        .zs20{
            font-family: var(--font-2);
            font-size: 17px;
            color: #051242;
            text-transform: capitalize;
            font-weight: 500;
            display: flex;
            align-items: center;

        }
        .zs21::before{
            content: "";
            width: 21px;
            height: 35px;
            display: block;
            background-image: url(img/icon/user.svg);
            background-repeat: no-repeat;
            background-size: 13px 37px;
            background-position-x: 3px;
        }
        .zs20::before{
            content: "";
            width: 21px;
            height: 35px;
            display: block;
            background-image: url(img/icon/calendar.svg);
            background-repeat: no-repeat;
            background-size: 13px 37px;
            background-position-x: 3px;
        }
        .zd36{
            display: flex;
            width: 91%;
            justify-content: space-between;


        }
        .zh24{
            font-size: 21px;
             font-family: var(--font-1);
             color: #051242;
             text-transform: capitalize;
             font-weight: 100;
             padding: 11px 0

        }
        .zp4{
            padding-right: 35px;

         }

         .za7{
            font-size: 18px;
            font-family: var(--font-2);
            color: var(--color);
            text-transform: capitalize;
            list-style: none;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: flex-start;
         }
         .za7::after{

            content: "";
            display: block;
            width: 35px;
            height: 35px;
            background: url(img/icon/right-arrow.svg);
            background-repeat: no-repeat;
            background-size: 22px 40px;
            margin: 0px 0px 0px 13px;
        }
        #zd100 {
            margin-top: -227px;
        }

        /*services*/
      
        #zse9{
            padding-bottom: 50px;
        }
        #zse4{
            padding: 10px 100px;
        }
        

#zd55{
    margin-top: 70px;
    display:flex;
    flex-wrap:wrap;
    justify-content: space-between;
}
.zd56{
    background: #fff;
    border-radius: 12px;
    width:32%;
    box-shadow:0px 7px 27px 4px #efecec;
    margin: 10px 0;
}
.zd57{
    background: url(img/2.hotel.jpg);
    height: 228px;
    border-radius: 15px;
    width: 95%;
    margin: 0 auto;
    margin-top: 9px;
}
.zd64{
    background: url(img/3.hotel.jpg);
    height: 228px;
    border-radius: 15px;
    width: 95%;
    margin: 0 auto;

    margin-top: 9px;

}
.zd65{
    background: url(img/4.hotel.jpg);
    height: 228px;
    border-radius: 15px;
    width: 95%;
    margin: 0 auto;
    margin-top: 9px;

}

.zd59{
    display: flex;
    justify-content: space-between;
    flex-direction: row-reverse;
    padding: 10px 0;
}
.zi10{
    background: var(--color-1);
    border-radius: 50px;
    margin-right: 11px;
}
.zd60{
    padding: 24px 17px;
    width: 100%;
}
.zd61{
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding-bottom: 15px;
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
.zi11{
    margin-top: 10px;
    padding: 5px 0;
    width: 18px;
}
.zs10{
    color: var(--color-2);
    font-size: 27px;
    font-weight: 800;
    text-transform: capitalize;
    font-family: var(--font-3);
}
.zs11{
    color: #9fa6ae;
    font-family: var(--font-2);
    text-transform: capitalize;
    font-size: 17px;
    font-weight: 600;
}

.zs12, .zs13, .zs14{
    text-transform: capitalize;
    font-family: var(--font-2);
    font-size: 17px;
    color:#1d1e1e;
    vertical-align: middle;
    display: flex;
}
.zs12::before{
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
.zs13::before{
    content: "";
    display: inline-block;
    background-size: 18px 20px;
    background-image: url(img/icon/bath-2.svg);
    background-repeat: no-repeat;
    width: 28px;
    height: 23px;
    vertical-align: middle;
    background-position-x: 5px;

}
.zs14::before{
    content: "";
    display: inline-block;
    background-size: 18px 20px;
    background-image: url(img/icon/move.svg);
    background-repeat: no-repeat;
    width: 28px;
    height: 23px;
    vertical-align: middle;
    background-position-x: 5px;

}



.za10{

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
.za10::after{
    content: "";
    width: 20px;
    height: 26px;
    background-size: 17px 30px;
    background-image: url(img/icon/right-arrow-lightblue.svg);
    background-repeat: no-repeat;
    display: block;
}

        /*index media query*/
        @media screen and (max-width:1200px) {
            .w{
                width: 96%;
                margin: 0 2%;
            }
            .xi2{
                width: 100%;
                height: 195%;

            }
            .za6{
                width: 25%;
            }
            .zi4{ 
                margin-top: -41%;
            }
            #zd22{
                padding-bottom:80px;
            }
            .zh22{
                margin-top: -98px;
            }
            .zs21,.zs20{
                font-size:13px;
            }
            #zse9{
                padding:0;
            }

        }
        @media screen and (max-width:1075px) {
            #zse1{
                height: 744px;
            }
            .zp7{
                font-size:16px;
                margin:0;
            }
            #zh11{
                font-size:50px;
            }
            .za6{
                margin: 32px 24px 0px 0px;
                padding: 14px 0px 14px 0px;

            }
            .zh21{
                font-size:22px;
            }
            .zi11{
                width: 15px;
            }
            .zs12,.zs13,.zs14{
                font-size:16px;
            }
            .za10{
                width: auto;
            }
            #zd15{
                 padding: 36px 0 0;
                 padding-bottom: 36px;
            }
            .hg{
                padding-top: 60px;
            }
            .p1{
                padding:0 16%;
            }
            #zd41{
                margin-top: 94px;
                margin-bottom: 52px;
                background: #f6f6f600;
            }
            #zd21{
                padding:0 0 55px 0;
            }
            #zp5{
                padding:0 13%;
            }
            #zd22{
                flex-wrap:wrap;
            }
            .zd23{
                width: 45%;
            }
            .zi3{
                height:100%
            }
            .zi4{
                margin-top: -36%;
                width: 75%;
            }
            .za5{
                width: 25%;
            }
            .zd36{
                width: 100%;
            }
            .zh24{
                font-size:17px;
            }
            .zp4{
                padding:2px 0;
            }
            #zd34{
                margin-bottom:0;
            }
            .za1{
                padding: 6px 0px 5px 21px;

            }
            .zh23{
                font-size:25px;
            }
            .zh22{
                position: relative;
                top: -22px;
                text-align: center;
            }
            .zd52{
                padding: 4px 0;
                        }
         
            .zd35{
                width: 24%;
            }
            .zs21,.zs20{
                font-size: 12px;
            }
            
        }
        @media screen and (max-width:920px) {
            #zd6{
                top: 220px;
                margin: 0 auto;
                text-align: center;
                width: auto
            }
            #zse1{
                height:680px;
            }
            #zh11{
                font-size: 39px;

            }

            #zp2{
                padding:0 16%;
            }
            #zd7{
                justify-content: center;
            }
            .zp7{
                padding: 27px 0;
            }
            .zd61{
                flex-direction: column;
                width: 100%;
                text-align: center;
                align-items: flex-start;

            }
            .zh21{
                width:auto;
                font-size: 19px;
            }
            .zd60{
                padding: 24px 10px;

            }
           
            #zd41{
                flex-wrap: wrap;
                margin-bottom: 9px;
                justify-content:  space-evenly;;
            }
            .zd16{
                padding: 15px;
                width:40%;
                height: fit-content;
            }
            /* .zd16:last-child{
                margin-top: 45px;
            } */
            .zi4{
                margin-top: -34%;
                width: 69%;;
            }
            #zd22{
                padding-bottom: 31px;
            }
            #zd28{
                padding-top:0px;
                 padding-bottom: 48px;

            }
            .za1{
               padding: 4px 19px 5px;
                width: 45%;


            }
            .zp1{
                padding: 8px 0;
            }
            .zd23{
                width: 37%;
            }
            #za4{
                margin-top: 23px;
                padding:0;
            }
            .zs4{
                padding-top: 5px;
            }
            .zs7,.zs8{
                padding: 4px 0;
            }
            .zh22{
                top:0;
            }
            .za5{
                width:28%;
                font-size:14px;
             }

             #zd47{
                padding: 55px 0;
             }
             .zd50{
                width:48%;
                margin: 15px 0px
             }
             .zd35{
                 width: 44%;
                 margin-bottom: 25px;

             }
             #zd34{
                flex-wrap: wrap;

             }

        }
        @media screen and (max-width:797px) {
            .zd56{
                width: 48%;
            }
            #zd55{
                padding: 6px;
            }
            .p1{
                padding:0 10%;
            }
            .hg{
                margin-bottom: -48px;
            
            }
            .zs2{
                font-size:25px;
                padding:13px;
            }
            .zi5{
                height:40px;
            }
            .zs6{
                font-size:20px;
            }
            .zs4{
                font-size:38px;
            }
            /* .zd17{
                height:172px;
            } */
            .zd16{
                width: 45%;
            }
            .zi6{
                top: 12%;

            }
            .zs6{
                padding:0;
                margin-top: 46px;
              }
            .zd45{
               display:none;
            }
            .zd46{
                display:none;
            }
            .zs7,.zs8{
                font-size:13px;
            }
            .zs7::before{
                height: 30px;
                background-size: 16px 27px;
                width:21px;
            }  
            .zs8::before{
                height: 30px;
                background-size: 16px 27px;
                width:21px;
            }  
         
            #zd41{
                background:transparent;
            }
            #zd21{
                flex-wrap:wrap;
             }

             .zd24{
                width: 100%;
                height:auto;
                margin: 32px 0;
             }
             .zd25{
                width: 75%;
                margin:0 auto;;
                height:auto
             }
             .zi3{
                height:87%;
                width: 100%;
             }
             .zh22{
                margin-top: -27px;
                font-size:17px;

             }
             .zd53{
                margin: 10px 0;
             }
             .zi7{
                 width: 10px;
                 margin: 0 10px

             }
             .zh14{
                font-size:23px;
             }
             .zs19{
                font-size:23px;

             }
             #zp3{
                font-size:12px;
                line-height:1.5;
             }
             .zd27{
                padding:6px 0;
             }
            
             #zd34{
                flex-wrap:wrap;
             }
             .zd35{
                width: 46%;
                margin: 16px 0;
             }
             #zd11{
                padding:134px 0;
                flex-wrap:wrap;
                width: 90%;
                margin: 0 auto;
             }
             .zd12{
                width: 49%;
                margin:10px 0;
             }
     
             #zd49{
                padding-top: 97px
             }
             .zi4{
                display:none;
             }
             .zd61{
                flex-direction: unset;
                align-items: center;
                justify-content:space-between;
             }
             #zd47{
                margin-top: 43px;
            }
            .zd70{
                width: 31%;
            }
            .zi14{
                margin: 5px 0;
            }
            .za1{
                width: 58%;
            }
            #zd6{
                top: 190px;
            }
           
        }
        @media screen and (max-width:560px) {
            #zh11{
                font-size: 28px;

            }
           
            .za6{
                width: 28%;
            }
            .zh12{
                font-size: 32px;

            }
            #zse1{
                height: 588px;
            }
            #zd100{
                margin-top: -188px;

            }
            .zp7{
                padding:5px 0;

            }
            .zd56{
                width: 70%;
                margin:0 auto;
                 margin-top: 25px ;
            }
            .za10{
                width: 53%;
            }
            #zd15{
                flex-wrap:wrap;
            }
            .zd14{
                width: 50%;
                margin:10px 0;
            }
            .zs2{
                font-size:29px;
                padding:0;
            }
            .zs3{
                font-size:17px;
            }
            #zd15{
                padding: 13px 0 0;
                padding-bottom: 15px;

            }
            .zd16{
                width:75%;
                margin:0 auto;
                margin-top:15px;
            }
            .zh13{
                font-size:26px;
            }
            #zp5{
                padding:0 8%;
            }
            #zd22{
                flex-direction: column;
                 align-items: center;
                 padding-bottom: 40px;

            }
            .zd23{
                 width: 75%;

            }

            .za5{
                width: 38%;
            }
            .zs21, .zs20{
                font-size:9px;
            }
            .zs21::before{
                background-size: 9px 35px;
            }
            .zs20::before{
                background-size: 9px 35px;
            }
            .zh24{
                font-size:12px;
                text-align:center;
            }
            .zp4{
                text-align: center;
            }
            .za7{
                font-size:12px;
                justify-content:center;
            }
            .zs5{
                font-size:16px;
                padding: 13px;
            }
            .zi2{
                width:35px;
                height:45px;
            }
            #zd49{
                flex-direction: column;
                 align-items: center;
                 padding-bottom: 28px;
            }
            .zd52{
                margin-top: -155px;
            }
            .zh22{
                padding: 10px;
            }
            .zd70{
                width: 46%;
            }
            .zd50{
                width: 77%;
            
            }
            .za1 {
            width: 49%;
            }
            #zd6{
                top: 212px;

            }
            #zp2{
                padding: 0 6%;


            }




        }
        @media screen and (max-width:400px) {
            .zh12{
                font-size: 25px;

            }
            .s12{
                font-size:13px;
            }
            .zd25{
                margin-top: 42px;
            }
            .zp7{
                padding: 4px 0;
            }
            .za6{       
                width: 37%;

            }
            #zp2{
             padding: 0 5%;

            }
            #zse1{
                height: 590px;
            }
            #zh11{
                font-size:22px;
            }
             .zd56{
                width: 100%;
               
             }    
             .zd16{
                width: 100%;
             }     

             .zd23{
                width: 100%;
                align-items:center;
                display: flex;
                flex-direction: column;
                margin: 9px 0;
             }
             .zi4{
                margin-top: -94px;
                 width: 60%;
             }
             .zd24{
                width: 81%;
                 margin:0;
             }
             .zh22{
                top: -3px;
             }
             .zd53{
                margin: 18px 0;
             }
             .za5{
                width: 51%;
             }
             #zd28{
                padding-bottom:23px;
             }
             #zd34{
                flex-direction: column;
                align-items: center;
                padding: 0;
                padding-top: 80px;
             }
             .zd35{
                width: 100%;
             }
             .zh24,.zp4{
                text-align:left;

             }
             .zd36{
                width: 55%;
             }
             .za7{
                justify-content: flex-start;
             }
             #zd11{
                flex-direction: column;
                align-items: center
             }
             .zd12{
                width:93%;
             }
             .za1{
                width: 51%;
             }
    
             .x3a1 {
                margin-bottom: 14px;
                margin-top: 54px'
            }
            .zd70{
                width: 78%;

            }
            .zd50{
                width: 95%;
            }
    }


</style>
</head>
<body>
   <!--navi-->
   <?php include 'INC_NAVI.php' ?>




      
	
</div>
 <section id="zse1">
        <div id="zd8">
            <div class="w">
                <div id="zd6">
                   <hgroup>
                    <p class="zp7">The Top 3 Hotels with Nature in Sri Lanka</p>
                        <h1 id="zh11">the coolest hotel and resort</h1>
                        <p id="zp2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque debitis dignissimos consequuntur autem quas cumLorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Itaque Debitis Dignissimos Consequuntur Autem Quas Cum.</p>
                  </hgroup>
                 
                       
                   
                </div>
            </div>
        </div>
    </section>
    <section id="zse2">
        <div class="w">

            <!---top featurs-->
             <hgroup class="hg">
           
                <h1 class="zh12">top features</h1>
                <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorem qui, id provident voluptates laborum nobis. Aperiam quis voluptas qui.</p>
             </hgroup>
            <div id="zd11">
                <div class="zd12">
                    <img src="img/nature1.png" alt="Ac" class="zi2">
                    <span class="zs5">Environmentally Friendly</span>

                </div>
                <div class="zd12">
                    <img src="img/icon/wifi.svg" alt="Wifi" class="zi2">
                    <span class="zs5">free wifi</span>

                </div>
                <div class="zd12">
                    <img src="img/icon/cctv.svg" alt="Cctv" class="zi2">
                    <span class="zs5">security</span>

                </div>
                <div class="zd12">
                    <img src="img/icon/tv.svg" alt="Tv" class="zi2">
                    <span class="zs5">Digital tv</span>

                </div>
            </div>
            <!---pool-->
          <div id="x2d1">
                <div class="x2d2">
                    <img src="img/kandalama1.webp" alt="First_Pool" class="x2i1">
                    <div class="x2d3">
                        <img src="img/kandalama1.webp" alt="Second_Pool" class="x2i2">
                    </div>
                </div>
                <div class="x2d4">
                    <hgroup>
                    <span class="x2s1">about us</span>
                    <h2 class="x2h21">we provide best place to enjoy your time</h2>
                    <p class="p9" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorem qui, id provident voluptates laborum nobis. Aperiam quis voluptas qui.</p>
                     </hgroup>
                    <div class="x2d6">
                        <p class="x2p2">Lorem ipsum dolor sit amet consectetur, atibus?</p>
                        <p class="x2p2">Lorem ipsum dolor sit amet consectetur, atibus?</p>
                        <p class="x2p2">Lorem ipsum dolor sit amet consectetur, atibus?</p>
                       <a href="#" class="x2a7">discover more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="zd13">
         <div id="zd13"> 
            <div class="w" id="zd15">
                <div class="zd14">
                    <img src="img/icon/happiness.svg" alt="Happy_Face" class="zi5">
                    <span class="zs2">30</span>
                    <span class="zs3">happy clines</span>
                </div>
                <div class="zd14">
                    <img src="img/icon/group-chat.svg" alt="Gruop_Chat" class="zi5">
                    <span class="zs2">600</span>
                    <span class="zs3">our staff</span>
                </div>
                <div class="zd14">
                    <img src="img/icon/cup-of-hot-coffee.svg" alt="Coffee_Cup" class="zi5">
                    <span class="zs2">1500</span>
                    <span class="zs3">cup of tea</span>
                </div>
                <div class="zd14">
                    <img src="img/icon/medal.svg" alt="Medal" class="zi5">
                    <span class="zs2">50</span>
                    <span class="zs3">win awards</span>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--about-->
 <section id="zse3">
        <div class="w">
            <hgroup class="hg">
            <h1 class="zh12">About Hotels</h1>
                <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorem qui, id provident voluptates laborum nobis. Aperiam quis voluptas qui.</p>
             </hgroup>
             <div id="zd55">
            <div  class="zd56">
                    <div class="zd57" class="zd58">
                        <div class="zd59">
                            <img src="img/icon/heart.svg" alt="Mini_Heart" class="zi10">
                        </div>
                    </div>
                    <div class="zd60">
                        <div class="zd61">
                            <h2 class="zh21">Heritance Kandalama Hotel</h2>
                            <div class="zd62">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                            </div>
                        </div>
                            <span class="zs10">Heritance Kandalama 11, Dambulla<span></span><span class="zs11">/ Sri Lanka</span></span>
                            <br>
							<br>
                            <a href="https://www.heritancehotels.com/kandalama/" class="za10">Hotel Web Page</a>
                    </div>
                </div>
                <div  class="zd56">
                    <div class="zd64" class="zd58">
                        <div class="zd59">
                            <img src="img/icon/heart.svg" alt="Mini_Heart" class="zi10">
                          
                        </div>
                    </div>
                    <div class="zd60">
                        <div class="zd61">
                            <h2 class="zh21">Jetwing Vil Uyana</h2>
                            <div class="zd62">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                            </div>
                        </div>
                            <span class="zs10">Sigiriya, 21120<span></span><span class="zs11">/ Sri Lanka</span></span>
							<br>
                            <br><br>
                            <a href="https://www.jetwinghotels.com/jetwingviluyana/" class="za10">Hotel Web Page</a>
                    </div>
                </div>
                <div  class="zd56">
                    <div class="zd65" class="zd58">
                        <div class="zd59">
                            <img src="img/icon/heart.svg" alt="Mini_Heart" class="zi10">
                            
                        </div>
                    </div>
                    <div class="zd60">
                        <div class="zd61">
                            <h2 class="zh21">Cinnamon Wild Yala</h2>
                            <div class="zd62">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                                <img src="img/icon/star5.svg" alt="Stars" class="zi11">
                            </div>
                        </div>
                            <span class="zs10">Palatupana, Kirinda 82614<span></span><span class="zs11">/ Sri Lanka</span></span>
							<br>
                           <br><br>
                            <a href="https://www.cinnamonhotels.com/cinnamonwildyala" class="za10">Hotel Web Page</a>
                    </div>
                </div>
              
                  
    </section> 
    <!---offers and features-->
     <section id="zse4">
        <div class="w">
            <hgroup class="hg">
                
                <h1 class="zh12">Offers & features</h1>
                <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorem qui, id provident voluptates laborum nobis. Aperiam quis voluptas qui.</p>
             </hgroup>
            <div id="zd41">
                
                <div class="zd16">
                    <div class="zd17">
					
					<img src="img/1.hotel - Copy.jpg"/>
				
                        <div class="zd45"></div>
                        <img src="img/icon/heart.svg" alt="Heart" class="zi6">
                        
                        <div class="zd46"></div>

                    </div>
                    <span class="zs4">
                       
                        Kandalama Heritance
                    </span>
                    <span class="zs9">A still forest of dense green, floating whispers of bird song the lake shimmers in the distance, walls of rock cool to touch.</span>
                    <span class="zs7">24hr Free Cancellation</span>
                    <span class="zs7">Best Rates Guaranteed</span>
                    <span class="zs7">Dining</span>
                    <span class="zs7">Events</span>
                    <span class="zs7">SPA</span>
                   
                </div>
                <div class="zd16">
				
                    <div class="zd17" id="zd17">
					<img src="img/3.hotel.jpg"/>
                        <div class="zd45"></div>     
             
                        <div class="zd46"></div>
						
                    </div>
                    <span class="zs4">
                       
                       Jetwing Vil Uyana
                    </span>
                    <span class="zs9">The Most Exclusive Sanctuary on Eart</span>
                    <span class="zs8">Eco-Luxury Lyining</span>
                    <span class="zs8">Sanctualy of Wildlife</span>
                    <span class="zs8">Perfectly Curated Butler Service</span>
                    <span class="zs8">Special Offers</span>
                    <span class="zs8">Dining</span>
                  
                
                </div>
                <div class="zd16">
                    <div class="zd17">
					<img src="img/4.hotel.jpg"/>         
					
                        <div class="zd45"></div>
                        <img src="img/icon/heart.svg" alt="Heart" class="zi6">
                      
                        <div class="zd46"></div>
                    </div>
                    <span class="zs4">
                       
                      Cinnamon Wild
                    </span>
                    <span class="zs9">/We’re so glad to sense the excitement you’re filled with, to meet our wild neighbours.</span>
                    <span class="zs7">Advance Booking Offers</span>
                    <span class="zs7">Adventures</span>
                    <span class="zs7">Dining</span>
                    <span class="zs7">Wellness</span>
                    <span class="zs7">Weddings & Events</span>
                   
                </div>
           
    </section>
    <!---our awsome partner-->
    <section id="zse5">
        <div id="zd19">
            <div class="w">
                <hgroup class="hg">
                    <span class="zs16">partner</span>
                    <h1 class="zh13">our awesome partners</h1>
                    <p class="p" id="zp5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorem qui, id provident voluptates laborum nobis. Aperiam quis voluptas qui.</p>
                 </hgroup>

     
    </section>
    <!--youtube video-->
   <section id="zse6">
        <div class="w">
            <hgroup class="hg">
           
                <h1 class="zh12">Hotel Videos</h1>                   
                <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorem qui, id provident voluptates laborum nobis. Aperiam quis voluptas qui.</p>
             </hgroup>
            <div id="zd22">
                <div class="zd23">
                    <div class="zd24">
                        <img src="img/kandalama2.jpg" alt="Team_Lady" class="zi3">
                    </div>
                    <div class="zd25">
                        <img src="img/1.box.webp" alt="Box" class="zi4">
                        <h2 class="zh22">Kandalama Heritance</h2>
                        <span class="zs18"><a href="https://youtu.be/4_aVHri1eZ4">Click to Play</a></span>
                        <div class="zd53">
                            <a href=""><img src="img/icon/facebook.svg" alt="Facebook" class="zi7"></a>
                            <a href=""><img src="img/icon/twitter.svg" alt="Twitter" class="zi7"></a>
                            <a href=""><img src="img/icon/colorfb.svg" alt="Colorfb" class="zi7"></a>
                            <a href=""><img src="img/icon/linkedin.svg" alt="Linkedin" class="zi7"></a>
                            <a href=""><img src="img/icon/youtube.svg" alt="Youtube" class="zi7"></a>
                        </div>
                    </div>
                </div>
                <div class="zd23">
                    <div class="zd24">
                        <img src="img/jet1.jpeg" alt="Team_Lady" class="zi3">
                    </div>
                    <div class="zd25">
                        <img src="img/1.box.webp" alt="Box" class="zi4">
                        <h2 class="zh22">Jetwing Vil Uyana<h2>
                        <span class="zs18"><a href="https://youtu.be/Nb_pCKNoiUo">Click to Play</span>
                        <div class="zd53">
                            <a href=""><img src="img/icon/facebook.svg" alt="Facebook" class="zi7"></a>
                            <a href=""><img src="img/icon/twitter.svg" alt="Twitter" class="zi7"></a>
                            <a href=""><img src="img/icon/colorfb.svg" alt="Colorfb" class="zi7"></a>
                            <a href=""><img src="img/icon/linkedin.svg" alt="Linkedin" class="zi7"></a>
                            <a href=""><img src="img/icon/youtube.svg" alt="Youtube" class="zi7"></a>
                        </div>
                    </div>
                </div>
                <div class="zd23">
                    <div class="zd24">
                        <img src="img/cinnamon1.jpg" alt="Team_Lady" class="zi3">
                    </div>
                    <div class="zd25">
                        <img src="img/1.box.webp" alt="Box" class="zi4">
                        <h2 class="zh22">Cinnamon Wild</h2>
                        <span class="zs18"><a href="https://youtu.be/wtvcI3pBAaU">Click to Play</a></span>
                        <div class="zd53">
                            <a href=""><img src="img/icon/facebook.svg" alt="Facebook" class="zi7"></a>
                            <a href=""><img src="img/icon/twitter.svg" alt="Twitter" class="zi7"></a>
                            <a href=""><img src="img/icon/colorfb.svg" alt="Colorfb" class="zi7"></a>
                            <a href=""><img src="img/icon/linkedin.svg" alt="Linkedin" class="zi7"></a>
                          
                        </div>
                    </div>
                </div>
                <
                    
                </div>
            </div>
        </div>
        <!---get discount-->
        <div id="zd26">
            <div id="zd28">
            <div class="w">
                <div class="zd27">
                    <h1 class="zh14">get discount<span class="zs19"> 15-25% </span>off any room package</h1>
                    <p id="zp3">when you purchasing any package and get next room</p>
                </div>
                <a href="#" class="za5">book room today</a>
             </div>
        </div>
    </div>
    </section> 
    <!---our gallery-->
    <section id="zse7">
        <div class="w">
            <hgroup class="hg">
                <span class="s12">gallery</span>
                <h1 class="zh12">our gallery</h1>
                <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorem qui, id provident voluptates laborum nobis. Aperiam quis voluptas qui.</p>
             </hgroup>
                <div class="x3d2">
                    <img src="img/6.Gallery.webp" alt="Gallery_Img" class="x3i1" id="x3i2">
                    <img src="img/5.Gallery.webp" alt="Gallery_Img" class="x3i1" id="x3i3">
                    <img src="img/4.Gallery.webp" alt="Gallery_Img" class="x3i1" id="x3i4">
                    <img src="img/3.Gallery.webp" alt="Gallery_Img" class="x3i1" id="x3i5">
                    <img src="img/2.Gallery.webp" alt="Gallery_Img" class="x3i1" id="x3i6">
                    <img src="img/1.Gallery.webp" alt="Gallery_Img" class="x3i1" id="x3i7">
                </div>
                <a href="#" class="x3a1">lean more</a>
                </div>
    </section>
    <!---iframe-->
    <section id="zse8">
        <div class="w">
            <hgroup class="hg">
                <span class="s12">intro video</span>
                <h1 class="zh12">lest check our video</h1>
                <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorem qui, id provident voluptates laborum nobis. Aperiam quis voluptas qui.</p>
             </hgroup>
                <iframe id="zif1" src="https://www.youtube.com/embed/wsfm1BrH70I" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <!--what clines are says-->
   <section id="zse10">
        <div class="x2d7">
            <div class="x2d8">
                <div class="w">
                    <hgroup class="hg">
                    <span class="x2s2">testimonials</span>
                    <h2 class="x2h22">what client say's</h2>
                        <p class="p1" id="p3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolorem qui, id provident voluptates laborum nobis. Aperiam quis voluptas qui.</p>
                     </hgroup>
                 <div id="x2d10">
                    <div class="x2d11">
                        <span class="xs7">
                            <img src="img/icon/comma.svg" alt="Comma" class="x2i10">
                        </span>
                        <div class="x2d12">
                            <img src="img/icon/star5.svg" alt="stars" class="x2i11">
                            <img src="img/icon/star5.svg" alt="stars" class="x2i11">
                            <img src="img/icon/star5.svg" alt="stars" class="x2i11">
                            <img src="img/icon/star5.svg" alt="stars" class="x2i11">
                            <img src="img/icon/star5.svg" alt="stars" class="x2i11">
                            <P class="x2P3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore officia repellat, obcaecati fugit repellendus nisi eius recusandae sed. Sapiente voluptatem dolorem reiciendis doloribus rerum ab, ratione omnis. Assumenda, deserunt dolorem.</P>
                        </div>
                        <div class="x2d13">
                            <div class="x2d14">
                                <img src="img/pic-2.webp" alt="Lady_Pic" class="x2i12">
                            </div>
                            <div class="x2d15">
                                <h2 class="x2h23">sylvia  h green </h2>
                                <p class="x2p4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="x2d11">
                        <span class="xs7">
                            <img src="img/icon/comma.svg" alt="Comma" class="x2i10">
                        </span>
                        <div class="x2d12">
                            <img src="img/icon/star5.svg" alt="Stars" class="x2i11">
                            <img src="img/icon/star5.svg" alt="Stars" class="x2i11">
                            <img src="img/icon/star5.svg" alt="Stars" class="x2i11">
                            <img src="img/icon/star5.svg" alt="Stars" class="x2i11">
                            <img src="img/icon/star5.svg" alt="Stars" class="x2i11">
                            <P class="x2P3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore officia repellat, obcaecati fugit repellendus nisi eius recusandae sed. Sapiente voluptatem dolorem reiciendis doloribus rerum ab, ratione omnis. Assumenda, deserunt dolorem.</P>
                        </div>
                        <div class="x2d13">
                            <div class="x2d14">
                                <img src="img/pic-3.webp" alt="Lady_Pic" class="x2i12">
                            </div>
                            <div class="x2d15">
                                <h2 class="x2h23">sylvia  h green </h2>
                                <p class="x2p4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="xd28">
                    <span class="xs8"></span>
                    <span class="xs8"></span>
                </div>
                </div>
            </div>
      </div>
    </section> 
     
    <!---footer-->
     <?php include 'INC_FOOT.php' ?>