<html>
<head>
    <style>
        div{

        }
        footer{
            padding-top: 0;
            height: 7%;
            background-color: #ffffff;
        }.firma-card{
             background: #fff;
             border: 1px solid;
             border-color: rgba(128, 128, 128, 1);
             margin: 2rem ;
             paddin: 2rem;
             border-radius: 5px;
             box-shadow: 0 4px 6px -1px rgb(0, 0, 0);
             margin-bottom: 1.6%;
             overflow: hidden;
         }
        .firma-resim{
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-size: cover;
            background-position: center;
            transition: -webkit-transform .2s;
            transition: transform .2s;
            background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg);
        }
        .firmalar{
            background: rgba(75, 75, 75, 0.78);
            border-radius: 50px;
            margin: 30px;
        }

        @media (max-width: 768px) {

            .firma-logo{
                width: calc(33.66667% - .75rem);
                height: 6.5rem;
                margin: 5px .375rem;
            }
            .firma-resim {
                position: relative;
                z-index: 0;
                height: 200px;
            }
            .img-padding-no{
                padding-right: 0px;
                padding-left: 0px;
            }
            .sidebar{

            }
        }
    </style>
</head>
<h1>
    WELCOME TO {{$pagename}} PAGE
</h1>
</html>
