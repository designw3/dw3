<?php
include_once('./_common.php');

$sub = $_GET['sub'];
$menu= $_GET['page'];

// $common_url = G5_THEME_URL."/skin/sub/common.css";
// $sub_url = G5_THEME_URL."/skin/sub/";
$sub_style_url = G5_THEME_URL."/sub/".$sub;

//sub메뉴가 존재하는지 체크
$is_dir_exist = is_dir(G5_THEME_PATH.'/sub/'.$sub);
$is_file_exist = is_file(G5_THEME_PATH.'/sub/'.$sub.'/page'.$menu.'.php');

if (!$is_dir_exist || !$is_file_exist) {
    alert("존재하지 않는 경로입니다.");
}

include_once(G5_THEME_PATH.'/head.php');
include_once(G5_THEME_PATH.'/sub/'.$sub.'/page.head.php');



// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$common_url.'?var='.G5_CSS_VER.'">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$sub_style_url.'/style.css">', 0);


include_once(G5_THEME_PATH.'/sub/'.$sub.'/page'.$menu.'.php');

include_once(G5_THEME_PATH."/tail.php");
