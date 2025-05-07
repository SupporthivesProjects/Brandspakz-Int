@php
    $order = $emailData['data']['order'];
    $shipping_address = $order->shipping_address;
@endphp

<!DOCTYPE html>
<html>
<head>
    <title>Your Email Title</title>
</head>
<body>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td align="center" bgcolor="#f2f2f2" style="padding: 20px 0;">
                <table width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" style="border-collapse: collapse; box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 0px;">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/email-header.png') }}" alt="" style="margin: auto; display: block;height:87px;">
                        </td>
                    </tr>
                    <!-- Header End -->

                    <!-- Content -->
                    <tr>
                        <td style="padding: 20px 60px;">
                            <div>
                            <h1 style="font-size:24px; font-weight: 700; text-align: center;color:#3C3C3C;font-family:Arial;text-transform:capitalise;">Transaction Confirmation</h1>
                            <p style="font-size: 16px; font-weight: 500px; color:#656565;text-align: center;line-height: 150%;font-family:Arial;">Dear {{ $shipping_address->name }},<br><br>
                                We appreciate your order. <br>
                                Here's a summary of your recent purchase.
                               </p>
                               <table width="100%" cellspacing="0" cellpadding="10" border="0" style="border-collapse: collapse;margin-top:24px;">
                                <td align="center">
                                     <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="margin-bottom:25px;margin-top:10px;height:50px; v-text-anchor:middle; width:190px;" arcsize="0%"  stroke="f" fillcolor="#D4B88E"><w:anchorlock/><center style="padding-top:20px;padding-bottom:20px;color:#000000;font-size:20px"><![endif]-->
                                     <a href="#" style="color:#FFFFFF;background:#EE5921;padding:16px 40px;font-size: 14px;font-weight:600;text-decoration:none;font-family:Arial;line-height:22px;border-radius:2px;text-transform:capitalize;">Browse services</a>
                                      <!--[if mso]></center></v:roundrect><![endif]-->
                                </td>   
                               </table>
                             </div>

                        </td>
                    </tr>
                    <!-- Order Summary Section -->
                    <tr>
                        <td style="padding: 10px 40px;padding-bottom:40px;">
                            <p style="font-size: 16px; font-weight:700;text-transform:capitalize;font-family:Arial;color:#0E0E0E;text-align:center;">Billing Details:</p>
                            <table>
                                <tr style="font-size: 16px; font-weight: 400; color:#656565;  padding: 5px;line-height:26px;">
                                    <td style="width:242px;text-align:center;">{{ $shipping_address->name }}</td>
                                    <td style="width:242px;text-align:center;">{{ $shipping_address->email }}</td>
                                </tr>
                                <tr style="font-size: 16px; font-weight: 400; color:#656565;  padding: 5px;line-height:26px;">
                                    <td style="width:242px;text-align:center;">{{ $shipping_address->address }}</td>
                                    <td style="width:242px;text-align:center;">{{ $shipping_address->phone }}</td>
                                </tr>
                            </table>
                    
                            <table style="margin-top:40px;padding:24px;" width="100%" cellspacing="0" cellpadding="10" border="0">
                                <tr style="background-color:#f2f2f2;font-weight:bold;text-align:center;">
                                    <td>Product</td>
                                    <td>Subscription</td>
                                    <td>Quantity</td>
                                    <td>Price</td>
                                </tr>
                                @php $total = 0; @endphp
                                @foreach ($order->orderDetails as $orderDetail)
                                    @if($orderDetail->product != null)
                                        @php
                                            $product = \App\Models\Product::find($orderDetail->product->id);
                                            $total += round(convert_price($orderDetail->price), 2);
                                        @endphp
                                        <tr>
                                            <td style="text-align:center;">{{ $product->name }}</td>
                                            <td style="text-align:center;">{{ $product->subscription }}</td>
                                            <td style="text-align:center;">{{ $orderDetail->quantity }}</td>
                                            <td style="text-align:center;">{{ single_price($orderDetail->price) }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                                <tr>
                                    <td colspan="4"><hr style="border: 1px solid #f3f3f1;"></td>
                                </tr>
                                <tr>
                                    <td colspan="3" style="text-align:right;font-weight:bold;">Total</td>
                                    <td style="text-align:center;color:#EE5921;font-weight:bold;">{{ currency_symbol() }}{{ $total }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
    
                   <!-----------Footer----------->
                   <tr>
                    <td>
                         <!--[if mso]><style>.outlook-back {background: #1F3436 !important;height: 160px;}</style><![endif]-->  
                        <table width="100%" cellspacing="0" cellpadding="" border="0px" style="border-collapse: collapse;"> 
                            <tr style="background: url('{{ asset('frontend/BrandSparkz/assets/img/footer-bg.png') }}'); height:157px; padding:50px; background-size:cover;">
                                <td style="text-align:center;"><img src="{{ asset('frontend/BrandSparkz/assets/img/Logo.png') }}" alt="">
                               
                                </td> 
                                <td style="text-align:right;">
                                    <p style="font-size: 16px; font-weight:400; color:#3C3C3C;font-style: normal;font-family:Arial;line-height:24px;padding-right:40px;">
                                     support@brandsparkz.co<br>
                                           TBC<br>
                                           TBC
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

