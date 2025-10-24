<?php
include_once('../common.php');  // 공통 설정 불러오기
$g5['title'] = "서브페이지 제목";  // 페이지 제목 설정
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
include_once(G5_PATH.'/head.php');  // 헤더 포함
?>
<style>
.check {position: relative;}
.check::before {
    position: absolute;
    content: url('<?php echo G5_THEME_URL?>/img/check.svg');
    top: 2px;
    left: -32px;
    width: 24px;
    height: 24px;
}
@media screen and (max-width: 767px) {
    .check::before {
        position: relative;
        display: inline-block;
        left: 0;
        margin-right: 6px;
    }
}
</style>
<!-- 페이지 컨텐츠 영역 HTML 작성 -->
<main>
    <section class="pt-[160px] pb-[60px] bg-[url(<?php echo G5_THEME_URL?>/img/guideToparea.webp)] bg-cover">
        <div class="container">
        breadcrumbs
            <h1 class="PageTitleText">견적문의 가이드</h1>
            <p class="mt-2 PageSubTitleText font-medium">"견적은 어떻게 받는 거죠?" 처음이라 막막하신 분들을 위한 가이드 <br/>누구나 쉽게 따라 할 수 있는 견적문의 가이드를 확인하세요.</p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href=""><button class="H6 btn md ">견적문의 신청</button></a>
                <a href=""><button class="H6 btn md active">견적문의 가이드</button></a>
            </div>
        </div>    
    </section>
    <section class="py-20 flex flex-col items-center">
        <p class="H4 font-semibold text-[#D4C1B3]">Quotation</p>
        <h2 class="mt-2 SectionTitleText font-bold text-cetner">디알코디 견적 <br class="hideen"/>쉽게 받는 방법</h2>
        <div class="mt-16 max-md:mt-8 py-16 px-24 max-md:p-0 flex flex-col justify-center items-center border border-[#E0E0E0] max-md:border-none rounded-xl">
            <img class="m-auto max-md:w-[48px]" src="<?php echo G5_THEME_URL?>/img/moveServiceCheck.svg" alt="">
            <p class="mt-2 SectionTitleText font-bold">방사이즈 꼭 필요한가요?</p>
            <p class="mt-4 H6 font-semibold text-center">설치할 면적에 따라 선택하는 모듈에 따라 사용되는 기둥과 선반의 개수 등이 달라자기 때문에 <br/>정확한 견적을 위해선 방사이즈가 꼭 필요합니다.</p>
            <img class="rounded-2xl my-10 max-md:my-6 max-md:rounded-none" src="<?php echo G5_THEME_URL?>/img/quoteGuide-1.webp">
            <div class="w-full grid grid-cols-3 gap-12 max-md:w-[calc(100%-40px)] max-md:grid-cols-1 max-md:gap-4">
                <!-- CARD -->
                <a href="#">
                    <div class="p-10 max-md:p-4 bg-[#FAFAFA] rounded-xl max-md:rounded-3xl border border-[#E0E0E0] flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src="<?php echo G5_THEME_URL?>/img/quoteGuideIcon-1.svg">
                            <h4 class="H6 font-bold">현재 사이즈를 <br/>잴 수 있어요!</h4>
                        </div>
                        <img src="<?php echo G5_THEME_URL?>/img/rightArrow.svg" alt="arrow">
                    </div>
                </a>
                <!-- CARD -->
                <a href="#">
                    <div class="p-10 max-md:p-4 bg-[#FAFAFA] rounded-xl max-md:rounded-3xl border border-[#E0E0E0] flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src="<?php echo G5_THEME_URL?>/img/quoteGuideIcon-2.svg">
                            <h4 class="H6 font-bold">현재 사이즈를 <br/>잴 수 없어요!</h4>
                        </div>
                        <img src="<?php echo G5_THEME_URL?>/img/rightArrow.svg" alt="arrow">
                    </div>
                </a>
                <!-- CARD -->
                <a href="#">
                    <div class="p-10 max-md:p-4 bg-[#FAFAFA] rounded-xl max-md:rounded-3xl border border-[#E0E0E0] flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src="<?php echo G5_THEME_URL?>/img/quoteGuideIcon-3.svg">
                            <h4 class="H6 font-bold">현재 견적문의가 <br/>필요해요!</h4>
                        </div>
                        <img src="<?php echo G5_THEME_URL?>/img/rightArrow.svg" alt="arrow">
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section class="py-20 flex flex-col items-center bg-gray-50">
        <img src="<?php echo G5_THEME_URL?>/img/quoteGuideIcon-4.svg">
            <p class="mt-4 SectionTitleText font-bold">현재 사이즈를 잴 수 있어요!</p>
            <p class="mt-4 H6 font-semibold text-center">공간 치수를 간단히 그려 보내주시면 <br class="md:hidden"/>설치 위치를 확인해 필요한 모듈을 파악하고, <br/>맞춤 견적과 시안을 빠르게 안내해드려요.</p>
            <!-- CONTAINER -->
            <div class="mt-8 grid grid-cols-3 gap-6 max-md:grid-cols-1">
                <!-- CARD -->
                <div class="p-8 max-md:p-5 border border-gray-300 rounded-3xl bg-white">
                    <div>
                        <h5 class="H4 font-bold text-[var(--main-brown01)]"><span class="H2 text-[var(--main-brown02)]">1</span>단계</h5>
                        <h6 class="mt-1 H4 font-bold text-[var(--main-brown03)] max-md:mt-1">간단하게 공간 치수를 그려주세요!</h6>
                        <p class="mt-4 text-base font-medium text-gray-800">설치할 공간의 사방면 너비와 방문 및 창문의 위치, 그리고 천장 높이를 알려주신 뒤, 간단히 손그림을 그려서 사진으로 찍어서보내주세요.</p>
                    </div>
                    <img class="mt-10 max-md:mt-6 border border-gray-300 rounded-md" src="<?php echo G5_THEME_URL?>/img/quoteGuide-2.webp">
                </div>
                <!-- CARD -->
                <div class="p-8 max-md:p-5 border border-gray-300 rounded-3xl bg-white">
                    <div>
                        <h5 class="H4 font-bold text-[var(--main-brown01)]"><span class="H2 text-[var(--main-brown02)]">2</span>단계</h5>
                        <h6 class="mt-1 H4 font-bold text-[var(--main-brown03)] max-md:mt-1">설치 위치를 표시해주세요!</h6>
                        <p class="mt-4 text-base font-medium text-gray-800">전체 공간 중에 시스템 장 을 설치할 부분을 표시하고 필요한 모듈도 알려주세요.</p>
                    </div>
                    <img class="mt-10 max-md:mt-6 border border-gray-300 rounded-md" src="<?php echo G5_THEME_URL?>/img/quoteGuide-3.webp">
                </div>
                <!-- CARD -->
                <div class="p-8 max-md:p-5 border border-gray-300 rounded-3xl bg-white">
                    <div>
                        <h5 class="H4 font-bold text-[var(--main-brown01)]"><span class="H2 text-[var(--main-brown02)]">3</span>단계</h5>
                        <h6 class="mt-1 H4 font-bold text-[var(--main-brown03)] max-md:mt-1">견적 및 시안을 안내드려요!</h6>
                        <p class="mt-4 text-base font-medium text-gray-800">알려주신 내용을 토대로 견적을 드리고 진행의사 확인 뒤 시안을 보내드립니다.</p>
                    </div>
                    <div class="flex gap-2">
                    <img class="mt-10 max-md:mt-6 border border-gray-300 rounded-md" src="<?php echo G5_THEME_URL?>/img/quoteGuide-4.webp">
                    <img class="mt-10 max-md:mt-6 border border-gray-300 rounded-md" src="<?php echo G5_THEME_URL?>/img/quoteGuide-5.webp">
                    </div>
                </div>
            </div>
            <div class="mt-20 max-md:mt-12 flex flex-col items-center">
                <p class="H4 font-bold flex items-center gap-2"><span class="p-1.5 py-0 H6 text-white bg-[#A5836A] rounded-md">TIP</span>사이즈 재는 방법</p>
                <p class="mt-3 text-base text-center">천장과 바닥은 사진처럼 줄자를 사용해보세요. <br/>혼자서도 사이즈를 쉽게 잴 수 있어요.</p>
                <div class="mt-6 flex gap-6 max-md:gap-2">
                    <!-- CARD -->
                    <div>
                        <img class="rounded-md" src="<?php echo G5_THEME_URL?>/img/quoteGuide-6.webp" alt="">
                        <h4 class="mt-3 flex items-center gap-1 text-base font-bold"><img src="<?php echo G5_THEME_URL?>/img/check.svg" alt="check">천장높이 재는 방법</h4>
                    </div>
                    <div>
                        <img class="rounded-md" src="<?php echo G5_THEME_URL?>/img/quoteGuide-7.webp" alt="">
                        <h4 class="mt-3 flex items-center gap-1 text-base font-bold"><img src="<?php echo G5_THEME_URL?>/img/check.svg" alt="check">바닥재는 방법</h4>
                    </div>
                </div>
            </div>
    </section>

    <section class="py-20 flex flex-col items-center bg-gray-50">
        <img src="<?php echo G5_THEME_URL?>/img/quoteGuideIcon-5.svg">
            <p class="mt-4 SectionTitleText font-bold">현재 사이즈를 잴 수 없어요!</p>
            <p class="mt-4 H6 font-semibold text-center">아파트평면도와 같은 대략의 사이즈가 필요합니다. <br/>인터넷 검색, 중개 부동산, 아파트 관리사무소 등에서 구할 수 있어요.</p>
            <div class="flex gap-4 max-md:flex-col ">
                <div>
                    <img src="<?php echo G5_THEME_URL?>/img/quoteGuide-8.webp">
                    <p class="mt-4 H4 font-bold text-center">아파트 평면도</p>
                </div>
                <div>
                    <img src="<?php echo G5_THEME_URL?>/img/quoteGuide-9.webp">
                    <p class="mt-4 H4 font-bold text-center">설계도</p>
                </div>
            </div>
            <div class="mt-20 max-md:mt-12 flex flex-col items-center">
                <p class="H4 font-bold flex items-center gap-2"><span class="p-1.5 py-0 H6 text-white bg-[#A5836A] rounded-md">Check</span>꼭 필요한 서류</p>
                <p class="mt-3 text-base text-center">안내된 서류는 진행 과정의 기초 자료이므로 <br class="hideen">반드시 제출이 필요합니다. <br/>관리사무소나 부동산에서 확인하실 수 있습니다.</p>
                <div class="mt-6 flex gap-6 max-md:gap-2">
                    <!-- CARD -->
                    <div>
                        <img class="rounded-md" src="<?php echo G5_THEME_URL?>/img/quoteGuide-10.webp" alt="">
                        <h4 class="mt-3 flex items-center gap-1 text-base font-bold"><img src="<?php echo G5_THEME_URL?>/img/check.svg" alt="check">인터넷 검색</h4>
                    </div>
                    <div>
                        <img class="rounded-md" src="<?php echo G5_THEME_URL?>/img/quoteGuide-11.webp" alt="">
                        <h4 class="mt-3 flex items-center gap-1 text-base font-bold"><img src="<?php echo G5_THEME_URL?>/img/check.svg" alt="check">중개 부동산</h4>
                    </div>
                    <div>
                        <img class="rounded-md" src="<?php echo G5_THEME_URL?>/img/quoteGuide-12.webp" alt="">
                        <h4 class="mt-3 flex items-center gap-1 text-base font-bold"><img src="<?php echo G5_THEME_URL?>/img/check.svg" alt="check">아파트 관리사무소</h4>
                    </div>
                </div>
            </div>
    </section>

    <section class="py-24 flex flex-col gap-4 text-center text-white items-center bg-[url(<?php echo G5_THEME_URL?>/img/quoteGuideCta.webp)] bg-cover">
        <img src="<?php echo G5_THEME_URL?>/img/quoteGuideIcon-6.svg" alt="">
        <p class="text-3xl font-bold leading-[1.5] text-white">현재 견적 문의가 필요해요!</p>
        <p class="H6">당장 사이즈를 재기 어려우신가요? 대략적인 견적이라도 알고 싶으신가요? <br/>아래 문의를 남겨주시면 빠르고 친절하게 안내드립니다.</p>
        <div class="flex gap-4">
            <a href="#" class="mt-4 btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                <img src="<?php echo G5_THEME_URL?>/img/btn-contacr-icon.png">
                <span class="text-base font-semibold text-black">간편 견적 문의</span>
                <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
            </a>
            <a href="#" class="mt-4 btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
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
