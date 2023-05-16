<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>

<!-- 하단 시작 { -->
<div class="footer">
    <div class="ft-info-wr">
        <img src="<?php echo G5_THEME_IMG_URL?>/logo.svg" alt="로고" class="ft-logo">
        <ul class="ft-info">
            <li>상호명 : 거창군 농촌신활력플러스사업</li>
            <li>주소 : 경남 거창군 거창읍 거열로 4길 92</li>
            <li>전화 : <span>055-941-1239</span></li>
            <li>이메일 : gcnet21@naver.com</li>
        </ul>
        <p>COPYRIGHT ⓒ 거창군 농촌신활력플러스사업. ALL RIGHTS RESERVED.</p>
    </div>
    <div class="ft-right-wr">
        <a href="" class="in-icon" target="_blank" alt="인스타그램"><img src="<?php echo G5_THEME_IMG_URL?>/insta_icon.png" alt="인스타그램 이미지" class="icon"></a>
        <a href="" class="bl-icon" target="_blank" alt="블로그"><img src="<?php echo G5_THEME_IMG_URL?>/blog_banner.png" alt="블로그 배너 이미지"></a>
    </div>    
</div>
<!-- } 하단 끝 -->

</div><!--main, sub 끝-->



<button type="button" id="top_btn">
<span class="material-symbols-rounded">expand_less</span><span class="sound_only">상단으로</span>
</button>
<script>
$(function() {
  $(window).scroll(function(){

    var scrollTop = Math.ceil($(window).scrollTop());
    var innerHeight = $(window).height();
    var scrollHeight = $(document).height();
    console.log(scrollTop,innerHeight,scrollHeight )

    if($(this).scrollTop() > 100 ) {
      $('#top_btn').addClass('on');
    } else {
      $('#top_btn').removeClass('on');
    }

    if (scrollTop + innerHeight >= scrollHeight) {
        $("#top_btn").addClass("nofixed");
     }else{
      $("#top_btn").removeClass("nofixed");
     }

  });
    $("#top_btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '500');
        return false;
    });
});
</script>

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");