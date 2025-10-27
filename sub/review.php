<?php
include_once('../common.php');  // 공통 설정 불러오기
$g5['title'] = "서브페이지 제목";  // 페이지 제목 설정
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
include_once(G5_PATH.'/head.php');  // 헤더 포함
?>

<main>
    <section class="pt-[160px] pb-[60px] bg-[url(<?php echo G5_THEME_URL?>/img/guideToparea.webp)] bg-cover">
        <div class="container">
        breadcrumbs
            <h1 class="PageTitleText">고객후기</h1>
            <p class="mt-2 PageSubTitleText font-medium">고민 끝에 디알코디를 선택한 고객님들의 이야기를 들어보세요. <br/>선택 이유부터 사용 만족도까지, 솔직한 구매 후기를 확인하세요.</p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href=""><button class="H6 btn md ">고객 후기</button></a>
                <a href=""><button class="H6 btn md active">시공갤러리</button></a>
            </div>
        </div>    
    </section>
    <section class="container mt-8">
        <div class="py-8 px-6 grid grid-cols-2 gap-8 bg-[#F7F2EE]">
            <div>
                <h2 class="H3">빠르고 신속한 <br/><b>실시간 견적을 받아보세요!</b></h2>
                <div class="mt-5 flex gap-5">
                    <a href="#" class="mt-4 btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                        <img src="<?php echo G5_THEME_URL?>/img/btn-contact-icon.png">
                        <span class="text-base font-semibold text-black">간편 견적 문의</span>
                        <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                    </a>
                    <a href="#" class="mt-4 btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                        <img src="<?php echo G5_THEME_URL?>/img/btn-talk-icon.png">
                        <span class="text-base font-semibold text-black">카카오 견적 문의</span>
                        <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                    </a>
                </div>
            </div>
            <div class="flex gap-5">
                <div class="flex flex-col gap-2.5">
                    <img src="">
                    <h3 class="text-lg font-semibold text-[var(--main-brown02)]">간단한 <br/>그림 그리기</h3>
                </div>
                <img src="" alt="process-arrow">
                <div class="flex flex-col gap-2.5">
                    <img src="">
                    <h3 class="text-lg font-semibold text-[var(--main-brown02)]">사진과 함께 <br/>견적 문의하기</h3>
                </div>
                <img src="" alt="process-arrow">
                <div class="flex flex-col gap-2.5">
                    <img src="">
                    <h3 class="text-lg font-semibold text-[var(--main-brown02)]">드레스룸 <br/>견적받기</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-20">
        <h2 class="H2 font-bold flex gap-1 items-center">디알코디 베스트 후기</h2>
        <div>
            <!-- Swiper -->
        </div>
    </section>
    <section class="pb-24 container">
        <div class="flex items-center justify-between">
            <h2 class="H4 font-bold">후기 <span class="text-gray-400">2312</span></h2>
            <!-- SELECT BOX -->
        </div>
        <!-- Review Grid -->
        <div class="mt-5 grid grid-cols-3 gap-x-5 gap-y-8">
            <!-- CARD -->
             <a href="">
                <div class="flex flex-col gap-4">
                    <img src="" alt="title image">
                    <h3 class="H6 font-bold">손상없이 이용할 수 있는 점이 세입자로서는 가장 만족스러운 점입니다!</h3>
                </div>
            </a>
        </div>
    </section>
</main>

<?php
include_once(G5_PATH.'/tail.php');  // 푸터 포함
?>
