<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php

$k=1;
$sub_menu=array(
	array("/bbs/sub.php?sub=sub01&page=01", ""),
  array("/bbs/sub.php?sub=sub01&page=02", ""),
  array("/bbs/sub.php?sub=sub01&page=03", ""),
  array("/bbs/sub.php?sub=sub01&page=04", ""),
  array("/bbs/sub.php?sub=sub01&page=05", "")
);
$menu_str="";
foreach($sub_menu as $row){
	 $menu_str.="<li><a href='{$row[0]}'>{$row[1]}</a></li>";
	$k++;
}



?>
<!-- 상단 시작 { -->


    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

    <div class="header">
        <a href="/" class="logo"></a>
          <ul class="gnb" class="titFont">
            <li><a href="" class="titFont">신활력플러스사업</a>
              <ul class="depth-wr">
                    <?php echo $menu_str;?>
              </ul>
            </li>
            <li><a href="" class="titFont">신활력플러스사업</a>
              <ul class="depth-wr">
                  <li><a href=""></a></li>
                  <li><a href=""></a></li>
                  <li><a href=""></a></li>
              </ul>
            </li>
          </ul>
      </div>


<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->
