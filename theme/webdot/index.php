
<?php
include_once('./common.php');  // 공통 설정 불러오기
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
include_once(G5_PATH.'/head.php');  // 헤더 포함
?>
<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div>
    <section class="container">
        <p class="MainSectionTitleENG text-center">Times of trust</p>
        <h2 class="MainSectionTitle text-center mt-4">데이터로 증명하는 신뢰 <br/>10년간 축적된 신뢰의 숫자들</h2>
        <div class="mt-12 grid grid-cols-4 max-md:grid-cols-2 gap-8 max-md:gap-4">
            <div class="flex flex-col justify-between aspect-[1/1.05] p-8 max-md:p-4 rounded-3xl max-md:rounded-xl bg-[url('<?php echo G5_THEME_URL ?>/img/trust-1.webp')] bg-cover">
                <div>
                    <p class="H4 font-bold">2015년 설립</p>
                    <p class="H6 mt-1">창업과 동시 특허 출원</p>
                </div>
                <p class="text-5xl max-md:text-[32px] font-extrabold text-white">2015</p>
            </div>
            <div class="flex flex-col text-white justify-between p-8 max-md:p-4 rounded-3xl max-md:rounded-xl bg-[url('<?php echo G5_THEME_URL ?>/img/trust-2.webp')] bg-cover">
                <div>
                    <p class="H4 font-bold">4건 특허</p>
                    <p class="H6 mt-1">발명특허 1건, 디자인특허 3건</p>
                </div>
                <p class="text-5xl max-md:text-[32px] font-extrabold">4</p>
            </div>
            <div class="flex flex-col text-white justify-between p-8 max-md:p-4 rounded-3xl max-md:rounded-xl bg-[url('<?php echo G5_THEME_URL ?>/img/trust-3.webp')] bg-cover">
                <div>
                    <p class="H4 font-bold">30,000+<br/>누적설치</p>
                    <p class="H6 mt-1">검증된 기술력과 경험</p>
                </div>
                <p class="text-5xl max-md:text-[32px] font-extrabold text-white">30,000+</p>
            </div>
            <div class="flex flex-col justify-between p-8 max-md:p-4 rounded-3xl max-md:rounded-xl bg-[url('<?php echo G5_THEME_URL ?>/img/trust-4.webp')] bg-cover">
                <div>
                    <p class="H4 font-bold">62,904건<br/>누적상담</p>
                    <p class="H6 mt-1">2025.08.13 기준</p>
                </div>
                <p class="text-5xl max-md:text-[32px] font-extrabold text-white">62,904</p>
            </div>
        </div>
        <p class="mt-12 text-3xl max-md:text-[24px] text-center font-bold text-gray-500">당신의 어떤 고민이든, <br/>우리는 이미 <span class="text-black">6만 번 이상 듣고 해결해왔습니다.</span></p>
    </section>
    <section class="container text-center bg-[url('<?php echo G5_THEME_URL?>/img/bg-1.webp)'] bg-cover">
        <img class="mt-4 text-center" src="<?php echo G5_THEME_URL ?>/img/arrow-down-1.png">
        <p class="MainSectionTitleENG">DRCODY solution</p>
        <h2 class="MainSectionTitle text-center mt-4">당신의 가장 큰 고민, <br/>디알코디는 이렇게 해결합니다</h2>
        <p class="H4 max-md:text-[20px] font-medium mt-4">10년간 6만 건의 상담으로 찾아낸 핵심 솔루션</p>
        <div class="max-md:mt-8 grid grid-cols-4 max-md:grid-cols-2 gap-16 max-md:gap-x-6 max-md:gap-y-10">
            <!-- CARD -->
            <div class="text-center">
                <img src="<?php echo G5_THEME_URL?>/img/index_solution-1.webp" alt="">
                <p class="mt-1 text-base max-md:text-sm text-[var(--main-brown01)] font-bold">Solution</p>
                <h3 class="mt-5 max-md:mt-2 H4 max-md:text-[20px] font-bold">특허 무타공 기술</h3>
                <p class="mt-1 text-base max-md:text-sm text-[var(--main-brown03)]">벽에 못 박지 않는 특허 기술로 <br/>원상복구 100%</p>
            </div>
            <!-- CARD -->
            <div class="md:mt-16 text-center">
                <img src="<?php echo G5_THEME_URL?>/img/index_solution-2.webp" alt="">
                <p class="mt-1 text-base max-md:text-sm text-[var(--main-brown01)] font-bold">Solution</p>
                <h3 class="mt-5 max-md:mt-2 H4 max-md:text-[20px] font-bold">셀프 이전설치 <br/>선택률 80%</h3>
                <p class="mt-1 text-base max-md:text-sm text-[var(--main-brown03)]">10명의 고객님중 8명은 <br/>직접 셀프로 이전 설치 진행</p>
            </div>
            <!-- CARD -->
            <div class="md:mt-16 text-center">
                <img src="<?php echo G5_THEME_URL?>/img/index_solution-3.webp" alt="">
                <p class="mt-1 text-base max-md:text-sm text-[var(--main-brown01)] font-bold">Solution</p>
                <h3 class="mt-5 max-md:mt-2 H4 max-md:text-[20px] font-bold">전문가 설치<br/>서비스</h3>
                <p class="mt-1 text-base max-md:text-sm text-[var(--main-brown03)]">숙련된 전문가가 <br/>완벽하게 설치까지</p>
            </div>
            <!-- CARD -->
            <div class="text-center">
                <img src="<?php echo G5_THEME_URL?>/img/index_solution-4.webp" alt="">
                <p class="mt-1 text-base max-md:text-sm text-[var(--main-brown01)] font-bold">Solution</p>
                <h3 class="mt-5 max-md:mt-2 H4 max-md:text-[20px] font-bold">직영 공장<br/>+E0 등급 자재</h3>
                <p class="mt-1 text-base max-md:text-sm text-[var(--main-brown03)]">2020년 직영 공장 구축, <br/>품질 클레임 90% 감소</p>
            </div>
        </div>
    </section>
    <section class="container py-24 max-w-[930px]">
        <p class="MainSectionTitleENG text-center">Technology patent</p>
        <h2 class="MainSectionTitle text-center mt-4">업계 유일, 특허청 인증 4건의 독창 기술 <br/>축적된 숙련 기술</h2>
        <div class="mt-16 grid grid-cols-2 max-md:grid-cols-1 gap-5 max-md:gap-2">
            <div class="p-10 max-md:p-5 bg-gray-50 rounded-2xl">
                <img class="ml-auto max-md:w-[60%] max-md:-mb-6" src="<?php echo G5_THEME_URL?>/img/technology-patent-1.webp" alt="특허 10-1707647호">
                <h3 class="text-2xl max-md:text-[20px] font-bold">익스텐션 기능</h3>
                <p class="mt-2 text-base max-md:text-sm font-semibold">특허 10-1707647호</p>
                <p class="mt-4 text-base max-md:text-sm text-gray-700">2,230mm~2,680mm, 최대 45cm 자유 조절벽에 구멍 뚫지 않고도 천장과 바닥 사이 압착 고정으로 최대 450mm까지 높이 조절이 가능한 특허받은 무타공 드레스룸 기둥 시스템</p>
            </div>
            <div class="p-10 max-md:p-5 bg-gray-50 rounded-2xl">
                <img class="ml-auto max-md:w-[60%] max-md:-mb-6" src="<?php echo G5_THEME_URL?>/img/technology-patent-2.webp" alt="특허 10-1707647호">
                <h3 class="text-2xl max-md:text-[20px] font-bold">행거용 프레임</h3>
                <p class="mt-2 text-base max-md:text-sm font-semibold">특허청 디자인등록 (제30-0808182호)</p>
                <p class="mt-4 text-base max-md:text-sm text-gray-700">알루미늄 프로파일 구조로, 기둥 양쪽에 두 줄의 나사홈이 있어 선반과 행거봉의 높이를 자유롭게 조절할 수 있는 혁신적인 모듈형 프레임</p>
            </div>
            <div class="p-10 max-md:p-5 bg-gray-50 rounded-2xl">
                <img class="ml-auto max-md:w-[60%] max-md:-mb-6" src="<?php echo G5_THEME_URL?>/img/technology-patent-3.webp" alt="특허 10-1707647호">
                <h3 class="text-2xl max-md:text-[20px] font-bold">행거용 연결브라켓</h3>
                <p class="mt-2 text-base max-md:text-sm font-semibold">특허청 디자인등록(제30-0813735호)</p>
                <p class="mt-4 text-base max-md:text-sm text-gray-700">혁신적인 연결 브라켓으로, 알루미늄 프로파일 기둥의 양쪽 홈에 선반과 행거봉을 자유롭게 장찰할 수 있도록 하는 핵심 연결 부품</p>
            </div>
            <div class="p-10 max-md:p-5 bg-gray-50 rounded-2xl">
                <img class="ml-auto max-md:w-[60%] max-md:-mb-6" src="<?php echo G5_THEME_URL?>/img/technology-patent-4.webp" alt="특허 10-1707647호">
                <h3 class="text-2xl max-md:text-[20px] font-bold">선반 고정프레임</h3>
                <p class="mt-2 text-base max-md:text-sm font-semibold">특허청 디자인등록(제30-0813734호)</p>
                <p class="mt-4 text-base max-md:text-sm text-gray-700">혁신적인 선반 고정 시스템으로, 기둥의 나사홈에 정확하게 결합하여 선반을 견고하게 고정하면서도 높이 조절과 해체가 용이한 핵심 고정 부품</p>
            </div>
        </div>
    </section>
    <section class="bg-[--bg-beige] py-24 max-md:py-16">
        <div class="container">
            <p class="MainSectionTitleENG text-center">4-Step Quotation Process</p>
            <p class="text-2xl font-bold text-center mt-4">견적, 더이상 망설이지 마세요</p>
            <h2 class="MainSectionTitle text-center mt-4">간단한 4단계로 완성되는 <br/>부담 없는 견적 프로세스</h2>
            <!-- Cards grid -->
            <style>
                .process-card-with-arrow {
                    position: relative;
                }
                .process-card-with-arrow::before {
                    content: '';
                    position: absolute;
                    top: 50%;
                    left: -2rem;
                    transform: translateY(-50%);
                    width: 40px;
                    height: 40px;
                    background-image: url('<?php echo G5_THEME_URL?>/img/arrow-brown.svg');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }
                @media (max-width: 768px) {
                    .process-card-with-arrow::before {
                        top: auto;
                        left: 50%;
                        bottom: auto;
                        top: -2rem;
                        transform: translateX(-50%) rotate(90deg);
                    }
                }
            </style>
            <div class="mt-12 grid grid-cols-4 max-md:grid-cols-1 gap-5">
                <div class="p-6 rounded-2xl bg-white">
                    <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/process-1.webp" alt="손그림 전송">
                    <div class="mt-2 flex items-center">
                        <h3 class="text-xl max-md:text-[17px] font-bold text-[--main-brown01]">1단계</h3>
                        <span class="w-[1px] h-[16px] bg-[#eee] mx-2"></span>
                        <h4 class="text-2xl font-bold max-md:text-xl">손그림 전송</h4>
                    </div>
                    <p class="mt-2 text-base max-md:text-sm">간단한 손그림이나 도면을 전송하세요. 카카오톡, 이메일 무엇이든 OK</p>
                </div>
                <div class="process-card-with-arrow p-6 rounded-2xl bg-white max-md:pt-0">
                    <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/process-2.webp" alt="손그림 전송">
                    <div class="mt-2 flex items-center">
                        <h3 class="text-xl max-md:text-[17px] font-bold text-[--main-brown01]">2단계</h3>
                        <span class="w-[1px] h-[16px] bg-[#eee] mx-2"></span>
                        <h4 class="text-2xl font-bold max-md:text-xl">맞춤 3D 도면 제공</h4>
                    </div>
                    <p class="mt-2 text-base max-md:text-sm ">전문 설계사가 3D도면을 제작합니다. 정확한 치수와 디자인 확인</p>
                </div>
                <div class="process-card-with-arrow p-6 rounded-2xl bg-white max-md:pt-0">
                    <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/process-3.webp" alt="손그림 전송">
                    <div class="mt-2 flex items-center">
                        <h3 class="text-xl max-md:text-[17px] font-bold text-[--main-brown01]">3단계</h3>
                        <span class="w-[1px] h-[16px] bg-[#eee] mx-2"></span>
                        <h4 class="text-2xl font-bold max-md:text-xl">전문가 상담</h4>
                    </div>
                    <p class="mt-2 text-base max-md:text-sm">설계안을 바탕으로 상세 상담 자재, 색상, 설치 일정 논의</p>
                </div>
                <div class="process-card-with-arrow p-6 rounded-2xl bg-white max-md:pt-0" max-md:pt-0>
                    <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/process-4.webp" alt="손그림 전송">
                    <div class="mt-2 flex items-center">
                        <h3 class="text-xl max-md:text-[17px] font-bold text-[--main-brown01]">4단계</h3>
                        <span class="w-[1px] h-[16px] bg-[#eee] mx-2"></span>
                        <h4 class="text-2xl font-bold max-md:text-xl">최종 결정</h4>
                    </div>
                    <p class="mt-2 text-base max-md:text-sm">모든 것이 확정되면 계약 진행 부담 없이 충분히 고민하세요</p>
                </div>
            </div>
            <!-- Cards grid -->
             <p class="H5 text-[--main-brown02] text-center font-semibold mt-12">부담 없이 지금 바로 문의하세요</p>
             <div class="mt-6 flex max-md:flex-col justify-center gap-4 max-md:gap-2">
                <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                    <img src="<?php echo G5_THEME_URL?>/img/btn-contact-icon.png">
                    <span class="text-base font-semibold">간편 견적 문의</span>
                    <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                </a>
                <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                    <img src="<?php echo G5_THEME_URL?>/img/btn-talk-icon.png">
                    <span class="text-base font-semibold">실시간 카톡 상담</span>
                    <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                </a>
             </div>
        </div>
    </section>
    <section class="py-24 flex flex-col gap-12 text-center items-center bg-[url(<?php echo G5_THEME_URL?>/img/indexCta.webp)] bg-cover">
        <p class="text-3xl max-md:text-xl font-bold leading-[1.5] text-white">지금 바로 무료 견적을 받아보세요 <br/>10년 경험의 전문가가 <br class="md:hidden"/>24시간 내에 3D 설계안을 제공합니다.</p>
        <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
            <img src="<?php echo G5_THEME_URL?>/img/btn-contact-icon.png">
            <span class="text-base font-semibold">무료 견적 상담 시작하기</span>
            <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
        </a>
    </section>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');