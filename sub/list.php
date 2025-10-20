<?php
include_once('../common.php');
$g5['title'] = "A/S 신청";
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);
include_once(G5_PATH.'/head.php');

// 더미 데이터 (추후 DB 연동 예정)
$dummyData = [
    ['id' => 10, 'title' => 'A/S신청', 'author' => '고객명', 'date' => '25.08.01', 'status' => 'pending', 'password' => '1234', 'content' => '이사로 인해 이사시간이 예정보다 늦어질 것 같은데 어떻게 하나요?', 'answer' => ''],
    ['id' => 9, 'title' => 'A/S신청', 'author' => '고객명', 'date' => '25.08.01', 'status' => 'pending', 'password' => '1234', 'content' => '서비스 이용 문의드립니다.', 'answer' => ''],
    ['id' => 8, 'title' => 'A/S신청', 'author' => '고객명', 'date' => '25.08.01', 'status' => 'completed', 'password' => '1234', 'content' => '이사로 인해 이사시간이 예정보다 늦어질 것 같은데 어떻게 하나요?', 'answer' => '안녕하세요. 고객님.\n\n이사로 인한 일정 변경은 언제든지 가능하십니다. 고객센터(1644-0424)로 카카오톡 상담을 통해 일정을 변경해주시면 감사하겠습니다.'],
    ['id' => 7, 'title' => 'A/S신청', 'author' => '고객명', 'date' => '25.08.01', 'status' => 'completed', 'password' => '1234', 'content' => 'A/S 신청 관련 문의입니다.', 'answer' => '답변 내용이 표시됩니다.'],
    ['id' => 6, 'title' => 'A/S신청', 'author' => '고객명', 'date' => '25.08.01', 'status' => 'completed', 'password' => '1234', 'content' => '제품 수리 요청드립니다.', 'answer' => '답변 내용이 표시됩니다.'],
    ['id' => 5, 'title' => 'A/S신청', 'author' => '고객명', 'date' => '25.08.01', 'status' => 'completed', 'password' => '1234', 'content' => '문의사항이 있습니다.', 'answer' => '답변 내용이 표시됩니다.'],
    ['id' => 4, 'title' => 'A/S신청', 'author' => '고객명', 'date' => '25.08.01', 'status' => 'completed', 'password' => '1234', 'content' => '서비스 관련 문의', 'answer' => '답변 내용이 표시됩니다.'],
    ['id' => 3, 'title' => 'A/S신청', 'author' => '고객명', 'date' => '25.08.01', 'status' => 'completed', 'password' => '1234', 'content' => 'A/S 접수 확인', 'answer' => '답변 내용이 표시됩니다.'],
    ['id' => 2, 'title' => 'A/S신청', 'author' => '고객명', 'date' => '25.08.01', 'status' => 'completed', 'password' => '1234', 'content' => '제품 점검 요청', 'answer' => '답변 내용이 표시됩니다.'],
];
?>

<main>
    <!-- 헤더 섹션 -->
    <section class="pt-[160px] pb-[60px] bg-[url(<?php echo G5_THEME_URL?>/img/noticeToparea.webp)] bg-cover">
        <div class="container">
            <!-- breadcrumbs 추후 추가 -->
            <h1 class="PageTitleText">A/S 신청</h1>
            <p class="mt-2 PageSubTitleText font-medium">디알코디 이용 중 궁금한 점이나 불편한 점이 있으신가요? <br/>언제든 문의해주시면 친절하게 도움을 드리겠습니다.</p>
            <div class="mt-12 inline-flex bg-black/30 rounded-full">
                <a href="notice.php"><button class="H6 btn md">공지사항</button></a>
                <a href="faq.php"><button class="H6 btn md">FAQ</button></a>
                <a href="list.php"><button class="H6 btn md active">A/S 신청</button></a>
                <a href="inquiry.php"><button class="H6 btn md">1:1 상담 신청</button></a>
            </div>
        </div>
    </section>

    <!-- 고객센터 섹션 -->
    <section class="py-6 bg-[var(--main-brown01)] text-white">
        <div class="container flex items-center justify-between max-md:flex-col max-md:gap-4">
            <div class="flex items-center gap-3">
                <img class="max-md:w-[56px]" src="<?php echo G5_THEME_URL?>/img/headphone.svg">
                <div>
                    <p class="H3 font-bold">도움이 필요하신가요?</p>
                    <p class="H6">월~토 09:00~18:00</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex items-center gap-4 rounded-full py-3 px-8 bg-[var(--main-brown02)]">
                    <img class="max-md:w-[24px]" src="<?php echo G5_THEME_URL?>/img/noticeCall.svg" alt="">
                    <div>
                        <p class="H6 max-md:text-[13px] font-semibold">전화상담</p>
                        <p class="H4 max-md:text-[17px] font-semibold">1644-0424</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 rounded-full py-3 px-8 bg-[var(--main-brown02)]">
                    <img  class="max-md:w-[24px]" src="<?php echo G5_THEME_URL?>/img/noticeTalk.svg" alt="">
                    <div>
                        <p class="H6 font-semibold max-md:text-[13px]">카카오톡 상담</p>
                        <p class="H4 font-semibold max-md:text-[17px]">@drcody</p>
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <!-- 리스트 섹션 -->
    <section class="py-16 container">
        <p class="SectionTitleText font-bold text-center mb-4">A/S 신청</p>
        <p class="text-base font-medium text-gray-900 mb-4">총 <span class="text-[var(--main-brown01)]"><?php echo count($dummyData); ?></span>개의 글</p>

        <!-- 테이블 -->
        <table class="list-table">
            <tbody>
                <?php foreach ($dummyData as $index => $item): ?>
                <!-- 리스트 행 -->
                <tr class="list-row" data-id="<?php echo $item['id']; ?>" data-password="<?php echo $item['password']; ?>">
                    <td colspan="6" style="padding: 0;">
                        <div class="list-row-wrapper">
                            <!-- 상단 헤더 영역 -->
                            <div class="list-row-header">
                                <div class="list-row-cell" style="width: 60px;">
                                    <div class="lock-icon-wrapper">
                                        <img src="<?php echo G5_THEME_URL?>/img/lock.svg">
                                    </div>
                                </div>
                                <div class="list-row-cell" style="flex: 1;">
                                    <span class="title-text"><?php echo $item['title']; ?></span>
                                </div>
                                <div class="list-row-cell" style="width: 120px;" data-date="<?php echo $item['date']; ?>">
                                    <span style="color: #584439; font-weight:500;"><?php echo $item['author']; ?></span>
                                </div>
                                <div class="list-row-cell" style="width: 120px;">
                                    <span style="color: #6b7280; font-weight:500;"><?php echo $item['date']; ?></span>
                                </div>
                                <div class="list-row-cell" style="width: 140px;">
                                    <?php if ($item['status'] === 'pending'): ?>
                                        <span class="status-badge waiting">
                                            <span class="status-icon"></span>
                                            답변대기
                                        </span>
                                    <?php else: ?>
                                        <span class="status-badge completed">
                                            <img src="<?php echo G5_THEME_URL?>/img/icon_check.svg" alt="" class="status-icon">
                                            답변완료
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="list-row-cell" style="width: 50px; text-align: right;">
                                    <svg class="accordion-toggle" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- 아코디언 내용 -->
                            <div class="accordion-content" id="content-<?php echo $item['id']; ?>">
                                <div class="accordion-inner">
                                    <!-- Q&A 섹션 -->
                                    <div class="qa-section">
                                        <!-- 질문 -->
                                        <div class="qa-label">
                                            <div class="qa-icon question">Q</div>
                                            <div class="qa-content">
                                            <?php echo nl2br($item['content']); ?>
                                            </div>
                                        </div>
                                        
                                        <!-- 답변 (답변이 있을 경우만) -->
                                        <?php if (!empty($item['answer'])): ?>
                                        <div class="qa-label border-t border-gray-200">
                                            <div class="qa-icon answer">A</div>
                                            <div class="qa-content">
                                            <?php echo nl2br($item['answer']); ?>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- 페이지네이션 -->
        <div class="pagination">
            <button class="pagination-btn" disabled>
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button class="pagination-btn active">1</button>
            <button class="pagination-btn">2</button>
            <button class="pagination-btn">3</button>
            <button class="pagination-btn">
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>

        <!-- 글쓰기 버튼 -->
        <div class="list-actions">
            <a href="as-inquiry.php">
                <button class="write-btn">A/S 신청하기</button>
            </a>
        </div>
    </section>
</main>

<!-- 비밀번호 확인 모달 -->
<div class="password-modal" id="passwordModal">
    <div class="password-modal-content">
        <h3 class="password-modal-title">비밀번호 확인</h3>
        <p class="password-modal-desc">비밀번호를 입력해주세요.</p>
        <div class="password-input-group">
            <input type="password" class="password-input" id="passwordInput" placeholder="비밀번호 입력">
            <p class="password-error" id="passwordError">비밀번호가 일치하지 않습니다.</p>
        </div>
        <div class="password-modal-buttons">
            <button class="password-modal-btn cancel" onclick="closePasswordModal()">취소</button>
            <button class="password-modal-btn confirm" onclick="checkPassword()">확인</button>
        </div>
    </div>
</div>

<script>
let currentRowId = null;
let currentPassword = null;

// 리스트 행 클릭 이벤트
document.querySelectorAll('.list-row-header').forEach(header => {
    header.addEventListener('click', function(e) {
        const row = this.closest('.list-row');
        // 이미 열려있는지 확인
        const isAlreadyOpen = row.classList.contains('active');

        if (isAlreadyOpen) {
            // 이미 열려있으면 닫기
            row.classList.remove('active');
            this.parentElement.querySelector('.accordion-content').classList.remove('active');
        } else {
            // 비밀번호 확인을 위해 데이터 저장
            currentRowId = row.dataset.id;
            currentPassword = row.dataset.password;
            openPasswordModal();
        }
    });
});

// 비밀번호 모달 열기
function openPasswordModal() {
    document.getElementById('passwordModal').classList.add('active');
    document.getElementById('passwordInput').value = '';
    document.getElementById('passwordError').classList.remove('active');
    document.getElementById('passwordInput').focus();
}

// 비밀번호 모달 닫기
function closePasswordModal() {
    document.getElementById('passwordModal').classList.remove('active');
    currentRowId = null;
    currentPassword = null;
}

// 비밀번호 확인
function checkPassword() {
    const inputPassword = document.getElementById('passwordInput').value;

    if (inputPassword === currentPassword) {
        // 비밀번호 일치 - 모든 아코디언 닫고 현재 항목만 열기
        document.querySelectorAll('.list-row').forEach(row => {
            row.classList.remove('active');
        });
        document.querySelectorAll('.accordion-content').forEach(content => {
            content.classList.remove('active');
        });

        // 현재 행과 아코디언 열기
        const currentRow = document.querySelector(`.list-row[data-id="${currentRowId}"]`);
        currentRow.classList.add('active');
        document.getElementById('content-' + currentRowId).classList.add('active');
        
        closePasswordModal();

        // 스크롤 애니메이션
        setTimeout(() => {
            const contentRow = document.getElementById('content-' + currentRowId);
            contentRow.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }, 100);
    } else {
        // 비밀번호 불일치
        document.getElementById('passwordError').classList.add('active');
        document.getElementById('passwordInput').value = '';
        document.getElementById('passwordInput').focus();
    }
}

// Enter 키로 비밀번호 확인
document.getElementById('passwordInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        checkPassword();
    }
});

// 모달 배경 클릭시 닫기
document.getElementById('passwordModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closePasswordModal();
    }
});
</script>

<?php
include_once(G5_PATH.'/tail.php');
?>
