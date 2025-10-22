<?php
/**
 * 게시판 리스트 템플릿
 *
 * 필요한 변수:
 * - $boardData: 게시판 데이터 배열
 * - $boardConfig: 게시판 설정 배열
 */

if (!isset($boardData) || !isset($boardConfig)) {
    die('Required variables not set');
}
?>

<!-- 리스트 섹션 -->
<section class="py-16 container">
    <p class="SectionTitleText font-bold text-center mb-4"><?php echo $boardConfig['title']; ?></p>
    <p class="text-base font-medium text-gray-900 mb-4 max-md:mb-2">총 <span class="text-[var(--main-brown01)]"><?php echo count($boardData); ?></span>개의 글</p>

    <!-- 테이블 -->
    <table class="list-table">
        <tbody>
            <?php foreach ($boardData as $index => $item): ?>
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
                            <?php if ($boardConfig['show_status']): ?>
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
                            <?php endif; ?>
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
        <a href="<?php echo $boardConfig['write_btn_link']; ?>">
            <button class="write-btn"><?php echo $boardConfig['write_btn_text']; ?></button>
        </a>
    </div>
</section>
