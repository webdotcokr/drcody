<?php
header('Content-Type: text/html; charset=utf-8');
include_once('../common.php');
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);
include_once(G5_PATH.'/head.php');
?>

<main>
    <section>
        <div>
            <!-- SLIDE -->
             <img src="">
        </div>
        <div>
            <p class="H6 font-medium text-gray-700">시스템 행거</p>
            <h1 class="H3 font-bold">[DS 1-4] 메티스 ㄷ자형 1700×2900×2500</h1>
            <div class="py-6 my-6 flex flex-col gap-6 border-y border-gray-300">
                <!-- CARD -->
                <div>
                    <h2 class="H6 font-bold text-[var(--main-brown01)]">사이즈</h2>
                    <div>
                        가로 W
                    </div>
                </div>
                <!-- CARD -->
                <div class="flex flex-col gap-2 max-md:flex-row">
                    <h2 class="H6 font-bold text-[var(--main-brown01)]">색상</h2>
                    <h3 class="H6 font-medium">화이트마블 / 화이트 / 웜그레이 / 오크 / 멀바우 / 라이트스톤 / 다크스톤</h3>
                </div>
                <!-- CARD -->
                <div class="flex flex-col gap-2 max-md:flex-row">
                    <h2 class="H6 font-bold text-[var(--main-brown01)]">색상</h2>
                    <h3 class="H6 font-medium">무료배송 & 무료설치 [배송기간 : 수도권 2~4일, 지방은 일정협의]</h3>
                </div>
                <!-- CARD -->
                <div class="flex flex-col gap-2 max-md:flex-row">
                    <h2 class="H6 font-bold text-[var(--main-brown01)]">판매가격</h2>
                    <h3 class="H6 font-medium">가격은 견적문의 바랍니다.</h3>
                </div>
            </div>
            <div class="flex items-center justify-center gap-2">
                <a class="btn default" href="">견적 문의</a>
                <a class="btn default" href="">카톡 견적문의</a>
            </div>
        </div>
    </section>
    <section class="container leading-[1.2]">
        <!-- Delivery System -->
        <div class="bg-[#F8F5F1] rounded-4xl overflow-hidden">
            <p>디알코디 직영 전문 엔지니어팀의 배송 서비스</p>
            <p>Delivery System</p>
            <div class="flex items-center gap-12">
                <!-- CARD -->
                <div>
                    <img src="" alt="">
                    <p class="text-[26px] font-bold">무료 배송&설치</p>
                    <p class="H4">제주도 제외 전국 어디든 전문 기사 방문</p>
                </div>
                <div class="w-[1px] h-[230px] bg-gray-300"></div>
            </div>
            <div class="py-8 px-12 bg-[#F1E8DD]">
                <p class="">주의사항</p>
                <ol>
                    <li>제주도 지역은 배송비가 추가됩니다.</li>
                    <li>곤돌라, 사다리차가 필요한 경우 해당 비용은 고객 부담입니다.</li>
                </ol>
            </div>
        </div>
        <!-- 전체 박스 -->
        <div>
            <div class="py-20 flex flex-col items-center h-[900px]">
                <p class="text-[28px] max-md:text-[14px] font-medium text-[var(--main-brown01)]">Dress Room System Hangers</p>
                <p class="mt-3 text-[60px] max-md:text-[30px] font-bold">메티스 ㄱ자형 드레스룸</p>
                <p class="bg-[var(--main-brown01)] text-white px-5 py-2 rounded-full mt-5 text-[24px] max-md:text-[12px] font-bold">DS3-4 . 서랍선반수납형</p>
            </div>
            <div class="py-20 bg-[var(--main-brown03)] text-white text-center flex flex-col items-center">
                <img src="<?php echo G5_THEME_URL?>/img/detail/icon-1.svg" alt="">
                <p class="mt-3 text-[48px] max-md:text-[24px] font-bold">누적 설치 30,000+, 만족도 99.8%</p>
                <p class="text-[48px] max-md:text-[24px] font-bold">자신 있는 후불 결제 서비스</p>
                <p class="mt-7 text-[30px] max-md:text-[15px]">설치 후 직접 확인해보고 결제하는 후불 결제 서비스 <br/><span class="underline">만족스럽지 못하시다면 100% 환불해드립니다.</span></p>
                <p class="mt-4 text-[20px] max-md:text-[10px] text-gray-600">단, 계약금은 환불되지 않습니다.</p>
                <div class="mt-9 flex">
                    <!-- CARD -->
                    <div class="bg-[#141414] rounded-lg flex flex-col items-center">
                        <img src="<?php echo G5_THEME_URL?>/img/detail/icon-2.svg" alt="">
                        <p class="mt-8 H4 font-semibold text-[var(--main-yellow)] max-md:text-[12px]">계약금만 입금</p>
                        <p class="mt-4 text-[20px] max-md:text-[10px] font-medium">견적 확정 후 <br/>계약금 10만원만 입금</p>
                        <p class="text-base text-gray-500 max-md:text-[8px]">(현금영수증 발행 가능)</p>
                    </div>
                    <img class="-mx-4" src="<?php echo G5_THEME_URL?>/img/detail/yellow-arrow.svg" alt="right-yellow-arrow">
                    ...
                </div>
            </div>
            <div class="py-20 bg-[#F7F2EE] flex flex-col items-center">
                <p class="text-[28px] max-md:text-[14px] font-bold text-[var(--main-brown01)]">DRCODY <span class="font-bold">PREMIUM SYSTEM</span></p>
                <p class="mt-3 text-[44px] max-md:text-[22px] font-bold text-center">디알코디의 <br/>6가지 프리미엄 시스템</p>
                <div class="mt-14 grid grid-cols-3">
                    <!-- CARD -->
                    <div class="p-12">
                        <img src="<?php echo G5_THEME_URL?>/img/detail/icon-5.svg" alt="">
                        <p class="mt-6 text-[25px] max-md:text-[13px] font-semibold text-[var(--main-brown03)] text-center">폭 넓은 높이 조절의<br/><span class="text-[var(--main-brown01)]">무타공 기둥</span></p>
                    </div>
                    <!-- CARD -->
                    <div class="p-12">
                        <img src="<?php echo G5_THEME_URL?>/img/detail/icon-6.svg" alt="">
                        <p class="mt-6 text-[25px] max-md:text-[13px] font-semibold text-[var(--main-brown03)] text-center">최고급 자재 사용<br/><span class="text-[var(--main-brown01)]">국내 본사 제작</span></p>
                    </div>
                    <!-- CARD -->
                    <div class="p-12">
                        <img src="<?php echo G5_THEME_URL?>/img/detail/icon-7.svg" alt="">
                        <p class="mt-6 text-[25px] max-md:text-[13px] font-semibold text-[var(--main-brown03)] text-center">E0 등급<br/><span class="text-[var(--main-brown01)]">친환경 자재 사용</span></p>
                    </div>
                    <!-- CARD -->
                    <div class="p-12">
                        <img src="<?php echo G5_THEME_URL?>/img/detail/icon-8.svg" alt="">
                        <p class="mt-6 text-[25px] max-md:text-[13px] font-semibold text-[var(--main-brown03)] text-center">무료 배송 및<br/><span class="text-[var(--main-brown01)]">무료 설치 서비스</span></p>
                    </div>
                    <!-- CARD -->
                    <div class="p-12">
                        <img src="<?php echo G5_THEME_URL?>/img/detail/icon-9.svg" alt="">
                        <p class="mt-6 text-[25px] max-md:text-[13px] font-semibold text-[var(--main-brown03)] text-center">믿음직한<br/><span class="text-[var(--main-brown01)]">10년 무상 A/S</span>서비스</p>
                    </div>
                    <!-- CARD -->
                    <div class="p-12">
                        <img src="<?php echo G5_THEME_URL?>/img/detail/icon-10.svg" alt="">
                        <p class="mt-6 text-[25px] max-md:text-[13px] font-semibold text-[var(--main-brown03)] text-center">자신있는<br/><span class="text-[var(--main-brown01)]">후불 결제</span>서비스</p>
                    </div>
                </div>
            </div>
            <div class="py-16 flex flex-col items-center">
                <p class="text-[22px] max-md:text-[11px] font-medium text-[var(--main-brown01)]">디알코디 시스템행거만의 차별성</p>
                <p class="mt-3 text-[44px] max-md:text-[22px] font-bold text-center">디알코디 익스텐션 스토퍼만의 차별성</p>
                <img class="mt-8" src="<?php echo G5_THEME_URL?>/img/detail/img-1.webp" alt="디알코디 기둥과 타사 기둥의 비교">
            </div>
            <div class="p-16 flex flex-col items-center">
                <p class="text-[22px] max-md:text-[11px] font-medium text-[var(--main-brown01)]">디알코디의 기술력, 법적으로 보호받는 자부심</p>
                <p class="mt-3 text-[44px] max-md:text-[22px] font-bold text-center">공식 인증이 완료된 기술 특허증</p>
                <img class="mt-8" src="<?php echo G5_THEME_URL?>/img/detail/img-2.webp" alt="디알코디 기둥과 타사 기둥의 비교">
            </div>
            <div class="p-16 flex flex-col items-center">
                <p class="text-[22px] max-md:text-[11px] font-medium text-[var(--main-brown01)]">누구나 쉽게! 편리한 이전 설치</p>
                <p class="mt-3 text-[44px] max-md:text-[22px] font-bold text-center">디알코디 드레스룸의 편리한 이전 설치</p>
                <img class="mt-8" src="<?php echo G5_THEME_URL?>/img/detail/img-3.webp" alt="디알코디 기둥과 타사 기둥의 비교">
            </div>
            <div class="py-20 flex flex-col items-center bg-[#F7F2EE] rounded-[80px_80px_0_0]">
                <p class="text-[28px] max-md:text-[14px] text-[var(--main-brown01)]">SPECIAL <span class="font-bold">POINT</span></p>
                <p class="mt-3 text-[44px] max-md:text-[22px] font-bold">디알코디의 특별한 Point!</p>
                <div class="mt-12 flex flex-col gap-16">
                    <!-- POINT 1 -->
                    <div class="flex flex-col items-center">
                        <p class="text-[22px] max-md:text-[11px] px-4 py-1.5 font-semibold text-white bg-[var(--main-brown01)] rounded-full">Point 1</p>
                        <p class="mt-4 text-[36px] max-md:text-[18px] font-bold text-center">공간은 바뀌어도, 가치는 그대로 <br/>이사할 때도 걱정 없이 가져가세요</p>
                        <div class="mt-8 flex items-center gap-5">
                            <img src="<?php echo G5_THEME_URL?>/img/detail/img-4.webp" alt="">
                            <img src="<?php echo G5_THEME_URL?>/img/detail/img-5.webp" alt="">
                        </div>
                    </div>
                    <!-- POINT 2 -->
                    <div class="flex flex-col items-center">
                        <p class="text-[22px] max-md:text-[11px] px-4 py-1.5 font-semibold text-white bg-[var(--main-brown01)] rounded-full">Point 2</p>
                        <p class="mt-4 text-[34px] max-md:text-[17px] font-bold text-center">천장&선반 높이? 더 이상 제약이 아닙니다 <br/>공간의 변화에 유연하게 대응하다</p>
                        <div class="mt-8 flex items-center gap-5">
                            <div>
                                <img src="<?php echo G5_THEME_URL?>/img/detail/img-6.webp" alt="">
                                <p class="mt-5 text-[28px] max-md:text-[14px] font-medium text-center">이사 시, 천장 높이가 달라져도 <br/>최대 45cm까지 늘어나는 기둥</p>
                            </div>
                            <div>
                                <img src="<?php echo G5_THEME_URL?>/img/detail/img-7.webp" alt="">
                                <p class="mt-5 text-[28px] max-md:text-[14px] font-medium text-center">설치와 해체가 간편하고 <br/>자유롭게 조절 가능한 선반</p>
                            </div>
                        </div>
                    </div>
                    <!-- POINT 3-->
                    <div class="flex flex-col items-center">
                        <p class="text-[22px] max-md:text-[11px] px-4 py-1.5 text-white font-semibold bg-[var(--main-brown01)] rounded-full">Point 3</p>
                        <p class="mt-4 text-[34px] max-md:text-[17px] font-bold text-center">처음부터 끝까지, 비용은 없습니다 <br/>배송부터 설치까지 무료로</p>
                        <div class="mt-8 flex items-center gap-5">
                            <img src="<?php echo G5_THEME_URL?>/img/detail/img-8.webp" alt="">
                            <img src="<?php echo G5_THEME_URL?>/img/detail/img-9.webp" alt="">
                        </div>
                        <p class="mt-8 text-[25px] max-md:text-[13px] text-center text-[var(--main-brown02)]"><span class="underline">전문 설치팀이 정성스럽고 완벽하게 설치해드립니다.</span> <br/>디알코디가 드리는 특별한 서비스입니다.</p>
                    </div>
                </div>
            </div>
            <!-- POINT 4 -->
            <div class="py-18 bg-[url(<?php echo G5_THEME_URL?>/img/detail/img-10.webp)] text-white h-[900px] flex flex-col items-center bg-cover">
                <p class="text-[22px] max-md:text-[11px] px-4 py-1.5 font-semibold text-white bg-black rounded-full">Point 4</p>
                <p class="mt-4 text-[34px] max-md:text-[17px] font-bold text-center">드레스룸을 디자인하다, <br/>라이프스타일을 완성하다</p>
                <p class="mt-8 text-[25px] max-md:text-[13px] font-medium text-center">선반, 서랍, 행거 등 20여가지의 모듈을 자유롭게 조합하여 <br/>세상에 단 하나뿐인 당신만의 공간을 만들어보세요.</p>
            </div>
            <!-- POINT 5 -->
            <div class="py-18 flex flex-col items-center">
                <p class="text-[22px] max-md:text-[11px] px-4 py-1.5 text-white font-semibold bg-[var(--main-brown01)] rounded-full">Point 5</p>
                <p class="mt-4 text-[34px] max-md:text-[17px] font-bold text-center">품격은 디테일에서 완성됩니다 <br/>국내에서 자체 생산하고 최고급 자재만을 사용합니다.</p>
                <div class="mt-8 flex">
                    <img src="<?php echo G5_THEME_URL?>/img/detail/img-11.webp" alt="">
                    <img src="<?php echo G5_THEME_URL?>/img/detail/img-12.webp" alt="">
                </div>
                <p class="mt-10 text-[28px] max-md:text-[14px] text-[var(--main-brown01)]">METERIALS <span class="font-bold">DETAIL</span></p>
                <p class="mt-4 text-[25px] max-md:text-[13px] text-center">독일 해펠레사의 라픽스 볼트와 45폭 볼레일 댐퍼가 선사하는 <br/>변치않는 부드러운 움직임과 견고한 결합의 안정감</p>
                <img class="mt-6" src="<?php echo G5_THEME_URL?>/img/detail/img-13.webp" alt="">
            </div>
            <div class="py-16 flex flex-col gap-6 text-center items-center bg-[url(<?php echo G5_THEME_URL?>/img/detail/img-14.webp)] bg-cover">
                <p class="text-3xl font-bold leading-[1.5] text-white">일상의 품격을 높이는 디알코디, <br/>지금 맞춤 견적을 받아보세요</p>
                <div class="flex gap-3">
                    <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                        <img src="<?php echo G5_THEME_URL?>/img/btn-contact-icon.png">
                        <span class="text-base font-semibold text-black">무료 견적 상담 시작하기</span>
                        <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                    </a>
                    <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                        <img src="<?php echo G5_THEME_URL?>/img/btn-talk-icon.png">
                        <span class="text-base font-semibold text-black">카카오톡 견적 문의</span>
                        <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                    </a>
                </div>
            </div>
            <!-- 색상 가이드 한눈에 보기 -->
            <div class="py-16 flex flex-col items-center">
                <p class="text-[28px] max-md:text-[14px] text-[var(--main-brown01)]">PRODUCT <span class="font-bold">VIEW</span></p>
                <p class="mt-3 text-[44px] max-md:text-[22px] font-bold">색상 가이드 한눈에 보기</p>
                <!-- View -->
                <div class="mt-8">
                    <img src="<?php echo G5_THEME_URL?>/img/detail/img-15.webp" alt="">
                    <div class="text-[20px] max-md:text-[10px] flex absol"><span>화이트마블</span>.<span>실버</span></div>
                </div>
                <!-- 컬러 선택 -->
                <div class="flex gap-4">
                    <div>
                        <p class="text-[22px] max-md:text-[11px] font-bold">선반 색상</p>
                        <div>
                            <div class="text-[18px] max-md:text-[9px] flex flex-col gap-2"><img class="" src="">화이트마블</div>
                            <div class="flex flex-col gap-2"><img class="" src="">화이트</div>
                            <div class="flex flex-col gap-2"><img class="" src="">웜그레이</div>
                            <div class="flex flex-col gap-2"><img class="" src="">오크</div>
                            <div class="flex flex-col gap-2"><img class="" src="">멀바우</div>
                            <div class="flex flex-col gap-2"><img class="" src="">라이트스톤</div>
                            <div class="flex flex-col gap-2"><img class="" src="">다크스톤</div>
                        </div>
                    </div>
                    <div>
                        <p class="text-[22px] max-md:text-[11px] font-bold">기둥 색상</p>
                        <div>
                            <div class="text-[28px] max-md:text-[14px] flex flex-col gap-2"><img class="" src="">실버</div>
                            <div class="text-[28px] max-md:text-[14px] flex flex-col gap-2"><img class="" src="">흑니켈</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 제품 사이즈 -->
            <div class="py-10 flex flex-col items-center">
                <p class="text-[28px] max-md:text-[14px] text-[var(--main-brown01)]">PRODUCT <span class="font-bold">SPECIFICATION</span></p>
                <p class="mt-3 text-[44px] max-md:text-[22px] font-bold">제품 사이즈</p>
                <img class="mt-9" src="<?php echo G5_THEME_URL?>/img/detail/img-16.webp">
            </div>
            <!-- 디알코드의 다양한 추가 모듈 -->
            <div class="pt-20 pb-10 flex flex-col items-center bg-[#F7F2EE] rounded-[80px_80px_0_0]">
                <p class="text-[22px] max-md:text-[11px] font-medium text-[var(--main-brown01)]">모듈을 추가하여 나만의 드레스룸을 완성하세요!</p>
                <p class="mt-3 text-[44px] max-md:text-[11px] font-bold">디알코드의 다양한 추가 모듈</p>
                <!-- CONTAINER -->
                <div class="mt-8 flex flex-col gap-8">
                    <!-- BOX -->
                    <div class="px-12 py-4 bg-white flex justify-between items-center">
                        <div class="flex flex-col gap-3">
                            <p class="text-[34px] max-md:text-[17px] font-bold text-[var(--main-brown02)]">2/3/4단 서랍장</p>
                            <p class="text-[25px] max-md:text-[17px] text-gray-800">넓고 깊게 만들어 <br/>수납률을 높혔습니다.</p>
                        </div>
                        <img src="<?php echo G5_THEME_URL?>/img/detail/img-17.webp" alt="">
                    </div>
                    <!-- BOX -->
                    <div class="px-12 py-4 bg-white flex justify-between items-center">
                        <div class="flex flex-col gap-3">
                            <p class="text-[34px] max-md:text-[17px] font-bold text-[var(--main-brown02)]">6단 선반장</p>
                            <p class="text-[25px] max-md:text-[12px] text-gray-800">오픈형, 거울형, 유리형으로<br/>문을 선택을 할 수 있습니다.</p>
                        </div>
                        <img src="<?php echo G5_THEME_URL?>/img/detail/img-18.webp" alt="">
                    </div>
                    <!-- BOX -->
                    <div class="px-12 py-4 bg-white flex justify-between items-center">
                        <div class="flex flex-col gap-3">
                            <p class="text-[34px] max-md:text-[17px] font-bold text-[var(--main-brown02)]">아일랜드장&악세사리장</p>
                            <p class="text-[25px] max-md:text-[12px] text-gray-800">유리형과 서랍형을 <br/>선택 할 수 있습니다</p>
                        </div>
                        <img src="<?php echo G5_THEME_URL?>/img/detail/img-19.webp" alt="">
                    </div>
                    <!-- BOX -->
                    <div class="px-12 py-4 bg-white flex justify-between items-center">
                        <div class="flex flex-col gap-3">
                            <p class="text-[34px] max-md:text-[17px] font-bold text-[var(--main-brown02)]">컨테이너장</p>
                            <p class="text-[25px] max-md:text-[12px] text-gray-800">개방감 있는 구조로 의류를 <br/>쉽게 정리 할 수 있습니다.</p>
                        </div>
                        <img src="<?php echo G5_THEME_URL?>/img/detail/img-20.webp" alt="">
                    </div>
                </div>
            </div>
            <!-- 견적 문의 가이드 -->
            <div class="pt-18 flex flex-col items-center bg-[#F7F2EE]">
                <p class="text-[22px] max-md:text-[11px] font-medium text-[var(--main-brown01)]">빠르고 쉬운 디알코디의 간편 견적문의</p>
                <p class="mt-3 text-[44px] max-md:text-[22px] font-bold">견적 문의 가이드</p>
                <div class="mt-8 flex -gap-4 items-center">
                    <!-- BOX -->
                    <div class="px-12 py-6 flex flex-col items-center justify-between bg-white">
                        <img src="<?php echo G5_THEME_URL?>/img/detail/img-21.webp" alt="">
                        <div>
                            <p class="text-[25px] max-md:text-[12px] font-bold text-center text-[var(--main-brown02)]">손그림으로</p>
                            <p class="mt-2 text-[20px] max-md:text-[10px] font-medium text-center">손그림으로 방구조를 간단히 그려주세요!</p>
                        </div>
                    </div> 
                    <!-- DIVIDER -->
                    <span class="text-[24px] max-md:text-[12px] font-bold text-white bg-[var(--main-yellow)]">OR</span>
                    <!-- BOX -->
                    <div class="px-12 py-6 flex flex-col items-center justify-between bg-white">
                        <img src="<?php echo G5_THEME_URL?>/img/detail/img-22.webp" alt="">
                        <div>
                            <p class="text-[25px] max-md:text-[12px] font-bold text-center text-[var(--main-brown02)]">옵션선택으로</p>
                            <p class="mt-2 text-[20px] max-md:text-[10px] font-medium text-center">옵션선택 페이지에서 선택하세요!</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="mt-8 btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                    <img src="<?php echo G5_THEME_URL?>/img/btn-talk-icon.png">
                    <span class="text-base font-semibold text-black">카톡 견적문의 @drcody</span>
                    <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                </a>
                <img src="<?php echo G5_THEME_URL?>/img/detail/img-23.webp" alt="phone">
            </div>
            <!-- 카카오톡을 통한 실시간 견적을 받아보세요. -->
            <div class="py-16 bg-[url(<?php echo G5_THEME_URL?>/img/detail/img-24.webp)] flex flex-col items-center bg-covers">
                <p class="H3 font-bold text-[var(--main-brown03)] text-center">카카오톡을 통한 실시간 견적을 받아보세요.</p>
                <p class="mt-3 H6 text-[var(--main-brown03)] text-center">전문가의 빠르고 신속한 실시간 견적을  받아보실 수 있습니다.</p>
                <div class="mt-8 flex gap-3">
                    <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                        <img src="<?php echo G5_THEME_URL?>/img/btn-contact-icon.png">
                        <span class="text-base font-semibold text-black">간편 견적 문의</span>
                        <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                    </a>
                    <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                        <img src="<?php echo G5_THEME_URL?>/img/btn-talk-icon.png">
                        <span class="text-base font-semibold text-black">실시간 카톡 상담</span>
                        <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                    </a>
                </div>
            </div>
            <!-- 간편 사이즈 측정법 -->
            <div class="py-20 flex flex-col items-center">
                <p class="text-[22px] max-md:text-[11px] font-medium text-[var(--main-brown01)]">빠르고 쉬운 디알코디의 간편 견적문의</p>
                <p class="mt-3 text-[48px] max-md:text-[24px] font-bold">간편 사이즈 측정법</p>
                <div class="mt-8 grid grid-cols-2 gap-5">
                    <div class="flex flex-col items-center gap-4">
                        <img src="<?php echo G5_THEME_URL?>/img/detail/img-25.webp" alt="바닥 재는법">
                        <span class="py-2 px-3 text-[24px] max-md:text-[12px] font-bold bg-[var(--main-brown01)] text-white rounded-full">바닥 재는법</span>
                    </div>
                    <div class="flex flex-col items-center gap-4">
                        <img src="<?php echo G5_THEME_URL?>/img/detail/img-26.webp" alt="천장 재는법">
                        <span class="py-2 px-3 text-[24px] max-md:text-[12px] font-bold bg-[var(--main-brown01)] text-white rounded-full">천장 재는법</span>
                    </div>
                </div>
            </div>
            <!-- 주문 전 유의사항 -->
            <div class="py-16 px-10 bg-[var(--main-brown03)] text-white flex flex-col rounded-[0_0_30px_30px]">
                <img src=""><span class="text-[32px] max-md:text-[16px] font-bold ">주문 전 유의사항</span>
                <!-- tr -->
                <div class="py-8 border-b border-gray-800 flex">
                    <p class="w-[20%] text-[22px] max-md:text-[11px]">기둥선택</p>
                    <p class="text-[20px] max-md:text-[10px] font-medium">흑니켈 기둥 선택시 별도 문의 바랍니다.</p>
                </div>
                ...
                <div>
                    <img src="" alt="디알코디 로고">
                </div>
            </div>
        </div>
    </section>
     <div class="py-24 flex flex-col gap-4 text-center items-center bg-gray-100">
                <p class="text-3xl font-bold leading-[1.5] text-[#D4C1B3]">Customer center</p>
                <div class="flex items-center gap-2">
                    <img src="<?php echo G5_THEME_URL?>/img/ctaCall.svg">
                    <span class="text-5xl font-semibold">1644-0424</span>
                </div>
                <p class="text-base">월~금 9:00 ~ 18:00 / 주말&공휴일 9:00 ~ 17:00</p>
                <div class="mt-4 flex gap-4">
                <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                    <img src="<?php echo G5_THEME_URL?>/img/btn-contact-icon.png">
                    <span class="text-base font-semibold text-black">간편 견적 문의</span>
                    <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                </a>
                <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                    <img src="<?php echo G5_THEME_URL?>/img/btn-talk-icon.png">
                    <span class="text-base font-semibold text-black">실시간 카톡 상담</span>
                    <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                </a>
                </div>
            </div>
</main>


<?php
include_once(G5_PATH.'/tail.php');
?>
