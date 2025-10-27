<?php
include_once('../common.php');  // 공통 설정 불러오기
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
include_once(G5_PATH.'/head.php');  // 헤더 포함
?>

<main>
    <section>
        <h2>편리함과 기능이 돋보이는 디알코디 시스템행거</h2>
        <p>흔들리지 않는 디알코디만의 익스텐션 무타공 기둥 <br/>특허 받은 익스텐션 기둥으로 벽이나 천장 훼손 없이 강력하게 고정합니다.</p>
    </section>
    <section class="py-20 container flex flex-col items-center">
        <!-- CONTAINER -->
        <div class="flex gap-5 max-md:gap-3">
            <!-- CARD -->
            <div class="flex flex-col gap-1 text-center">
                <div class="p-3 w-[120px] h-[120px] max-md:w-[80px] max-md:h-[80px] bg-gray-50 flex items-center justify-center">
                    <img class="w-full h-full object-contain" src="<?php echo G5_THEME_URL?>/img/set-category-1.webp">
                </div>
                <h3 class="H6 max-md:text-[13px] font-bold text-gray-500">세트상품</h3>
            </div>
            <!-- CARD -->
            <div class="flex flex-col gap-1 text-center">
                <div class="p-3 w-[120px] h-[120px] max-md:w-[80px] max-md:h-[80px] bg-[var(--bg-beige)] flex items-center justify-center">
                    <img class="w-full h-full object-contain" src="<?php echo G5_THEME_URL?>/img/set-category-2.webp">
                </div>
                <h3 class="H6 max-md:text-[13px] font-bold text-black">개별상품</h3>
            </div>
            <!-- CARD -->
            <div class="flex flex-col gap-1 text-center">
                <div class="p-3 w-[120px] h-[120px] max-md:w-[80px] max-md:h-[80px] bg-gray-50 flex items-center justify-center">
                    <img class="w-full h-full object-contain" src="<?php echo G5_THEME_URL?>/img/set-category-3.webp">
                </div>
                <h3 class="H6 max-md:text-[13px] font-bold text-gray-500">모듈</h3>
            </div>
        </div>
        <!-- CONTAINER -->
        <div class="mt-20 max-md:mt-8 grid grid-cols-3 max-md:grid-cols-2 gap-x-6 gap-y-16 max-md:gap-x-3 max-md:gap-y-6">
            <!-- CARD -->
            <a href="" class="">
                <img class="mb-4 max-md:mb-2" src="<?php echo G5_THEME_URL?>/img/set-1.webp" alt="">
                <p class="text-base max-md:text-[13px] font-medium text-gray-600">시스템행거</p>
                <h4 class="H6 font-bold">[D1] 2단옷걸이장</h4>
                <div class="mt-1 flex gap-1 items-center max-md:flex-col max-md:items-start">
                    <span class="font-bold text-gray-500">W</span>
                    <span class="font-base text-gray-900">400mm~825mm</span>
                    <span class="p-1 font-medium rounded-sm text-[var(--main-brown02)] bg-[var(--bg-beige)]">사이즈 조절 가능</span>
                </div>
            </a>
        </div>
    </section>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>