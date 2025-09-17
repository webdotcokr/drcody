<?php
include_once('../common.php');  // 공통 설정 불러오기
$g5['title'] = "서브페이지 제목";  // 페이지 제목 설정
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);  // 필요 시 CSS 추가
include_once(G5_PATH.'/head.php');  // 헤더 포함
?>

<!-- 페이지 컨텐츠 영역 HTML 작성 -->
<main>
    <section class="container pt-[160px] pb-[60px]">
        breadcrumbs
        <h1 class="PageTitleText">브랜드 스토리</h1>
        <p class="mt-2 PageSubTitleText font-medium">완벽한 드레스룸을 위해 끊임없이 연구하고 발전하는 디알코디, <br/>디알코디가 추구하는 진정한 가치와 브랜드 철학을 만나보세요.</p>
        <div class="mt-12 inline-flex bg-black/30 rounded-full">
            <a href=""><button class="H6 btn md active">브랜드 스토리</button></a>
            <a href=""><button class="H6 btn md">특허기술</button></a>
            <a href=""><button class="H6 btn md">why 디알코디?</button></a>
        </div>
    </section>
</main>


<?php
include_once(G5_PATH.'/tail.php');  // 푸터 포함
?>
