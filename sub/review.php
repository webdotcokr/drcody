<?php
include_once('../common.php');  // 공통 설정 불러오기
$g5['title'] = "서브페이지 제목";  // 페이지 제목 설정
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/swiper/swiper.min.css">', 1);  // Swiper CSS
add_javascript('<script src="'.G5_JS_URL.'/swiper/swiper.min.js"></script>', 2);  // Swiper JS

// ===== 후기 더미 데이터 =====
$review_items = [
    ['id' => 1, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '손상없이 이용할 수 있는 점이 세입자로서는 가장 만족스러운 점입니다!'],
    ['id' => 2, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '아침마다 드레스룸에 가는것이 즐겁습니다!'],
    ['id' => 3, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '공간 활용도가 너무 좋아서 만족합니다'],
    ['id' => 4, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '시공 기간도 짧고 깔끔하게 잘 해주셨어요'],
    ['id' => 5, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '디자인이 세련되고 실용적이에요'],
    ['id' => 6, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '가격 대비 품질이 너무 좋습니다'],
    ['id' => 7, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '옷장이 넓어져서 정리가 잘 됩니다'],
    ['id' => 8, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '설치 후 방이 훨씬 넓어 보여요'],
    ['id' => 9, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '친절한 상담과 꼼꼼한 시공 감사합니다'],
    ['id' => 10, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '이사 갈 때 가져갈 수 있어서 좋아요'],
    ['id' => 11, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '수납공간이 많아져서 너무 편리해요'],
    ['id' => 12, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '깔끔하고 세련된 디자인이 마음에 듭니다'],
    ['id' => 13, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '조립식이라 이사 때 편할 것 같아요'],
    ['id' => 14, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '가성비 최고! 추천합니다'],
    ['id' => 15, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '원하는 대로 커스텀 가능해서 좋아요'],
    ['id' => 16, 'image' => G5_THEME_URL.'/img/reviewPlaceholder.png', 'title' => '작은 공간도 효율적으로 활용 가능합니다']
];

// 전체 후기 수
$total_review_count = count($review_items);

// 페이지네이션 설정
$items_per_page = 8;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$total_pages = ceil($total_review_count / $items_per_page);

// 현재 페이지의 아이템만 가져오기
$offset = ($current_page - 1) * $items_per_page;
$current_review_items = array_slice($review_items, $offset, $items_per_page);

include_once(G5_PATH.'/head.php');  // 헤더 포함
?>

<main>
    <section class="pt-[160px] pb-[60px] bg-[url(<?php echo G5_THEME_URL?>/img/reviewIntro.webp)] bg-cover">
        <div class="container text-white">
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
        <div class="py-10 px-12 grid grid-cols-2 max-md:grid-cols-1 gap-8 bg-[#F7F2EE]">
            <div>
                <h2 class="H3 max-md:text-center max-md:text-[24px]">빠르고 신속한 <br/><b>실시간 견적을 받아보세요!</b></h2>
                <div class="mt-3 flex gap-5 max-md:flex-col max-md:gap-0">
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
            <div class="grid grid-cols-3 items-center gap-6 review-steps">
                <div class="flex flex-col items-center gap-2.5 review-step">
                    <img class="w-fit" src="<?php echo G5_THEME_URL?>/img/reviewIcon-1.svg">
                    <h3 class="text-lg text-center max-md:text-[15px] leading-[1.2] font-semibold text-[var(--main-brown02)]">간단한 <br/>그림 그리기</h3>
                </div>
                <div class="flex flex-col items-center gap-2.5 review-step">
                    <img class="w-fit" src="<?php echo G5_THEME_URL?>/img/reviewIcon-2.svg">
                    <h3 class="text-lg text-center max-md:text-[15px] leading-[1.2] font-semibold text-[var(--main-brown02)]">사진과 함께 <br/>견적 문의하기</h3>
                </div>
                <div class="flex flex-col items-center gap-2.5">
                    <img class="w-fit" src="<?php echo G5_THEME_URL?>/img/reviewIcon-3.svg">
                    <h3 class="text-lg text-center max-md:text-[15px] leading-[1.2] font-semibold text-[var(--main-brown02)]">드레스룸 <br/>견적받기</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-20">
        <h2 class="H2 justify-center font-bold flex gap-1 items-center">
            <img src="<?php echo G5_THEME_URL?>/img/icon_crown.svg" alt="crown">
            디알코디 베스트 후기
        </h2>

        <?php
        // 더미 데이터 생성
        $best_reviews = [
            [
                'image' => G5_THEME_URL.'/img/reviewPlaceholder.png',
                'title' => '아침마다 드레스룸에 가는것이 즐겁습니다! :D',
                'link' => '#'
            ],
            [
                'image' => G5_THEME_URL.'/img/reviewPlaceholder.png',
                'title' => '아침마다 드레스룸에 가는것이 즐겁습니다! :D',
                'link' => '#'
            ],
            [
                'image' => G5_THEME_URL.'/img/reviewPlaceholder.png',
                'title' => '아침마다 드레스룸에 가는것이 즐겁습니다! :D',
                'link' => '#'
            ],
            [
                'image' => G5_THEME_URL.'/img/reviewPlaceholder.png',
                'title' => '아침마다 드레스룸에 가는것이 즐겁습니다! :D',
                'link' => '#'
            ]
        ];
        ?>

        <div class="mt-12 relative">
            <!-- Navigation Buttons -->
            <div class="swiper-button-prev bestReview-prev"></div>
            <div class="swiper-button-next bestReview-next"></div>

            <!-- Swiper -->
            <div class="swiper bestReviewSwiper px-16 max-md:px-12">
                <div class="swiper-wrapper">
                    <?php foreach($best_reviews as $review): ?>
                    <div class="swiper-slide">
                        <a href="<?php echo $review['link']; ?>" class="block">
                            <div class="relative">
                                <img src="<?php echo $review['image']; ?>" alt="<?php echo $review['title']; ?>" class="w-full aspect-[4/3] object-cover rounded-lg">
                                <span class="absolute top-4 right-4 bg-[var(--main-brown01)] text-white text-sm font-semibold px-3 py-1.5 rounded">BEST</span>
                            </div>
                            <h3 class="mt-4 H5 font-bold text-[var(--main-brown03)] leading-[1.4]"><?php echo $review['title']; ?></h3>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination bestReview-pagination"></div>
            </div>
        </div>
    </section>
    <section class="pb-24 container">
        <div class="flex items-center justify-between">
            <h2 class="H4 font-bold">후기 <span class="text-gray-400"><?php echo number_format($total_review_count); ?></span></h2>
            <!-- SELECT BOX -->
        </div>
        <!-- Review Grid -->
        <div class="mt-5 grid grid-cols-2 md:grid-cols-4 gap-x-5 gap-y-8">
            <?php foreach($current_review_items as $item): ?>
            <a href="" class="block">
                <div class="flex flex-col gap-4 max-md:gap-2">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" class="w-full aspect-[1/1] object-cover">
                    <h3 class="H6 font-bold leading-[1.4]"><?php echo $item['title']; ?></h3>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <nav class="flex justify-center items-center gap-2 mt-12">
            <!-- 맨 처음으로 -->
            <?php if($current_page > 1): ?>
            <a href="?page=1" class="pagination-btn">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7M18 19l-7-7 7-7"/>
                </svg>
            </a>
            <?php endif; ?>

            <!-- 이전 페이지 -->
            <?php if($current_page > 1): ?>
            <a href="?page=<?php echo $current_page - 1; ?>" class="pagination-btn">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            <?php endif; ?>

            <!-- 페이지 번호 -->
            <?php
            $start_page = max(1, $current_page - 2);
            $end_page = min($total_pages, $current_page + 2);

            for($i = $start_page; $i <= $end_page; $i++):
            ?>
            <a href="?page=<?php echo $i; ?>"
               class="pagination-btn <?php echo $i == $current_page ? 'active' : ''; ?>">
                <?php echo $i; ?>
            </a>
            <?php endfor; ?>

            <!-- 다음 페이지 -->
            <?php if($current_page < $total_pages): ?>
            <a href="?page=<?php echo $current_page + 1; ?>" class="pagination-btn">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
            <?php endif; ?>

            <!-- 맨 끝으로 -->
            <?php if($current_page < $total_pages): ?>
            <a href="?page=<?php echo $total_pages; ?>" class="pagination-btn">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M6 5l7 7-7 7"/>
                </svg>
            </a>
            <?php endif; ?>
        </nav>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Best Review Swiper
    const bestReviewSwiper = new Swiper('.bestReviewSwiper', {
        slidesPerView: 2,
        spaceBetween: 20,
        navigation: {
            nextEl: '.bestReview-next',
            prevEl: '.bestReview-prev',
        },
        pagination: {
            el: '.bestReview-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 24,
            }
        }
    });
});
</script>

<style>
/* Best Review Swiper Custom Styles */
.bestReviewSwiper {
    overflow: visible;
    padding-bottom: 60px;
}

/* Navigation Buttons */
.swiper-button-prev.bestReview-prev,
.swiper-button-next.bestReview-next {
    width: 56px;
    height: 56px;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 4px;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
    z-index: 10;
}

.swiper-button-prev.bestReview-prev:hover,
.swiper-button-next.bestReview-next:hover {
    background-color: rgba(255, 255, 255, 1);
}

.swiper-button-prev.bestReview-prev::after,
.swiper-button-next.bestReview-next::after {
    font-size: 24px;
    font-weight: 700;
    color: #424242;
}

.swiper-button-prev.bestReview-prev {
    left: 12px;
}

.swiper-button-next.bestReview-next {
    right: 12px;
}

/* Pagination */
.bestReview-pagination {
    bottom: 0 !important;
    display: flex;
    justify-content: center;
    gap: 8px;
}

.bestReview-pagination .swiper-pagination-bullet {
    width: 60px;
    height: 4px;
    border-radius: 2px;
    background-color: #E0E0E0;
    opacity: 1;
    transition: all 0.3s ease;
}

.bestReview-pagination .swiper-pagination-bullet-active {
    background-color: var(--main-brown01);
}

@media (max-width: 768px) {
    .bestReviewSwiper {
        padding-bottom: 50px;
    }

    .swiper-button-prev.bestReview-prev,
    .swiper-button-next.bestReview-next {
        width: 48px;
        height: 48px;
    }

    .swiper-button-prev.bestReview-prev::after,
    .swiper-button-next.bestReview-next::after {
        font-size: 20px;
    }

    .bestReview-pagination .swiper-pagination-bullet {
        width: 40px;
        height: 3px;
    }
}
</style>

<?php
include_once(G5_PATH.'/tail.php');  // 푸터 포함
?>
