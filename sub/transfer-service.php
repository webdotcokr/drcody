<?php
include_once('../common.php');  // 공통 설정 불러오기
$g5['title'] = "서브페이지 제목";  // 페이지 제목 설정
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
include_once(G5_PATH.'/head.php');  // 헤더 포함
?>
<!-- 페이지 컨텐츠 영역 HTML 작성 -->
<main>
    <section class="pt-[160px] pb-[60px] bg-[url(<?php echo G5_THEME_URL?>/img/moveServiceIntro.webp)] bg-cover">
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
    <section class="py-16 container">
        <h2 class="SectionTitleText font-bold text-center">바쁜 이사, <br class="md:hidden"/>드레스룸 걱정은 이제 그만!</h2>
        <div class="mt-8 grid grid-cols-3 gap-3 max-md:grid-cols-1 max-md:gap-12">
            <!-- CARD -->
            <div class="text-center flex flex-col gap-2">
                <img class="mb-4" src="<?php echo G5_THEME_URL?>/img/moveService-1.webp" alt="">
                <h4 class="H4 font-bold">전문가의 손길이 닿는 완벽함</h4>
                <p class="text-base max-md:mt-2">간결한 구조의 어렵지 않은 설치 방식이지만, <br/>더 완벽한 드레스룸 설치를 원하신다면 <br/>전문가 이전 설치 서비스로 완성도를 높여드립니다</p>
            </div>
            <!-- CARD -->
            <div class="text-center flex flex-col gap-2">
                <img class="mb-4" src="<?php echo G5_THEME_URL?>/img/moveService-2.webp" alt="">
                <h4 class="H4 font-bold">벽면 보존의 미학</h4>
                <p class="text-base max-md:mt-2">특허 받은 압착식 기둥으로 벽면에<br/>어떠한 손상도 없이, 어떤 주거 형태에서도<br/>우아하게 존재감을 드러냅니다</p>
            </div>
            <!-- CARD -->
            <div class="text-center flex flex-col gap-2">
                <img class="mb-4" src="<?php echo G5_THEME_URL?>/img/moveService-3.webp" alt="">
                <h4 class="H4 font-bold">지속가능한 아름다움</h4>
                <p class="text-base max-md:mt-2">거주지 변화에도 변함없는 디알코디 시스템행거는 <br/>일시적 소유가 아닌, 지속 가능한 라이프스타일의 <br/>동반자로서 빛을 발합니다</p>
            </div>
        </div>
        <div class="mt-20 p-20 max-md:p-8 flex flex-col gap-6 text-white text-center items-center bg-[url(<?php echo G5_THEME_URL?>/img/moveService-4.webp)] bg-cover rounded-md max-md:rounded-none">
            <img src="<?php echo G5_THEME_URL?>/img/moveServiceSearch.svg">
            <p class="H4 font-bold text-[var(--main-yellow)]">디알코디는 고객 10명 중 8명이 직접 이전 설치에 성공할 만큼 쉽습니다.</p>
            <p class="H5 font-medium">하지만, 바쁜 이사 중에도 최고의 편의를 원하신다면, <br/>디알코디 전문가 팀이 함께합니다!</p>
        </div>
    </section>
    <section class="py-24 bg-gray-50">
        <div class="container">
        <h2 class="SectionTitleText font-bold text-center">간편한 이전 설치, <br class="md:hidden">4단계로 심플하게</h2>
            <div class="mt-10 flex max-md:flex-col text-center gap-4">
                <!-- CARD -->
                <div class="border border-gray-200">
                    <img class="w-full" src="<?php echo G5_THEME_URL?>/img/moveService-5.webp" alt="">
                    <div class="px-4 py-14 max-md:py-6 bg-white flex flex-col gap-2">
                        <div class="m-auto -mt-20 max-md:-mt-12 bg-[var(--main-yellow)] w-10 h-10 rounded-full"><p class="H5 font-bold text-white leading-[40px]">1</p></div>
                        <h3 class="H5 font-bold max-md:text-left">간편 이전 설치 상담</h3>
                        <p class="text-base text-gray-800 max-md:text-left">품격 있는 이전을 위한 첫 단계, <br/>홈페이지 또는 <br/>카카오톡 채널을 통해 연락주세요</p>
                    </div>
                </div>
                <!-- ARROW -->
                 <img class="max-md:hidden" src="<?php echo G5_THEME_URL?>/img/moveServiceArrow.svg" alt="process arrow">
                 <!-- CARD -->
                <div class="border border-gray-200">
                    <img class="w-full" src="<?php echo G5_THEME_URL?>/img/moveService-6.webp" alt="">
                    <div class="px-4 py-14 max-md:py-6 bg-white flex flex-col gap-2">
                        <div class="m-auto -mt-20 max-md:-mt-12 bg-[var(--main-yellow)] w-10 h-10 rounded-full"><p class="H5 font-bold text-white leading-[40px]">2</p></div>
                        <h3 class="H5 font-bold max-md:text-left">정보 및 상세 치수 전달</h3>
                        <p class="text-base text-gray-800 max-md:text-left">이전 예정 공간의 상세 치수와 보유 기둥 구성을 <br/>전달해 주시면, 맞춤형 솔루션으로 <br/>완벽한 이전 계획을 제안해 드립니다</p>
                    </div>
                </div>
                <!-- ARROW -->
                 <img class="max-md:hidden" src="<?php echo G5_THEME_URL?>/img/moveServiceArrow.svg" alt="process arrow">
                 <!-- CARD -->
                <div class="border border-gray-200">
                    <img class="w-full" src="<?php echo G5_THEME_URL?>/img/moveService-7.webp" alt="">
                    <div class="px-4 py-14 max-md:py-6 bg-white flex flex-col gap-2">
                        <div class="m-auto -mt-20 max-md:-mt-12 bg-[var(--main-yellow)] w-10 h-10 rounded-full"><p class="H5 font-bold text-white leading-[40px]">3</p></div>
                        <h3 class="H5 font-bold max-md:text-left">고객님의 일정에 맞춘 예약</h3>
                        <p class="text-base text-gray-800 max-md:text-left">고객님의 일정에 맞추어 방문일을 조율해 드리며, 원활한 진행을 위해 의류만 미리 정돈해 주시면 감사하겠습니다</p>
                    </div>
                </div>
                <!-- ARROW -->
                 <img class="max-md:hidden" src="<?php echo G5_THEME_URL?>/img/moveServiceArrow.svg" alt="process arrow">
                 <!-- CARD -->
                <div class="border border-gray-200">
                    <img class="w-full" src="<?php echo G5_THEME_URL?>/img/moveService-8.webp" alt="">
                    <div class="px-4 py-14 max-md:py-6 bg-white flex flex-col gap-2">
                        <div class="m-auto -mt-20 max-md:-mt-12 bg-[var(--main-yellow)] w-10 h-10 rounded-full"><p class="H5 font-bold text-white leading-[40px]">4</p></div>
                        <h3 class="H5 font-bold max-md:text-left">방문 설치 및 간편 결제</h3>
                        <p class="text-base text-gray-800 max-md:text-left">전문 설치팀이 예정된 일정에 방문하여
꼼꼼한 이전 설치를 해드리며, 
설치 완료 후 현장에서 간편하게 정산해 드립니다</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 container">
        <img class="m-auto max-md:w-[40px]" src="<?php echo G5_THEME_URL?>/img/moveServiceCheck.svg" alt="">
        <h2 class="mt-1 SectionTitleText font-bold text-center">예약부터 완료까지, <br class="md:hidden">모든 것을 미리 확인하세요</h2>
        <!-- Container -->
        <div class="mt-8 grid grid-cols-3 max-md:grid-cols-1 gap-8">
            <!-- CARD -->
            <div class="py-12 px-6 flex flex-col items-center text-center border border-gray-300">
                <h3 class="px-5 py-1.5 H5 font-bold bg-[var(--main-brown01)] text-white rounded-full">예약 프로세스 상세</h3>
                <div class="mt-6 flex flex-col gap-4">
                    <div>
                        <h4 class="H6 font-semibold text-[var(--main-brown01)]">예약 가능 시간</h4>
                        <h5 class="mt-1 H6">평일 09:00-18:00, 토요일 09:00-15:00</h5>
                    </div>
                    <div>
                        <h4 class="H6 font-semibold text-[var(--main-brown01)]">소요 시간</h4>
                        <h5 class="mt-1 H6">기본형 2-3시간, 대형 4-5시간</h5>
                    </div>
                    <div>
                        <h4 class="H6 font-semibold text-[var(--main-brown01)]">예약 변경</h4>
                        <h5 class="mt-1 H6">작업일 2일 전까지 가능</h5>
                    </div>
                    <div>
                        <h4 class="H6 font-semibold text-[var(--main-brown01)]">긴급 예약</h4>
                        <h5 class="mt-1 H6">3일 이내 예약 시 20% 추가 비용</h5>
                    </div>
                </div>
            </div>
            <div class="py-12 px-6 flex flex-col items-center text-center border border-gray-300">
                <h3 class="px-5 py-1.5 H5 font-bold bg-[var(--main-brown01)] text-white rounded-full">작업 전 준비</h3>
                <div class="h-full mt-6 H6 flex flex-col items-center justify-center gap-2">
                    <h4 class="flex items-center gap-2"><img src="<?php echo G5_THEME_URL?>/img/moveServiceMiniCheck.svg" alt="check-icon">드레스룸 내 모든 의류 및 소품 정리</h4>
                    <h4 class="flex items-center gap-2"><img src="<?php echo G5_THEME_URL?>/img/moveServiceMiniCheck.svg" alt="check-icon">기존 설치 위치에서 새 설치 위치까지 이동 경로 확보</h4>
                    <h4 class="flex items-center gap-2"><img src="<?php echo G5_THEME_URL?>/img/moveServiceMiniCheck.svg" alt="check-icon">엘리베이터 사용 가능 시간 확인 (아파트의 경우)</h4>
                    <h4 class="flex items-center gap-2"><img src="<?php echo G5_THEME_URL?>/img/moveServiceMiniCheck.svg" alt="check-icon">주차 공간 확보 (작업차량용)</h4>
                </div>
            </div>
            <div class="py-12 px-6 flex flex-col items-center text-center border border-gray-300">
                <h3 class="px-5 py-1.5 H5 font-bold bg-[var(--main-brown01)] text-white rounded-full">새 설치 공간 준비</h3>
                <div class="h-full mt-6 H6 flex flex-col items-center justify-center gap-2">
                    <h4 class="flex items-center gap-2"><img src="<?php echo G5_THEME_URL?>/img/moveServiceMiniCheck.svg" alt="check-icon">천장 높이 2.3m-2.7m 범위 확인</h4>
                    <h4 class="flex items-center gap-2"><img src="<?php echo G5_THEME_URL?>/img/moveServiceMiniCheck.svg" alt="check-icon">바닥과 천장이 수평인지 확인</h4>
                    <h4 class="flex items-center gap-2"><img src="<?php echo G5_THEME_URL?>/img/moveServiceMiniCheck.svg" alt="check-icon">설치 공간 청소 완료</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[url(<?php echo G5_THEME_URL?>/img/moveService-9.webp)] bg-cover">
        <div class="container">
            <h2 class="SectionTitleText font-bold text-white max-md:text-center">어떤 상황에서도 <br/>완벽한 해결책을 제공합니다</h2>
            <!-- CONTAINER -->
            <div class="mt-8 grid grid-cols-2 max-md:grid-cols-1 gap-6">
                <!-- CRAD -->
                    <div class="p-10 max-md:p-8 max-md:px-4 bg-white flex gap-6 max-md:gap-3 rounded-md">
                        <img class="max-md:mb-auto max-md:w-[40px]" src="<?php echo G5_THEME_URL?>/img/moveServiceIcon-1.svg" alt="">
                        <div class="flex flex-col gap-2">
                            <h3 class="H5 font-bold">구조적 제약 상황</h3>
                            <h4 class="text-base">천장 높이 2.3m 미만 또는 2.7m 초과: 별도 상담</h4>
                            <h4 class="text-base">경사 천장: 특수 브라켓 추가 (별도 비용)</h4>
                            <h4 class="text-base">노출부: 우회 설치 방안 제안</h4>
                        </div>
                    </div>
                     <!-- CRAD -->
                    <div class="p-10 max-md:p-8 max-md:px-4 bg-white flex gap-6 max-md:gap-3 rounded-md">
                        <img class="max-md:mb-auto max-md:w-[40px]" src="<?php echo G5_THEME_URL?>/img/moveServiceIcon-2.svg" alt="">
                        <div class="flex flex-col gap-2">
                            <h3 class="H5 font-bold">부족/추가 구성품 대응</h3>
                            <h4 class="text-base">기존 구성품 분실: 개별 구매 후 설치</h4>
                            <h4 class="text-base">공간 확장: 추가 구성품과 함께 통합 설치</h4>
                            <h4 class="text-base">레이아웃 변경: 무료 재설계 서비스</h4>
                        </div>
                    </div>
                     <!-- CRAD -->
                    <div class="p-10 max-md:p-8 max-md:px-4 bg-white flex gap-6 max-md:gap-3 rounded-md">
                        <img class="max-md:mb-auto max-md:w-[40px]" src="<?php echo G5_THEME_URL?>/img/moveServiceIcon-3.svg" alt="">
                        <div class="flex flex-col gap-2">
                            <h3 class="H5 font-bold">운반 관련 특수 사항</h3>
                            <h4 class="text-base">장거리 이전 (100km 이상): 운반비 별도</h4>
                            <h4 class="text-base">계단 이용: 3층 이상 시 추가비용</h4>
                            <h4 class="text-base">좁은 통로: 분해/조립 추가 시간 소요</h4>
                        </div>
                    </div>
                     <!-- CRAD -->
                    <div class="p-10 max-md:p-8 max-md:px-4 bg-white flex gap-6 max-md:gap-3 rounded-md">
                        <img class="max-md:mb-auto max-md:w-[40px]" src="<?php echo G5_THEME_URL?>/img/moveServiceIcon-4.svg" alt="">
                        <div class="flex flex-col gap-2">
                            <h3 class="H5 font-bold">설치 중 문제 발생 대응</h3>
                            <h4 class="text-base">천장/바닥 수평 불량: 현장에서 즉시 조정</h4>
                            <h4 class="text-base">부품 손상 발견: 예비 부품으로 즉시 교체</h4>
                            <h4 class="text-base">설치 공간 부족: 대안 위치 제안 및 재설계</h4>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section class="py-20 container text-center">
        <h2 class="SectionTitleText font-bold text-center">이전 설치 비용 매뉴얼, <br class="md:hidden"/>투명하고 합리적입니다</h2>
        <p class="mt-6 H6">간결한 구조로 이삿짐 센터에서도 가능하지만, <br/>저희 전문가의 정교한 이전 설치는 새 공간에서도 완벽한 드레스룸을 선사합니다.</p>
        <!-- CONTAINER -->
        <p class="mt-12 flex items-center gap-2 H5 font-bold text-[var(--main-brown01)]"><img class="w-7" src="<?php echo G5_THEME_URL?>/img/moveServiceCheck.svg" alt="check-icon">심플한 계산법, 기둥 수로 파악하세요.</p>
        <div class="mt-8 grid grid-cols-3 gap-10 max-md:grid-cols-1 max-md:gap-4">
            <!-- CARD -->
            <div class="p-12 max-md:p-8 border border-gray-300">
                <h3 class="mt-2 py-2 px-6 inline-block H5 text-white font-bold bg-[var(--main-brown01)] rounded-full">옵션 A</h3>
                <h4 class="mt-4 H5 font-bold">해체 <span class="text-gray-400">+</span> 운반 <span class="text-gray-400">+</span> 재설치</h4>
                <h5 class="mt-6 text-base font-medium text-gray-800 max-md:mt-4">현재 집에서 해체부터 <br/>새 집 이전 설치까지 완벽한 토탈 서비스</h5>
                <div class="my-8 w-full h-[1px] bg-gray-200"></div>
                <div class="text-left">
                    <h6 class="H6 font-semibold"><span class="text-[var(--main-brown01)]">기둥 6개 이하 :</span> 120,000원(고정)</h6>
                    <h6 class="H6 font-semibold"><span class="text-[var(--main-brown01)]">기둥 7개 이상 :</span> 기둥 개수 x 20,000원</h6>
                </div>
            </div>
            <div class="p-12 max-md:p-8 border border-gray-300">
                <h3 class="mt-2 py-2 px-6 inline-block H5 text-white font-bold bg-[var(--main-brown01)] rounded-full">옵션 B</h3>
                <h4 class="mt-4 H5 font-bold">재설치만</h4>
                <h5 class="mt-6 text-base font-medium text-gray-800 max-md:mt-4">이전 재설치만 원하시나요? <br/>재설치만 진행해드리는 재설치 특화 서비스</h5>
                <div class="my-8 w-full h-[1px] bg-gray-200"></div>
                <div class="text-left">
                    <h6 class="H6 font-semibold"><span class="text-[var(--main-brown01)]">기둥 6개 이하 :</span> 60,000원(고정)</h6>
                    <h6 class="H6 font-semibold"><span class="text-[var(--main-brown01)]">기둥 7개 이상 :</span> 기둥 개수 x 10,000원</h6>
                </div>
            </div>
            <div class="p-12 max-md:p-8 border border-gray-300">
                <h4 class="mt-4 H5 font-bold">추가 비용 안내</h4>
                <h5 class="mt-6 text-base font-medium text-gray-800 max-md:mt-4">고객님께 더 안전하고 견고한 설치를 위해,  <br/>현장 상황에 따라 추가 비용이 발생할 수 있습니다.</h5>
                <div class="my-8 w-full h-[1px] bg-gray-200"></div>
                <div class="text-left">
                    <h6 class="H6 font-semibold"><span class="text-[var(--main-brown01)]">긴급 예약 (3일 이내) : </span> 기본 요금의 20% 추가</h6>
                    <h6 class="H6 font-semibold"><span class="text-[var(--main-brown01)]">장거리 운반 (100km 이상) : </span> 별도 견적</h6>
                    <h6 class="H6 font-semibold"><span class="text-[var(--main-brown01)]">계단 이용 (3층 이상) :  </span> 층당 10,000원 추가</h6>
                </div>
            </div>
        </div>
        <p class="mt-8 text-base text-gray-500">※ 서비스 지역에 따라 비용 변동이 있을 수 있으니, <br class="md:hidden">정확한 맞춤형 견적은 별도 문의 바랍니다.</p>
    </section>
    <section class="py-20 container flex flex-col items-center">
        <p class="SectionTitleText font-bold text-center">타사와 비교 불가!</p>
        <h2 class="mt-4 H6 font-medium">디알코디만의 독보적인 이전설치 서비스</h2>
        <img class="mt-8 max-w-[870px] max-md:hidden" src="<?php echo G5_THEME_URL?>/img/moveServiceTable.webp" alt="">
        <img class="mt-8 md:hidden" src="<?php echo G5_THEME_URL?>/img/moveServiceTable-mo.webp" alt="">
        <!-- table -->
    </section>
    <section class="py-16  max-md:py-10 bg-[#F7F2EE]">
        <!-- CONTAINER -->
        <div class="container flex items-center justify-center gap-20 max-md:gap-6">
            <!-- CRAD -->
            <div class="flex flex-col items-center gap-1">
                <img class="max-md:w-[40px]" src="<?php echo G5_THEME_URL?>/img/moveServiceIcon-5.svg" alt="check-icon"" alt="">
                <p class="H1 font-bold max-md:text-[20px]">30,000+</p>
                <p class="H6 font-bold text-[var(--main-brown01)] max-md:text-[13px]">가구 이상 누적 설치</p>
            </div>
            <!-- divider -->
            <div class="w-[1px] h-[85px] max-md:h-[50px] bg-gray-300"></div>
            <!-- CRAD -->
            <div class="flex flex-col items-center gap-1">
                <img class="max-md:w-[40px]" src="<?php echo G5_THEME_URL?>/img/moveServiceIcon-6.svg" alt="check-icon"" alt="">
                <p class="H1 font-bold max-md:text-[20px]">99.8%</p>
                <p class="H6 font-bold text-[var(--main-brown01)] max-md:text-[13px]">고객 만족도</p>
            </div>
            <!-- divider -->
            <div class="w-[1px] h-[85px] max-md:h-[50px] bg-gray-300"></div>
            <!-- CRAD -->
            <div class="flex flex-col items-center gap-1">
                <img class="max-md:w-[40px]" src="<?php echo G5_THEME_URL?>/img/moveServiceIcon-7.svg" alt="check-icon"" alt="">
                <p class="H1 font-bold max-md:text-[20px]">98%</p>
                <p class="H6 font-bold text-[var(--main-brown01)] max-md:text-[13px]">재구매 의향</p>
            </div>
        </div>
    </section>

    <section class="py-24 flex flex-col gap-4 text-center text-white items-center bg-[url(<?php echo G5_THEME_URL?>/img/guideCta.webp)] bg-cover">
        <p class="H3 font-bold leading-[1.5] text-white">새로운 공간에서의 품격 있는 시작, <br/>디알코디가 완성해 드리겠습니다 <br/>소중한 문의를 기다립니다</p>
        <div class="flex gap-3 max-md:flex-col">
            <div class="flex flex-col items-start px-8 py-6 text-left bg-[black/60] border border-[#565254]">
                <div class="flex items-center gap-2 H5 font-bold"><img src="<?php echo G5_THEME_URL?>/img/kakaotalk.svg"><span>카카오톡 채널</span></div>
                <p class="mt-1 text-sm opacity-80">카카오톡 채널 상담을 통해 실시간 문의가 가능합니다</p>
                <a href=""><p class="border-b pb-1 inline-block mt-4 H6 font-bold flex gap-3">카톡ID  @디알코디<img class="h-[10px] m-auto" src="<?php echo G5_THEME_URL?>/img/moveServiceCtaArrow.svg"></p></a>
            </div>
            <div class="flex flex-col items-start px-8 py-6 text-left bg-[black/60] border border-[#565254]">
                <div class="flex items-center gap-2 H5 font-bold"><img src="<?php echo G5_THEME_URL?>/img/message.svg"><span>웹사이트 문의</span></div>
                <p class="mt-1 text-sm opacity-80">궁금한 사항을 언제든 문의하세요. (24시간 접수 가능)</p>
                <a href=""><p class="border-b pb-1 inline-block mt-4 H6 font-bold flex gap-3">문의하기<img class="h-[10px] m-auto" src="<?php echo G5_THEME_URL?>/img/moveServiceCtaArrow.svg"></p></a>
            </div>
            <div class="px-8 py-6 text-left bg-[black/60] border border-[#565254]">
                <div class="flex items-center gap-2 H5 font-bold"><img src="<?php echo G5_THEME_URL?>/img/guide-call.svg"><span>전화상담</span></div>
                <p class="mt-1 text-sm opacity-80">월~금 9:00 ~ 18:00 / 주말&공휴일 9:00 ~ 17:00</p>
                <p class="mt-4 H3 font-bold">1588-1234</p>
            </div>
            
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
