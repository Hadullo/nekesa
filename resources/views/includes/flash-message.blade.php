@if (session('status'))
<p style="color: #fff; width:100%;font-size:18px;font-weight:500;text-align:center;background:#86DA3A;padding:10px 0;margin-bottom:6px;">
    {{ session('status') }}</p>
@endif