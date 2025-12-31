@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>ここが本文のページです。</p>
<p>必要なだけ記述できます。</p>
@include('layouts.message', ['msg_title' => 'Message', 'msg_content' => 'これはサブビューです。'])

@each('layouts.item', $data, 'item')

@endsection

@section('footer')
<div class="footer">
<p>Copyright &copy; 2025 by Taro Yamada.</p>
</div>
@endsection