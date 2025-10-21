<?php
include_once('../common.php');  // 공통 설정 불러오기
$g5['title'] = "시공갤러리";  // 페이지 제목 설정
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
include_once(G5_PATH.'/head.php');  // 헤더 포함

// ===== 목업 데이터 =====

// 필터 옵션 데이터
$filter_options = [
    'colors' => [
        '월그레이', '화이트', '워시', '오크', '다크스톤그레이',
        '월넛', '티크', '메이플', '체리', '에쉬', '참나무', '소나무'
    ],
    'functions' => [
        '기본', '슬라이딩', '폴딩', '회전선반', 'LED조명',
        '서랍형', '오픈형', '거울도어', '유리도어'
    ],
    'space_types' => [
        'ㄱ형', 'ㄷ형', '一형', 'ㅁ형', 'L형'
    ]
];

// 갤러리 아이템 목업 데이터
$gallery_items = [
    [
        'id' => 1,
        'image' => '/theme/webdot/img/detail/gallery-1.jpg',
        'color' => '월그레이',
        'function_color' => '화이트',
        'space_type' => 'ㄱ형',
        'created_at' => '2024-01-15'
    ],
    [
        'id' => 2,
        'image' => '/theme/webdot/img/detail/gallery-2.jpg',
        'color' => '월그레이',
        'function_color' => '실버',
        'space_type' => 'ㄱ형',
        'created_at' => '2024-01-14'
    ],
    [
        'id' => 3,
        'image' => '/theme/webdot/img/detail/gallery-3.jpg',
        'color' => '월그레이',
        'function_color' => '실버',
        'space_type' => 'ㄱ형',
        'created_at' => '2024-01-13'
    ],
    [
        'id' => 4,
        'image' => '/theme/webdot/img/detail/gallery-4.jpg',
        'color' => '월그레이',
        'function_color' => '실버',
        'space_type' => 'ㄱ형',
        'created_at' => '2024-01-12'
    ],
    [
        'id' => 5,
        'image' => '/theme/webdot/img/detail/gallery-5.jpg',
        'color' => '월그레이',
        'function_color' => '실버',
        'space_type' => 'ㄱ형',
        'created_at' => '2024-01-11'
    ],
    [
        'id' => 6,
        'image' => '/theme/webdot/img/detail/gallery-6.jpg',
        'color' => '월그레이',
        'function_color' => '실버',
        'space_type' => 'ㄷ형',
        'created_at' => '2024-01-10'
    ],
    [
        'id' => 7,
        'image' => '/theme/webdot/img/detail/gallery-7.jpg',
        'color' => '월그레이',
        'function_color' => '실버',
        'space_type' => 'ㄷ형',
        'created_at' => '2024-01-09'
    ],
    [
        'id' => 8,
        'image' => '/theme/webdot/img/detail/gallery-8.jpg',
        'color' => '월그레이',
        'function_color' => '화이트',
        'space_type' => 'ㄷ형',
        'created_at' => '2024-01-08'
    ],
    [
        'id' => 9,
        'image' => '/theme/webdot/img/detail/gallery-9.jpg',
        'color' => '화이트',
        'function_color' => '실버',
        'space_type' => '一형',
        'created_at' => '2024-01-07'
    ],
    [
        'id' => 10,
        'image' => '/theme/webdot/img/detail/gallery-10.jpg',
        'color' => '화이트',
        'function_color' => '화이트',
        'space_type' => '一형',
        'created_at' => '2024-01-06'
    ],
    [
        'id' => 11,
        'image' => '/theme/webdot/img/detail/gallery-11.jpg',
        'color' => '오크',
        'function_color' => '골드',
        'space_type' => 'ㄱ형',
        'created_at' => '2024-01-05'
    ],
    [
        'id' => 12,
        'image' => '/theme/webdot/img/detail/gallery-12.jpg',
        'color' => '오크',
        'function_color' => '실버',
        'space_type' => 'ㄷ형',
        'created_at' => '2024-01-04'
    ],
    [
        'id' => 13,
        'image' => '/theme/webdot/img/detail/gallery-13.jpg',
        'color' => '워시',
        'function_color' => '화이트',
        'space_type' => 'ㄱ형',
        'created_at' => '2024-01-03'
    ],
    [
        'id' => 14,
        'image' => '/theme/webdot/img/detail/gallery-14.jpg',
        'color' => '워시',
        'function_color' => '실버',
        'space_type' => '一형',
        'created_at' => '2024-01-02'
    ],
    [
        'id' => 15,
        'image' => '/theme/webdot/img/detail/gallery-15.jpg',
        'color' => '다크스톤그레이',
        'function_color' => '블랙',
        'space_type' => 'ㄷ형',
        'created_at' => '2024-01-01'
    ],
    [
        'id' => 16,
        'image' => '/theme/webdot/img/detail/gallery-16.jpg',
        'color' => '다크스톤그레이',
        'function_color' => '실버',
        'space_type' => 'ㄱ형',
        'created_at' => '2023-12-31'
    ]
];

// 전체 갤러리 수
$total_count = count($gallery_items);

// 페이지네이션 설정
$items_per_page = 16;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$total_pages = ceil($total_count / $items_per_page);

// 현재 페이지의 아이템만 가져오기
$offset = ($current_page - 1) * $items_per_page;
$current_items = array_slice($gallery_items, $offset, $items_per_page);

?>

<!-- 히어로 배너 섹션 -->
<section class="relative h-[400px] bg-cover bg-center" style="background-image: url('/path/to/banner-image.jpg');">
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="relative container mx-auto px-4 h-full flex flex-col justify-center text-white">
        <nav class="text-sm mb-6 flex items-center gap-2">
            <a href="/" class="hover:underline">홈</a>
            <span>/</span>
            <a href="#" class="hover:underline">제품갤러리</a>
            <span>/</span>
            <span>시공갤러리</span>
        </nav>

        <h1 class="text-4xl md:text-5xl font-bold mb-4">시공갤러리</h1>
        <p class="text-lg mb-2">이사 할땐 없어, 빼곡 구겨 쓸 땐 왔는데도 드레스룸</p>
        <p class="text-base">다안팜 공간을 시공 사례를 통해 당신의 드레스룸을 미리 만나보세요...</p>

        <div class="flex gap-4 mt-8">
            <button class="px-8 py-3 bg-white/20 backdrop-blur-sm text-white rounded hover:bg-white/30 transition">고객후기</button>
            <button class="px-8 py-3 bg-[#8B6F47] text-white rounded hover:bg-[#7A5F3A] transition">시공갤러리</button>
        </div>
    </div>
</section>

<!-- 메인 컨텐츠 -->
<main class="container mx-auto px-4 py-12">
    <!-- 필터 섹션 -->
    <div class="mb-8">
        <div class="flex items-baseline gap-3 mb-6">
            <h2 class="text-3xl font-bold">제품후기</h2>
            <span class="text-2xl text-gray-400"><?php echo number_format($total_count); ?></span>
        </div>

        <!-- 필터 드롭다운 -->
        <div class="flex flex-wrap gap-4 mb-6">
            <!-- 색상 필터 -->
            <div class="relative filter-dropdown">
                <button class="filter-btn px-6 py-3 bg-white border border-gray-300 rounded-lg flex items-center justify-between min-w-[200px] hover:border-gray-400 transition">
                    <span class="filter-label">색상</span>
                    <svg class="w-5 h-5 ml-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="filter-panel hidden absolute top-full left-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg p-6 min-w-[600px] z-10">
                    <div class="grid grid-cols-5 gap-4">
                        <?php foreach($filter_options['colors'] as $color): ?>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" value="<?php echo $color; ?>" class="w-5 h-5 rounded border-gray-300 text-[#8B6F47] focus:ring-[#8B6F47]">
                            <span><?php echo $color; ?></span>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- 기능 색상 필터 -->
            <div class="relative filter-dropdown">
                <button class="filter-btn px-6 py-3 bg-white border border-gray-300 rounded-lg flex items-center justify-between min-w-[200px] hover:border-gray-400 transition">
                    <span class="filter-label">기능 색상</span>
                    <svg class="w-5 h-5 ml-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="filter-panel hidden absolute top-full left-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg p-6 min-w-[500px] z-10">
                    <div class="grid grid-cols-3 gap-4">
                        <?php foreach($filter_options['functions'] as $function): ?>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" value="<?php echo $function; ?>" class="w-5 h-5 rounded border-gray-300 text-[#8B6F47] focus:ring-[#8B6F47]">
                            <span><?php echo $function; ?></span>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- 공간 형태 필터 -->
            <div class="relative filter-dropdown">
                <button class="filter-btn px-6 py-3 bg-white border border-gray-300 rounded-lg flex items-center justify-between min-w-[200px] hover:border-gray-400 transition">
                    <span class="filter-label">공간 형태</span>
                    <svg class="w-5 h-5 ml-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="filter-panel hidden absolute top-full left-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg p-6 min-w-[400px] z-10">
                    <div class="grid grid-cols-3 gap-4">
                        <?php foreach($filter_options['space_types'] as $space_type): ?>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" value="<?php echo $space_type; ?>" class="w-5 h-5 rounded border-gray-300 text-[#8B6F47] focus:ring-[#8B6F47]">
                            <span><?php echo $space_type; ?></span>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- 선택된 필터 태그 (JavaScript로 동적 생성) -->
        <div class="flex flex-wrap gap-2 selected-filters"></div>
    </div>

    <!-- 갤러리 그리드 -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <?php foreach($current_items as $item): ?>
        <div class="gallery-item group cursor-pointer"
             data-color="<?php echo $item['color']; ?>"
             data-function="<?php echo $item['function_color']; ?>"
             data-space="<?php echo $item['space_type']; ?>">
            <div class="relative overflow-hidden rounded-lg mb-3 aspect-[4/3]">
                <img src="<?php echo $item['image']; ?>"
                     alt="갤러리 이미지 <?php echo $item['id']; ?>"
                     class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
            </div>
            <div class="space-y-1">
                <div class="flex items-center gap-2 text-sm">
                    <span class="text-gray-600">색상</span>
                    <span class="font-medium"><?php echo $item['color']; ?></span>
                    <span class="text-gray-400">|</span>
                    <span class="text-gray-600">기능색상</span>
                    <span class="font-medium"><?php echo $item['function_color']; ?></span>
                </div>
                <div class="text-sm text-gray-500">
                    공간형태 <span class="font-medium text-gray-700"><?php echo $item['space_type']; ?></span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- 페이지네이션 -->
    <nav class="flex justify-center items-center gap-2">
        <!-- 맨 처음으로 -->
        <?php if($current_page > 1): ?>
        <a href="?page=1" class="w-10 h-10 flex items-center justify-center rounded hover:bg-gray-100 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7"/>
            </svg>
        </a>
        <?php endif; ?>

        <!-- 이전 페이지 -->
        <?php if($current_page > 1): ?>
        <a href="?page=<?php echo $current_page - 1; ?>" class="w-10 h-10 flex items-center justify-center rounded hover:bg-gray-100 transition">
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
           class="w-10 h-10 flex items-center justify-center rounded transition <?php echo $i == $current_page ? 'bg-[#8B6F47] text-white' : 'hover:bg-gray-100'; ?>">
            <?php echo $i; ?>
        </a>
        <?php endfor; ?>

        <!-- 다음 페이지 -->
        <?php if($current_page < $total_pages): ?>
        <a href="?page=<?php echo $current_page + 1; ?>" class="w-10 h-10 flex items-center justify-center rounded hover:bg-gray-100 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </a>
        <?php endif; ?>

        <!-- 맨 끝으로 -->
        <?php if($current_page < $total_pages): ?>
        <a href="?page=<?php echo $total_pages; ?>" class="w-10 h-10 flex items-center justify-center rounded hover:bg-gray-100 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7"/>
            </svg>
        </a>
        <?php endif; ?>
    </nav>
</main>

<script>
// 필터 드롭다운 토글 기능
document.addEventListener('DOMContentLoaded', function() {
    const filterDropdowns = document.querySelectorAll('.filter-dropdown');

    filterDropdowns.forEach(dropdown => {
        const btn = dropdown.querySelector('.filter-btn');
        const panel = dropdown.querySelector('.filter-panel');
        const svg = btn.querySelector('svg');

        btn.addEventListener('click', function(e) {
            e.stopPropagation();

            // 다른 드롭다운 닫기
            filterDropdowns.forEach(other => {
                if (other !== dropdown) {
                    other.querySelector('.filter-panel').classList.add('hidden');
                    other.querySelector('svg').style.transform = 'rotate(0deg)';
                }
            });

            // 현재 드롭다운 토글
            panel.classList.toggle('hidden');
            if (panel.classList.contains('hidden')) {
                svg.style.transform = 'rotate(0deg)';
            } else {
                svg.style.transform = 'rotate(180deg)';
            }
        });
    });

    // 외부 클릭 시 드롭다운 닫기
    document.addEventListener('click', function() {
        filterDropdowns.forEach(dropdown => {
            dropdown.querySelector('.filter-panel').classList.add('hidden');
            dropdown.querySelector('svg').style.transform = 'rotate(0deg)';
        });
    });

    // 패널 내부 클릭 시 이벤트 전파 중지
    document.querySelectorAll('.filter-panel').forEach(panel => {
        panel.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });

    // 체크박스 변경 시 필터 카운트 업데이트
    const checkboxes = document.querySelectorAll('.filter-panel input[type="checkbox"]');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            updateFilterCount(this);
            updateSelectedTags();
        });
    });

    function updateFilterCount(checkbox) {
        const dropdown = checkbox.closest('.filter-dropdown');
        const filterLabel = dropdown.querySelector('.filter-label');
        const panel = dropdown.querySelector('.filter-panel');
        const checkedCount = panel.querySelectorAll('input[type="checkbox"]:checked').length;

        // 기존 카운트 제거
        const existingCount = filterLabel.querySelector('.filter-count');
        if (existingCount) {
            existingCount.remove();
        }

        // 새 카운트 추가
        if (checkedCount > 0) {
            const countSpan = document.createElement('span');
            countSpan.className = 'filter-count';
            countSpan.textContent = `(${checkedCount})`;
            filterLabel.appendChild(countSpan);
        }
    }

    function updateSelectedTags() {
        const selectedFiltersContainer = document.querySelector('.selected-filters');
        selectedFiltersContainer.innerHTML = '';

        const allChecked = document.querySelectorAll('.filter-panel input[type="checkbox"]:checked');
        allChecked.forEach(checkbox => {
            const tag = createTag(checkbox.value, checkbox);
            selectedFiltersContainer.appendChild(tag);
        });
    }

    function createTag(text, checkbox) {
        const tag = document.createElement('div');
        tag.className = 'selected-tag px-4 py-2 bg-gray-100 rounded-full flex items-center gap-2';
        tag.innerHTML = `
            <span class="text-sm text-gray-700">${text}</span>
            <button class="remove-tag w-5 h-5 bg-gray-400 rounded-full flex items-center justify-center text-white hover:bg-gray-500 transition">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        `;

        tag.querySelector('.remove-tag').addEventListener('click', function() {
            checkbox.checked = false;
            updateFilterCount(checkbox);
            tag.remove();
        });

        return tag;
    }

    // 초기 로드 시 선택된 필터 표시
    updateSelectedTags();
});
</script>

<style>
.filter-count {
    margin-left: 2px;
}
</style>

<?php
include_once(G5_PATH.'/tail.php');  // 푸터 포함
?>
