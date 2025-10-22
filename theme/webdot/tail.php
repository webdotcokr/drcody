<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

</div>

</div>
<!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
<footer class="bg-gray-50 border-t border-gray-200">
    <div class="container mx-auto px-4 py-8 md:py-12">
        <!-- 데스크톱 레이아웃 -->
        <div class="hidden md:block">
            <!-- 상단 섹션: 로고, 네비게이션, 소셜미디어 -->
            <div class="flex justify-between items-start mb-8">
                <!-- 로고 -->
                <div class="flex-shrink-0">
                    <img src="<?php echo G5_THEME_URL; ?>/img/footer.png" alt="디알코디 로고" class="h-12">
                </div>

                <!-- 네비게이션 -->
                <nav class="flex gap-8 items-center">
                    <a href="#" class="text-gray-700 hover:text-gray-900 font-medium">회사소개</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 font-medium">고객센터</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 font-medium">이용약관</a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 font-medium">개인정보보호처리방침</a>
                </nav>

                <!-- 소셜미디어 아이콘 -->
                <div class="flex gap-3 items-center">
                    <a href="#" class="hover:opacity-80 transition-opacity">
                        <img src="<?php echo G5_THEME_URL; ?>/img/youtube-icon.png" alt="YouTube" class="w-8 h-8">
                    </a>
                    <a href="#" class="hover:opacity-80 transition-opacity">
                        <img src="<?php echo G5_THEME_URL; ?>/img/instagram-icon.png" alt="Instagram" class="w-8 h-8">
                    </a>
                    <a href="#" class="hover:opacity-80 transition-opacity">
                        <img src="<?php echo G5_THEME_URL; ?>/img/blog-icon.png" alt="Blog" class="w-8 h-8">
                    </a>
                </div>
            </div>

            <!-- 회사 정보 -->
            <div class="grid grid-cols-2 gap-x-12 gap-y-2 text-sm text-gray-600 mb-6">
                <div class="flex gap-4">
                    <span class="text-gray-800 font-medium">회사명</span>
                    <span>(주)디알코디</span>
                </div>
                <div class="flex gap-4">
                    <span class="text-gray-800 font-medium">BANK INFO</span>
                    <span>(주)디알코디 국민은행 240801-04-408979</span>
                </div>
                <div class="flex gap-4">
                    <span class="text-gray-800 font-medium">대표자</span>
                    <span>최경</span>
                </div>
                <div></div>
                <div class="flex gap-4">
                    <span class="text-gray-800 font-medium">주소</span>
                    <span>경기 평택시 진위면 봉남5길 3</span>
                </div>
                <div></div>
                <div class="flex gap-4">
                    <span class="text-gray-800 font-medium">사업자등록번호</span>
                    <span>125-86-30689</span>
                </div>
                <div></div>
                <div class="flex gap-4">
                    <span class="text-gray-800 font-medium">통신판매업신고번호</span>
                    <span>제 2015-경기송탄-66호</span>
                </div>
                <div></div>
                <div class="flex gap-4">
                    <span class="text-gray-800 font-medium">개인정보관리책임자</span>
                    <span>허성순</span>
                </div>
            </div>

            <!-- 저작권 -->
            <div class="text-right text-sm text-gray-500">
                Copyright © DRCODY. All rights reserved.
            </div>
        </div>

        <!-- 모바일 레이아웃 -->
        <div class="md:hidden">
            <!-- 계좌 정보 카드 -->
            <div class="bg-white rounded-lg shadow-sm p-4 mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-xs text-gray-500 mb-1">BANK INFO</p>
                        <p class="text-sm font-semibold">(주)디알코디 국민은행 240801-04-408979</p>
                    </div>
                    <button class="p-2 hover:bg-gray-50 rounded">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- 로고 및 토글 버튼 -->
            <div class="flex justify-between items-center mb-4">
                <img src="<?php echo G5_THEME_URL; ?>/img/footer.png" alt="디알코디 로고" class="h-10">
                <button id="footerToggle" class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 transition-colors">
                    <svg class="w-5 h-5 text-gray-600 transform transition-transform" id="footerToggleIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>

            <!-- 토글 가능한 회사 정보 -->
            <div id="footerContent" class="space-y-3 mb-6">
                <div class="flex text-sm">
                    <span class="text-gray-800 font-medium min-w-[100px]">회사명</span>
                    <span class="text-gray-600">(주)디알코디</span>
                </div>
                <div class="flex text-sm">
                    <span class="text-gray-800 font-medium min-w-[100px]">대표자</span>
                    <span class="text-gray-600">최경</span>
                </div>
                <div class="flex text-sm">
                    <span class="text-gray-800 font-medium min-w-[100px]">주소</span>
                    <span class="text-gray-600">경기 평택시 진위면 봉남5길 3</span>
                </div>
                <div class="flex text-sm">
                    <span class="text-gray-800 font-medium min-w-[100px]">사업자등록번호</span>
                    <span class="text-gray-600">125-86-30689</span>
                </div>
                <div class="flex text-sm">
                    <span class="text-gray-800 font-medium min-w-[100px]">통신판매업신고번호</span>
                    <span class="text-gray-600">제 2015-경기송탄-66호</span>
                </div>
                <div class="flex text-sm">
                    <span class="text-gray-800 font-medium min-w-[100px]">개인정보관리책임자</span>
                    <span class="text-gray-600">허성순</span>
                </div>
            </div>

            <!-- 소셜미디어 아이콘 -->
            <div class="flex gap-3 justify-center mb-6">
                <a href="#" class="hover:opacity-80 transition-opacity">
                    <img src="<?php echo G5_THEME_URL; ?>/img/youtube-icon.png" alt="YouTube" class="w-10 h-10">
                </a>
                <a href="#" class="hover:opacity-80 transition-opacity">
                    <img src="<?php echo G5_THEME_URL; ?>/img/instagram-icon.png" alt="Instagram" class="w-10 h-10">
                </a>
                <a href="#" class="hover:opacity-80 transition-opacity">
                    <img src="<?php echo G5_THEME_URL; ?>/img/blog-icon.png" alt="Blog" class="w-10 h-10">
                </a>
            </div>

            <!-- 네비게이션 -->
            <nav class="flex flex-wrap justify-center gap-4 text-sm mb-6">
                <a href="#" class="text-gray-700 hover:text-gray-900">회사소개</a>
                <span class="text-gray-300">|</span>
                <a href="#" class="text-gray-700 hover:text-gray-900">고객센터</a>
                <span class="text-gray-300">|</span>
                <a href="#" class="text-gray-700 hover:text-gray-900">이용약관</a>
                <span class="text-gray-300">|</span>
                <a href="#" class="text-gray-700 hover:text-gray-900">개인정보보호처리방침</a>
            </nav>

            <!-- 저작권 -->
            <div class="text-center text-xs text-gray-500">
                Copyright © DRCODY. All rights reserved.
            </div>
        </div>
    </div>
</footer>

<script>
// 모바일 푸터 토글 기능
document.addEventListener('DOMContentLoaded', function() {
    const footerToggle = document.getElementById('footerToggle');
    const footerContent = document.getElementById('footerContent');
    const footerToggleIcon = document.getElementById('footerToggleIcon');

    if (footerToggle && footerContent) {
        footerToggle.addEventListener('click', function() {
            footerContent.classList.toggle('hidden');
            footerToggleIcon.classList.toggle('rotate-180');
        });
    }
});
</script>
<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");