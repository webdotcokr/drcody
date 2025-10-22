<?php
include_once('../common.php');

// 게시판 설정 로드
include_once(__DIR__.'/includes/board-config.php');

// 게시판 타입 설정
$boardType = 'inquiry';
$boardConfig = getBoardConfig($boardType);
$boardData = getBoardData($boardType);

$g5['title'] = $boardConfig['title'];
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);
include_once(G5_PATH.'/head.php');
?>

<main>
    <!-- 헤더 섹션 -->
    <section class="pt-[160px] pb-[60px] bg-[url(<?php echo G5_THEME_URL?>/img/noticeToparea.webp)] bg-cover">
        <div class="container">
            <!-- breadcrumbs 추후 추가 -->
            <h1 class="PageTitleText"><?php echo $boardConfig['title']; ?></h1>
            <p class="mt-2 PageSubTitleText font-medium"><?php echo $boardConfig['subtitle']; ?></p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href="notice.php"><button class="H6 btn md">공지사항</button></a>
                <a href="faq.php"><button class="H6 btn md">FAQ</button></a>
                <a href="list.php"><button class="H6 btn md active">A/S 신청</button></a>
                <a href="inquiry.php"><button class="H6 btn md">1:1 상담 신청</button></a>
            </div>
        </div>
    </section>

    <!-- 고객센터 섹션 -->
    <section class="py-6 max-md:py-5 bg-[var(--main-brown01)] text-white">
        <div class="container flex items-center justify-between max-md:flex-col max-md:items-stretch">
            <div class="flex items-center gap-3">
                <img class="max-md:w-[50px]" src="<?php echo G5_THEME_URL?>/img/headphone.svg">
                <div>
                    <p class="H3 font-bold">도움이 필요하신가요?</p>
                    <p class="H6">월~토 09:00~18:00</p>
                </div>
            </div>
            <div class="flex gap-4 max-md:mt-5 max-md:grid grid-cols-2 max-md:gap-2">
                <div class="flex items-center gap-4 rounded-full py-3 px-8 bg-[var(--main-brown02)] max-md:gap-2 max-md:py-3 max-md:px-4">
                    <img class="max-md:w-[24px]" src="<?php echo G5_THEME_URL?>/img/noticeCall.svg" alt="">
                    <div>
                        <p class="H6 font-semibold max-md:text-[13px]">전화상담</p>
                        <p class="H4 font-semibold max-md:text-[17px]">1644-0424</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 rounded-full py-3 px-8 bg-[var(--main-brown02)] max-md:gap-2 max-md:py-3 max-md:px-4">
                    <img class="max-md:w-[24px]" src="<?php echo G5_THEME_URL?>/img/noticeTalk.svg" alt="">
                    <div>
                        <p class="H6 font-semibold max-md:text-[13px]">카카오톡 상담</p>
                        <p class="H4 font-semibold max-md:text-[17px]">@drcody</p>
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <?php include_once(__DIR__.'/includes/board-list-template.php'); ?>
    <section class="py-20 max-md:py-16 flex flex-col gap-4 text-center items-center bg-gray-100">
        <p class="H4 font-bold leading-[1.5] text-[#D4C1B3] max-md:text-[20px]">Customer center</p>
        <div class="flex items-center gap-2">
            <img src="<?php echo G5_THEME_URL?>/img/ctaCall.svg">
            <span class="text-5xl font-semibold">1644-0424</span>
        </div>
        <p class="text-base">월~금 9:00 ~ 18:00 / 주말&공휴일 9:00 ~ 17:00</p>
        <div class="mt-4 flex gap-4 max-md:grid grid-cols-2 max-md:gap-2">
            <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                <img src="<?php echo G5_THEME_URL?>/img/btn-contact-icon.png">
                <span class="text-base font-semibold text-black max-md:text-sm">간편 견적 문의</span>
                <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
            </a>
            <a href="#" class="btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                <img src="<?php echo G5_THEME_URL?>/img/btn-talk-icon.png">
                <span class="text-base font-semibold text-black max-md:text-sm">실시간 카톡 상담</span>
                <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
            </a>
        </div>
    </section>
</main>

<?php include_once(__DIR__.'/includes/password-modal.php'); ?>

<script src="includes/board-scripts.js"></script>

<?php
include_once(G5_PATH.'/tail.php');
?>
