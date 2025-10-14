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
            <h1 class="PageTitleText">전문가 이전 서비스</h1>
            <p class="mt-2 PageSubTitleText font-medium">전문가의 손길로 완성하는 새로운 시작<br/> 이사 걱정 없이, 디알코디 드레스룸을 그대로 가져가세요</p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href=""><button class="H6 btn md ">셀프 이전 가이드</button></a>
                <a href=""><button class="H6 btn md active">전문가 이전 서비스</button></a>
                <a href=""><button class="H6 btn md">이전설치 신청</button></a>
            </div>
        </div>    
    </section>
    <section class="container">
        <h2>바쁜 이사, 드레스룸 걱정은 이제 그만!</h2>
        <div>
            <!-- CARD -->
            <div>
                <img src="" alt="">
                <h4>전문가의 손길이 닿는 완벽함</h4>
                <p>간결한 구조의 어렵지 않은 설치 방식이지만, <br/>더 완벽한 드레스룸 설치를 원하신다면 <br/>전문가 이전 설치 서비스로 완성도를 높여드립니다</p>
            </div>
        </div>
        <div>
            <img src="">
            <p>디알코디는 고객 10명 중 8명이 직접 이전 설치에 성공할 만큼 쉽습니다.</p>
            <p>하지만, 바쁜 이사 중에도 최고의 편의를 원하신다면, <br/>디알코디 전문가 팀이 함께합니다!</p>
        </div>
    </section>
    <section class="container bg-gray-50">
        <h2>간편한 이전 설치, 4단계로 심플하게</h2>
        <div class="flex">
            <!-- CARD -->
            <div>
                <img src="" alt="">
                <div>
                    <span>1</span>
                    <h3>간편 이전 설치 상담</h3>
                    <p>품격 있는 이전을 위한 첫 단계, <br/>홈페이지 또는 <br/>카카오톡 채널을 통해 연락주세요</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <img src="" alt="">
        <h2>예약부터 완료까지, 모든 것을 미리 확인하세요</h2>
        <div>
            <div>
                <h3>예약 프로세스 상세</h3>
                <div class="flex flex-col gap-4">
                    <div>
                        <h4>예약 가능 시간</h4>
                        <h5>평일 09:00-18:00, 토요일 09:00-15:00</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2>어떤 상황에서도 <br/>완벽한 해결책을 제공합니다</h2>
        <!-- CONTAINER -->
        <div>
            <!-- CRAD -->
            <div>
                <img src="" alt="">
                <div>
                    <h3>구조적 제약 상황</h3>
                    <h4>천장 높이 2.3m 미만 또는 2.7m 초과: 별도 상담</h4>
                    <h4>경사 천장: 특수 브라켓 추가 (별도 비용)</h4>
                    <h4>노출부: 우회 설치 방안 제안</h4>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2>이전 설치 비용 매뉴얼, 투명하고 합리적입니다</h2>
        <p>간결한 구조로 이삿짐 센터에서도 가능하지만, <br/>저희 전문가의 정교한 이전 설치는 새 공간에서도 완벽한 드레스룸을 선사합니다.</p>
        <p><img src="" alt="check-icon">심플한 계산법, 기둥 수로 파악하세요.</p>
        <!-- CONTAINER -->
        <div>
            <!-- CARD -->
            <div>
                <h3>옵션 A</h3>
                <h4>해체 <span>+</span> 운반 <span>+</span> 재설치</h4>
                <h5>현재 집에서 해체부터 <br/>새 집 이전 설치까지 완벽한 토탈 서비스</h5>
                <hr/>
                <h6><span>기둥 6개 이하 :</span> 120,000원(고정)</h6>
                <h6><span>기둥 7개 이상 :</span> 기둥 개수 x 20,000원</h6>
            </div>
        </div>
        <p>※ 서비스 지역에 따라 비용 변동이 있을 수 있으니, 정확한 맞춤형 견적은 별도 문의 바랍니다.</p>
    </section>
    <section>
        <p>타사와 비교 불가!</p>
        <h2>디알코디만의 독보적인 이전설치 서비스</h2>
        <!-- table -->
    </section>
    <section>
        <!-- CONTAINER -->
        <div>
            <!-- CRAD -->
            <div>
                <img src="" alt="">
                <p>30,000+</p>
                <o>가구 이상 누적 설치</o>
            </div>
            <!-- divider -->
            <div class="w-[1px]"></div>
        </div>
    </section>


    
    <section class="py-24 flex flex-col gap-4 text-center text-white items-center bg-[url(<?php echo G5_THEME_URL?>/img/guideCta.webp)]">
        <p class="H3 font-bold leading-[1.5] text-white">새로운 공간에서의 품격 있는 시작, <br/>디알코디가 완성해 드리겠습니다 <br/>소중한 문의를 기다립니다</p>
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
            <span class="text-base font-semibold text-black">이전설치 상담하기</span>
            <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
        </a>
    </section>
</main>

<?php
include_once(G5_PATH.'/tail.php');  // 푸터 포함
?>
