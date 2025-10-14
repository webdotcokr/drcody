<?php
include_once('../common.php');  // 공통 설정 불러오기
$g5['title'] = "서브페이지 제목";  // 페이지 제목 설정
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
include_once(G5_PATH.'/head.php');  // 헤더 포함
?>
<!-- 페이지 컨텐츠 영역 HTML 작성 -->
<main>
    <section class="pt-[160px] pb-[60px] text-white bg-[url(<?php echo G5_THEME_URL?>/img/patentIntro.webp)] bg-cover">
        <div class="container">
        breadcrumbs
            <h1 class="PageTitleText">특허기술</h1>
            <p class="mt-2 PageSubTitleText font-medium">완벽한 드레스룸을 위해 끊임없이 연구하고 발전하는 디알코디, <br/>디알코디가 추구하는 진정한 가치와 브랜드 철학을 만나보세요.</p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href=""><button class="H6 btn md ">브랜드 스토리</button></a>
                <a href=""><button class="H6 btn md active">특허기술</button></a>
                <a href=""><button class="H6 btn md">why 디알코디?</button></a>
            </div>
        </div>    
    </section>
    <section class="py-24 bg-[#F7F2EE] flex flex-col text-center items-center gap-12">
        <p class="H5 font-medium text-[var(--main-brown01)]">왜 기존 드레스룸은 벽을 상하게 하고, 이사 갈 땐 버려야만 했을까요?<br/> 우리는 드레스룸의 오랜 딜레마에 주목했습니다.<br/> 견고함을 위해 소중한 우리 집에 구멍을 뚫거나,<br/> 편의성을 위해 불안정한 흔들림을 감수해야 하는 문제.</p>
        <div class="flex flex-col items-center gap-8">
            <img src="<?php echo G5_THEME_URL?>/img/patent-tit-1.svg">
            <p class="SectionTitleText font-bold">벽 손상 없이 완벽하게 고정되면서, <br/>이사 갈 때 그대로 가져갈 수는 없을까?</p>
            <img src="<?php echo G5_THEME_URL?>/img/patent-tit-2.svg">
        </div>
        <p class="H5 font-bold text-[var(--main-brown01)]">디알코디의 혁신은 <br/>바로 이 질문에서 시작되었습니다.</p>
    </section>
    <section class="container py-32">
        <h2 class="SectionTitleText font-bold text-center">10년 연구로 완성한 혁신, <br/>디알코디 기술의 3가지 핵심 원리</h2>
        <div class="mt-16">
            <div class="flex gap-12 items-center max-md:flex-col">
                <img src="<?php echo G5_THEME_URL?>/img/patent-1.webp">
                <div class="max-md:text-center">
                    <h3 class="H5 font-bold text-[var(--main-brown01)]">원리 1</h3>
                    <h4 class="mt-2 H3 font-bold">어떤 공간에도 완벽하게, <br/>450mm 익스텐션 기둥</h4>
                    <p class="mt-8 H6">천장 높이가 바뀌어도, 드레스룸은 그대로 기본 2,230mm에서 최대 2,680mm까지. 
디알코디의 익스텐션 기둥은 무려 최대 450mm의 압도적인 조절 범위를 제공합니다. 
지금 사는 아파트의 높은 천장부터, 나중에 이사 갈 주택의 조금 낮은 천장까지. 어떤 공간에서도 맞춤처럼 설치하고, 
평생 당신의 옷들을 책임집니다.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-32 bg-gray-50 flex flex-col text-center items-center">
        <h2 class="SectionTitleText font-bold">내 공간에는 어떻게 적용될까요?</h2>
        <h3 class="mt-4 H4 font-semibold">전문가가 당신의 공간에 꼭 맞는 드레스룸을 3D로 미리 보여드립니다.</h3>
        <div class="my-12 flex gap-3">
            <img src="<?php echo G5_THEME_URL?>/img/patent-4.webp">
            <img src="<?php echo G5_THEME_URL?>/img/patent-5.webp">
            <img src="<?php echo G5_THEME_URL?>/img/patent-6.webp">
        </div>
        <a class="btn sub" href="">무료 3D 설계도 무료 받기</a>
    </section>
    <section class="container py-24 grid grid-cols-2 gap-16">
        <div>
            <p class="SectionTitleText font-bold">이 모든 기술이 당신의 공간에서 <br/>이렇게 구현됩니다</p>
            <p class="mt-6 H6">디알코디의 기술력은 실험실의 데이터가 아닌, 바로 당신의 집에서 그 가치를 증명합니다.
            디알코디 전문 시공팀이 방문하여 소중한 벽과 바닥에 단 하나의 흠집도 없이, 
            빠르고 완벽하게 당신만의 드레스룸을 완성합니다. 
            소음과 분진 걱정 없는 깔끔한 설치 과정을 직접 경험해 보세요.</p>
        </div>
        <div class="flex flex-col gap-3">
            <img src="<?php echo G5_THEME_URL?>/img/patent-7.webp">
            <img src="<?php echo G5_THEME_URL?>/img/patent-8.webp">
        </div>
    </section>
    <section class="py-32 bg-gray-50">
        <div class="container">
            <div>
                <h2 class="SectionTitleText font-bold text-center">디알코디의 기술력은 <br/>법적으로 보호받는 자부심입니다</h2>
                <p class="mt-6 H6 text-center">디알코디의 무타공 익스텐션 기둥과 핵심 부품들은 모방할 수 없는 독창적인 기술입니다. <br/>대한민국 특허청으로부터 발명특허와 디자인 등록을 통해<br/>그 독창성과 기술력을 공식적으로 인정받았습니다. <br/>당신이 경험하는 혁신은 법적으로 보호받는 디알코디의 자부심 그 자체입니다.</p>
                <div class="mt-8 flex gap-6">
                    <div class="text-center bg-white rounded-xl pb-10">
                        <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/patent-9.webp" alt="">
                        <h3 class="H5 font-bold">발명특허</h3>
                        <h4 class="mt-2 text-base text-gray-600">프로파일 기둥 및 <br/>이를 포함하는 프로파일 옷걸이</h4>
                    </div>
                    <div class="text-center bg-white rounded-xl pb-10">
                        <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/patent-10.webp" alt="">
                        <h3 class="H5 font-bold">디자인등록</h3>
                        <h4 class="mt-2 text-base text-gray-600">행거용 선반 고정프레임<br/>디자인등록</h4>
                    </div>
                    <div class="text-center bg-white rounded-xl pb-10">
                        <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/patent-10.webp" alt="">
                        <h3 class="H5 font-bold">디자인등록</h3>
                        <h4 class="mt-2 text-base text-gray-600">행거용 프레임<br/>디자인등록</h4>
                    </div>
                    <div class="text-center bg-white rounded-xl pb-10">
                        <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/patent-10.webp" alt="">
                        <h3 class="H5 font-bold">디자인등록</h3>
                        <h4 class="mt-2 text-base text-gray-600">행거용 연결브라켓<br/>디자인등록</h4>
                    </div>
                </div>
            </div>
            <div class="mt-20 flex flex-col items-center gap-4">
                <img src="<?php echo G5_THEME_URL?>/img/patent-11.webp">
                <h2 class="SectionTitleText font-bold">공식 인증 완료</h2>
                <h3 class="H5 font-bold">대한민국 특허청 공식 등록</h3>
                <div class="mt-4 flex gap-4">
                    <div>
                        <img class="mb-4 rounded-lg" src="<?php echo G5_THEME_URL?>/img/patent-12.webp">
                        <h4 class="text-gray-600 font-semibold">특허 <span class="text-black">제 10-1707647호</span></h4>
                        <h4 class="text-gray-600 font-semibold">출원번호 <span class="text-black">제 10-2015-0032186호</span></h4>
                    </div>
                    <div>
                        <img class="mb-4 rounded-lg" src="<?php echo G5_THEME_URL?>/img/patent-13.webp">
                        <h4 class="text-gray-600 font-semibold">특허 <span class="text-black">제 30-0808182호</span></h4>
                        <h4 class="text-gray-600 font-semibold">출원번호 <span class="text-black">제 30-2015-0010627호</span></h4>
                    </div>
                    <div>
                        <img class="mb-4 rounded-lg" src="<?php echo G5_THEME_URL?>/img/patent-14.webp">
                        <h4 class="text-gray-600 font-semibold">특허 <span class="text-black">제 30-0813734호</span></h4>
                        <h4 class="text-gray-600 font-semibold">출원번호 <span class="text-black">제 30-2015-0010628호</span></h4>
                    </div>
                    <div>
                        <img class="mb-4 rounded-lg" src="<?php echo G5_THEME_URL?>/img/patent-15.webp">
                        <h4 class="text-gray-600 font-semibold">특허 <span class="text-black">제 30-0813735호</span></h4>
                        <h4 class="text-gray-600 font-semibold">출원번호 <span class="text-black">제 30-2015-0010697호</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 flex flex-col gap-4 text-center items-center bg-[url(<?php echo G5_THEME_URL?>/img/patentCta.webp)] bg-cover">
        <p class="text-3xl font-bold leading-[1.5] text-white">디알코디의 기술력을 직접 경험해 보세요.</p>
        <p class="H5 font-meduim text-white">수많은 고객들의 공간에서 증명된 기술력과 <br/>디자인을 갤러리에서 바로 확인하실 수 있습니다.</p>
        <a href="#" class="mt-8 btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
            <img src="<?php echo G5_THEME_URL?>/img/btn-gallery-icon.png">
            <span class="text-base font-semibold text-black">시공갤러리 보러가기</span>
            <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
        </a>
    </section>
</main>

<?php
include_once(G5_PATH.'/tail.php');  // 푸터 포함
?>
