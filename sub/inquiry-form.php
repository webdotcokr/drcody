<?php
header('Content-Type: text/html; charset=utf-8');
include_once('../common.php');
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
        <h1 class="PageTitleText font-bold">1:1 상담 신청</h1>
        <p class="mt-4 PageSubTitleText text-gray-700">
            궁금한 점이나 불편한 점이 있으신가요?<br>언제든 문의해주시면 친절하게 도움을 드리겠습니다.
        </p>
    </div>

    <!-- 폼 섹션 -->
    <section class="py-12 md:py-8 max-md:pt-0">
        <div class="container mx-auto px-4">
            <form action="" method="post" class="mx-auto">

                <!-- 제목 -->
                <div class="form-row form-field">
                    <label class="field-label H5 font-semibold" required>제목</label>
                    <div class="field-input">
                        <input
                            type="text"
                            name="title"
                            required
                            placeholder="제목을 입력해주세요"
                            class="form-input"
                        />
                    </div>
                </div>

                <!-- 성함 + 연락처 (PC: 2열 그리드) -->
                <div class="form-row form-field-grid">
                    <!-- 성함 -->
                    <div class="form-field">
                        <label class="field-label H5 font-semibold" required>성함</label>
                        <div class="field-input">
                            <input
                                type="text"
                                name="name"
                                required
                                placeholder="성함을 입력해주세요"
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
                </div>

                <!-- 문의사항 -->
                <div class="form-row form-field">
                    <label class="field-label H5 font-semibold">문의사항</label>
                    <div class="field-input">
                        <textarea
                            name="content"
                            rows="6"
                            placeholder="문의 내용을 남겨주세요"
                            class="form-textarea"
                        ></textarea>
                    </div>
                </div>

                <!-- 파일 첨부 -->
                        <div class="p-5 space-y-3 bg-gray-50">
                            <div class="flex items-center justify-between">
                                <p class="text-base text-gray-700">파일 첨부</p>
                                <button type="button" onclick="addFileInput()" class="py-2 px-4 text-sm text-gray-900 hover:text-[var(--main-brown01)] bg-white flex items-center gap-1 rounded-full border border-gray-100">
                                    + 파일 추가
                                </button>
                            </div>

                            <div id="fileInputsContainer" class="space-y-3">
                                <!-- 파일 입력 1 -->
                                <div class="file-input-row flex items-center gap-3 p-2 bg-white border border-gray-200 rounded-md">
                                    <input type="file" name="sketch_file1" accept="image/*" class="hidden file-input" id="file1" />
                                    <span class="flex-1 text-sm text-gray-500 file-name">선택된 파일 없음</span>
                                    <label for="file1" class="px-5 py-2 bg-black text-white text-sm rounded-md cursor-pointer hover:bg-gray-800 whitespace-nowrap">
                                        파일 선택
                                    </label>
                                    <button type="button" onclick="removeFileInput(this)" class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-red-500">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 2H14M2 5H18M16 5L15.133 16.142C15.0971 16.6466 14.8713 17.1188 14.5011 17.4636C14.1309 17.8083 13.6439 18 13.138 18H6.862C6.35614 18 5.86907 17.8083 5.49889 17.4636C5.1287 17.1188 4.90292 16.6466 4.867 16.142L4 5M8 9V14M12 9V14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>

                                <!-- 파일 입력 2 -->
                                <div class="file-input-row flex items-center gap-3 p-2 bg-white border border-gray-200 rounded-md">
                                    <input type="file" name="sketch_file2" accept="image/*" class="hidden file-input" id="file2" />
                                    <span class="flex-1 text-sm text-gray-500 file-name">선택된 파일 없음</span>
                                    <label for="file2" class="px-5 py-2 bg-black text-white text-sm rounded-md cursor-pointer hover:bg-gray-800 whitespace-nowrap">
                                        파일 선택
                                    </label>
                                    <button type="button" onclick="removeFileInput(this)" class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-red-500">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 2H14M2 5H18M16 5L15.133 16.142C15.0971 16.6466 14.8713 17.1188 14.5011 17.4636C14.1309 17.8083 13.6439 18 13.138 18H6.862C6.35614 18 5.86907 17.8083 5.49889 17.4636C5.1287 17.1188 4.90292 16.6466 4.867 16.142L4 5M8 9V14M12 9V14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- 비밀번호 -->
                        <div class="mt-10 md:mt-8 pt-10 md:pt-8 border-t border-gray-200">
                            <div class="form-field">
                                <label class="field-label H5 font-semibold" required>비밀번호</label>
                                <div class="field-input">
                                    <input
                                        type="password"
                                        name="password"
                                        required
                                        placeholder="비밀번호를 입력해주세요"
                                        class="form-input"
                                    />
                                </div>
                            </div>
                        </div>

                        <!-- 개인정보 수집 동의 -->
            <div class="mt-10 md:mt-8 pt-10 md:pt-8 border-t border-gray-200">
                <div class="space-y-4">
                    <div class="flex items-start gap-2">
                        <input
                            type="checkbox"
                            name="privacy_agree"
                            id="privacy_agree"
                            required
                            class="mt-1 w-5 h-5 accent-[var(--main-brown01)]"
                        />
                        <label for="privacy_agree" class="flex-1">
                            <span class="field-label required H5 font-semibold md:text-base">
                                견적 위한 위의 개인정보 수집과 이용에 동의합니다.
                            </span>
                            <button type="button" class="ml-2 text-sm text-[var(--main-brown01)] underline">자세히 ></button>
                        </label>
                    </div>

                    <!-- 동의 내용 상세 -->
                    <div class="bg-gray-50 p-6 rounded-md text-sm text-gray-700 space-y-2 max-h-[200px] overflow-y-auto">
                        <p class="font-semibold">개인정보 수집 및 이용에 대한 안내</p>
                        <p>1. 수집항목: 개인정보 항목</p>
                        <p>회사는 아래의 항목을 수집해 및 이용합니다:</p>
                        <p>- 필수항목: 성명, 전화번호</p>
                        <p>- 선택항목: 이메일, 견적 관련 정보, 기타 등</p>
                        <p class="mt-3 font-semibold">2. 개인정보의 이용 목적</p>
                        <p>견적문의 대응 및 처리를 위해, 견적문의 관련 업무</p>
                        <p class="mt-3 font-semibold">3. 개인정보의 보유기간, 이용 기간</p>
                        <p>견적문의 처리 후 3년간 보관</p>
                    </div>
                </div>
            </div>

                <!-- 제출 버튼 -->
                <div class="form-buttons">
                    <button type="button" onclick="history.back()" class="btn deactive">
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
