<?php
$accessToken = getenv('LINE_CHANNEL_ACCESS_TOKEN');
//ユーザーからのメッセージ取得
$json_string = file_get_contents('php://input');
$jsonObj = json_decode($json_string);
$type = $jsonObj->{"events"}[0]->{"message"}->{"type"};
//メッセージ取得
$text = $jsonObj->{"events"}[0]->{"message"}->{"text"};
//ReplyToken取得
$replyToken = $jsonObj->{"events"}[0]->{"replyToken"};
//メッセージ以外のときは何も返さず終了
if($type != "text"){
	exit;
}
//レスポンスデータ作成
if ($text == '頭痛' or $text == '頭がいたい' or $text == '頭が痛い')　 {
  $response_format_text = [
    "type" => "template",
    "altText" => "頭痛",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/head.jpg",
      "title" => "頭痛",
      "text" => "どんな感じですか?",
      "actions" => [
          [
            "type" => "message",
            "label" => "突然の激しい頭痛",
            "text" => "突然の激しい頭痛"
          ],
          [
            "type" => "message",
            "label" => "発熱を伴う頭痛",
            "text" => "発熱を伴う頭痛"
          ],
          [
            "type" => "message",
            "label" => "片側性の激しい頭痛",
            "text" => "片側性の激しい頭痛"
          ],
          [
            "type" => "message",
            "label" => "側頭部の圧縮",
            "text" => "側頭部の圧縮"
          ]
      ]
    ]
  ];
} else if ($text == 'いいえ') {
  exit;
//突然の激しい頭痛
} else if ($text == '突然の激しい頭痛') {
  $response_format_text = [
    "type" => "template",
    "altText" => "突然の激しい頭痛",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/head.jpg",
      "title" => "突然の激しい頭痛",
      "text" => "患者像は?",
      "actions" => [
          [
            "type" => "message",
            "label" => "40〜60代/高血圧",
            "text" => "4060高血圧"
          ],
          [
            "type" => "message",
            "label" => "患者像無し",
            "text" => "患者像無し"
          ],
          [
            "type" => "message",
            "label" => "中年以降の女性",
            "text" => "中年以降の女性"
          ],
          [
            "type" => "message",
            "label" => "50歳以上の女性",
            "text" => "50歳以上の女性"
          ]
      ]
    ]
  ];
//突然の激しい頭痛

//発熱を伴う頭痛
} else if ($text == '発熱を伴う頭痛') {
  $response_format_text = [
    "type" => "template",
    "altText" => "発熱を伴う頭痛",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/head.jpg",
      "title" => "発熱を伴う頭痛",
      "text" => "患者像は?",
      "actions" => [
          [
            "type" => "message",
            "label" => "40〜60代/高血圧",
            "text" => "4060高血圧"
          ],
          [
            "type" => "message",
            "label" => "患者像無し",
            "text" => "患者像無し"
          ],
          [
            "type" => "message",
            "label" => "中年以降の女性",
            "text" => "中年以降の女性"
          ],
          [
            "type" => "message",
            "label" => "50歳以上の女性",
            "text" => "50歳以上の女性"
          ]
      ]
    ]
  ];
//発熱を伴う頭痛

//片側性の激しい頭痛
} else if ($text == '片側性の激しい頭痛') {
  $response_format_text = [
    "type" => "template",
    "altText" => "片側性の激しい頭痛",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/head.jpg",
      "title" => "片側性の激しい頭痛",
      "text" => "患者像は?",
      "actions" => [
          [
            "type" => "message",
            "label" => "40〜60代/高血圧",
            "text" => "4060高血圧"
          ],
          [
            "type" => "message",
            "label" => "患者像無し",
            "text" => "患者像無し"
          ],
          [
            "type" => "message",
            "label" => "中年以降の女性",
            "text" => "中年以降の女性"
          ],
          [
            "type" => "message",
            "label" => "50歳以上の女性",
            "text" => "50歳以上の女性"
          ]
      ]
    ]
  ];
//片側性の激しい頭痛

//側頭部の圧縮
} else if ($text == '側頭部の圧縮') {
  $response_format_text = [
    "type" => "template",
    "altText" => "側頭部の圧縮",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/head.jpg",
      "title" => "側頭部の圧縮",
      "text" => "患者像は?",
      "actions" => [
          [
            "type" => "message",
            "label" => "40〜60代/高血圧",
            "text" => "4060高血圧"
          ],
          [
            "type" => "message",
            "label" => "患者像無し",
            "text" => "患者像無"
          ],
          [
            "type" => "message",
            "label" => "中年以降の女性",
            "text" => "中年以降女性"
          ],
          [
            "type" => "message",
            "label" => "50歳以上の女性",
            "text" => "50歳以上女性"
          ]
      ]
    ]
  ];
//側頭部の圧縮

//4060高血圧
} else if ($text == '4060高血圧') {
  $response_format_text = [
    "type" => "template",
    "altText" => "4060高血圧",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/head.jpg",
      "title" => "4060高血圧",
      "text" => "付随する症状は?",
      "actions" => [
          [
            "type" => "message",
            "label" => "悪心・嘔吐／意識障害／巣症状(-)",
            "text" => "A1"
          ],
          [
            "type" => "message",
            "label" => "意識障害／悪心・嘔吐",
            "text" => "A2"
          ],
          [
            "type" => "message",
            "label" => "視野・視力障害／毛様充血／対光反射消失",
            "text" => "A3"
          ],
          [
            "type" => "message",
            "label" => "側頭部の怒張／体幹筋肉痛／体重減少",
            "text" => "A4"
          ]
      ]
    ]
  ];
//4060高血圧

//患者像無
} else if ($text == '患者像無') {
  $response_format_text = [
    "type" => "template",
    "altText" => "患者像無",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/head.jpg",
      "title" => "患者像無",
      "text" => "付随する症状は?",
      "actions" => [
          [
            "type" => "message",
            "label" => "悪心・嘔吐／意識障害／巣症状(-)",
            "text" => "A1"
          ],
          [
            "type" => "message",
            "label" => "意識障害／悪心・嘔吐",
            "text" => "A2"
          ],
          [
            "type" => "message",
            "label" => "視野・視力障害／毛様充血／対光反射消失",
            "text" => "A3"
          ],
          [
            "type" => "message",
            "label" => "側頭部の怒張／体幹筋肉痛／体重減少",
            "text" => "A4"
          ]
      ]
    ]
  ];
//患者像無

//中年以降女性
} else if ($text == '中年以降女性') {
  $response_format_text = [
    "type" => "template",
    "altText" => "中年以降女性",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/head.jpg",
      "title" => "中年以降女性",
      "text" => "付随する症状は?",
      "actions" => [
          [
            "type" => "message",
            "label" => "悪心・嘔吐／意識障害／巣症状(-)",
            "text" => "A1"
          ],
          [
            "type" => "message",
            "label" => "意識障害／悪心・嘔吐",
            "text" => "A2"
          ],
          [
            "type" => "message",
            "label" => "視野・視力障害／毛様充血／対光反射消失",
            "text" => "A3"
          ],
          [
            "type" => "message",
            "label" => "側頭部の怒張／体幹筋肉痛／体重減少",
            "text" => "A4"
          ]
      ]
    ]
  ];
//中年以降女性

//50歳以上女性
} else if ($text == '50歳以上女性') {
  $response_format_text = [
    "type" => "template",
    "altText" => "50歳以上女性",
    "template" => [
      "type" => "buttons",
      "thumbnailImageUrl" => "https://" . $_SERVER['SERVER_NAME'] . "/head.jpg",
      "title" => "50歳以上女性",
      "text" => "付随する症状は?",
      "actions" => [
          [
            "type" => "message",
            "label" => "悪心・嘔吐／意識障害／巣症状(-)",
            "text" => "A1"
          ],
          [
            "type" => "message",
            "label" => "意識障害／悪心・嘔吐",
            "text" => "A2"
          ],
          [
            "type" => "message",
            "label" => "視野・視力障害／毛様充血／対光反射消失",
            "text" => "A3"
          ],
          [
            "type" => "message",
            "label" => "側頭部の怒張／体幹筋肉痛／体重減少",
            "text" => "A4"
          ]
      ]
    ]
  ];
//50歳以上女性

//インプレッション
} else if ($text == 'A1') {
	  $response_format_text = [
		    	"type" => "text",
			"text" => "1st Impressionは【くも膜下出血】です。詳細は「レビューブック内科・外科2016-2017」のJ-15を参照ください。
https://www.medilink-study.com/products/detail.php?product_id=12"
			];
} else if ($text == 'A2') {
	  $response_format_text = [
		    	"type" => "text",
			"text" => "1st Impressionは【脳炎】です。詳細は「レビューブック内科・外科2016-2017」のJ-35を参照ください。
https://www.medilink-study.com/products/detail.php?product_id=12"
			];
} else if ($text == 'A3') {
	  $response_format_text = [
		    	"type" => "text",
			"text" => "1st Impressionは【急性緑内障発作】です。詳細は「レビューブック内科・外科2016-2017」を参照ください。
https://www.medilink-study.com/products/detail.php?product_id=12"
			];
} else if ($text == 'A4') {
	  $response_format_text = [
		    	"type" => "text",
			"text" => "1st Impressionは【側頭動脈炎】です。詳細は「レビューブック内科・外科2016-2017」のJ-32を参照ください。
https://www.medilink-study.com/products/detail.php?product_id=12"
			];
}  else if ($text == '質問' or $text == 'インプレッション' or $text == 'インプレッションが知りたい') {
  $response_format_text = [
    "type" => "template",
    "altText" => "インプレッションが知りたい？（はい／いいえ）",
    "template" => [
        "type" => "confirm",
        "text" => "インプレッションが知りたい？",
        "actions" => [
            [
              "type" => "message",
              "label" => "はい",
              "text" => "はい"
            ],
            [
              "type" => "message",
              "label" => "いいえ",
              "text" => "いいえ"
            ]
        ]
    ]
  ];
}
$post_data = [
	"replyToken" => $replyToken,
	"messages" => [$response_format_text]
	];
$ch = curl_init("https://api.line.me/v2/bot/message/reply");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json; charser=UTF-8',
    'Authorization: Bearer ' . $accessToken
    ));
$result = curl_exec($ch);
curl_close($ch);