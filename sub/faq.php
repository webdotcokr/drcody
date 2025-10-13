<?php
include_once('../common.php');  // 공통 설정 불러오기
$g5['title'] = "서브페이지 제목";  // 페이지 제목 설정
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
include_once(G5_PATH.'/head.php');  // 헤더 포함
?>
<!-- 페이지 컨텐츠 영역 HTML 작성 -->
<main>
    <section class="pt-[160px] pb-[60px] bg-[url(<?php echo G5_THEME_URL?>/img/noticeToparea.webp)] bg-cover">
        <div class="container">
        breadcrumbs
            <h1 class="PageTitleText">FAQ</h1>
            <p class="mt-2 PageSubTitleText font-medium">디알코디 이용 중 궁금한 점이나 불편한 점이 있으신가요? <br/>언제든 문의해주시면 친절하게 도움을 드리겠습니다.</p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href=""><button class="H6 btn md ">공지사항</button></a>
                <a href=""><button class="H6 btn md active">FAQ</button></a>
                <a href=""><button class="H6 btn md">A/S 신청</button></a>
                <a href=""><button class="H6 btn md">1:1 상담 신청</button></a>
            </div>
        </div>    
    </section>
    <section class="py-6 bg-[var(--main-brown01)] text-white">
        <div class="container flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="<?php echo G5_THEME_URL?>/img/headphone.svg">
                <div>
                    <p class="H3 font-bold">도움이 필요하신가요?</p>
                    <p class="H6">월~토 09:00~18:00</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex items-center gap-4 rounded-full py-3 px-8 bg-[var(--main-brown02)]">
                    <img src="<?php echo G5_THEME_URL?>/img/noticeCall.svg" alt="">
                    <div>
                        <p class="H6 font-semibold">전화상담</p>
                        <p class="H4 font-semibold">1644-0424</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 rounded-full py-3 px-8 bg-[var(--main-brown02)]">
                    <img src="<?php echo G5_THEME_URL?>/img/noticeTalk.svg" alt="">
                    <div>
                        <p class="H6 font-semibold">카카오톡 상담</p>
                        <p class="H4 font-semibold">@drcody</p>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <section class="py-16 container">
        <p class="SectionTitleText font-bold text-center">FAQ</p>
        
    </section>
    <section class="py-24 flex flex-col gap-4 text-center items-center bg-gray-100">
        <p class="text-3xl font-bold leading-[1.5] text-[#D4C1B3]">Customer center</p>
        <div class="flex items-center gap-2">
            <img src="<?php echo G5_THEME_URL?>/img/ctaCall.svg">
            <span class="text-5xl font-semibold">1644-0424</span>
        </div>
        <p class="text-base">월~금 9:00 ~ 18:00 / 주말&공휴일 9:00 ~ 17:00</p>
        <div class="mt-4 flex gap-4">
        <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
            <img src="<?php echo G5_THEME_URL?>/img/btn-contact-icon.png">
            <span class="text-base font-semibold text-black">간편 견적 문의</span>
            <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
        </a>
         <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
            <img src="<?php echo G5_THEME_URL?>/img/btn-talk-icon.png">
            <span class="text-base font-semibold text-black">실시간 카톡 상담</span>
            <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
        </a>
        </div>
    </section>
</main>

<?php
include_once(G5_PATH.'/tail.php');  // 푸터 포함
?>
