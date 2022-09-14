@extends('layouts.app')

@section('content')
<body>
    <div class='center-block'>
        <div class='container'>
            <div class='text-center'>
                <div class='beverages'>
                    @foreach ($beverages as $beverage)
                        <div class='beverage'>
                            <h2>
                                <a href="/beverages/{{ $beverage->id }}" class='whiskey_name'>{{ $beverage->name }}</a>
                            </h2>
                            <div class="d-flex justify-content-center">
                                <div class='image_and_about'>
                                    <img class='bottle_img' src="{{ asset("https://s3-ap-northeast-1.amazonaws.com/beverave-app/whiskey-img/".$beverage->image_path) }}" alt="">
                                    <div class='about'>
                                        <h4 class='cost'>参考価格：${{ $beverage->cost }}</h4>
                                        @foreach ($beverage->feature as $feature)
                                            @if ($loop->first)
                                                <h4 class='region'>生産地：{{$feature}}</h4>
                                                @break
                                            @endif
                                        @endforeach
                                        <div class='search_image'>
                                            <a href="https://www.amazon.co.jp/s?k={{ $beverage->name }}&i=food-beverage" target="_blank" rel="noopener noreferrer">
                                                <img src="https://s3-ap-northeast-1.amazonaws.com/beverave-app/icon_img/amazon_icon.png" class='search_image'>
                                                Amazonで探す
                                            </a>
                                            <a href="https://search.rakuten.co.jp/search/mall/{{ $beverage->name }}/" target="_blank" rel="noopener noreferrer">
                                                <img src="https://s3-ap-northeast-1.amazonaws.com/beverave-app/icon_img/rakuten_icon.png" class='search_image'>
                                                楽天市場で探す
                                            </a>
                                            <a href="https://www.google.com/search?q={{ $beverage->name }}&source=lmns&bih=1303&biw=1286&hl=ja&sa=X&ved=2ahUKEwiC5oW_1_bxAhXLC94KHfsICEQQ_AUoAHoECAEQAA" target="_blank" rel="noopener noreferrer">
                                                <img src="https://s3-ap-northeast-1.amazonaws.com/beverave-app/icon_img/google_icon.jpg" class='search_image'>
                                                Googleで探す
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class='features'>
                                    @foreach ($beverage->feature as $feature)
                                        @if ($loop->first)
                                            @continue
                                        @endif
                                        <a href="" class='feature'>{{$feature}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class='pagenate'>
                {{ $beverages->links() }}
            </div>
        </div>
</body>
@endsection