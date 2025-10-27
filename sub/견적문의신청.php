<?php
include_once('../common.php');
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);
include_once(G5_PATH.'/head.php');
?>

<main>
    <section class="pt-[70px] pb-[50px] bg-[url(<?php echo G5_THEME_URL?>/img/reviewIntro.webp)] bg-cover">
        <div class="container text-white">
        breadcrumbs
            <h1 class="PageTitleText">견적문의 신청</h1>
            <p class="mt-2 PageSubTitleText font-medium">간단한 스케치로 시작하는 프리미엄 드레스룸 <br/>전문가가 공간에 맞는 드레스룸을 제안드립니다.</p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href=""><button class="H6 btn md ">견적문의 신청</button></a>
                <a href=""><button class="H6 btn md active">견적문의 가이드</button></a>
            </div>
        </div>    
    </section>
    <section class="container">
        <div class="py-10 px-12 grid grid-cols-2 items-center max-md:grid-cols-1 gap-8 bg-[#F7F2EE]">
            <div>
                <h2 class="H3 max-md:text-center max-md:text-[24px] font-bold ">손그림으로 간편하게 견적받기</h2>
                <p class="mt-4 H6 font-medium">복잡한 도면이나 전문 지식이 없어도 괜찮습니다. <br/> 간단한 손그림만으로도 전문가가 정확한 견적을 제공해 드립니다.</p>
                <div class="mt-3 flex gap-5 max-md:flex-col max-md:gap-0">
                    <a href="#" class="mt-4 btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                        <img src="<?php echo G5_THEME_URL?>/img/btn-contact-icon.png">
                        <span class="text-base font-semibold text-black">간편 견적 문의</span>
                        <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                    </a>
                    <a href="#" class="mt-4 btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                        <img src="<?php echo G5_THEME_URL?>/img/btn-calculator-icon.png">
                        <span class="text-base font-semibold text-black">견적 내는 방법</span>
                        <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
                    </a>
                </div>
            </div>
            <div class="flex flex-col items-end">
                <img class="mix-blend-multiply" src="<?php echo G5_THEME_URL?>/img/quote-sketch.webp">
                <span class="px-2 py-2 bg-black/5 rounded-md text-base font-medium text-[var(--main-brown02)]">이처럼 간결한 스케치만으로도 충분합니다.</span>
            </div>
        </div>
    </section>
    <section class="py-24 bg-gray-50">
        <div class="container">
        <h2 class="SectionTitleText font-bold text-center">손그림 견적 진행 과정</h2>
            <div class="mt-10 grid grid-cols-4 max-md:flex-col text-center gap-4">
                <!-- CARD -->
                <div class="border border-gray-200">
                    <img class="w-full" src="<?php echo G5_THEME_URL?>/img/quoteProcess-1.webp" alt="">
                    <div class="px-4 py-14 max-md:py-6 bg-white flex flex-col gap-2">
                        <div class="m-auto -mt-20 max-md:-mt-12 bg-[var(--main-yellow)] w-10 h-10 rounded-full"><p class="H5 font-bold text-white leading-[40px]">1</p></div>
                        <h3 class="H5 font-bold max-md:text-left">공간 스케치하기</h3>
                        <p class="text-base text-gray-800 max-md:text-left">설치할 공간의 전체적인 모양을 <br/>종이나 어플등에 그려주세요. <br/>정확하지 않아도 괜찮습니다. <br/>벽면의 대략적인 길이만 표시해 주시면 됩니다.</p>
                    </div>
                </div>
                 <!-- CARD -->
                <div class="border border-gray-200">
                    <img class="w-full" src="<?php echo G5_THEME_URL?>/img/quoteProcess-2.webp" alt="">
                    <div class="px-4 py-14 max-md:py-6 bg-white flex flex-col gap-2">
                        <div class="m-auto -mt-20 max-md:-mt-12 bg-[var(--main-yellow)] w-10 h-10 rounded-full"><p class="H5 font-bold text-white leading-[40px]">2</p></div>
                        <h3 class="H5 font-bold max-md:text-left">문과 창문 표시하기</h3>
                        <p class="text-base text-gray-800 max-md:text-left">문과 창문의 위치를 간단히 표시해 주세요. <br/>대략적인 사이즈도 함께 적어주시면 <br/>더욱 정확한 견적이 가능합니다.</p>
                    </div>
                </div>
                 <!-- CARD -->
                <div class="border border-gray-200">
                    <img class="w-full" src="<?php echo G5_THEME_URL?>/img/quoteProcess-3.webp" alt="">
                    <div class="px-4 py-14 max-md:py-6 bg-white flex flex-col gap-2">
                        <div class="m-auto -mt-20 max-md:-mt-12 bg-[var(--main-yellow)] w-10 h-10 rounded-full"><p class="H5 font-bold text-white leading-[40px]">3</p></div>
                        <h3 class="H5 font-bold max-md:text-left">드레스룸 설치 위치 표시하기</h3>
                        <p class="text-base text-gray-800 max-md:text-left">드레스룸을 설치하고 싶은 위치를 표시해주세요.<br/> 특별히 원하는 구성이 있다면 <br/>간단히 메모해 주셔도 좋습니다.</p>
                    </div>
                </div>
                 <!-- CARD -->
                <div class="border border-gray-200">
                    <img class="w-full" src="<?php echo G5_THEME_URL?>/img/quoteProcess-4.webp" alt="">
                    <div class="px-4 py-14 max-md:py-6 bg-white flex flex-col gap-2">
                        <div class="m-auto -mt-20 max-md:-mt-12 bg-[var(--main-yellow)] w-10 h-10 rounded-full"><p class="H5 font-bold text-white leading-[40px]">4</p></div>
                        <h3 class="H5 font-bold max-md:text-left">도면 전송하기</h3>
                        <p class="text-base text-gray-800 max-md:text-left">그리신 도면을 휴대폰으로 촬영하거나 <br/>캡쳐해주세요. 그림 견적 문의 게시판이나<br/>카카오톡으로 전송해주세요.<br/><span class="text-[var(--main-brown02)] font-semibold">*카카오톡 문의시 더욱 빠르고 간편합니다.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 견적문의 게시판 리스트 섹션 -->
    <?php
    // 게시판 설정 로드
    include_once(__DIR__.'/includes/board-config.php');

    // 게시판 타입 설정
    $boardType = 'quote';
    $boardConfig = getBoardConfig($boardType);
    $boardData = getBoardData($boardType);
    ?>

    <section class="py-16 container">
        <p class="SectionTitleText font-bold text-center mb-8">견적문의 게시판</p>

        <!-- 테이블 -->
        <div class="border-t-2 border-[var(--main-brown01)]">
            <table class="w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-4 py-3 text-center text-base font-bold text-gray-700">No.</th>
                        <th class="px-4 py-3 text-center text-base font-bold text-gray-700">제목</th>
                        <th class="px-4 py-3 text-center text-base font-bold text-gray-700">이름</th>
                        <th class="px-4 py-3 text-center text-base font-bold text-gray-700">작성일</th>
                        <th class="px-4 py-3 text-center text-base font-bold text-gray-700">답변여부</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // 더미 데이터 생성 (실제로는 getBoardData에서 가져올 예정)
                    $dummy_data = [
                        ['id' => '62862', 'title' => '방문 설치 견적문의 드립니다.', 'author' => '박**', 'date' => '25.08.01', 'status' => 'completed'],
                        ['id' => '62862', 'title' => '방문 설치 견적문의 드립니다.', 'author' => '박**', 'date' => '25.08.01', 'status' => 'completed'],
                        ['id' => '62862', 'title' => '방문 설치 견적문의 드립니다.', 'author' => '박**', 'date' => '25.08.01', 'status' => 'completed'],
                        ['id' => '62862', 'title' => '방문 설치 견적문의 드립니다.', 'author' => '박**', 'date' => '25.08.01', 'status' => 'pending'],
                        ['id' => '62862', 'title' => '방문 설치 견적문의 드립니다.', 'author' => '박**', 'date' => '25.08.01', 'status' => 'pending'],
                        ['id' => '62862', 'title' => '방문 설치 견적문의 드립니다.', 'author' => '박**', 'date' => '25.08.01', 'status' => 'pending'],
                        ['id' => '62862', 'title' => '방문 설치 견적문의 드립니다.', 'author' => '박**', 'date' => '25.08.01', 'status' => 'pending'],
                        ['id' => '62862', 'title' => '방문 설치 견적문의 드립니다.', 'author' => '박**', 'date' => '25.08.01', 'status' => 'pending'],
                        ['id' => '62862', 'title' => '방문 설치 견적문의 드립니다.', 'author' => '박**', 'date' => '25.08.01', 'status' => 'pending'],
                        ['id' => '62862', 'title' => '방문 설치 견적문의 드립니다.', 'author' => '박**', 'date' => '25.08.01', 'status' => 'pending'],
                    ];

                    foreach ($dummy_data as $item):
                    ?>
                    <tr class="border-b hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-4 text-center text-sm text-gray-600"><?php echo $item['id']; ?></td>
                        <td class="px-4 py-4 text-left text-sm text-gray-800 font-medium"><?php echo $item['title']; ?></td>
                        <td class="px-4 py-4 text-center text-sm text-gray-600"><?php echo $item['author']; ?></td>
                        <td class="px-4 py-4 text-center text-sm text-gray-600"><?php echo $item['date']; ?></td>
                        <td class="px-4 py-4 text-center">
                            <?php if ($item['status'] === 'pending'): ?>
                                <span class="px-3 py-1.5 text-sm font-medium text-gray-700 bg-gray-100 rounded-full">답변대기</span>
                            <?php else: ?>
                                <span class="px-3 py-1.5 text-sm font-medium text-[var(--main-brown01)] bg-[var(--main-yellow)]/20 rounded-full">답변완료</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- 페이지네이션 -->
        <nav class="flex justify-center items-center gap-2 mt-8">
            <button class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-gray-600 disabled:opacity-50" disabled>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button class="w-8 h-8 flex items-center justify-center text-white bg-[var(--main-brown01)] rounded font-medium">1</button>
            <button class="w-8 h-8 flex items-center justify-center text-gray-600 hover:bg-gray-100 rounded font-medium">2</button>
            <button class="w-8 h-8 flex items-center justify-center text-gray-600 hover:bg-gray-100 rounded font-medium">3</button>
            <button class="w-8 h-8 flex items-center justify-center text-gray-600 hover:text-gray-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
            <button class="w-8 h-8 flex items-center justify-center text-gray-600 hover:text-gray-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7"/>
                </svg>
            </button>
        </nav>

        <!-- 글쓰기 버튼 -->
        <div class="mt-8 flex justify-end">
            <a href="inquiry.php">
                <button class="px-8 py-3 bg-[var(--main-brown02)] text-white text-base font-semibold rounded-md hover:bg-[var(--main-brown01)] transition-colors">견적 문의하기</button>
            </a>
        </div>
    </section>

     <section class="py-24 max-md:py-14 flex flex-col gap-4 text-center text-white items-center bg-[url(<?php echo G5_THEME_URL?>/img/quoteGuideCta.webp)] bg-cover">
        <p class="text-3xl font-bold leading-[1.5] text-white">카카오톡을 통한 실시간 견적을 받아보세요.</p>
        <p class="H6">전문가의 빠르고 신속한 실시간 견적을  받아보실 수 있습니다.</p>
        <div class="flex gap-4">
            <a href="#" class="mt-4 btn bg-white rounded-full p-2 pr-4 flex items-center gap-1.5 border border-gray-200">
                <img src="<?php echo G5_THEME_URL?>/img/btn-talk-icon.png">
                <span class="text-base font-semibold text-black">카카오 견적 문의하기</span>
                <img src="<?php echo G5_THEME_URL?>/img/btn-arrow-right.png">
            </a>
        </div>
    </section>

</main>

<script>


</script>

<?php
include_once(G5_PATH.'/tail.php');
?>