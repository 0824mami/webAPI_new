# ①課題名
郵便番号検索プログラム_zipCodeSearch

## ②課題内容（どんな作品か）
郵便番号検索APIを使用したアプリ
（他サービスでAPI連携に苦戦したため、こちらではAPIキーではなくsearchURLを活用）

## ③アプリのデプロイURL
さくらデプロイ：
　https://okachimenko.sakura.ne.jp/src/api4.html

GitHub :
https://github.com/0824mami/webAPI_new


## ④アプリのログイン用IDまたはPassword（ある場合）
なし

## ⑤工夫した点・こだわった点
-PHPとデータベースの予習を兼ねた- 

うまく表示されなかったため、エラーの場合のデフォルト値としてZipCode（GGA開催地）を設定しました。
Warningが表示されないように対処する、Webアプリケーションでよく使われる処理というものを知りました。
都度調べつつコードを書いていこうと思いました。

MAMPやXAMPPでもPHPの実行環境を準備できたが、今回は予習も含め調べながらDockerで環境構築した


## ⑥難しかった点・次回トライしたいこと（又は機能）
    mySQLを使用可能な状態にできたが連携まで手が届かなかった



## ⑦フリー項目（感想、シェアしたいこと等なんでも）
- [感想]
GoogleMapAPIを使用したかったですがクレジット登録関係で断念し、YahooジオコーダAPIを取得するもうまく連携の実装ができずでした。
時間切れで単純な郵便番号検索APIの実装となりましたが、サーバー上で動くPHPの予習を少しだけできたことは良かったです。
- [参考記事]
  - 1. [https://qiita.com/yamamoto_hiroya/items/6ad6d448afcff1cf3791]
  Php出力結果がなぜか横並びになったため、ググって解決しました。他にも方法はあるかと思いますが勉強になりました。
