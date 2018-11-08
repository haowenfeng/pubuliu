<?php 

$str = '{
     "result":{
        "article":[
          {
             "id":1,
             "title":"寻找民间工艺",
             "articlePic":"images/works1.jpg",
             "name":"莫听",
             "commentCount":1300.00,
             "browseCount":20,
             "praiseCount":30
          },
          {
             "id":2,
             "title":"寻找墨花工艺",
             "articlePic":"images/works2.jpg",
             "name":"梨花淡白",
             "commentCount":133.00,
             "browseCount":8,
             "praiseCount":9
          },
          {
             "id":3,
             "title":"林下漏月光",
             "articlePic":"images/works4.jpg",
             "name":"也无晴。",
             "commentCount":"非卖品",
             "browseCount":20,
             "praiseCount":30
          },
          {
             "id":4,
             "title":"绿叶在风中飞舞",
             "articlePic":"images/works2.jpg",
             "name":"花满城",
             "commentCount":133.00,
             "browseCount":8,
             "praiseCount":9
          },
          {
             "id":5,
             "title":"我们在大草原的湖边",
             "articlePic":"images/works5.jpg",
             "name":"樱花草",
             "commentCount":13.00,
             "browseCount":20,
             "praiseCount":30
          },
          {
             "id":6,
             "title":"看候鸟飞来",
             "articlePic":"images/works4.jpg",
             "name":"花满城",
             "commentCount":1335.00,
             "browseCount":8,
             "praiseCount":9
          },
          {
             "id":7,
             "title":"我们都长大啦",
             "articlePic":"images/works2.jpg",
             "name":"杨花",
             "commentCount":103.00,
             "browseCount":20,
             "praiseCount":30
          },
          {
             "id":8,
             "title":"就像一个娃娃",
             "articlePic":"images/works5.jpg",
             "name":"美丽",
             "commentCount":133.00,
             "browseCount":8,
             "praiseCount":9
          },
          {
             "id":9,
             "title":"如果有来生",
             "articlePic":"images/works3.jpg",
             "name":"料峭春风",
             "commentCount":133.00,
             "browseCount":8,
             "praiseCount":9
          }
        
        
        ]
       
     }
  }';

echo json_encode(json_decode($str,true));


// [
//  {"img_url":"","title":"","is_collect":"","collectCount":300,"commentCount":550,"jump_url":""},
//  {"img_url":"","title":"","is_collect":"","collectCount":300,"commentCount":550,"jump_url":""},
//  {"img_url":"","title":"","is_collect":"","collectCount":300,"commentCount":550,"jump_url":""}
//  ]