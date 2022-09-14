@extends('layouts.app')

@section('content')
    <form action="/preference/store" method="POST">
        @csrf
        <div>
            <input type="checkbox" name="features[apple]" value="apple">リンゴ<br>
            <input type="checkbox" name="features[banana]" value="banana">バナナ<br>
            <input type="checkbox" name="features[cherry]" value="cherry">チェリー<br>
            <input type="checkbox" name="features[citrus]" value="citrus">シトラス<br>
            <input type="checkbox" name="features[fruity]" value="fruity">フルーティ<br>
            <input type="checkbox" name="features[lemon]" value="lemon">レモン<br>
            <input type="checkbox" name="features[orange]" value="orange">オレンジ<br>
            <input type="checkbox" name="features[pear]" value="pear">梨<br>
            <input type="checkbox" name="features[raisins]" value="raisins">レーズン<br>
            <input type="checkbox" name="features[zest]" value="zest">ゼスト<br>
            <input type="checkbox" name="features[balanced]" value="balanced">調和<br>
            <input type="checkbox" name="features[complex]" value="complex">深み<br>
            <input type="checkbox" name="features[dry]" value="dry">ドライ<br>
            <input type="checkbox" name="features[earthy]" value="earthy">地球<br>
            <input type="checkbox" name="features[heavy]" value="heavy">重い<br>
            <input type="checkbox" name="features[light]" value="light">軽い<br>
            <input type="checkbox" name="features[lingering]" value="lingering">長引く<br>
            <input type="checkbox" name="features[mellow]" value="mellow">マイルド<br>
            <input type="checkbox" name="features[old]" value="old">オールド<br>
            <input type="checkbox" name="features[smooth]" value="smooth">なめらか<br>
            <input type="checkbox" name="features[barley]" value="barley">大麦<br>
            <input type="checkbox" name="features[buttery]" value="buttery">バター<br>
            <input type="checkbox" name="features[butterscotch]" value="butterscotch">バタースコッチ<br>
            <input type="checkbox" name="features[candy]" value="candy">キャンディー<br>
            <input type="checkbox" name="features[chocolate]" value="chocolate">チョコレート<br>
            <input type="checkbox" name="features[cinnamon]" value="cinnamon">シナモン<br>
            <input type="checkbox" name="features[cocoa]" value="cocoa">ココア<br>
            <input type="checkbox" name="features[corn]" value="corn">コーン<br>
            <input type="checkbox" name="features[honey]" value="honey">はちみつ<br>
            <input type="checkbox" name="features[tea]" value="tea">茶<br>
            <input type="checkbox" name="features[toffee]" value="toffee">トフィー<br>
            <input type="checkbox" name="features[clove]" value="clove">クローブ<br>
            <input type="checkbox" name="features[coffee]" value="coffee">コーヒー<br>
            <input type="checkbox" name="features[floral]" value="floral">フローラル<br>
            <input type="checkbox" name="features[licorice]" value="licorice">リコリス<br>
            <input type="checkbox" name="features[malty]" value="malty">モルト<br>
            <input type="checkbox" name="features[mint]" value="mint">ミント<br>
            <input type="checkbox" name="features[nutmeg]" value="nutmeg">ナツメグ<br>
            <input type="checkbox" name="features[peaty]" value="peaty">泥炭<br>
            <input type="checkbox" name="features[peppery]" value="peppery">ペッパー<br>
            <input type="checkbox" name="features[roses]" value="roses">バラ<br>
            <input type="checkbox" name="features[spices]" value="spices">スパイス<br>
            <input type="checkbox" name="features[sugar]" value="sugar">砂糖<br>
            <input type="checkbox" name="features[tobacco]" value="tobacco">タバコ<br>
            <input type="checkbox" name="features[vanilla]" value="vanilla">バニラ<br>
            <input type="checkbox" name="features[wood]" value="wood">木<br>
            <input type="checkbox" name="features[sherry]" value="sherry">シェリー<br>
            <input type="checkbox" name="features[bitter]" value="bitter">ビター<br>
            <input type="checkbox" name="features[brine]" value="brine">塩水<br>
            <input type="checkbox" name="features[creamy]" value="creamy">クリーミー<br>
            <input type="checkbox" name="features[ginger]" value="ginger">生姜<br>
            <input type="checkbox" name="features[herbal]" value="herbal">ハーブ<br>
            <input type="checkbox" name="features[maple]" value="maple">メープル<br>
            <input type="checkbox" name="features[nutty]" value="nutty">ナッツ<br>
            <input type="checkbox" name="features[oak]" value="oak">オーク<br>
            <input type="checkbox" name="features[rich]" value="rich">豊か<br>
            <input type="checkbox" name="features[salty]" value="salty">塩味<br>
            <input type="checkbox" name="features[smokey]" value="smokey">スモーキー<br>
            <input type="checkbox" name="features[sour]" value="sour">酸味<br>
            <input type="checkbox" name="features[spicy]" value="spicy">スパイシー<br>
            <input type="checkbox" name="features[sweet]" value="sweet">甘い<br>
            <input type="checkbox" name="features[amber]" value="amber">琥珀色<br>
            <input type="checkbox" name="features[brown]" value="brown">茶色<br>
            <input type="checkbox" name="features[green]" value="green">緑色<br>
            <input type="checkbox" name="features[caramel]" value="caramel">カラメル<br>
        </div>
        <input type="submit" value="ウィスキーを見つける"/>
    </form>
@endsection