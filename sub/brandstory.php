<?php
include_once('../common.php');  // 공통 설정 불러오기
$g5['title'] = "서브페이지 제목";  // 페이지 제목 설정
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
include_once(G5_PATH.'/head.php');  // 헤더 포함
?>

<!-- 페이지 컨텐츠 영역 HTML 작성 -->
<main>
    <section class="pt-[160px] pb-[60px] text-white bg-[url(<?php echo G5_THEME_URL?>/img/brandstoryCta.webp)] bg-cover">
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
    <section class="container py-20 text-center">
        <p class="SectionTitleText font-bold leading-[1.2]">왜 드레스룸은 이사할 때마다 <br/>골칫덩어리가 되어야 할까요?</p>
        <p class="mt-10 H5 font-semibold">2015년, 우리는 이 당연하게 여겨졌던 불편함에 질문을 던졌습니다. <br/>일회성 가구가 아닌, 당신의 삶과 함께하는 <span class="text-[var(--main-brown01)]">지속 가능한 솔루션</span>을 만들고 싶었습니다.</p>
        <div class="my-10 w-[1px] h-[100px] m-auto bg-black"></div>
        <h2 class="HeroText text-[var(--main-brown01)]">Chapter 1</h2>
        <h3 class="HeroText">The Beginning</h3>
        <h4 class="mt-4 H4 font-bold">우리는 '버려지는 가구'에 대한 고민에서 출발했습니다</h4>
        <div class="max-w-[1080px] m-auto mt-8 rounded-lg text-center py-24 text-white bg-[url(<?php echo G5_THEME_URL?>/img/brandstory-1.webp)] bg-cover">
            <p class="H6 font-normal">전셋집 벽에 못 하나 마음대로 박지 못하는 서러움, <br/>
            비싼 돈 들여 맞춘 붙박이장을 버리고 가야 하는 아쉬움.<br/>
            디알코디는 모두가 당연하게 여겼던 이 문제를 해결하고 싶었습니다.<br/>
            '한 번의 구매로 평생 만족하는 가구', 그것이 우리의 첫 약속이었습니다.</p>
        </div>
    </section>
    <section class="container py-20 text-center">
        <h2 class="HeroText text-[var(--main-brown01)]">Chapter 2</h2>
        <h3 class="HeroText">Innovation</h3>
        <h4 class="mt-4 H4 font-bold">기술에서 해답을 찾다, 대한민국 특허 4건의 탄생</h4>
        <div>
            <img src="">
            <p>450mm 익스텐션 기둥 기술</p>
            <p>벽 손상 없는 완벽한 높이 조절</p>
            <p>최소 높이 223cm / 최대 높이 268cm </p>
        </div>
        <div>
            <div>
                <p>4<span>건</span></p>
                <p>특허 등록완료</p>
            </div>
            <div></div>
             <div>
                <p>0<span>%</span></p>
                <p>벽 손상도</p>
            </div>
        </div>
        <p>우리는 해답을 찾기 위해 창업과 동시에 기술 개발에 매달렸습니다. <br/>벽에 어떠한 흔적도 남기지 않으면서, 어떤 천장 높이에도 완벽하게 대응하는 '최대 450mm 높이조절 익스텐션 기둥' 기술. <br/>10년의 고민과 기술력이 담긴 이 발명으로 대한민국 특허청으로부터 4건의 특허 및 디자인 등록을 받았습니다.</p>
        <a class="" href="">특허기술 자세히 보기</a>
    </section>
    <section class="container py-20 text-center">
        <h2 class="HeroText text-[var(--main-brown01)]">Chapter 3</h2>
        <h3 class="HeroText">The Beginning</h3>
        <h4 class="mt-4 H4 font-bold">진짜 좋은 제품을 만들려면 직접 해야 한다</h4>
        <p>더 많은 고객을 만나면서 더 큰 책임감을 느꼈습니다. <br/>2020년, 우리는 완벽한 품질을 위해 과감한 투자를 결정했습니다.<br/>자체 직영 공장을 설립하고, 모든 자재를 인체에 무해한 E0등급 친환경 보드로 전면 교체했습니다.<br/>이 결정은 품질 클레임 90% 감소와 30,000+ 가구의 신뢰라는 결과로 돌아왔습니다.</p>
        <div>
            <div>
                <img src="">
                <h4>2020년</h4>
                <h5>자체 공장 설립</h5>
            </div>
        </div>
        <div>
            <img src="">
            <img src="">
        </div>
    </section>
    <section class="container py-20 text-center">
        <h2 class="HeroText text-[var(--main-brown01)]">Chapter 4</h2>
        <h3 class="HeroText">Proof</h3>
        <h4 class="mt-4 H4 font-bold">당신의 삶 속에서, 우리의 약속은 현실이 됩니다.</h4>
        <div>
            <div>
                80%
                고객 자가 설치 성공률
            </div>
            <p>'이사 갈 때 가져간다'는 우리의 약속은 더 이상 구호가 아닙니다.<br/> 실제 구매 고객 10명 중 8명이 전문가 도움 없이 직접 이전 설치에 성공하며 그 가치를 증명하고 있습니다. <br/>3만개가 넘는 가정에서, 디알코디는 단순한 가구를 넘어 삶의 변화에 함께하는 든든한 파트너가 되었습니다.</p>
        </div>
        <div>
            <div>
                <img src="">
                <p>"이사 와서 그대로 옮겨 설치했어요!"</p>
                <span>서울 강남구</span>
            </div>
             <div>
                <img src="">
                <p>"남편이랑 둘이서 1시간 만에 뚝딱!"</p>
                <span>경기 분당구</span>
            </div>
        </div>
        <a class="" href="">실제 시공 사례 보기</a>
    </section>
    <section class="py-24 flex flex-col gap-12 text-center items-center bg-[url(<?php echo G5_THEME_URL?>/img/indexCta.webp)]">
        <p class="text-3xl font-bold leading-[1.5] text-white">지금 바로 무료 견적을 받아보세요 <br/>10년 경험의 전문가가 24시간 내에 3D 설계안을 제공합니다.</p>
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
