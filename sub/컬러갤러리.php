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

.colorSet {
    width: 63px;
    height: 63px;
    border: 3px solid #fff;
    border-radius: 999px;
    
}
.colorSet.checked {
    border: 3px solid var(--main-yellow);
}

.colorSetMiniBox {
    border: 1px solid #F5F5F5;
    border-radius: 8px;
    padding: 1px 6px 1px 6px;
    display: flex;
    align-items: center;
    gap: 4px;
}
.colorSetMiniBox.two {
    border: none;
    padding-left: 0;
}
.two img.colorSetMini {
    border: 0.5px solid #fff;
    border-radius: 999px;
}
.colorSetMini {
    width: 16px;
    height: 16px;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.05);
}

.check::before {
    position: relative;
    content: url(http://localhost:8888/dc/theme/webdot/img/check-4.svg);
    left: 0;
    margin-right: 4px;
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
            <h1 class="PageTitleText">컬러 갤러리</h1>
            <p class="mt-2 PageSubTitleText font-medium">품격 있는 7종 컬러 라인업, <br/>내가 원하는 무드를 만들어줄 완벽한 컬러를 찾아보세요.</p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href=""><button class="H6 btn md ">설치 가이드</button></a>
                <a href=""><button class="H6 btn md active">컬러 갤러리</button></a>
            </div>
        </div>    
    </section>

    <section class="py-20 container">
        <h2 class="H2 max-md:text-[32px] font-bold text-center">선반 색상 옵션</h2>
        <p class="mt-5 text-base text-gray-500 text-center">* 제품 색상은 화면 해상도에 따라 실제와 차이가 있을 수 있습니다.</p>
        <div class="mt-8 flex gap-8 itmes-center max-md:flex-col">
            <img src="<?php echo G5_THEME_URL?>/img/colorGallery-1.webp">
            <div class="flex flex-col justify-around">
                <div>
                    <p class="H5 font-bold">화이트 마블 (White Marble)</p>
                    <p class="mt-3 H6 font-semibold text-[var(--main-brown01)]">럭셔리 공간의 완성, 마블의 품격</p>
                    <p class="mt-1 H6 text-gray-700">고급 호텔의 로비를 연상시키는 천연 대리석의 우아한 베이닝이 특징입니다. 세련된 마블 패턴이 공간에 깊이감과 품격을 더하며, 어떤 인테리어와도 조화를 이루는 타임리스한 선택입니다.</p>
                </div>
                <div class="py-6 border-t border-gray-200">
                <!-- CONTAINER -->
                 <div class="grid grid-cols-5 gap-6">
                    <!-- CARD -->
                    <div class="flex flex-col items-center justify-center">
                        <img class="colorSet" src="<?php echo G5_THEME_URL?>/img/color/white-marble.svg">
                        <h3 class="text-base max-md:text-sm font-semibold text-gray-800">화이트마블</h3>
                    </div>
                    <!-- CARD -->
                    <div class="flex flex-col items-center justify-center">
                        <img class="colorSet" src="<?php echo G5_THEME_URL?>/img/color/white.svg">
                        <h3 class="text-base max-md:text-sm font-semibold text-gray-800">화이트</h3>
                    </div>
                    <!-- CARD -->
                    <div class="flex flex-col items-center justify-center">
                        <img class="colorSet" src="<?php echo G5_THEME_URL?>/img/color/warm-gray.svg">
                        <h3 class="text-base max-md:text-sm font-semibold text-gray-800">웜그레이</h3>
                    </div>
                    <!-- CARD -->
                    <div class="flex flex-col items-center justify-center">
                        <img class="colorSet" src="<?php echo G5_THEME_URL?>/img/color/oak.svg">
                        <h3 class="text-base max-md:text-sm font-semibold text-gray-800">오크</h3>
                    </div>
                    <!-- CARD -->
                    <div class="flex flex-col items-center justify-center">
                        <img class="colorSet" src="<?php echo G5_THEME_URL?>/img/color/amber.svg">
                        <h3 class="text-base max-md:text-sm font-semibold text-gray-800">멀바우</h3>
                    </div>
                    <!-- CARD -->
                    <div class="flex flex-col items-center justify-center">
                        <img class="colorSet" src="<?php echo G5_THEME_URL?>/img/color/light-stone.svg">
                        <h3 class="text-base max-md:text-sm font-semibold text-gray-800">라이트스톤</h3>
                    </div>
                    <!-- CARD -->
                    <div class="flex flex-col items-center justify-center">
                        <img class="colorSet" src="<?php echo G5_THEME_URL?>/img/color/dark-stone.svg">
                        <h3 class="text-base max-md:text-sm font-semibold text-gray-800">다크스톤</h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 border-y border-gray-200 container">
        <h2 class="H2 max-md:text-[32px] font-bold text-center">기둥 색상 옵션</h2>
        <p class="mt-5 H6 font-medium text-center">마감재와 조화를 이루는 완벽한 기둥 선택</p>
        <div class="mt-8 grid grid-cols-2 max-md:grid-cols-1 gap-8 max-md:gap-10">
            <!-- CARD -->
            <div class="flex flex-col gap-3">
                <img src="<?php echo G5_THEME_URL?>/img/colorGallery-2.webp" alt="">
                <h3 class="H5 font-bold">실버 기둥 (Silver Column)</h3>
                <p class="H6 font-semibold text-[var(--main-brown01)]">클래식한 세련미, 어디든 어울리는 만능 컬러</p>
                <p class="H6">깔끔한 실버 컬러의 알루미늄 마감으로 모던하고 세련된 인테리어 효과를 연출합니다. 어떤 마감재 색상과도 자연스럽게 조화를 이루며, 공간에 밝고 깨끗한 느낌을 선사하는 클래식한 선택입니다.</p>
            </div>
            <!-- CARD -->
            <div class="flex flex-col gap-3">
                <img src="<?php echo G5_THEME_URL?>/img/colorGallery-2.webp" alt="">
                <h3 class="H5 font-bold">흑니켈 기둥 (Black Nickel Column)</h3>
                <p class="H6 font-semibold text-[var(--main-brown01)]">고급스러운 다크 톤, 프리미엄의 완성</p>
                <p class="H6">세련된 흑니켈 마감으로 공간에 고급스럽고 모던한 분위기를 더해줍니다. 다크 톤 마감재(멀바우, 다크 스톤)와 완벽한 조화를 이루며, 럭셔리한 인테리어를 추구하는 고객을 위한 프리미엄 선택입니다.</p>
            </div>
        </div>
    </section>

    <section class="py-32 bg-gray-50">
        <h2 class="SectionTitleText font-bold text-center">스마트 컬러 선택 가이드</h2>
        <h3 class="mt-5 H5 font-semibold text-[var(--main-brown01)] text-center">3단계로 현명하게 선택하기</h3>
        <div class="mt-10 max-md:mt-4 container grid grid-cols-3 max-md:grid-cols-1 gap-4">
            <!-- CARD -->
            <div class="p-8 bg-white border border-gray-300 rounded-xl">
                <div>
                    <h4 class="H4 font-bold text-[var(--main-brown01)]"><span class="H2 text-[var(--main-brown02)]">1</span>단계</h4>
                    <h5 class="mt-1 H4 font-bold">공간 평가하기</h5>
                </div>
                <div class="mt-6 flex flex-col gap-5">
                    <h6 class="check H5 font-semibold">바닥 색상이 가장 중요해요! <br/>(70% 기준 참고)</h6>
                    <h6 class="check H5 font-semibold">공간 크기 + 자연 채광 상태 확인</h6>
                    <img class="rounded-md" src="<?php echo G5_THEME_URL?>/img/colorGallery-5.webp">
                </div>
            </div>
            <!-- CARD -->
            <div class="p-8 bg-white border border-gray-300 rounded-xl">
                <h4 class="H4 font-bold text-[var(--main-brown01)]"><span class="H2 text-[var(--main-brown02)]">2</span>단계</h4>
                <h5 class="mt-1 H4 font-bold">공간별 추천</h5>
                <!-- CONTAINER -->
                <div class="mt-6 flex flex-col gap-6">
                    <!-- CARD -->
                    <div class="flex gap-6 max-md:gap-3">
                    <img class="rounded-sm" src="<?php echo G5_THEME_URL?>/img/colorGallery-6.webp" alt="">
                        <div>
                            <h6 class="H5 font-bold">작고 어두운 공간</h6>
                            <div class="mt-2 flex gap-1 text-base font-semibold text-gray-800 flex-wrap">
                                <span class="colorSetMiniBox max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/white.svg" alt="">화이트</span>
                                <span class="colorSetMiniBox max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/light-stone.svg" alt="">라이트 스톤</span>
                                <span class="colorSetMiniBox max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/warm-gray.svg" alt="">웜그레이</span>
                            </div>
                        </div>
                    </div>
                    <!-- CARD -->
                    <div class="flex gap-6 max-md:gap-3">
                    <img class="rounded-sm" src="<?php echo G5_THEME_URL?>/img/colorGallery-7.webp" alt="">
                        <div>
                            <h6 class="H5 font-bold">중간 크기 공간</h6>
                            <div class="mt-2 flex gap-1 text-base font-semibold text-gray-800 flex-wrap">
                                <span class="colorSetMiniBox max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/oak.svg" alt="">화이트</span>
                                <span class="colorSetMiniBox max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/warm-gray.svg" alt="">라이트 스톤</span>
                                <span class="colorSetMiniBox max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/light-stone.svg" alt="">웜그레이</span>
                            </div>
                        </div>
                    </div>
                    <!-- CARD -->
                    <div class="flex gap-6 max-md:gap-3">
                    <img class="rounded-sm" src="<?php echo G5_THEME_URL?>/img/colorGallery-8.webp" alt="">
                        <div>
                            <h6 class="H5 font-bold">크고 밝은 공간</h6>
                            <div class="mt-2 flex gap-1 text-base font-semibold text-gray-800 flex-wrap">
                                <span class="colorSetMiniBox max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/dark-stone.svg" alt="">화이트</span>
                                <span class="colorSetMiniBox max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/amber.svg" alt="">라이트 스톤</span>
                                <span class="colorSetMiniBox max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/white-marble.svg" alt="">웜그레이</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CARD -->
            <div class="p-8 bg-white border border-gray-300 rounded-xl">
                <h4 class="H4 font-bold text-[var(--main-brown01)]"><span class="H2 text-[var(--main-brown02)]">3</span>단계</h4>
                <h5 class="mt-1 H4 font-bold">스타일 매칭</h5>
                <div class="mt-6 grid grid-cols-2 gap-3">
                    <!-- CARD -->
                    <div class="p-4 aspect-[1/1.25] rounded-sm text-white bg-[url(<?php echo G5_THEME_URL?>/img/colorGallery-9.webp)] bg-cover">
                        <h6 class="H5 font-bold mb-2">모던 미니멀</h6>
                        <div class="flex flex-col gap-2">
                            <span class="colorSetMiniBox two text-base font-semibold max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/white-marble.svg" alt="">화이트</span>
                            <span class="colorSetMiniBox two text-base font-semibold max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/dark-stone.svg" alt="">다크 스톤</span>
                        </div>
                    </div>
                    <!-- CARD -->
                    <div class="p-4 aspect-[1/1.25] rounded-sm text-white bg-[url(<?php echo G5_THEME_URL?>/img/colorGallery-10.webp)] bg-cover">
                        <h6 class="H5 font-bold mb-2">내추럴 홈카페</h6>
                        <div class="flex flex-col gap-2">
                            <span class="colorSetMiniBox two text-base font-semibold max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/oak.svg" alt="">오크</span>
                            <span class="colorSetMiniBox two text-base font-semibold max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/amber.svg" alt="">멀바우</span>
                        </div>
                    </div>
                    <!-- CARD -->
                    <div class="p-4 aspect-[1/1.25] rounded-sm text-white bg-[url(<?php echo G5_THEME_URL?>/img/colorGallery-11.webp)] bg-cover">
                        <h6 class="H5 font-bold mb-2">럭셔리 클래식</h6>
                        <div class="flex flex-col gap-2">
                            <span class="colorSetMiniBox two text-base font-semibold max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/white-marble.svg" alt="">화이트 마블</span>
                            <span class="colorSetMiniBox two text-base font-semibold max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/dark-stone.svg" alt="">다크 스톤</span>
                        </div>
                    </div>
                    <!-- CARD -->
                    <div class="p-4 aspect-[1/1.25] rounded-sm text-white bg-[url(<?php echo G5_THEME_URL?>/img/colorGallery-12.webp)] bg-cover">
                        <h6 class="H5 font-bold mb-2">어반 시크</h6>
                        <div class="flex flex-col gap-2">
                            <span class="colorSetMiniBox two text-base font-semibold max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/light-stone.svg" alt="">라이트 스톤</span>
                            <span class="colorSetMiniBox two text-base font-semibold max-md:text-sm"><img class="colorSetMini" src="<?php echo G5_THEME_URL?>/img/color/dark-stone.svg" alt="">다크 스톤</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 container">
        <h2 class="H2 font-bold text-center">빠른 선택 가이드</h2>
        <!-- CONTAINER -->
        <div class="grid grid-cols-2 max-w-[800px] mx-auto gap-6 mt-8">
            <!-- CARD -->
            <div class="flex gap-4 flex-col items-center">
                <div class="flex items-center justify-center">
                    <img class="" src="<?php echo G5_THEME_URL?>/img/check-3.svg" alt="check-3">
                </div>
                <h3 class="H5 font-bold text-[var(--main-brown01)] text-center">고민될 때</h3>
                <img class="" src="<?php echo G5_THEME_URL?>/img/dot.svg" alt="dot">
                <div class="w-full border border-gray-200 rounded-lg p-6 flex flex-col gap-6">
                    <div class="flex max-md:flex-col items-center max-md:items-start gap-4">
                        <img class="w-20 h-20 max-md:w-16 max-md:h-16 border-2 border-gray-300 rounded-full bg-white object-cover flex-shrink-0" src="<?php echo G5_THEME_URL?>/img/color/warm-gray.svg">
                        <div>
                            <h4 class="H5 font-bold">웜그레이</h4>
                            <p class="text-base font-medium text-gray-500">모든 스타일과 매치</p>
                        </div>
                    </div>
                    <div class="flex max-md:flex-col items-center max-md:items-start gap-4">
                        <img class="w-20 h-20 max-md:w-16 max-md:h-16 border-2 border-gray-300 rounded-full bg-white object-cover flex-shrink-0" src="<?php echo G5_THEME_URL?>/img/color/oak.svg">
                        <div>
                            <h4 class="H5 font-bold">오크</h4>
                            <p class="text-base font-medium text-gray-500">자연스럽고 안전한 선택</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CARD -->
            <div class="flex gap-4 flex-col items-center">
                <div class="flex items-center justify-center">
                    <img class="" src="<?php echo G5_THEME_URL?>/img/check-3.svg" alt="check-3">
                </div>
                <h3 class="H5 font-bold text-[var(--main-brown01)] text-center">개성을 원한다면</h3>
                <img class="" src="<?php echo G5_THEME_URL?>/img/dot.svg" alt="dot">
                <div class="w-full border border-gray-200 rounded-lg p-6 flex flex-col gap-6">
                    <div class="flex max-md:flex-col items-center max-md:items-start gap-4">
                        <img class="w-20 h-20 max-md:w-16 max-md:h-16 border-2 border-gray-300 rounded-full bg-white object-cover flex-shrink-0" src="<?php echo G5_THEME_URL?>/img/color/dark-stone.svg">
                        <div>
                            <h4 class="H5 font-bold">다크 스톤</h4>
                            <p class="text-base font-medium text-gray-500">모던 프리미엄</p>
                        </div>
                    </div>
                    <div class="flex max-md:flex-col items-center max-md:items-start gap-4">
                        <img class="w-20 h-20 max-md:w-16 max-md:h-16 border-2 border-gray-300 rounded-full bg-white object-cover flex-shrink-0" src="<?php echo G5_THEME_URL?>/img/color/white-marble.svg">
                        <div>
                            <h4 class="H5 font-bold">화이트 마블</h4>
                            <p class="text-base font-medium text-gray-500">럭셔리 클래식</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-24">
        <h2 class="H2 font-bold text-center mb-8">구매 전 체크리스트</h2>
        <div class="m-auto flex max-md:flex-col items-center justify-between max-w-[950px]">
            <div class="flex flex-col items-center gap-5">
                <img src="<?php echo G5_THEME_URL?>/img/colorGalleryIcon-1.svg" alt="icon">
                <h3 class="check H6 font-semibold text-center">웹사이트 제품갤러리 참고 <br/>혹은 쇼룸 방문하여 확인하기</h3>
            </div>
            <div class="w-[1px] h-[90px] max-md:w-[95%] max-md:h-[1px] bg-gray-300"></div>
            <div class="flex flex-col items-center gap-5">
                <img src="<?php echo G5_THEME_URL?>/img/colorGalleryIcon-2.svg" alt="icon">
                <h3 class="check H6 font-semibold text-center">기존 바닥재와의 <br/>조화&대비 선택하기</h3>
            </div>
            <div class="w-[1px] h-[90px] max-md:w-[95%] max-md:h-[1px] bg-gray-300"></div>
            <div class="flex flex-col items-center gap-5">
                <img src="<?php echo G5_THEME_URL?>/img/colorGalleryIcon-3.svg" alt="icon">
                <h3 class="check H6 font-semibold text-center">향후 이사나 리모델링 <br/>계획 고려하기</h3>
            </div>
        </div>
    </section>

    <section class="py-24 flex flex-col gap-4 text-center text-white items-center bg-[url(<?php echo G5_THEME_URL?>/img/colorGalleryCta.webp)] bg-cover">
        <p class="text-3xl font-bold leading-[1.5] text-white">당신만의 완벽한 조합을 찾아보세요 <br/>색상 선택이 어려우시다면, 전문가가 직접 상담해드립니다</p>
        <div class="flex gap-4">
            <a href="#" class="mt-4 btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                <img src="<?php echo G5_THEME_URL?>/img/btn-guide-icon.png">
                <span class="text-base font-semibold text-black">컬러 조합 상담받기</span>
                <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
            </a>
            <a href="#" class="mt-4 btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                <img src="<?php echo G5_THEME_URL?>/img/btn-guide-icon.png">
                <span class="text-base font-semibold text-black">무료 견적 신청하기</span>
                <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
            </a>
        </div>
    </section>
</main>

<?php
include_once(G5_PATH.'/tail.php');  // 푸터 포함
?>
