<?php
header('Content-Type: text/html; charset=utf-8');
include_once('../common.php');
$g5['title'] = "A/S 신청";
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);
include_once(G5_PATH.'/head.php');
?>

<main>
    <!-- 헤더 섹션 -->
    <div class="container mx-auto px-4 py-8 md:py-6">
        <!-- Breadcrumbs -->
        <div class="text-sm text-gray-600 mb-4">
            <span>홈</span> / <span>고객센터</span> / <span class="text-gray-900 font-semibold">A/S 신청</span>
        </div>
        <h1 class="PageTitleText font-bold">A/S 신청</h1>
        <p class="mt-4 text-gray-700">
            다얌코디 이용 중 궁금한 점이나 불편한 점이 있으신가요?<br>
            언제든 문의해주시면 친절하게 도움을 드리겠습니다.
        </p>
    </div>

    <!-- 폼 섹션 -->
    <section class="py-12 md:py-8">
        <div class="container mx-auto px-4">
            <form action="" method="post" class="max-w-4xl mx-auto">

                <!-- 탭 메뉴 -->
                <div class="border-b-2 border-gray-200 mb-8">
                    <div class="flex gap-8 md:gap-4">
                        <button type="button" class="pb-4 px-2 text-lg md:text-base font-semibold text-gray-400 border-b-2 border-transparent hover:text-gray-900">
                            상담
                        </button>
                        <button type="button" class="pb-4 px-2 text-lg md:text-base font-semibold text-gray-900 border-b-2 border-[var(--main-brown02)]">
                            A/S 신청
                        </button>
                    </div>
                </div>

                <!-- 이름 -->
                <div class="form-field">
                    <label class="field-label H5 font-semibold" required>이름</label>
                    <div class="field-input">
                        <input
                            type="text"
                            name="name"
                            required
                            placeholder="이름을 입력해주세요"
                            class="form-input"
                        />
                    </div>
                </div>

                <!-- 연락처 -->
                <div class="form-field">
                    <label class="field-label H5 font-semibold" required>연락처</label>
                    <div class="field-input">
                        <input
                            type="tel"
                            name="phone"
                            required
                            placeholder="연락처를 입력해주세요"
                            class="form-input"
                        />
                    </div>
                </div>

                <!-- 사용요청일 -->
                <div class="form-field">
                    <label class="field-label H5 font-semibold" required>사용요청일</label>
                    <div class="field-input">
                        <input
                            type="date"
                            name="request_date"
                            required
                            placeholder="날짜를 선택하세요"
                            class="form-input"
                        />
                    </div>
                </div>

                <!-- A/S부위 -->
                <div class="form-field">
                    <label class="field-label H5 font-semibold" required>A/S부위</label>
                    <div class="field-input">
                        <input
                            type="text"
                            name="as_location"
                            required
                            placeholder="A/S가 필요한 부위를 입력해주세요"
                            class="form-input"
                        />
                    </div>
                </div>

                <!-- 해제 주소 -->
                <div class="form-field">
                    <label class="field-label H5 font-semibold" required>해제 주소</label>
                    <div class="field-input">
                        <div class="flex gap-2">
                            <input
                                type="text"
                                name="address_main"
                                required
                                placeholder="주소를 검색하세요"
                                class="form-input flex-1"
                                readonly
                            />
                            <button
                                type="button"
                                onclick="execDaumPostcode()"
                                class="px-6 py-3 bg-black text-white rounded-lg font-medium hover:bg-gray-800 transition whitespace-nowrap"
                            >
                                주소 찾기
                            </button>
                        </div>
                        <input
                            type="text"
                            name="address_detail"
                            placeholder="상세 주소를 입력해주세요"
                            class="form-input"
                        />
                        <p class="form-helper">※ A/S를 시행할 주소를 입력해주세요.</p>
                    </div>
                </div>

                <!-- 내용 -->
                <div class="form-field">
                    <label class="field-label H5 font-semibold">내용</label>
                    <div class="field-input">
                        <textarea
                            name="content"
                            rows="6"
                            placeholder="문의 내용을 남겨주세요"
                            class="form-textarea"
                        ></textarea>
                    </div>
                </div>

                <!-- 상담사 -->
                <div class="form-field">
                    <label class="field-label H5 font-semibold" required>상담사</label>
                    <div class="field-input">
                        <input
                            type="text"
                            name="consultant"
                            required
                            placeholder="상담사의 이름을 입력해주세요"
                            class="form-input"
                        />
                        <p class="form-helper">※ 상담사를 모르실 경우, 고객센터 성함을 입력해주세요.</p>
                    </div>
                </div>

                <!-- 제출 버튼 -->
                <div class="form-buttons">
                    <button type="button" onclick="history.back()" class="btn default">
                        취소
                    </button>
                    <button type="submit" class="btn sub">
                        작성 완료
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>

<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>
// 다음 주소 API
function execDaumPostcode() {
    new daum.Postcode({
        oncomplete: function(data) {
            var addr = data.userSelectedType === 'R' ? data.roadAddress : data.jibunAddress;
            document.querySelector('[name="address_main"]').value = addr;
            document.querySelector('[name="address_detail"]').focus();
        }
    }).open();
}

// 폼 제출 처리
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();

    // 필수 항목 검증
    const name = this.querySelector('[name="name"]').value.trim();
    const phone = this.querySelector('[name="phone"]').value.trim();
    const requestDate = this.querySelector('[name="request_date"]').value;
    const asLocation = this.querySelector('[name="as_location"]').value.trim();
    const addressMain = this.querySelector('[name="address_main"]').value.trim();
    const consultant = this.querySelector('[name="consultant"]').value.trim();

    if (!name || !phone || !requestDate || !asLocation || !addressMain || !consultant) {
        alert('필수 항목을 모두 입력해주세요.');
        return;
    }

    // 전화번호 형식 검증 (간단한 검증)
    const phonePattern = /^[0-9-+()]{9,15}$/;
    if (!phonePattern.test(phone)) {
        alert('올바른 전화번호 형식을 입력해주세요.');
        return;
    }

    // 실제 제출 처리 (서버로 전송)
    alert('A/S 신청이 접수되었습니다.\n빠른 시일 내에 연락드리겠습니다.');
    // this.submit(); // 실제 서버 제출
});
</script>

<?php
include_once(G5_PATH.'/tail.php');
?>
