<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beverage;
use App\Feature;

class BeverageController extends Controller
{
    public function index(Beverage $beverages)
    {
        $beverages =  $beverages->getPaginateByLimit(5);
        foreach ($beverages as $beverage) {
            $feature = $beverage -> feature;
            $new_feature = $this::featureOriganize($feature);
            $beverage -> feature = $new_feature;
        }
        return view('beverages/index')->with(['beverages' => $beverages]);
    }
    
    public function show(Beverage $beverage)
    {
        $feature = $beverage -> feature;
        $new_feature = $this::featureOriganize($feature);
        $beverage -> feature = $new_feature;
        return view('beverages/show')->with(['beverage' => $beverage]);
    }
    
    public function featureOriganize(Feature $feature)
    {
        $new_feature = array();
        $new_feature[] = $feature -> region;
        
        if ($feature -> apple > 0) {
            $new_feature[] = 'リンゴ';
        }
        if ($feature -> banana > 0) {
            $new_feature[] = 'バナナ';
        }
        if ($feature -> cherry > 0) {
            $new_feature[] = 'チェリー';
        }
        if ($feature -> citrus > 0) {
            $new_feature[] = 'シトラス';
        }
        if ($feature -> fruity > 0) {
            $new_feature[] = 'フルーティ';
        }
        if ($feature -> lemon > 0) {
            $new_feature[] = 'レモン';
        }
        if ($feature -> orange > 0) {
            $new_feature[] = 'オレンジ';
        }
        if ($feature -> pear > 0) {
            $new_feature[] = '梨';
        }
        if ($feature -> raisins > 0) {
            $new_feature[] = 'レーズン';
        }
        if ($feature -> zest > 0) {
            $new_feature[] = 'ゼスト';
        }
        if ($feature -> balanced > 0) {
            $new_feature[] = '調和';
        }
        if ($feature -> complex > 0) {
            $new_feature[] = '深み';
        }
        if ($feature -> dry > 0) {
            $new_feature[] = 'ドライ';
        }
        if ($feature -> earthy > 0) {
            $new_feature[] = '地球';
        }
        if ($feature -> heavy > 0) {
            $new_feature[] = '重い';
        }
        if ($feature -> light > 0) {
            $new_feature[] = '軽い';
        }
        if ($feature -> lingering > 0) {
            $new_feature[] = '長引く';
        }
        if ($feature -> mellow > 0) {
            $new_feature[] = 'まろやか';
        }
        if ($feature -> mild > 0) {
            $new_feature[] = 'マイルド';
        }
        if ($feature -> old > 0) {
            $new_feature[] = 'オールド';
        }
        if ($feature -> smooth > 0) {
            $new_feature[] = 'なめらか';
        }
        if ($feature -> barley > 0) {
            $new_feature[] = '大麦';
        }
        if ($feature -> buttery > 0) {
            $new_feature[] = 'バター';
        }
        if ($feature -> butterscotch > 0) {
            $new_feature[] = 'バタースコッチ';
        }
        if ($feature -> candy > 0) {
            $new_feature[] = 'キャンディー';
        }
        if ($feature -> chocolate > 0) {
            $new_feature[] = 'チョコレート';
        }
        if ($feature -> cinnamon > 0) {
            $new_feature[] = 'シナモン';
        }
        if ($feature -> cocoa > 0) {
            $new_feature[] = 'ココア';
        }
        if ($feature -> corn > 0) {
            $new_feature[] = 'コーン';
        }
        if ($feature -> honey > 0) {
            $new_feature[] = 'はちみつ';
        }
        if ($feature -> tea > 0) {
            $new_feature[] = '茶';
        }
        if ($feature -> toffee > 0) {
            $new_feature[] = 'トフィー';
        }
        if ($feature -> clove > 0) {
            $new_feature[] = 'クローブ';
        }
        if ($feature -> coffee > 0) {
            $new_feature[] = 'コーヒー';
        }
        if ($feature -> floral > 0) {
            $new_feature[] = 'フローラル';
        }
        if ($feature -> licorice > 0) {
            $new_feature[] = 'リコリス';
        }
        if ($feature -> malty > 0) {
            $new_feature[] = 'モルト';
        }
        if ($feature -> mint > 0) {
            $new_feature[] = 'ミント';
        }
        if ($feature -> nutmeg > 0) {
            $new_feature[] = 'ナツメグ';
        }
        if ($feature -> peaty > 0) {
            $new_feature[] = '泥炭';
        }
        if ($feature -> peppery > 0) {
            $new_feature[] = 'ペッパー';
        }
        if ($feature -> roses > 0) {
            $new_feature[] = 'バラ';
        }
        if ($feature -> spices > 0) {
            $new_feature[] = 'スパイス';
        }
        if ($feature -> sugar > 0) {
            $new_feature[] = '砂糖';
        }
        if ($feature -> tobacco > 0) {
            $new_feature[] = 'タバコ';
        }
        if ($feature -> vanilla > 0) {
            $new_feature[] = 'バニラ';
        }
        if ($feature -> wood > 0) {
            $new_feature[] = '木';
        }
        if ($feature -> sherry > 0) {
            $new_feature[] = 'シェリー';
        }
        if ($feature -> bitter > 0) {
            $new_feature[] = 'ビター';
        }
        if ($feature -> brine > 0) {
            $new_feature[] = '塩水';
        }
        if ($feature -> creamy > 0) {
            $new_feature[] = 'クリーミー';
        }
        if ($feature -> ginger > 0) {
            $new_feature[] = '生姜';
        }
        if ($feature -> herbal > 0) {
            $new_feature[] = 'ハーブ';
        }
        if ($feature -> maple > 0) {
            $new_feature[] = 'メープル';
        }
        if ($feature -> nutty > 0) {
            $new_feature[] = 'ナッツ';
        }
        if ($feature -> oak > 0) {
            $new_feature[] = 'オーク';
        }
        if ($feature -> rich > 0) {
            $new_feature[] = '豊か';
        }
        if ($feature -> salty > 0) {
            $new_feature[] = '塩味';
        }
        if ($feature -> smokey > 0) {
            $new_feature[] = 'スモーキー';
        }
        if ($feature -> sour > 0) {
            $new_feature[] = '酸味';
        }
        if ($feature -> spicy > 0) {
            $new_feature[] = 'スパイシー';
        }
        if ($feature -> sweet > 0) {
            $new_feature[] = '甘い';
        }
        if ($feature -> amber > 0) {
            $new_feature[] = '琥珀色';
        }
        if ($feature -> brown > 0) {
            $new_feature[] = '茶色';
        }
        if ($feature -> green > 0) {
            $new_feature[] = '緑色';
        }
        if ($feature -> caramel > 0) {
            $new_feature[] = 'カラメル';
        }
        return $new_feature;
    }
}
