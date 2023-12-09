@extends('emails.temail')
@section('auth_nama_peru') {{ Auth::user()->nama_lengkap }}@endsection
@section('auth_email'){{ Auth::user()->email }}@endsection
@section('content')
<p>
	Silahkan klik tombol di bawah untuk melakukan perubahan email.
</p>
<div style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#3AAEE0;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;width:auto; width:auto;;border-top:1px solid #3AAEE0;border-right:1px solid #3AAEE0;border-bottom:1px solid #3AAEE0;border-left:1px solid #3AAEE0;padding-top:10px;padding-bottom:10px;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:20px;padding-right:20px;font-size:16px;display:inline-block;"><a href="{{ url($data['url_process']) }}" style="color:white;font-size: 16px; line-height: 2; word-break: break-word; font-family: lucida sans unicode, lucida grande, sans-serif; mso-line-height-alt: 32px;">Verifikasi Penggantian E-Mail</a></span></div>
@endsection