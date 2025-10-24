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
            <h1 class="PageTitleText">셀프 이전 가이드</h1>
            <p class="mt-2 PageSubTitleText font-medium">전문가 없이도 괜찮아요. <br/>10명 중 8명이 직접 해낸 셀프 이전설치</p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href=""><button class="H6 btn md ">셀프 이전 가이드</button></a>
                <a href=""><button class="H6 btn md active">전문가 이전 서비스</button></a>
                <a href=""><button class="H6 btn md">이전설치 신청</button></a>
            </div>
        </div>    
    </section>
    <section class="py-20 flex flex-col items-center">
        <h2 class="SectionTitleText font-bold"">쉽게 따라하는 셀프 이전</h2>
        <p class="mt-4 H6 font-medium text-center">디알코디를 선택한 가장 큰 이유, 바로 '이사할 때 가져갈 수 있다'는 약속을 현실로 만들 시간입니다. <br/>드라이버 하나만 준비하세요. 나머지는 저희가 영상으로 완벽하게 안내해 드립니다.</p>
        <video></video>
    </section>
    <section class="bg-gray-50">
        <div class="py-20 container flex flex-col">
            <h3 class="SectionTitleText font-bold text-gray-400 text-center">STEP 1</h3>
            <p class="mt-1 SectionTitleText font-bold text-center">시작이 반! 이것만 준비하세요.</p>
            <div class="mt-12 grid grid-cols-3 gap-3 max-md:grid-cols-1">
                <!-- CARD -->
                <div class="px-16 py-12 max-md:px-8 max-md:py-8 bg-white border border-gray-300">
                    <h4 Class="check H5 font-bold max-md:mb-2">옷 비우기</h4>
                    <h5 class="text-lg font-medium text-[var(--main-brown02)] max-md:text-base">옷과 물품을 모두 빼주세요.</h5>
                    <div class="mt-10 max-md:mt-7 flex items-center justify-center">
                        <img src="<?php echo G5_THEME_URL?>/img/transferGuideIcon-1.svg">
                    </div>
                </div>
                <div class="px-16 py-12 max-md:px-8 max-md:py-8 bg-white border border-gray-300">
                    <h4 Class="check H5 font-bold max-md:mb-2">도구 준비</h4>
                    <h5 class="text-lg font-medium text-[var(--main-brown02)] max-md:text-base">십자드라이버(또는 전동드릴), <br/>포장용 테이프 딱 두 가지만 있으면 됩니다.</h5>
                    <div class="mt-10 max-md:mt-7 flex items-center justify-center gap-10">
                        <img src="<?php echo G5_THEME_URL?>/img/transferGuideIcon-2.svg">
                        <div class="w-[1px] h-[70px] bg-gray-300"></div>
                        <img src="<?php echo G5_THEME_URL?>/img/transferGuideIcon-3.svg">
                    </div>
                </div>
                <div class="px-16 py-12 max-md:px-8 max-md:py-8 bg-white border border-gray-300">
                    <h4 Class="check H5 font-bold max-md:mb-2">공간 확보</h4>
                    <h5 class="text-lg font-medium text-[var(--main-brown02)] max-md:text-base">작업할 수 있는 최소한의 공간을 만들어주세요.</h5>
                    <div class="mt-10 max-md:mt-7 flex items-center justify-center">
                        <img src="<?php echo G5_THEME_URL?>/img/transferGuideIcon-4.svg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-20 flex flex-col items-center max-md:py-15">
        <h3 class="SectionTitleText font-bold text-gray-400">STEP 2</h3>
        <p class="mt-1 SectionTitleText font-bold text-center">분해는 조립의 역순? <br/>디알코디는 더 쉽습니다.</p>
        <!-- CARD -->
        <div class="mt-12 max-md:mt-4 grid grid-cols-2 max-md:grid-cols-1 items-center gap-20 max-md:items-start max-md:gap-6">            
            <img src="<?php echo G5_THEME_URL?>/img/transferGuide-1.webp">
            <div class="">
                <h4 class="check H5 font-bold">선반과 옷봉 분리</h4>
                <h5 class="mt-1 text-lg font-medium text-[var(--main-brown02)] max-md:text-base">도구 없이 손으로! 선반을 가볍게 들어 올려 홈에서 빼내면 끝.</h5>
                <a href="" class="mt-7 max-md:mt-4 btn default">영상으로 보기</a>
            </div>
        </div>
        <!-- CARD -->
        <div class="mt-12 max-md:mt-4 grid grid-cols-2 max-md:grid-cols-1 items-center gap-20 max-md:items-start max-md:gap-6">            
            <img src="<?php echo G5_THEME_URL?>/img/transferGuide-2.webp">
            <div class="">
                <h4 class="check H5 font-bold">서랍장 및 가구 모듈 분리</h4>
                <h5 class="mt-1 text-lg font-medium text-[var(--main-brown02)] max-md:text-base">서랍 안쪽의 고정 볼트만 풀어주세요. <br class="md:hidden">서랍 레일은 <br/>분리하지 않아도 괜찮아요!</h5>
                <div class="mt-4 p-4 w-full bg-gray-50 rounded-sm">
                    <span class="text-base font-bold px-2 py-1 bg-[#A5836A]/10 text-[var(--main-brown01)]">서랍 레일 분리 팁!</span>
                    <p class="text-base mt-2">서랍 레일은 따로 분리하지 않아도 됩니다. <br/>기둥에서 서랍 모듈만 분리하면 충분해요.</p>
                </div>
            </div>
        </div>
        <!-- CARD -->
        <div class="mt-12 max-md:mt-4 grid grid-cols-2 max-md:grid-cols-1 items-center gap-20 max-md:items-start max-md:gap-6">            
            <img src="<?php echo G5_THEME_URL?>/img/transferGuide-3.webp">
            <div class="">
                <h4 class="check H5 font-bold">기둥 해체</h4>
                <h5 class="mt-1 text-lg font-medium text-[var(--main-brown02)] max-md:text-base">디알코디의 핵심 기술! 위쪽 스토퍼를 누르면 모든 고정이 해제됩니다. <br/>벽, 천장, 바닥 어디에도 흔적을 남기지 않아요.</h5>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="container flex flex-col items-center">
        <h3 class="SectionTitleText font-bold text-gray-400">STEP 3</h3>
        <h4 class="mt-1 SectionTitleText font-bold">전문가처럼 안전하게 포장하기</h4>
            <!-- CONTAINER -->
            <div class="mt-8 grid grid-cols-3 gap-3 max-md:grid-cols-1">
                <!-- CARD -->
                <div class="p-10 max-md:p-5 border border-gray-300 rounded-md">
                    <div>
                        <h5 class="check H5 font-bold">선반</h5>
                        <h6 class="text-lg font-medium text-[var(--main-brown02)] max-md:mt-1">같은 크기끼리 묶어주세요.<br/><br/></h6>
                    </div>
                    <img class="mt-5 max-md:mt-6" src="<?php echo G5_THEME_URL?>/img/transferGuide-4.webp">
                </div>
                <div class="p-10 max-md:p-5 border border-gray-300 rounded-md">
                    <div>
                        <h5 class="check H5 font-bold">기둥</h5>
                        <h6 class="text-lg font-medium text-[var(--main-brown02)] max-md:mt-1">날개가 서로 엇갈리게 겹쳐 묶으면 <br/>부피가 확 줄고 안전해요.</h6>
                    </div>
                    <img class="mt-5 max-md:mt-6" src="<?php echo G5_THEME_URL?>/img/transferGuide-5.webp">
                </div>
                <div class="p-10 max-md:p-5 border border-gray-300 rounded-md">
                    <div>
                        <h5 class="check H5 font-bold">볼트/부속품</h5>
                        <h6 class="text-lg font-medium text-[var(--main-brown02)] max-md:mt-1">작은 봉투에 모아두면 잃어버릴 염려 끝! <br/>기둥이나 선반에 테이프로 붙여두세요.</h6>
                    </div>
                    <img class="mt-5 max-md:mt-6" src="<?php echo G5_THEME_URL?>/img/transferGuide-6.webp">
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 container flex flex-col items-center">
        <h3 class="SectionTitleText font-bold text-gray-400">STEP 4</h3>
        <p class="mt-1 SectionTitleText font-bold">새로운 공간, 완벽한 재탄생</p>
        <p class="mt-4 H6 font-medium">방 구조가 바뀌어도 괜찮아요. <br class="md:hidden"/>내 집에 딱 맞게 조립해 보세요.</p>
        <div class="mt-8 flex flex-col gap-16">
            <!-- CARD -->
            <div class="flex max-md:flex-col items-center gap-16 max-md:gap-4">
                <img src="<?php echo G5_THEME_URL?>/img/transferGuide-7.webp" alt="">
                <div class="flex flex-col items-start">
                    <div class="p-2 pr-4 H6 font-semibold bg-[var(--main-brown01)] text-white rounded-full"><span class="px-2 py-1 mr-2 rounded-full bg-[var(--main-brown02)]">4-1</span>중요! 설치의 80%는 여기서 결정됩니다</div>
                    <div class="flex flex-col items-start">
                        <h4 class="check mt-4 H5 font-bold">자재 배치</h4>
                        <p class="text-lg font-medium text-[var(--main-brown02)] max-md:mt-2">조립보다 중요한 미리 세워두기</p>
                        <h5 class="mt-2 text-lg font-medium text-[var(--main-brown02)]">도면을 보고 설치할 벽면에 기둥과 선반을 미리 기대어 놓으세요. <br/>작업 속도와 정확도가 완전히 달라집니다.</h5>
                        <div class="mt-4 p-4 w-full bg-gray-50 rounded-sm">
                            <span class="text-base font-bold px-2 py-1 bg-[#A5836A]/10 text-[var(--main-brown01)]">TIP 헷갈리는 기둥 구분법</span>
                            <p class="text-base mt-2">왼쪽 기둥: 날개(브라켓)가 오른쪽을 향함<br/>오른쪽 기둥: 날개(브라켓)가 왼쪽을 향함</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CARD -->
            <div class="flex max-md:flex-col items-center gap-16 max-md:gap-4">
                <img src="<?php echo G5_THEME_URL?>/img/transferGuide-8.webp" alt="">
                <div class="flex flex-col items-start">
                    <div class="p-2 pr-4 H6 font-semibold bg-[var(--main-brown01)] text-white rounded-full"><span class="px-2 py-1 mr-2 rounded-full bg-[var(--main-brown02)]">4-2</span>조립은 레고처럼: 기둥 세우고 선반 끼우기</div>
                    <div class="flex flex-col items-start">
                        <h4 class="check mt-4 H5 font-bold">기둥 고정</h4>
                        <p class="text-lg font-medium text-[var(--main-brown02)] max-md:mt-2">위쪽 스토퍼를 힘껏 눌러 고정하세요. '딸깍' 소리가 나면 완료!</p>
                        <h4 class="check mt-4 H5 font-bold">선반 결합</h4>
                        <p class="text-lg font-medium text-[var(--main-brown02)] max-md:mt-2">선반을 기둥에 '뚝' 소리가 나게 끼워주세요. 소리가 성공의 신호!</p>
                        <div class="mt-4 p-4 w-full bg-gray-50 rounded-sm">
                            <span class="text-base font-bold px-2 py-1 bg-[#A5836A]/10 text-[var(--main-brown01)]">TIP</span>
                            <p class="text-base mt-2">혼자보다 둘이서 하면 훨씬 수월해요!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CARD -->
            <div class="flex max-md:flex-col items-center gap-16 max-md:gap-4">
                <img src="<?php echo G5_THEME_URL?>/img/transferGuide-9.webp" alt="">
                <div class="flex flex-col items-start">
                    <div class="p-2 pr-4 H6 font-semibold bg-[var(--main-brown01)] text-white rounded-full"><span class="px-2 py-1 mr-2 rounded-full bg-[var(--main-brown02)]">4-3</span>완벽한 마무리를 위한 디테일</div>
                    <div class="flex flex-col items-start">
                        <h4 class="check mt-4 H5 font-bold">수평 맞추기</h4>
                        <p class="text-lg font-medium text-[var(--main-brown02)] max-md:mt-2">평계 없이 눈으로 맞춰도 OK! <br/>낮은 쪽 기둥 밑 스토퍼를 돌려 높이를 맞추세요.</p>
                        <h4 class="check mt-4 H5 font-bold">서랍 고정</h4>
                        <p class="text-lg font-medium text-[var(--main-brown02)] max-md:mt-2">서랍 안쪽 볼트를 조여 흔들림 없이 단단하게 만드세요.</p>
                        <h4 class="check mt-4 H5 font-bold">최종 확인</h4>
                        <p class="text-lg font-medium text-[var(--main-brown02)] max-md:mt-2">모든 기둥이 단단히 고정되었는지 흔들어보기.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 container flex flex-col items-center">
        <div class="pt-16 w-[890px] bg-[url(<?php echo G5_THEME_URL?>/img/bomb.webp)] text-center">
            <img class="m-auto mb-4" src="<?php echo G5_THEME_URL?>/img/check-gray.svg" alt="">
            <p class="SectionTitleText font-bold">축하합니다!</p>
            <h3 class="mt-2 PageSubTitleText font-medium">디알코디와 함께 성공적인 셀프 이전을 완료하셨습니다.</h3>
        </div>
        <div class="mt-16 max-md:mt-6 grid grid-cols-2 gap-5 max-md:grid-cols-1">
            <!-- CARD -->
            <div>
                <img src="<?php echo G5_THEME_URL?>/img/transferGuide-10.webp">
                <div class="p-10 max-md:p-6 bg-gray-50">
                    <h4 class="H5 font-bold">드레스룸 이전 설치가 끝나셨나요?</h4>
                    <h5 class="mt-2 text-lg font-medium">혹시 남는 공간이 있다면 모듈을 추가하여 수납을 더 늘릴 수 있습니다.</h5>
                    <a href="" class="mt-5 btn default">추가 모듈 상담하기</a>
                </div>
            </div>
            <!-- CARD -->
            <div>
                <img src="<?php echo G5_THEME_URL?>/img/transferGuide-11.webp">
                <div class="p-10 max-md:p-6 bg-gray-50">
                    <h4 class="H5 font-bold">성공 사례 둘러보기</h4>
                    <h5 class="mt-2 text-lg font-medium">다른 고객들은 어떻게 설치했을까요? <br/>실제 설치 사례를 통해 영감을 얻어보세요.</h5>
                    <a href="" class="mt-5 btn default">시공갤러리 보기</a>
                </div>
            </div>
        </div>
    </section>


    <section class="py-24 max-md:py-20 flex flex-col gap-4 text-center text-white items-center bg-[url(<?php echo G5_THEME_URL?>/img/guideCta.webp)] bg-center bg-cover">
        <p class="text-3xl font-bold leading-[1.5] text-white max-md:text-[24px]">혼자 하기 어려우시다면, <br class="md:hidden">전문가가 달려갑니다.</p>
        <p class="H6">셀프 설치가 부담스럽거나 시간이 부족하신가요? <br class="md:hidden">걱정하지 마세요. <br/>디알코디의 전문 이전설치 서비스를 <br class="md:hidden">합리적인 비용으로 이용하실 수 있습니다.</p>
        <div class="mt-6 flex gap-4 max-md:flex-col max-md:gap-3">
            <div class="px-8 py-6 text-left bg-[#060606]/40 border border-[#565254]">
                <div class="flex items-center gap-2 H5 font-bold"><img src="<?php echo G5_THEME_URL?>/img/guide-call.svg"><span>전화상담</span></div>
                <p class="mt-1 text-sm opacity-80">전문가와 직접 상담하여 맞춤형 솔루션을 제공받으세요.</p>
                <p class="mt-4 H3 font-bold max-md:text-right">1644-0424</p>
            </div>
            <div class="flex flex-col items-start px-8 py-6 text-left bg-[#060606]/40 border border-[#565254]">
                <div class="flex items-center gap-2 H5 font-bold"><img src="<?php echo G5_THEME_URL?>/img/message.svg"><span>출장 서비스</span></div>
                <p class="mt-1 text-sm opacity-80">전국 어디든 전문가가 직접 방문하여 이전설치를 도와드립니다.</p>
                <a class=" "href=""><p class="border-b pb-1 inline-block mt-4 H6 font-bold flex gap-3">이전설치 신청<img class="h-[10px] m-auto" src="<?php echo G5_THEME_URL?>/img/moveServiceCtaArrow.svg"></p></a>
            </div>
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
