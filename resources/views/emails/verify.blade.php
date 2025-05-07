@php
    $token = $data['token'];
    $user = $data['user'];
@endphp

<!DOCTYPE html>
<html>

<body>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td align="center" bgcolor="#f2f2f2" style="padding: 20px 0;">
                <table width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff"
                    style="border-collapse: collapse; box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 0px;">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/email-header.png') }}" alt=""
                                style="margin: auto; display: block;height:87px;">
                        </td>
                    </tr>
                    <!-- Header End -->

                    <!-- Content -->
                    <tr>
                        <td style="padding: 20px 60px;">
                            <div>
                                <h1
                                    style="font-size:24px; font-weight: 700; text-align: center;color:#3C3C3C;font-family:Arial;text-transform:capitalise;">
                                    Registration Confirmation</h1>
                                <p
                                    style="font-size: 16px; font-weight: 500px; color:#656565;text-align: center;line-height: 150%;font-family:Arial;">
                                   
                                    Welcome to {{ config('app.name') }}!
                                </p>
                                <table width="100%" cellspacing="0" cellpadding="10" border="0"
                                    style="border-collapse: collapse;margin-top:24px;">
                                    <td align="center">
                                        <h2>Hi {{ $user['name'] }},</h2>
                                        <p>Thanks for registering! Please verify your email address to get started.</p>
                                        
                                        <table width="100%" cellspacing="0" cellpadding="10" border="0" style="border-collapse: collapse;margin-top:24px;">
                                            <td align="center">
                                                <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ url('verify-email/' . $token) }}" style="margin-bottom:25px;margin-top:10px;height:50px; v-text-anchor:middle; width:190px;" arcsize="0%"  stroke="f" fillcolor="#D4B88E"><w:anchorlock/><center style="padding-top:20px;padding-bottom:20px;color:#000000;font-size:20px"><![endif]-->
                                                 <a href="{{ url('verify-email/' . $token) }}" style="color:#FFFFFF;background:#EE5921;padding:16px 40px;font-size: 14px;font-weight:600;text-decoration:none;font-family:Arial;line-height:22px;border-radius:2px;text-transform:capitalize;">Verify Email Address</a>
                                                 <!--[if mso]></center></v:roundrect><![endif]-->
                                            </td>   
                                        </table> 

                                        

                                        <p>If you did not create an account, no further action is required.</p>
                                    </td>
                                </table>
                            </div>

                        </td>
                    </tr>
                    <!-- Content End-->

                    <!-----------Footer----------->
                    <tr>
                        <td>
                            <!--[if mso]><style>.outlook-back {background: #1F3436 !important;height: 160px;}</style><![endif]-->
                            <table width="100%" cellspacing="0" cellpadding="" border="0px"
                                style="border-collapse: collapse;">
                                <tr
                                    style="background: url('{{ asset('frontend/BrandSparkz/assets/img/footer-bg.png') }}'); height:157px; padding:50px; background-size:cover;">
                                    <td style="text-align:center;"><img
                                            src="{{ asset('frontend/BrandSparkz/assets/img/Logo.png') }}"
                                            alt="">

                                    </td>
                                    <td style="text-align:right;">
                                        <p style="font-size: 16px; font-weight:400; color:#3C3C3C;font-style: normal;font-family:Arial;line-height:24px;padding-right:40px;">
                                        support@brandsparkz.co<br>
                                           Mindcraft Vision Media Applications development L.L.C S.O.C <br> UAE
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                            </table>
                        </td>
                    </tr>
                    <!-----------Footer End----------->
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
