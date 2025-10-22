<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}

// Tailwind CSS 및 필수 스타일 추가
add_javascript('<script src="https://cdn.tailwindcss.com"></script>', 0);
add_stylesheet('<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous" />', 0);
add_stylesheet('<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/wanteddev/wanted-sans@v1.0.3/packages/wanted-sans/fonts/webfonts/variable/split/WantedSansVariable.min.css" />', 0);

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<header class="fixed top-0 left-0 right-0 bg-white shadow-sm z-50">
    <div class="container mx-auto px-4">
        <!-- 데스크톱 헤더 -->
        <div class="hidden lg:block">
            <div class="flex items-center justify-between h-20">
                <!-- 로고 -->
                <a href="/" class="flex items-center">
                    <img src="<?php echo G5_THEME_URL; ?>/img/logo.png" alt="다안코디" class="h-12">
                </a>

                <!-- 메인 네비게이션 -->
                <nav class="main-nav group relative flex items-center gap-8">
                    <!-- 브랜드소개 -->
                    <div class="nav-item relative">
                        <a href="#" class="text-base font-medium hover:text-[#8B6F47] transition py-8 block">브랜드소개</a>
                    </div>

                    <!-- 제품구성 -->
                    <div class="nav-item relative">
                        <a href="#" class="text-base font-medium hover:text-[#8B6F47] transition py-8 block">제품구성</a>
                    </div>

                    <!-- 견적문의 -->
                    <div class="nav-item relative">
                        <a href="#" class="text-base font-medium hover:text-[#8B6F47] transition py-8 block">견적문의</a>
                    </div>

                    <!-- 제품갤러리 -->
                    <div class="nav-item relative">
                        <a href="/sub/제품갤러리.php" class="text-base font-medium hover:text-[#8B6F47] transition py-8 block">제품갤러리</a>
                    </div>

                    <!-- 이전설치 -->
                    <div class="nav-item relative">
                        <a href="#" class="text-base font-medium hover:text-[#8B6F47] transition py-8 block">이전설치</a>
                    </div>

                    <!-- 고객센터 -->
                    <div class="nav-item relative">
                        <a href="#" class="text-base font-medium hover:text-[#8B6F47] transition py-8 block">고객센터</a>
                    </div>

                    <!-- 통합 메가메뉴 패널 -->
                    <div class="mega-menu-panel opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 absolute top-full left-1/2 -translate-x-1/2 w-screen bg-white shadow-lg border-t border-gray-100">
                        <div class="container mx-auto px-4 py-10">
                            <div class="grid grid-cols-6 gap-12">
                                <!-- 브랜드소개 서브메뉴 -->
                                <div>
                                    <h3 class="text-base font-bold mb-4 text-gray-900">브랜드소개</h3>
                                    <ul class="space-y-3">
                                        <li><a href="/dc/sub/brandstory.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">브랜드 스토리</a></li>
                                        <li><a href="/dc/sub/patent.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">특허기술</a></li>
                                    </ul>
                                </div>

                                <!-- 제품구성 서브메뉴 -->
                                <div>
                                    <h3 class="text-base font-bold mb-4 text-gray-900">제품구성</h3>
                                    <ul class="space-y-3">
                                        <li><a href="/dc/sub/세트상품.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">세트상품</a></li>
                                        <li><a href="#" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">개별상품</a></li>
                                        <li><a href="#" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">모듈</a></li>
                                        <li><a href="/dc/sub/설치가이드.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">설치 가이드</a></li>
                                        <li><a href="/dc/sub/컬러갤러리.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">컬러갤러리</a></li>
                                    </ul>
                                </div>

                                <!-- 견적문의 서브메뉴 -->
                                <div>
                                    <h3 class="text-base font-bold mb-4 text-gray-900">견적문의</h3>
                                    <ul class="space-y-3">
                                        <li><a href="/dc/sub/inquiry.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">견적문의 신청</a></li>
                                        <li><a href="/dc/sub/quote-guide.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">견적문의 가이드</a></li>
                                    </ul>
                                </div>

                                <!-- 제품갤러리 서브메뉴 -->
                                <div>
                                    <h3 class="text-base font-bold mb-4 text-gray-900">제품갤러리</h3>
                                    <ul class="space-y-3">
                                        <li><a href="#" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">고객후기</a></li>
                                        <li><a href="/dc/sub/제품갤러리.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">시공갤러리</a></li>
                                    </ul>
                                </div>

                                <!-- 이전설치 서브메뉴 -->
                                <div>
                                    <h3 class="text-base font-bold mb-4 text-gray-900">이전설치</h3>
                                    <ul class="space-y-3">
                                        <li><a href="/dc/sub/transfer-guide.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">셀프 이전 가이드</a></li>
                                        <li><a href="/dc/sub/transfer-service.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">전문가 이전 서비스</a></li>
                                        <li><a href="" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">이전설치 신청</a></li>
                                    </ul>
                                </div>

                                <!-- 고객센터 서브메뉴 -->
                                <div>
                                    <h3 class="text-base font-bold mb-4 text-gray-900">고객센터</h3>
                                    <ul class="space-y-3">
                                        <li><a href="/dc/sub/notice.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">공지사항</a></li>
                                        <li><a href="/dc/sub/faq.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">FAQ</a></li>
                                        <li><a href="/dc/sub/as-list.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">A/S 신청</a></li>
                                        <li><a href="/dc/sub/one-to-one-list.php" class="text-sm text-gray-600 hover:text-[#8B6F47] transition block">1:1 상담 신청</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- 우측 아이콘 -->
                <div class="flex items-center gap-4">
                    <a href="#" class="flex flex-col items-center gap-1 text-xs hover:text-[#8B6F47] transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                        <span>매뉴얼</span>
                    </a>
                    <a href="#" class="flex flex-col items-center gap-1 text-xs hover:text-[#8B6F47] transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span>로그인</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- 모바일 헤더 -->
        <div class="lg:hidden">
            <div class="flex items-center justify-between h-16">
                <!-- 뒤로가기 버튼 (서브페이지에서만 표시) -->
                <button onclick="history.back()" class="mobile-back-btn hidden p-2 -ml-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <!-- 로고 -->
                <a href="/" class="flex items-center">
                    <img src="<?php echo G5_THEME_URL; ?>/img/logo.png" alt="다안코디" class="h-8">
                </a>

                <!-- 페이지 타이틀 (서브페이지에서만 표시) -->
                <h1 class="mobile-page-title hidden text-lg font-bold"></h1>

                <!-- 햄버거 메뉴 -->
                <button id="mobile-menu-btn" class="p-2 -mr-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- 모바일 메뉴 -->
<div id="mobile-menu" class="fixed inset-0 bg-white z-50 transform translate-x-full transition-transform duration-300 lg:hidden">
    <div class="h-full overflow-y-auto">
        <!-- 모바일 메뉴 헤더 -->
        <div id="mobile-menu-header" class="flex items-center justify-between px-4 h-16 border-b">
            <!-- 뒤로가기 버튼 (depth 2일 때 표시) -->
            <button id="mobile-depth-back" class="hidden p-2 -ml-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            <h2 id="mobile-menu-title" class="text-lg font-bold">홀길동 님, 안녕하세요.</h2>

            <button id="mobile-menu-close" class="p-2 -mr-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Depth 1: 메인 메뉴 (2단 레이아웃) -->
        <div id="mobile-depth-1" class="mobile-depth-layer flex h-[calc(100%-4rem)]">
            <!-- 좌측 메인 메뉴 -->
            <div class="w-1/3 bg-gray-50 border-r">
                <nav class="py-4">
                    <a href="#" data-submenu="brand" data-title="브랜드소개" class="mobile-menu-item block px-4 py-4 text-sm font-medium hover:bg-white transition">브랜드소개</a>
                    <a href="#" data-submenu="product" data-title="제품구성" class="mobile-menu-item block px-4 py-4 text-sm font-medium hover:bg-white transition">제품구성</a>
                    <a href="#" data-submenu="estimate" data-title="견적문의" class="mobile-menu-item block px-4 py-4 text-sm font-medium hover:bg-white transition">견적문의</a>
                    <a href="#" data-submenu="gallery" data-title="제품갤러리" class="mobile-menu-item block px-4 py-4 text-sm font-medium hover:bg-white transition">제품갤러리</a>
                    <a href="#" data-submenu="installation" data-title="이전설치" class="mobile-menu-item block px-4 py-4 text-sm font-medium hover:bg-white transition">이전설치</a>
                    <a href="#" data-submenu="support" data-title="고객센터" class="mobile-menu-item block px-4 py-4 text-sm font-medium hover:bg-white transition">고객센터</a>
                </nav>
            </div>

            <!-- 우측 서브메뉴 -->
            <div class="w-2/3 bg-white">
                <!-- 브랜드소개 서브메뉴 -->
                <div id="submenu-brand" class="submenu-content hidden p-6">
                    <div class="flex items-center justify-between mb-6 cursor-pointer" data-depth-menu="brand">
                        <h3 class="text-lg font-bold">브랜드소개</h3>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                    <nav class="space-y-4">
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">브랜드 스토리</a>
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">특허기술</a>
                    </nav>
                </div>

                <!-- 제품구성 서브메뉴 -->
                <div id="submenu-product" class="submenu-content p-6">
                    <div class="flex items-center justify-between mb-6 cursor-pointer" data-depth-menu="product">
                        <h3 class="text-lg font-bold">제품구성</h3>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                    <nav class="space-y-4">
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">세트상품</a>
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">개별상품</a>
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">모듈</a>
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">설치 가이드</a>
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">컬러갤러리</a>
                    </nav>
                </div>

                <!-- 견적문의 서브메뉴 -->
                <div id="submenu-estimate" class="submenu-content hidden p-6">
                    <div class="flex items-center justify-between mb-6 cursor-pointer" data-depth-menu="estimate">
                        <h3 class="text-lg font-bold">견적문의</h3>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                    <nav class="space-y-4">
                        <a href="/dc/sub/inquiry.php" class="block text-sm py-2 hover:text-[#8B6F47] transition">견적문의 신청</a>
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">견적문의 가이드</a>
                    </nav>
                </div>

                <!-- 제품갤러리 서브메뉴 -->
                <div id="submenu-gallery" class="submenu-content hidden p-6">
                    <div class="flex items-center justify-between mb-6 cursor-pointer" data-depth-menu="gallery">
                        <h3 class="text-lg font-bold">제품갤러리</h3>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                    <nav class="space-y-4">
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">고객후기</a>
                        <a href="/sub/제품갤러리.php" class="block text-sm py-2 hover:text-[#8B6F47] transition">시공갤러리</a>
                    </nav>
                </div>

                <!-- 이전설치 서브메뉴 -->
                <div id="submenu-installation" class="submenu-content hidden p-6">
                    <div class="flex items-center justify-between mb-6 cursor-pointer" data-depth-menu="installation">
                        <h3 class="text-lg font-bold">이전설치</h3>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                    <nav class="space-y-4">
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">셀프 이전 가이드</a>
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">전문가 이전 서비스</a>
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">이전설치 신청</a>
                    </nav>
                </div>

                <!-- 고객센터 서브메뉴 -->
                <div id="submenu-support" class="submenu-content hidden p-6">
                    <div class="flex items-center justify-between mb-6 cursor-pointer" data-depth-menu="support">
                        <h3 class="text-lg font-bold">고객센터</h3>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                    <nav class="space-y-4">
                        <a href="/dc/sub/notice.php" class="block text-sm py-2 hover:text-[#8B6F47] transition">공지사항</a>
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">FAQ</a>
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">A/S 신청</a>
                        <a href="#" class="block text-sm py-2 hover:text-[#8B6F47] transition">1:1 상담 신청</a>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Depth 2: 서브메뉴 전체화면 -->
        <div id="mobile-depth-2" class="mobile-depth-layer hidden h-[calc(100%-4rem)] bg-white">
            <!-- 각 카테고리별 depth 2 컨텐츠 -->
            <div id="depth2-brand" class="depth2-content hidden p-6">
                <nav class="space-y-4">
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">브랜드 스토리</a>
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">특허기술</a>
                </nav>
            </div>

            <div id="depth2-product" class="depth2-content hidden p-6">
                <nav class="space-y-4">
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">세트상품</a>
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">개별상품</a>
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">모듈</a>
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">설치 가이드</a>
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">컬러갤러리</a>
                </nav>
            </div>

            <div id="depth2-estimate" class="depth2-content hidden p-6">
                <nav class="space-y-4">
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">견적문의 신청</a>
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">견적문의 가이드</a>
                </nav>
            </div>

            <div id="depth2-gallery" class="depth2-content hidden p-6">
                <nav class="space-y-4">
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">고객후기</a>
                    <a href="/sub/제품갤러리.php" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">시공갤러리</a>
                </nav>
            </div>

            <div id="depth2-installation" class="depth2-content hidden p-6">
                <nav class="space-y-4">
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">셀프 이전 가이드</a>
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">전문가 이전 서비스</a>
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">이전설치 신청</a>
                </nav>
            </div>

            <div id="depth2-support" class="depth2-content hidden p-6">
                <nav class="space-y-4">
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">공지사항</a>
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">FAQ</a>
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">A/S 신청</a>
                    <a href="#" class="block text-base py-3 border-b hover:text-[#8B6F47] transition">1:1 상담 신청</a>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
// 모바일 메뉴 상태 관리
let currentDepth = 1;
let currentCategory = '';

// 모바일 메뉴 토글
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuClose = document.getElementById('mobile-menu-close');
const mobileMenuTitle = document.getElementById('mobile-menu-title');
const mobileDepthBack = document.getElementById('mobile-depth-back');
const mobileDepth1 = document.getElementById('mobile-depth-1');
const mobileDepth2 = document.getElementById('mobile-depth-2');

// 메뉴 열기
mobileMenuBtn?.addEventListener('click', () => {
    mobileMenu.classList.remove('translate-x-full');
    document.body.style.overflow = 'hidden';
    resetToDepth1();
});

// 메뉴 닫기
mobileMenuClose?.addEventListener('click', () => {
    mobileMenu.classList.add('translate-x-full');
    document.body.style.overflow = '';
    setTimeout(() => resetToDepth1(), 300);
});

// Depth 1으로 리셋
function resetToDepth1() {
    currentDepth = 1;
    mobileDepth1.classList.remove('hidden');
    mobileDepth2.classList.add('hidden');
    mobileDepthBack.classList.add('hidden');
    mobileMenuTitle.textContent = '홀길동 님, 안녕하세요.';

    // 첫 번째 메뉴 아이템 활성화
    const firstMenuItem = document.querySelector('.mobile-menu-item');
    if (firstMenuItem) {
        firstMenuItem.click();
    }
}

// 모바일 메인 메뉴 클릭 (Depth 1에서 서브메뉴 표시)
const mobileMenuItems = document.querySelectorAll('.mobile-menu-item');
mobileMenuItems.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        const submenuId = item.getAttribute('data-submenu');

        // 모든 서브메뉴 숨기기
        document.querySelectorAll('.submenu-content').forEach(content => {
            content.classList.add('hidden');
        });

        // 모든 메뉴 아이템 비활성화
        mobileMenuItems.forEach(i => i.classList.remove('bg-white'));

        // 선택된 서브메뉴 표시
        const submenu = document.getElementById(`submenu-${submenuId}`);
        if (submenu) {
            submenu.classList.remove('hidden');
            item.classList.add('bg-white');
        }
    });
});

// 서브메뉴 헤더 클릭 (Depth 2로 전환)
const depthMenuHeaders = document.querySelectorAll('[data-depth-menu]');
depthMenuHeaders.forEach(header => {
    header.addEventListener('click', () => {
        const category = header.getAttribute('data-depth-menu');
        goToDepth2(category);
    });
});

// Depth 2로 이동
function goToDepth2(category) {
    currentDepth = 2;
    currentCategory = category;

    // Depth 1 숨기고 Depth 2 표시
    mobileDepth1.classList.add('hidden');
    mobileDepth2.classList.remove('hidden');

    // 모든 depth2 컨텐츠 숨기기
    document.querySelectorAll('.depth2-content').forEach(content => {
        content.classList.add('hidden');
    });

    // 선택된 depth2 컨텐츠 표시
    const depth2Content = document.getElementById(`depth2-${category}`);
    if (depth2Content) {
        depth2Content.classList.remove('hidden');
    }

    // 헤더 변경
    const categoryTitles = {
        'brand': '브랜드소개',
        'product': '제품구성',
        'estimate': '견적문의',
        'gallery': '제품갤러리',
        'installation': '이전설치',
        'support': '고객센터'
    };
    mobileMenuTitle.textContent = categoryTitles[category] || '메뉴';
    mobileDepthBack.classList.remove('hidden');
}

// Depth 뒤로가기
mobileDepthBack?.addEventListener('click', () => {
    if (currentDepth === 2) {
        currentDepth = 1;
        mobileDepth2.classList.add('hidden');
        mobileDepth1.classList.remove('hidden');
        mobileDepthBack.classList.add('hidden');
        mobileMenuTitle.textContent = '홀길동 님, 안녕하세요.';
    }
});

// 서브페이지에서 뒤로가기 버튼 표시
const isSubPage = <?php echo defined("_INDEX_") ? 'false' : 'true'; ?>;
if (isSubPage && window.innerWidth < 1024) {
    const backBtn = document.querySelector('.mobile-back-btn');
    const logo = document.querySelector('.lg\\:hidden .flex.items-center');
    const pageTitle = document.querySelector('.mobile-page-title');

    if (backBtn && logo && pageTitle) {
        backBtn.classList.remove('hidden');
        logo.classList.add('hidden');
        pageTitle.classList.remove('hidden');
        pageTitle.textContent = '<?php echo strip_tags($g5['title'] ?? ''); ?>';
    }
}

// 페이지 로드 시 첫 번째 서브메뉴 활성화
window.addEventListener('DOMContentLoaded', () => {
    resetToDepth1();
});
</script>

<style>
/* 메가메뉴 애니메이션 */
.main-nav:hover .mega-menu-panel {
    pointer-events: auto;
}

.mega-menu-panel {
    pointer-events: none;
}

/* 모바일 메뉴 오버레이 */
#mobile-menu {
    top: 0;
}

/* 헤더 고정 시 컨텐츠 여백 */
body {
    padding-top: 80px;
}

@media (max-width: 1023px) {
    body {
        padding-top: 64px;
    }
}
</style>
<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
   
    <div id="">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }