<?php
/**
 * ============================================================================
 * 게시판 통합 관리 시스템
 * ============================================================================
 *
 * 이 파일은 여러 게시판(A/S 신청, 1:1 문의 등)의 설정과 데이터를 중앙에서 관리합니다.
 *
 * [사용 방법]
 * 각 게시판 페이지에서 아래 3줄만 작성하면 됩니다:
 *
 *   $boardType = 'as';  // 또는 'inquiry', 'notice' 등
 *   $boardConfig = getBoardConfig($boardType);
 *   $boardData = getBoardData($boardType);
 *
 * [새 게시판 추가 방법]
 * 1. 아래 $BOARD_CONFIG 배열에 새로운 타입 추가
 * 2. getBoardData() 함수에 해당 타입의 데이터 처리 로직 추가
 * 3. 끝! 모든 템플릿과 모달이 자동으로 작동합니다.
 *
 * ============================================================================
 */

// ============================================================================
// 게시판 타입별 설정
// ============================================================================
// 각 게시판의 UI 텍스트, 버튼 링크, 옵션을 정의합니다.
// 새로운 게시판을 추가할 때는 여기에 새 항목을 추가하세요.

$BOARD_CONFIG = [
    // A/S 신청 게시판
    'as' => [
        'title' => 'A/S 신청',
        'subtitle' => '디알코디 이용 중 궁금한 점이나 불편한 점이 있으신가요? <br/>언제든 문의해주시면 친절하게 도움을 드리겠습니다.',
        'write_btn_text' => 'A/S 신청하기',
        'write_btn_link' => 'as.php',
        'use_password' => true,          // 비밀번호 모달 사용 여부
        'show_status' => true,            // 답변대기/답변완료 상태 표시 여부
        'table_name' => 'as_board',       // DB 테이블명 (DB 연동 시 사용)
    ],

    // 1:1 상담 게시판
    'inquiry' => [
        'title' => '1:1 상담 신청',
        'subtitle' => '궁금하신 사항을 남겨주시면 빠르게 답변드리겠습니다.',
        'write_btn_text' => '1:1 상담 신청하기',
        'write_btn_link' => 'inquiry-write.php',
        'use_password' => true,
        'show_status' => true,
        'table_name' => 'inquiry_board',  // DB 테이블명 (DB 연동 시 사용)
    ],

    // 새 게시판을 추가하려면 아래와 같은 형식으로 추가하세요:
    // 'notice' => [
    //     'title' => '공지사항',
    //     'subtitle' => '중요한 공지사항을 확인하세요.',
    //     'write_btn_text' => '공지 작성',
    //     'write_btn_link' => 'notice-write.php',
    //     'use_password' => false,
    //     'show_status' => false,
    //     'table_name' => 'notice_board',
    // ],
];

// ============================================================================
// 함수: 게시판 설정 가져오기
// ============================================================================
/**
 * 게시판 설정 가져오기
 *
 * @param string $type 게시판 타입 ('as', 'inquiry' 등)
 * @return array|null 게시판 설정 배열 또는 null
 *
 * @example
 *   $config = getBoardConfig('as');
 *   echo $config['title'];  // "A/S 신청"
 */
function getBoardConfig($type) {
    global $BOARD_CONFIG;
    return isset($BOARD_CONFIG[$type]) ? $BOARD_CONFIG[$type] : null;
}

// ============================================================================
// 함수: 게시판 데이터 가져오기
// ============================================================================
/**
 * 게시판 데이터 가져오기
 *
 * ⚠️ 현재는 더미 데이터를 반환합니다.
 * ⚠️ DB 연동 시 이 함수만 수정하면 모든 게시판에 자동 반영됩니다!
 *
 * @param string $type 게시판 타입 ('as', 'inquiry' 등)
 * @param int $page 페이지 번호 (기본값: 1) - 추후 페이지네이션 구현 시 사용
 * @param int $perPage 페이지당 게시물 수 (기본값: 10) - 추후 페이지네이션 구현 시 사용
 * @return array 게시판 데이터 배열
 *
 * ============================================================================
 * [DB 연동 시 수정 예시]
 * ============================================================================
 *
 * function getBoardData($type, $page = 1, $perPage = 10) {
 *     global $g5;
 *
 *     // 1. 게시판 설정에서 테이블명 가져오기
 *     $config = getBoardConfig($type);
 *     $table = $config['table_name'];  // 'as_board' 또는 'inquiry_board'
 *
 *     // 2. 페이지네이션 계산
 *     $offset = ($page - 1) * $perPage;
 *
 *     // 3. 해당 테이블에서 데이터 조회
 *     //    ✅ $type이 'as'면 → 'as_board' 테이블 조회
 *     //    ✅ $type이 'inquiry'면 → 'inquiry_board' 테이블 조회
 *     $sql = "SELECT * FROM {$table}
 *             ORDER BY id DESC
 *             LIMIT {$offset}, {$perPage}";
 *
 *     $result = sql_query($sql);
 *
 *     // 4. 결과를 배열로 변환
 *     $data = [];
 *     while ($row = sql_fetch_array($result)) {
 *         $data[] = $row;
 *     }
 *
 *     return $data;
 * }
 *
 * ============================================================================
 * 각 페이지에서는 $boardType만 변경하면 자동으로 해당 테이블 조회!
 * - list.php: $boardType = 'as' → as_board 테이블 조회
 * - inquiry-list.php: $boardType = 'inquiry' → inquiry_board 테이블 조회
 * ============================================================================
 */
function getBoardData($type, $page = 1, $perPage = 10) {
    // TODO: DB 연동 시 위의 예시 코드로 교체하세요
    // 현재는 더미 데이터 반환

    if ($type === 'as') {
        // A/S 게시판 더미 데이터
        return [
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
    } elseif ($type === 'inquiry') {
        // 1:1 상담 게시판 더미 데이터
        return [
            ['id' => 5, 'title' => '1:1 상담', 'author' => '홍길동', 'date' => '25.08.02', 'status' => 'pending', 'password' => '1234', 'content' => '견적 문의드립니다.', 'answer' => ''],
            ['id' => 4, 'title' => '1:1 상담', 'author' => '김철수', 'date' => '25.08.01', 'status' => 'completed', 'password' => '1234', 'content' => '제품 문의합니다.', 'answer' => '답변드립니다.'],
            ['id' => 3, 'title' => '1:1 상담', 'author' => '이영희', 'date' => '25.07.31', 'status' => 'completed', 'password' => '1234', 'content' => '배송 관련 문의', 'answer' => '답변 내용입니다.'],
            ['id' => 2, 'title' => '1:1 상담', 'author' => '박민수', 'date' => '25.07.30', 'status' => 'completed', 'password' => '1234', 'content' => '상담 요청', 'answer' => '답변 완료했습니다.'],
            ['id' => 1, 'title' => '1:1 상담', 'author' => '최지훈', 'date' => '25.07.29', 'status' => 'completed', 'password' => '1234', 'content' => '문의사항', 'answer' => '답변드립니다.'],
        ];
    }

    // 알 수 없는 게시판 타입인 경우 빈 배열 반환
    return [];
}

// ============================================================================
// 참고: $page, $perPage 매개변수는 현재 사용되지 않지만,
//       추후 페이지네이션 구현을 위해 미리 정의해두었습니다.
// ============================================================================
