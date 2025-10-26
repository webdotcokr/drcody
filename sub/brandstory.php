<?php
include_once('../common.php');  // 공통 설정 불러오기
$g5['title'] = "서브페이지 제목";  // 페이지 제목 설정
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
include_once(G5_PATH.'/head.php');  // 헤더 포함
?>

<!-- 페이지 컨텐츠 영역 HTML 작성 -->
<main>
    <section class="pt-[160px] pb-[60px] text-white bg-[url(<?php echo G5_THEME_URL?>/img/brandstoryIntro.webp)] bg-cover">
        <div class="container">
        breadcrumbs
            <h1 class="PageTitleText">브랜드 스토리</h1>
            <p class="mt-2 PageSubTitleText font-medium">완벽한 드레스룸을 위해 끊임없이 연구하고 발전하는 디알코디, <br/>디알코디가 추구하는 진정한 가치와 브랜드 철학을 만나보세요.</p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href=""><button class="H6 btn md active">브랜드 스토리</button></a>
                <a href=""><button class="H6 btn md">특허기술</button></a>
                <a href=""><button class="H6 btn md">why 디알코디?</button></a>
            </div>
        </div>    
    </section>
    <section class="container py-20 max-md:py-12 text-center">
        <p class="SectionTitleText font-bold leading-[1.2]">왜 드레스룸은 이사할 때마다 <br/>골칫덩어리가 되어야 할까요?</p>
        <p class="mt-10 max-md:mt-6 H5 font-semibold">2015년, 우리는 이 당연하게 여겨졌던 불편함에 질문을 던졌습니다. <br/>일회성 가구가 아닌, 당신의 삶과 함께하는 <span class="text-[var(--main-brown01)]">지속 가능한 솔루션</span>을 만들고 싶었습니다.</p>
        <div class="my-10 max-md:my-6 w-[1px] h-[100px] max-md:h-[60px] m-auto bg-black"></div>
        <h2 class="HeroText text-[var(--main-brown01)]">Chapter 1</h2>
        <h3 class="HeroText">The Beginning</h3>
        <h4 class="mt-4 H4 font-bold max-md:text-[20px]">우리는 '버려지는 가구'에 대한 <br class="md:hidden">고민에서 출발했습니다</h4>
        <div class="max-w-[1080px] m-auto mt-8 rounded-lg text-center py-24 max-md:py-12 text-white bg-[url(<?php echo G5_THEME_URL?>/img/brandstory-1.webp)] bg-cover">
            <p class="H6 font-normal">전셋집 벽에 못 하나 마음대로 박지 못하는 서러움, <br/>
            비싼 돈 들여 맞춘 붙박이장을 버리고 가야 하는 아쉬움.<br/>
            디알코디는 모두가 당연하게 여겼던 이 문제를 해결하고 싶었습니다.<br/>
            '한 번의 구매로 평생 만족하는 가구', 그것이 우리의 첫 약속이었습니다.</p>
        </div>
    </section>
    <section class="py-20 max-md:py-12 text-center flex flex-col items-center">
        <h2 class="HeroText text-[var(--main-brown01)]">Chapter 2</h2>
        <h3 class="HeroText">Innovation</h3>
        <h4 class="mt-4 H4 font-bold">기술에서 해답을 찾다, <br class="md:hidden">대한민국 특허 4건의 탄생</h4>
        <div class="w-full bg-[url(<?php echo G5_THEME_URL?>/img/brandstory-3.webp)] bg-cover bg-center">
            <div class="mt-24 bg-white w-[360px] p-4 m-auto rounded-xl shadow-xl">
                <img src="<?php echo G5_THEME_URL?>/img/brandstory-2.webp">
                <p class="mt-3 H6 font-bold">450mm 익스텐션 기둥 기술</p>
                <p class="text-base">벽 손상 없는 완벽한 높이 조절</p>
                <p class="mt-4 text-base font-medium">최소 높이 223cm / 최대 높이 268cm </p>
            </div>
        </div>
        <div class="my-12 max-md:my-10 flex gap-16 items-center font-bold">
            <div class="">
                <p class="H1">4<span class="H4">건</span></p>
                <p class="H4 max-md:text-[20px]">특허 등록완료</p>
            </div>
            <div class="w-[1px] h-[60px] bg-gray-300"></div>
             <div>
                <p class="H1">0<span class="H4">%</span></p>
                <p class="H4 max-md:text-[20px]">벽 손상도</p>
            </div>
        </div>
        <p class="H6">우리는 해답을 찾기 위해 창업과 동시에 기술 개발에 매달렸습니다. <br/>벽에 어떠한 흔적도 남기지 않으면서, 어떤 천장 높이에도 완벽하게 대응하는 '최대 450mm 높이조절 익스텐션 기둥' 기술. <br/>10년의 고민과 기술력이 담긴 이 발명으로 대한민국 특허청으로부터 4건의 특허 및 디자인 등록을 받았습니다.</p>
        <a class="mt-8 btn default" href="">특허기술 자세히 보기</a>
    </section>x2x
    <section class="bg-gray-50 py-20 text-center flex flex-col items-center">
        <h2 class="HeroText text-[var(--main-brown01)]">Chapter 3</h2>
        <h3 class="HeroText">The Beginning</h3>
        <h4 class="mt-4 H4 max-md:text-[20px] font-bold">진짜 좋은 제품을 만들려면 직접 해야 한다</h4>
        <p class="mt-8 max-md:mt-6 H6">더 많은 고객을 만나면서 더 큰 책임감을 느꼈습니다. <br/>2020년, 우리는 완벽한 품질을 위해 과감한 투자를 결정했습니다.<br/>자체 직영 공장을 설립하고, 모든 자재를 인체에 무해한 E0등급 친환경 보드로 전면 교체했습니다.<br/>이 결정은 품질 클레임 90% 감소와 30,000+ 가구의 신뢰라는 결과로 돌아왔습니다.</p>
        <div class="mt-16 justify-center grid grid-cols-4 max-md:grid-cols-2 items-center gap-16">
            <div>
                <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/brandstory-icon-1.svg">
                <h4 class="H5 font-bold">2020년</h4>
                <h5 class="H5 font-bold">자체 공장 설립</h5>
            </div>
            <div class="w-[1px] h-[70px] bg-gray-300 max-md:hidden"></div>
            <div>
                <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/brandstory-icon-2.svg">
                <h4 class="H5 font-bold">E0등급</h4>
                <h5 class="H5 font-bold">친환경 보드</h5>
            </div>
            <div class="w-[1px] h-[70px] bg-gray-300 max-md:hidden"></div>
            <div>
                <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/brandstory-icon-3.svg">
                <h4 class="H5 font-bold">90%</h4>
                <h5 class="H5 font-bold">품질 클레임 감소</h5>
            </div>
            <div class="w-[1px] h-[70px] bg-gray-300 max-md:hidden"></div>
            <div>
                <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/brandstory-icon-4.svg">
                <h4 class="H5 font-bold">30,000+</h4>
                <h5 class="H5 font-bold">신뢰받은 가구</h5>
            </div>
        </div>
        <div class="m-auto mt-16 flex max-md:flex-col gap-2">
            <img src="<?php echo G5_THEME_URL?>/img/brandstory-4.webp">
            <img src="<?php echo G5_THEME_URL?>/img/brandstory-5.webp">
        </div>
    </section>
    <section class="container flex flex-col items-center py-20 text-center">
        <h2 class="HeroText text-[var(--main-brown01)]">Chapter 4</h2>
        <h3 class="HeroText">Proof</h3>
        <h4 class="mt-4 H4 max-md:text-[20px] font-bold">당신의 삶 속에서, <br class="md:hidden">우리의 약속은 현실이 됩니다.</h4>
        <div class="mt-16 flex max-md:flex-col items-center gap-12 max-md:gap-4">
            <div class="text-left">
                <p class="H1 font-bold max-md:text-center">80<span class="H4">%</span></p>
                <p class="H4 font-bold">고객 자가 설치 성공률</p>
            </div>
            <div class="w-[1px] h-[70px] bg-gray-300 max-md:hidden"></div>
            <p class="H6 text-left max-md:text-center">'이사 갈 때 가져간다'는 <br class="md:hidden">우리의 약속은 더 이상 구호가 아닙니다.<br/> 실제 구매 고객 10명 중 8명이 전문가 도움 없이 직접 이전 설치에 성공하며 그 가치를 증명하고 있습니다. <br/>3만개가 넘는 가정에서, 디알코디는 단순한 가구를 넘어 삶의 변화에 함께하는 든든한 파트너가 되었습니다.</p>
        </div>
        <div class="mt-16 mb-12 max-md:my-8 flex gap-6">
            <div class="text-left">
                <img src="<?php echo G5_THEME_URL?>/img/brandstory-6.webp">
                <p class="mt-2 H6 font-semibold">"이사 와서 그대로 옮겨 설치했어요!"</p>
                <span class="text-sm text-gray-600">서울 강남구</span>
            </div>
             <div class="text-left">
                <img src="<?php echo G5_THEME_URL?>/img/brandstory-7.webp">
                <p class="mt-2 H6 font-semibold">남편이랑 둘이서 1시간 만에 뚝딱!"</p>
                <span class="text-sm text-gray-600">경기 분당구</span>
            </div>
        </div>
        <a class="mt-12 btn default max-md:mt-2" href="">실제 시공 사례 보기</a>
    </section>
    <section class="py-24 flex flex-col gap-12 text-center items-center bg-[url(<?php echo G5_THEME_URL?>/img/brandstoryCta.webp)] bg-cover">
        <p class="H3 font-bold leading-[1.5] text-white">한 번의 선택이 평생의 만족이 되도록, <br/>디알코디는 오늘도 당신의 공간을 연구합니다. <br/>디알코디의 철학에 공감하셨다면, <br/>이제 당신의 공간에 대한 이야기를 들려주세요.</p>
        <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
            <img src="<?php echo G5_THEME_URL?>/img/btn-contact-icon.png">
            <span class="text-base font-semibold text-black">무료 견적 상담 시작하기</span>
            <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
        </a>
    </section>
</main>


<?php
include_once(G5_PATH.'/tail.php');  // 푸터 포함
?>
