<?php
include_once('../common.php');  // 공통 설정 불러오기
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

/* Video Section Styles */
#videoStepNumber, #videoTitle, #videoSubtitle, #videoDescription {
    transition: opacity 0.3s ease-in-out;
}

#installVideo {
    cursor: pointer;
}

#playButton {
    cursor: pointer;
    z-index: 10;
}

/* Responsive adjustments for video section */
@media screen and (max-width: 1024px) {
    .lg\:grid-cols-\[1fr\,400px\] {
        grid-template-columns: 1fr;
    }
}

@media screen and (max-width: 767px) {
    .check::before {
        position: relative;
        display: inline-block;
        left: 0;
        margin-right: 6px;
    }

    /* Adjust video controls for mobile */
    #prevVideo, #nextVideo {
        width: 2.5rem;
        height: 2.5rem;
    }

    #playButton .w-20 {
        width: 4rem;
        height: 4rem;
    }

    #playButton .w-10 {
        width: 2rem;
        height: 2rem;
    }
}
</style>

<script>
// Video data array
const videoData = [
    {
        stepNumber: "01",
        title: "디알코디 메탈드 드레스룸 특장 한눈에 알아보기",
        subtitle: "단계별 상세 설명과 실제 조립 과정을 확인하세요",
        description: "위 2개 핵심 영상 외에도 19개의 추가 영상이 준비되어 있습니다. 모든 단계를 놓치지 않고 완벽하게 설치하세요.",
        videoUrl: "", // Add video URL here
        posterUrl: "" // Add poster URL here
    },
    {
        stepNumber: "02",
        title: "기둥에 날개(받침대) 조립하기",
        subtitle: "이 영상만 보면 50% 완성! 가장 중요한 기초 단계입니다",
        description: "기둥의 상단과 하단을 정확히 구분하고, 좌측·우측·중앙 기둥에 따라 브라켓을 정확한 위치에 부착하는 방법을 상세히 설명합니다.",
        videoUrl: "", // Add video URL here
        posterUrl: "" // Add poster URL here
    },
    {
        stepNumber: "03",
        title: "익스텐션 기둥 고정 및 수평 맞추기",
        subtitle: "가장 중요한 부분을 영상으로 확인하세요",
        description: "천장 높이에 맞춰 익스텐션을 조절하고, 수평을 완벽하게 맞추는 핵심 과정입니다. 이 과정만 제대로 하면 성공입니다!",
        videoUrl: "", // Add video URL here
        posterUrl: "" // Add poster URL here
    }
];

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    let currentVideoIndex = 0;

    const video = document.getElementById('installVideo');
    const videoSource = document.getElementById('videoSource');
    const playButton = document.getElementById('playButton');
    const progressBar = document.getElementById('progressBar');
    const prevButton = document.getElementById('prevVideo');
    const nextButton = document.getElementById('nextVideo');
    const currentVideoNum = document.getElementById('currentVideoNum');
    const totalVideos = document.getElementById('totalVideos');

    // Dynamic content elements
    const videoStepNumber = document.getElementById('videoStepNumber');
    const videoTitle = document.getElementById('videoTitle');
    const videoSubtitle = document.getElementById('videoSubtitle');
    const videoDescription = document.getElementById('videoDescription');

    // Set total videos count
    totalVideos.textContent = videoData.length;

    // Function to update video content
    function updateVideoContent(index) {
        const data = videoData[index];

        // Update video source
        videoSource.src = data.videoUrl;
        video.poster = data.posterUrl;
        video.load();

        // Update text content with fade effect
        fadeOutAndUpdate(videoStepNumber, data.stepNumber);
        fadeOutAndUpdate(videoTitle, data.title);
        fadeOutAndUpdate(videoSubtitle, data.subtitle);
        fadeOutAndUpdate(videoDescription, data.description);

        // Update current video number
        currentVideoNum.textContent = index + 1;

        // Reset video state
        video.pause();
        video.currentTime = 0;
        progressBar.style.width = '0%';
        playButton.style.display = 'flex';

        // Update button states
        updateButtonStates();
    }

    // Fade out and update text function
    function fadeOutAndUpdate(element, newText) {
        element.style.opacity = '0';
        setTimeout(() => {
            element.textContent = newText;
            element.style.opacity = '1';
        }, 200);
    }

    // Update button states
    function updateButtonStates() {
        prevButton.disabled = currentVideoIndex === 0;
        nextButton.disabled = currentVideoIndex === videoData.length - 1;

        if (prevButton.disabled) {
            prevButton.style.opacity = '0.5';
            prevButton.style.cursor = 'not-allowed';
        } else {
            prevButton.style.opacity = '1';
            prevButton.style.cursor = 'pointer';
        }

        if (nextButton.disabled) {
            nextButton.style.opacity = '0.5';
            nextButton.style.cursor = 'not-allowed';
        } else {
            nextButton.style.opacity = '1';
            nextButton.style.cursor = 'pointer';
        }
    }

    // Play button click
    playButton.addEventListener('click', function(e) {
        e.stopPropagation();
        video.play();
        playButton.style.display = 'none';
    });

    // Video click to pause
    video.addEventListener('click', function() {
        if (!video.paused) {
            video.pause();
            playButton.style.display = 'flex';
        }
    });

    // Update progress bar
    video.addEventListener('timeupdate', function() {
        const progress = (video.currentTime / video.duration) * 100;
        progressBar.style.width = progress + '%';
    });

    // Video ended
    video.addEventListener('ended', function() {
        playButton.style.display = 'flex';
        progressBar.style.width = '100%';
    });

    // Previous video button
    prevButton.addEventListener('click', function() {
        if (currentVideoIndex > 0) {
            currentVideoIndex--;
            updateVideoContent(currentVideoIndex);
        }
    });

    // Next video button
    nextButton.addEventListener('click', function() {
        if (currentVideoIndex < videoData.length - 1) {
            currentVideoIndex++;
            updateVideoContent(currentVideoIndex);
        }
    });

    // Initialize first video
    updateVideoContent(0);
});
</script>

<!-- 페이지 컨텐츠 영역 HTML 작성 -->
<main>
    <section class="pt-[160px] pb-[60px] bg-[url(<?php echo G5_THEME_URL?>/img/guideToparea.webp)] bg-cover">
        <div class="container">
        breadcrumbs
            <h1 class="PageTitleText">설치 가이드</h1>
            <p class="mt-2 PageSubTitleText font-medium">전국 무료 설치 서비스가 어려운 지역 고객님을 위한 특별 가이드! <br/>단계별 상세 가이드로 누구나 쉽고 안전하게 설치할 수 있습니다.</p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href=""><button class="H6 btn md ">설치 가이드</button></a>
                <a href=""><button class="H6 btn md active">컬러 갤러리</button></a>
            </div>
        </div>    
    </section>
    <section class="py-20 max-md:py-15 container flex flex-col items-center">
        <h2 class="SectionTitleText font-bold text-center">누구나 따라 할 수 있는 <br/>쉬운 설치 가이드</h2>
        <div class="mt-8 p-5 H4 font-semibold rounded-full max-md:rounded-2xl max-md:w-full border border-gray-300 max-md:text-[20px] max-md:text-center">
            <img class="inline mr-2 mb-1 max-md:block max-md:m-auto max-md:mb-2" src="<?php echo G5_THEME_URL?>/img/check.svg"></img>
            디알코디는 <span class="text-[var(--main-brown01)]"><br class="md:hidden">전국 무료 설치</span>가 원칙입니다. <br class="md:hidden">(제주도 제외)
        </div>
        <p class="mt-4 H6 font-medium text-center max-md:text-[17px]">다만, 전문가의 손길이 닿기 어려운 제주도 고객님도<br/>완벽한 드레스룸을 경험하실 수 있도록, 100% 성공률의 '셀프 설치 가이드'를 준비했습니다. <br/>영상을 보며 차근차근 따라 하면,<br/>전문가가 없이도 어느새 당신의 공간에 완벽한 드레스룸이 완성될 거예요.</p>
    </section>
    <section class="py-20 max-md:pt-0 container flex flex-col items-center max-md:py-16">
            <h3 class="H3 font-bold text-gray-400 text-center">01</h3>
            <p class="H3 text-[var(--main-brown01)] font-bold text-center">시작 전 필수 준비물</p>
            <div class="mt-6 p-2 pr-4 H6 font-semibold bg-[var(--main-brown01)] text-white rounded-full"><span class="px-3 py-1 mr-2 rounded-full bg-[var(--main-brown02)]">1</span>필요한 도구 및 부품 확인</div>
            <div class="mt-6 grid grid-cols-2 gap-3 max-md:grid-cols-1">
                <!-- CARD -->
                <div class="px-16 py-12 max-md:px-4 max-md:py-6 bg-white border border-gray-300">
                    <h4 Class="H5 font-bold text-center max-md:mb-2">필요한 도구</h4>
                    <div class="mt-10 max-md:mt-7 flex items-center justify-center gap-8 max-md:gap-5">
                        <img class="max-md:w-[60px]" src="<?php echo G5_THEME_URL?>/img/locationGuideIcon-1.svg">
                        <div class="w-[1px] h-[70px] bg-gray-300 max-md:h-[50px]"></div>
                        <img class="max-md:w-[60px]" src="<?php echo G5_THEME_URL?>/img/locationGuideIcon-2.svg">
                        <div class="w-[1px] h-[70px] bg-gray-300 max-md:h-[50px]"></div>
                        <img class="max-md:w-[60px]" src="<?php echo G5_THEME_URL?>/img/locationGuideIcon-3.svg">
                    </div>
                </div>
                <div class="px-16 py-12 max-md:px-4 max-md:py-10 bg-white border border-gray-300">
                    <h4 Class="H5 font-bold text-center max-md:mb-2">부품 체크</h4>
                    <div class="mt-10 max-md:mt-7 flex items-center justify-center gap-4 max-xl:flex-col">
                        <img src="<?php echo G5_THEME_URL?>/img/location-2.webp">
                        <div class="text-base flex flex-col gap-3">
                            <span class="text-base font-bold px-2 py-1 bg-[#A5836A]/10 text-[var(--main-brown01)] max-md:text-sm">부품 체크 TIP</span>
                            <div class="max-xl:flex">
                                <div class="text-[var(--main-brown02)]">
                                    <p><b>기둥</b> - 도면 확인</p>
                                    <p><b>선반</b> - 수량 체크</p>
                                    <p><b>옷걸이 바</b> - 길이 확인</p>
                                </div>
                                <div class="text-[var(--main-brown02)]">
                                    <p><b>브라켓</b> - 종류별 분류</p>
                                    <p><b>나사</b> - 크기별 구분</p>
                                    <p><b>설명서</b> - 순서 확인</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4 text-sm text-gray-800 text-center">도면의 번호와 실제 부품을 대조해서 확인하세요</p>
                </div>
            </div>
    </section>
    <section class="bg-gray-50 py-20 max-md:py-16">
        <div class="container">
            <h2 class="SectionTitleText font-bold text-center">핵심 설치 과정 영상 미리보기</h2>
            <p class="mt-4 H5 font-medium text-center">가장 중요한 2가지 핵심 과정을 먼저 확인하세요 <br/>19개 추가 영상 포함한 완전한 가이드 제공</p>

            <!-- Video Player and Info Panel -->
            <div class="mt-12 grid grid-cols-1 lg:grid-cols-[1fr,400px] gap-8 max-md:gap-6">
                <!-- Video Player Area -->
                <div class="relative">
                    <div class="relative aspect-video bg-black rounded-lg overflow-hidden">
                        <!-- Video Element -->
                        <video id="installVideo" class="w-full h-full object-cover" poster="">
                            <source id="videoSource" src="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <!-- Play Button Overlay -->
                        <button id="playButton" class="absolute inset-0 flex items-center justify-center bg-black/30 hover:bg-black/40 transition-all group">
                            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-10 h-10 ml-1 text-black" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </button>

                        <!-- Video Controls Bottom Bar -->
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                            <!-- Progress Bar -->
                            <div class="relative w-full h-1 bg-white/30 rounded-full mb-3">
                                <div id="progressBar" class="absolute h-full bg-white rounded-full transition-all" style="width: 0%"></div>
                            </div>

                            <!-- Navigation Controls -->
                            <div class="flex items-center justify-between">
                                <div class="text-white text-sm font-medium">
                                    <span id="currentVideoNum">1</span> / <span id="totalVideos">3</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button id="prevVideo" class="w-10 h-10 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center transition-all">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                        </svg>
                                    </button>
                                    <button id="nextVideo" class="w-10 h-10 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center transition-all">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Description -->
                    <div class="mt-6">
                        <h3 class="H3 font-bold text-gray-400" id="videoStepNumber">01</h3>
                        <p class="mt-2 H4 text-[var(--main-brown01)] font-bold" id="videoTitle">디알코디 메탈드 드레스룸 특장 한눈에 알아보기</p>
                        <p class="mt-2 H6 font-medium text-[var(--main-brown02)]" id="videoSubtitle">단계별 상세 설명과 실제 조립 과정을 확인하세요</p>
                    </div>
                </div>

                <!-- Info Panel -->
                <div class="flex flex-col gap-6">
                    <!-- Title Card -->
                    <div class="p-6 bg-white border-2 border-[var(--main-brown01)] rounded-lg">
                        <h4 class="H4 font-bold text-[var(--main-brown01)] mb-4">완벽한 설치를 위한 영상 가이드</h4>
                        <div class="flex flex-col gap-2 text-base font-medium">
                            <div class="flex items-center gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/check.svg" class="w-5 h-5">
                                <span class="text-[var(--main-brown02)]">총 21개 전문 가이드</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/check.svg" class="w-5 h-5">
                                <span class="text-[var(--main-brown02)]">단계별 상세 해설</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/check.svg" class="w-5 h-5">
                                <span class="text-[var(--main-brown02)]">실제 조립 과정</span>
                            </div>
                        </div>
                    </div>

                    <!-- Video Description -->
                    <div class="p-6 bg-white rounded-lg border border-gray-200">
                        <p class="H6 font-medium text-[var(--main-brown02)] leading-relaxed" id="videoDescription">
                            위 2개 핵심 영상 외에도 19개의 추가 영상이 준비되어 있습니다. 모든 단계를 놓치지 않고 완벽하게 설치하세요.
                        </p>
                        <button class="mt-4 w-full py-3 px-6 bg-[var(--main-brown01)] hover:bg-[var(--main-brown02)] text-white font-semibold rounded-full transition-all">
                            전체 영상 보기
                        </button>
                    </div>

                    <!-- Expert Tip -->
                    <div class="p-6 bg-white rounded-lg border border-gray-200">
                        <h5 class="H6 font-bold text-[var(--main-brown02)] mb-3">전문가 추천 시청 방법</h5>
                        <p class="text-base font-medium text-gray-600 leading-relaxed mb-3">
                            설치 전에 전체 영상을 먼저 확인하세요. 각 설치 단계에 해당하는 영상을 준비되어 있습니다.
                        </p>
                        <div class="p-4 bg-[#FFF9E6] rounded-lg">
                            <p class="text-sm font-medium text-[var(--main-brown02)]">
                                💡 이렇게 하면 실수 없이 완벽한 설치가 가능합니다!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-20 max-md:py-16 container flex flex-col items-center">
        <h3 class="H3 font-bold text-gray-400">02</h3>
        <p class="H3 text-[var(--main-brown01)] font-bold">기본 구조 조립하기</p>
        <div class="mt-8 flex flex-col gap-8">
            <!-- CARD -->
            <div class="flex max-lg:flex-col items-center max-lg:items-start gap-10 max-lg:gap-4">
                <img src="<?php echo G5_THEME_URL?>/img/transferGuide-7.webp" alt="">
                <div class="flex flex-col items-start">
                    <div class="p-2 pr-4 H6 font-semibold bg-[var(--main-brown01)] text-white rounded-full"><span class="px-2 py-1 mr-2 rounded-full bg-[var(--main-brown02)]">2-1</span>기둥 방향 확인하기</div>
                    <p class="mt-4 text-lg font-medium text-[var(--main-brown02)] max-md:mt-2">기둥의 상단과 하단을 정확히 구분하는 것이 가장 중요합니다. 잘못 조립하면 나중에 전부를 다시 해야 해요.</p>
                    <div class="mt-4 p-4 w-full bg-[#FFF4F4] rounded-sm">
                    <span class="text-base font-bold px-2 py-1 bg-[#A5836A]/10 text-[#E63627] max-md:text-sm">⚠ 주의</span>
                    <p class="text-base mt-2 max-md:text-sm">※ 방향이 바뀌면 나중에 다시 해야 해요!</p>
                </div>
            </div>
            </div>
            <!-- CARD -->
            <div class="flex max-lg:flex-col items-center max-lg:items-start gap-10 max-lg:gap-4">
                <img src="<?php echo G5_THEME_URL?>/img/transferGuide-8.webp" alt="">
                <div class="flex flex-col items-start">
                <div class="p-2 pr-4 H6 font-semibold bg-[var(--main-brown01)] text-white rounded-full"><span class="px-2 py-1 mr-2 rounded-full bg-[var(--main-brown02)]">2-2</span>선반 받침대(날개) 달기</div>
                <p class="mt-4 text-lg font-medium max-md:mt-2">좌측, 우측, 중앙 기둥에 따라 브라켓 위치가 다릅니다. 각 기둥마다 확인해주세요.</p>
                <p class="mt-4 text-lg font-medium max-md:mt-2">1. 좌측 기둥: 오른쪽 면에만 브라켓 부착 <br/>2. 우측 기둥: 왼쪽 면에만 브라켓 부착 <br/>3. 중앙 기둥: 양쪽 면 모두 브라켓 부착</p>
                </div>
            </div>
            <!-- CARD -->
            <div class="flex max-lg:flex-col items-center max-lg:items-start gap-10 max-lg:gap-4">
                <img src="<?php echo G5_THEME_URL?>/img/transferGuide-9.webp" alt="">
                <div class="flex flex-col items-start">
                <div class="p-2 pr-4 H6 font-semibold bg-[var(--main-brown01)] text-white rounded-full"><span class="px-2 py-1 mr-2 rounded-full bg-[var(--main-brown02)]">2-3</span>높이 조절 확인</div>
                <p class="mt-4 text-lg font-medium max-md:mt-2">익스텐션을 이용해 천장 높이에 맞춰 조절합니다. <br/>일반적으로 230cm ~ 290cm 범위에서 조절 가능합니다.</p>
                <p class="mt-4 text-lg font-medium max-md:mt-2">조절 가능 높이: 223cm ~ 268cm(최대 45cm)</p>
                </div>
            </div>
        </div>
        <div class="relative mt-20 w-full">
            <!-- 상단 뾰족한 삼각형 -->
            <div class="absolute left-1/2 -translate-x-1/2 -top-8 w-0 h-0 border-l-[32px] border-l-transparent border-r-[32px] border-r-transparent border-b-[32px] border-b-gray-200"></div>
            <div class="absolute left-1/2 -translate-x-1/2 -top-[30px] w-0 h-0 border-l-[30px] border-l-transparent border-r-[30px] border-r-transparent border-b-[30px] border-b-white"></div>

            <div class="p-12 w-full border border-gray-200 rounded-xl flex gap-5 max-lg:flex-col max-lg:px-4 max-lg:py-8">
                <img class="rounded-md" src="<?php echo G5_THEME_URL?>/img/transferGuideVideo-4.png">
                <div class="flex flex-col gap-3 items-start">
                    <span class="mr-2 p-2 inline-block H6 font-bold text-white bg-black rounded-md">2과정 핵심 영상</span>
                    <h3 class="H4 font-bold max-md:text-[20px]">기둥에 날개(받침대) 조립하기</h3>
                    <p class="H6 font-medium">이 영상만 보면 50% 완성! 가장 중요한 기초 단계입니다</p>
                    <div class="H6 font-medium flex items-cetner gap-5">
                        <div class="flex gap-1 items-center"><img src="<?php echo G5_THEME_URL?>/img/miniCheck.svg"><span class="text-[var(--main-brown01)]">영상 길이</span> 약 3분</div>
                        <div class="flex gap-1 items-center"><img src="<?php echo G5_THEME_URL?>/img/miniCheck.svg"><span class="text-[var(--main-brown01)]">난이도</span> 쉬움</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 max-md:py-16 container flex flex-col items-center">
        <h3 class="H3 font-bold text-gray-400">03</h3>
        <p class="H3 text-[var(--main-brown01)] font-bold text-center">세우고, 연결하고, 고정하기 <br/>이제 진짜 드레스룸의 모습이 나타납니다!</p>
        <div class="mt-8 flex flex-col gap-8">
            <!-- CARD -->
            <div class="flex max-lg:flex-col items-center max-lg:items-start gap-10 max-lg:gap-4">
                <img src="<?php echo G5_THEME_URL?>/img/transferGuide-10.webp" alt="">
                <div class="flex flex-col items-start">
                <div class="p-2 pr-4 H6 font-semibold bg-[var(--main-brown01)] text-white rounded-full"><span class="px-2 py-1 mr-2 rounded-full bg-[var(--main-brown02)]">3-1</span>벽에서 24cm 띄워서 배치</div>
                <p class="mt-4 text-lg font-medium text-[var(--main-brown02)] max-md:mt-2">기둥을 벽에서 24cm 정도 떨어뜨려 세웁니다. <br/>이는 옷소매가 벽에 닿지 않고 자유롭게 걸 수 있도록 하는 중요한 간격입니다.</p>
                <p class="mt-4 text-lg font-medium text-[var(--main-brown02)] max-md:mt-2">옷소매가 벽에 닿지 않는 적정 거리, 옷의 주름 방지 및 보관 품질 향상</p>
                <div class="mt-4 p-4 w-full bg-[#FFF4F4] rounded-sm">
                    <span class="text-base font-bold px-2 py-1 bg-[#A5836A]/10 text-[#E63627] max-md:text-sm">⚠ 주의</span>
                    <p class="text-base mt-2 max-md:text-sm">기둥을 24cm 띄워서 설치하면 선반은 벽에서 5cm 정도 띄워서 설치되게 됩니다.</p>
                </div>
                </div>
            </div>
            <!-- CARD -->
            <div class="flex max-lg:flex-col items-center max-lg:items-start gap-10 max-lg:gap-4">
                <img src="<?php echo G5_THEME_URL?>/img/transferGuide-11.webp" alt="">
                <div class="flex flex-col items-start">
                <div class="p-2 pr-4 H6 font-semibold bg-[var(--main-brown01)] text-white rounded-full"><span class="px-2 py-1 mr-2 rounded-full bg-[var(--main-brown02)]">3-2</span>선반 연결하기</div>
                <p class="mt-4 text-lg font-medium max-md:mt-2">준비된 선반들을 기둥의 브라켓에 차례대로 연결합니다.</p>
                </div>
            </div>
            <!-- CARD -->
            <div class="flex max-lg:flex-col items-center max-lg:items-start gap-10 max-lg:gap-4">
                <img src="<?php echo G5_THEME_URL?>/img/transferGuide-12.webp" alt="">
                <div class="flex flex-col items-start">
                <div class="p-2 pr-4 H6 font-semibold bg-[var(--main-brown01)] text-white rounded-full"><span class="px-2 py-1 mr-2 rounded-full bg-[var(--main-brown02)]">3-3</span>모듈 배치</div>
                <p class="mt-4 text-lg font-medium max-md:mt-2">서랍장이나 추가 선반장이 있다면 기둥 사이의 적절한 위치에 배치합니다. <br/>무게 중심을 고려하여 아래쪽부터 설치하는 것이 안전합니다.</p>
                </div>
            </div>
        </div>
        <div class="mt-20 p-12 w-full border border-gray-200 rounded-lg flex max-md:flex-col">
            <img src="">
            <div class="flex flex-col gap-3 justify-start">
                <h3 class="H4 font-bold"><span class="mr-2 H6 text-white bg-black rounded-md p-2">3과정 핵심 영상</span>익스텐션 기둥 고정 및 수평 맞추기 영상</h3>
                <p class="H6 font-medium">가장 중요한 부분을 영상으로 확인하세요. <br/>이 과정만 제대로 하면 성공입니다!</p>
                <div class="H6 font-medium flex items-cetner gap-5">
                    <div class="flex gap-1 items-center"><img src="<?php echo G5_THEME_URL?>/img/miniCheck.svg"><span class="text-[var(--main-brown01)]">영상 길이</span> 약 4분</div>
                    <div class="flex gap-1 items-center"><img src="<?php echo G5_THEME_URL?>/img/miniCheck.svg"><span class="text-[var(--main-brown01)]">난이도</span> 쉬움</div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20">
        <div class="container flex flex-col items-center">
        <img class="mb-4" src="<?php echo G5_THEME_URL?>/img/checklist.svg">
        <h4 class="SectionTitleText font-bold">최종 확인 체크리스트</h4>
        <h3 class="mt-2 H5 font-semibold underline">아래 항목들을 모두 확인하면 설치가 완료됩니다.</h3>
            <!-- CONTAINER -->
            <div class="mt-8 grid grid-cols-3 gap-3 max-md:grid-cols-1">
                <!-- CARD -->
                <div class="px-4 py-12 bg-white max-md:p-5 border border-gray-300 rounded-md flex flex-col gap-4 justify-center items-center max-md:flex-row max-md:justify-start max-md:items-start">
                        <img class="max-md:w-[40px]" src="<?php echo G5_THEME_URL?>/img/check-2.svg">
                        <div class="text-center max-md:text-left">
                            <h5 class="H5 font-bold">기둥이 천장에 <br/>단단히 고정되었나요?</h5>
                            <h6 class="mt-4 text-lg font-medium text-[var(--main-brown02)] max-md:mt-1">손으로 흔들어봐도 움직이지 않아야 합니다</h6>
                        </div>
                </div>
                <!-- CARD -->
                <div class="px-4 py-12 bg-white max-md:p-5 border border-gray-300 rounded-md flex flex-col gap-4 justify-center items-center max-md:flex-row max-md:justify-start max-md:items-start">
                        <img class="max-md:w-[40px]" src="<?php echo G5_THEME_URL?>/img/check-2.svg">
                        <div class="text-center max-md:text-left">
                            <h5 class="H5 font-bold">모든 선반이 수평인가요?</h5>
                            <h6 class="mt-4 text-lg font-medium text-[var(--main-brown02)] max-md:mt-1">수평계로 확인하거나 물건을 올려봤을 때 굴러가지 않아야 합니다</h6>
                        </div>
                </div>
                 <!-- CARD -->
                <div class="px-4 py-12 bg-white max-md:p-5 border border-gray-300 rounded-md flex flex-col gap-4 justify-center items-center max-md:flex-row max-md:justify-start max-md:items-start">
                        <img class="max-md:w-[40px]" src="<?php echo G5_THEME_URL?>/img/check-2.svg">
                        <div class="text-center max-md:text-left">
                            <h5 class="H5 font-bold">전체 구조가 안정적인가요?</h5>
                            <h6 class="mt-4 text-lg font-medium text-[var(--main-brown02)] max-md:mt-1">옷을 걸어봤을 때<br/>흔들림이 없어야 합니다</h6>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 container flex flex-col items-center">
            <img src="<?php echo G5_THEME_URL?>/img/qna.svg" alt="">
            <p class="mt-3 SectionTitleText font-bold">혹시 이런 문제가 있나요?</p>
            <h3 class="mt-2 H5 font-semibold">자주 묻는 질문들과 해결 방법을 확인해보세요</h3>

            <!-- FAQ 아코디언 -->
            <div class="mt-12 flex flex-col gap-3 max-md:mt-6 max-md:gap-2 w-full">
                <!-- FAQ Item 1 -->
                <div class="faq-item p-5 rounded-sm border border-gray-200 transition-colors duration-300 cursor-pointer">
                    <div class="faq-question flex items-center justify-between gap-2">
                        <div class="flex gap-2 H5 font-bold">
                            <div class="inline-block w-[30px] h-[30px] text-center rounded-full text-white bg-[var(--main-brown01)]">Q</div>
                            <h3>결제는 어떻게 하나요?</h3>
                        </div>
                        <button class="faq-toggle flex-shrink-0 w-8 h-8 flex items-center justify-center text-2xl font-light text-gray-400">
                            +
                        </button>
                    </div>
                    <div class="faq-answer hidden mt-5 ml-8 bg-gray-50 p-6 rounded-md text-base text-gray-700 max-md:ml-0 max-md:mt-2.5">
                        <p>결제 관련 답변 내용이 여기에 들어갑니다.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item p-5 rounded-sm border border-gray-200 transition-colors duration-300 cursor-pointer active">
                    <div class="faq-question flex items-center justify-between gap-2">
                        <div class="flex gap-2 H5 font-bold">
                            <div class="inline-block w-[30px] h-[30px] text-center rounded-full text-white bg-[var(--main-brown01)]">Q</div>
                            <h3>배송 및 시공비는 어떻게 되나요?</h3>
                        </div>
                        <button class="faq-toggle flex-shrink-0 w-8 h-8 flex items-center justify-center text-2xl font-light text-gray-600">
                            −
                        </button>
                    </div>
                    <div class="faq-answer mt-5 ml-8 bg-gray-50 p-6 rounded-md text-base text-gray-700 max-md:ml-0 max-md:mt-2.5">
                        안녕하세요!<br/>
                        제주도를 제외하고 전국 무료 배송, 무료 시공 해 드립니다. 제주도의 경우 택배사가 아닌 화물로 보내드리며,<br/>
                        시공 매뉴얼을 보면 누구나 쉽게 시공 할 수 있습니다.<br/><br/>
                        다른 문의사항이 있으시다면 고객센터 (1644-0524) 및 카카오톡 상담을 이용해주세요.<br/>
                        감사합니다.
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const faqItems = document.querySelectorAll('.faq-item');

                    faqItems.forEach(item => {
                        const question = item.querySelector('.faq-question');
                        const toggle = item.querySelector('.faq-toggle');
                        const answer = item.querySelector('.faq-answer');

                        question.addEventListener('click', function() {
                            // Toggle active class
                            const isActive = item.classList.contains('active');

                            if (isActive) {
                                // Close this item
                                item.classList.remove('active');
                                item.classList.remove('border-[var(--main-brown01)]');
                                item.classList.add('border-gray-200');
                                answer.classList.add('hidden');
                                toggle.textContent = '+';
                            } else {
                                // Close all other items
                                faqItems.forEach(otherItem => {
                                    otherItem.classList.remove('active');
                                    otherItem.classList.remove('border-[var(--main-brown01)]');
                                    otherItem.classList.add('border-gray-200');
                                    otherItem.querySelector('.faq-answer').classList.add('hidden');
                                    otherItem.querySelector('.faq-toggle').textContent = '+';
                                });

                                // Open this item
                                item.classList.add('active');
                                item.classList.remove('border-gray-200');
                                item.classList.add('border-[var(--main-brown01)]');
                                answer.classList.remove('hidden');
                                toggle.textContent = '−';
                            }
                        });
                    });
                });
            </script>
    </section>

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

<?php
include_once(G5_PATH.'/tail.php');  // 푸터 포함
?>
