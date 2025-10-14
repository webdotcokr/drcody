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
    <section class="">
        <h2>쉽게 따라하는 셀프 이전</h2>
        <p>디알코디를 선택한 가장 큰 이유, 바로 '이사할 때 가져갈 수 있다'는 약속을 현실로 만들 시간입니다. <br/>드라이버 하나만 준비하세요. 나머지는 저희가 영상으로 완벽하게 안내해 드립니다.</p>
        <video></video>
    </section>
    <section class="bg-gray-50">
        <h3>STEP 1</h3>
        <p>시작이 반! 이것만 준비하세요.</p>
        <div>
            <div class="">
                <h4><span></span>못 비우기</h4>
                <h5>옷과 물품을 모두 빼주세요.</h5>
                <div>
                    <img src="">
                    <p>빈 시스템행거</p>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <h3>STEP 2</h3>
        <p>분해는 조립의 역순? <br/>디알코디는 더 쉽습니다.</p>
        <div>
            <img src="">
            <div>
                <h4>선반과 옷봉 분리</h4>
                <h5>도구 없이 손으로! 선반을 가볍게 들어 올려 홈에서 빼내면 끝.</h5>
                <a href="" class="btn default">영상으로 보기</a>
            </div>
        </div>
    </section>
    <section class="bg-gray-50">
        <h3>STEP 3</h3>
        <h4>전문가처럼 안전하게 포장하기</h4>
        <div>
            <!-- CARD -->
            <div>
                <div>
                    <h5>선반</h5>
                    <h6>같은 크기끼리 묶어주세요.</h6>
                </div>
                <img src="">
            </div>
        </div>
    </section>
    <section>
        <h3>STEP 4</h3>
        <p>새로운 공간, 완벽한 재탄생</p>
        <p>방 구조가 바뀌어도 괜찮아요. 내 집에 딱 맞게 조립해 보세요.</p>
        <div>
            <!-- CARD -->
            <div>
                <img src="" alt="">
                <div>
                    <div><span>4-1</span>중요! 설치의 80%는 여기서 결정됩니다</div>
                    <div>
                        <h4>자재 배치</h4>
                        <p>조립보다 중요한 미리 세워두기</p>
                        <h5>도면을 보고 설치할 벽면에 기둥과 선반을 미리 기대어 놓으세요. <br/>작업 속도와 정확도가 완전히 달라집니다.</h5>
                        <div class="bg-gray-50">
                            <span>TIP 헷갈리는 기둥 구분법</span>
                            <p>왼쪽 기둥: 날개(브라켓)가 오른쪽을 향함<br/>오른쪽 기둥: 날개(브라켓)가 왼쪽을 향함</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="bg-[url()]">
            <img src="" alt="">
            <p>축하합니다!</p>
            <h3>디알코디와 함께 성공적인 셀프 이전을 완료하셨습니다.</h3>
        </div>
        <div>
            <!-- CARD -->
            <div>
                <img src="">
                <div>
                    <h4>드레스룸 이전 설치가 끝나셨나요?</h4>
                    <h5>혹시 남는 공간이 있다면 모듈을 추가하여 수납을 더 늘릴 수 있습니다.</h5>
                    <a href="" class="btn default">추가 모듈 상담하기</a>
                </div>
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
