
<!DOCTYPE html>
<html>

<head>
    <title>แจ้งเตือนรายการสต็อกสินค้าหมด   รหัสสินค้า &nbsp;:&nbsp; {{$product_price->product_code}}&nbsp; ชื่อสินค้า &nbsp;:&nbsp; {{$product_price->product_name}}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }
        .infoBox {
            width: 100%;
            float: left;
            border: 1px solid #d7d7d7;
            border-radius: 3px;
            padding: 20px 30px;
            margin-bottom: 30px;
        }
        .order-summaryBox {
            width: 100%;
            float: left;
            background-color: white;
            border: 1px solid #e1e1e1;
            border-radius: 3px;
            padding: 35px 25px 20px 25px;
            margin-bottom: 35px;
        }
        .order-summary-product {
            width: 100%;
            float: left;
            border-bottom: 1px solid #ebebeb;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .img-width {
            width: 100%;
            float: left;
            position: relative;
        }
        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>
</head>

<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"></div>

            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 400; line-height: 38px;">
                <tr>
                    <td bgcolor="#ffffff" align="center" valign="top">
                        <p style="font-size: 48px; font-weight: 400; margin: 2;color:#28a745;">แจ้งเตือนสินค้าหมด</p> <span style="    font-size: 16px;
                        font-weight: 500;
                        color: #0072bc!important;
                        padding-left: 5px;">bjbrothers.com</span>
                     
                        
                        <p><b>รายการสินค้า</b></p>
                        <p align="center" style="font-size: 15px;line-height: 28px;"> 
                        รหัสสินค้า &nbsp;:&nbsp; {{$product_price->product_code}}<br>
                        ชื่อสินค้า &nbsp;:&nbsp; {{$product_price->product_name}}<br>
                        จำนวนคงเหลือ &nbsp;:&nbsp;0<br>
                       
                        </p>
                    </td>
                </tr>
            </table>
</body>

</html>