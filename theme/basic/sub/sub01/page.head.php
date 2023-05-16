<?php

$page= $_GET['page'];
$pgae_on= 'page';

$page_tit = '신활력플러스사업';
$page_01 = '인사말';
$page_02 = '비전';
$page_03 = '조직도';
$page_04 = '코디소개';
$page_05 = '오시는 길';


// switch($_GET['menu']){

//     default:
//         $sub_02 = '';
//         $sub_03 = '';
//         break;
// }

$k=1;
$sub_menu=array(
  array("01","/bbs/sub.php?sub=sub01&page=01", "인사말"),
  array("02","/bbs/sub.php?sub=sub01&page=02", "비전"),
  array("03","/bbs/sub.php?sub=sub01&page=03", "조직도"),
  array("04","/bbs/sub.php?sub=sub01&page=04", "코디소개"),
  array("05","/bbs/sub.php?sub=sub01&page=05", "오시는 길")
);
$menu_str="";
$page_menu_str="";
foreach($sub_menu as $row){
	 $menu_str.="<li class='menu{$row[0]} page$page'><a href='{$row[1]}'>{$row[2]}</a></li>";
	$k++;
}

?>

<div id="sub">
    <div id="contents" tabIndex="0">
        <div class="sub-tit-wr sub01">
            <div class="tit-wr">
              <span class="material-symbols-rounded">home</span>
              <h2 class="titFont"><?=$page_tit?></h2>
            </div>
        </div>
        <ul class="sub-gnb">
            <?php echo $menu_str?>
        </ul>
