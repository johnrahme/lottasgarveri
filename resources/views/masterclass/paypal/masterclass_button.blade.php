
{{-- <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="KFH59CTXMA53C">
<input type="hidden" name="return" value={{route('masterclass.payment_success', ['lang' => 'se'])}}>
<table>
<tr><td><input type="hidden" name="on0" value="Google email adress">Google email</td></tr><tr><td><input type="email" required name="os0" maxlength="200"></td></tr>
</table>
<input type="image" src="https://www.sandbox.paypal.com/sv_SE/SE/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - Det tryggare, enklare sättet att betala online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/sv_SE/i/scr/pixel.gif" width="1" height="1">
</form> --}}

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="A6P5EYD8URGR2">
<table>
<tr><td><input type="hidden" name="on0" value="Google email">Google email</td></tr><tr><td><input type="email" required name="os0" maxlength="200"></td></tr>
</table>
<br>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/sv_SE/i/scr/pixel.gif" width="1" height="1">
</form>
    