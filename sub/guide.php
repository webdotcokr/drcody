<?php
include_once('../common.php');  // 공통 설정 불러오기
$g5['title'] = "서브페이지 제목";  // 페이지 제목 설정
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
include_once(G5_PATH.'/head.php');  // 헤더 포함
?>
<!-- 페이지 컨텐츠 영역 HTML 작성 -->
<main>
    <section class="pt-[160px] pb-[60px] bg-[url(<?php echo G5_THEME_URL?>/img/guideToparea.webp)] bg-cover">
        <div class="container">
        breadcrumbs
            <h1 class="PageTitleText">셀프 이전 가이드</h1>
            <p class="mt-2 PageSubTitleText font-medium">전문가 없이도 괜찮아요. <br/>10명 중 8명이 직접 해낸 셀프 이전설치</p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href=""><button class="H6 btn md ">셀프 이전 가이드</button></a>
                <a href=""><button class="H6 btn md active">전문가 이전 서비스</button></a>
                <a href=""><button class="H6 btn md">이전설치 신청</button></a>
            </div>
        </div>    
    </section>
    
    <section class="py-24 flex flex-col gap-4 text-center text-white items-center bg-[url(<?php echo G5_THEME_URL?>/img/guideCta.webp)]">
        <p class="text-3xl font-bold leading-[1.5] text-white">혼자 하기 어려우시다면, 전문가가 달려갑니다.</p>
        <p class="H6">셀프 설치가 부담스럽거나 시간이 부족하신가요? 걱정하지 마세요. <br/>디알코디의 전문 이전설치 서비스를 합리적인 비용으로 이용하실 수 있습니다.</p>
        <div>
            <div class="px-8 py-6 text-left bg-[#060606/60] border border-[#565254]">
                <div class="flex items-center gap-2 H5 font-bold"><img src="<?php echo G5_THEME_URL?>/img/guide-call.svg"><span>전화상담</span></div>
                <p class="mt-1 text-sm opacity-80">전문가와 직접 상담하여 맞춤형 솔루션을 제공받으세요.</p>
                <p class="mt-4 H3 font-bold">1588-1234</p>
            </div>
            <div></div>
        </div>
        <a href="#" class="mt-4 btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
            <img src="<?php echo G5_THEME_URL?>/img/btn-guide-icon.png">
            <span class="text-base font-semibold text-black">전문가 이전 서비스 확인</span>
            <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
        </a>
    </section>
</main>

<?php
include_once(G5_PATH.'/tail.php');  // 푸터 포함
?>
