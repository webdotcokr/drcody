<?php
include_once('../common.php');
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);
include_once(G5_PATH.'/head.php');
?>

<main>
    <!-- 헤더 섹션 -->
        <div class="container">
            <!-- Breadcrumbs -->
            <div class="text-sm text-white/80 mb-4">
                <span>홈</span> / <span>견적문의</span> / <span class="text-white font-semibold">견적문의 신청</span>
            </div>
            <h1 class="PageTitleText">견적문의 신청</h1>
            <p class="mt-2 PageSubTitleText">
                간단한 스케치로 시작하는 프리미엄 드레스룸 <br/>전문가가 공간에 맞는 드레스룸을 제안드립니다.
            </p>
        </div>

    <!-- 폼 섹션 -->
    <section class="py-16 md:py-10 container">
        <form action="" method="post" enctype="multipart/form-data" class="border-t mx-auto">

            <!-- 기본 정보 -->
            <!-- 성함 + 연락처 (같은 줄) -->
            <div class="form-row form-field-grid">
                <!-- 성함 -->
                <div class="form-field">
                    <label class="field-label H5 font-semibold" required>성함</label>
                    <div class="field-input">
                        <input
                            type="text"
                            name="name"
                            required
                            placeholder="성명을 입력해주세요"
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

            <!-- 주소(시/군/구) -->
            <div class="form-field">
                <label class="field-label H5 font-semibold">주소(시/군/구)</label>
                <div class="field-input">
                    <input
                        type="text"
                        name="address"
                        placeholder="주소를 입력해주세요 (서울시 강남구)"
                        class="form-input"
                    />
                </div>
            </div>

            <!-- 그림 첨부 섹션 -->
            <div class="mt-10 md:mt-8 pt-10 md:pt-8 border-t border-gray-200">
                <div class="form-field">
                    <label class="field-label H5 font-semibold">그림 첨부</label>
                    <div class="field-input">
                        <p class="text-[var(--main-brown02)] H6 font-semibold mb-2">간단한 손그림을 첨부해주세요.</p>

                        <!-- 스케치 안내 이미지 -->
                        <div class="bg-white border border-gray-200 p-4 max-md:p-2 rounded-md">
                            <img class="m-auto" src="<?php echo G5_THEME_URL?>/img/inquiryImage.webp">
                            <p class="mt-6 text-sm text-center text-gray-500">
                                예시 이미지입니다. 아직 간결한 스케치라도 충분합니다.
                            </p>
                            <!-- 파일 첨부 -->
                        <div class="mt-8 p-5 max-md:p-2 space-y-3 bg-gray-50">
                            <div class="flex items-center justify-between">
                                <p class="text-base font-medium text-gray-900">그림 이미지를 첨부해주세요.</p>
                                <button type="button" onclick="addFileInput()" class="py-2 px-4 text-sm text-gray-900 hover:text-[var(--main-brown01)] bg-white flex items-center gap-1 rounded-full border border-gray-100">
                                    + 파일 추가
                                </button>
                            </div>

                            <div id="fileInputsContainer" class="space-y-2">
                                <!-- 파일 입력 1 -->
                                <div class="file-input-row flex items-center gap-3 p-1 bg-white border border-gray-200 rounded-md">
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
                                <div class="file-input-row flex items-center gap-3 p-1 bg-white border border-gray-200 rounded-md">
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
                        </div>
                    </div>
                </div>
            </div>

            <!-- 윤곽 선택 섹션 -->
            <div class="mt-8 pt-8 border-t border-gray-300 form-row">
                <div class="form-field">
                    <label class="field-label H5 font-semibold">옵션 선택</label>
                    <div class="field-input">
                        <p class="text-[var(--main-brown02)] H6 font-semibold mb-2">그림 첨부가 어려우신 경우 아래 내용을 입력해주세요.</p>

                        <!-- 다이어그램 + 입력 필드 (좌우 배치) -->
                        <div class="p-12 max-md:p-3 grid grid-cols-2 max-md:grid-cols-1 gap-16 border border-gray-300 rounded-md">
                            <!-- 왼쪽: 다이어그램 이미지 -->
                            <div class="flex items-center">
                                <img src="<?php echo G5_THEME_URL?>/img/inquiryImage-2.webp" alt="공간 치수 입력 다이어그램" class="w-full">
                            </div>

                            <!-- 오른쪽: 입력 필드들 (세로 배치) -->
                            <div class="space-y-5">
                                <!-- 1번, 2번 (가로 배치) -->
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-base font-semibold mb-2">1번</label>
                                        <div class="flex gap-2">
                                            <input type="number" name="point1" placeholder="0" class="form-input" />
                                            <span class="px-3 py-3 text-base font-medium whitespace-nowrap">mm</span>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-base font-semibold mb-2">2번</label>
                                        <div class="flex gap-2">
                                            <input type="number" name="point2" placeholder="0" class="form-input" />
                                            <span class="px-3 py-3 text-base font-medium whitespace-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3번, 4번 (가로 배치) -->
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-base font-semibold mb-2">3번</label>
                                        <div class="flex gap-2">
                                            <input type="number" name="point3" placeholder="0" class="form-input" />
                                            <span class="px-3 py-3 text-base font-medium whitespace-nowrap">mm</span>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-base font-semibold mb-2">4번</label>
                                        <div class="flex gap-2">
                                            <input type="number" name="point4" placeholder="0" class="form-input" />
                                            <span class="px-3 py-3 text-base font-medium whitespace-nowrap">mm</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- 천장 높이 -->
                                <div>
                                    <label class="block text-base font-semibold mb-2">천장 높이</label>
                                    <div class="flex gap-2">
                                        <input type="number" name="ceiling_height" placeholder="0" class="form-input" />
                                        <span class="px-3 py-3 text-base font-medium whitespace-nowrap">mm</span>
                                    </div>
                                </div>

                                <!-- 창문유무 -->
                                <div>
                                    <label class="block text-base font-semibold mb-2">창문유무</label>
                                    <select name="has_window" class="form-select">
                                        <option value="">없음</option>
                                        <option value="yes">있음</option>
                                    </select>
                                </div>

                                <!-- 문 형태/위치 -->
                                <div>
                                    <label class="block text-base font-semibold mb-2">문 형태/위치</label>
                                    <select name="door_type" class="form-select">
                                        <option value="">없음</option>
                                        <option value="sliding">슬라이딩</option>
                                        <option value="swing">여닫이</option>
                                        <option value="folding">접이식</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 도어스토퍼 모양 -->
            <div class="mt-10 md:mt-8 pt-10 md:pt-8 border-t border-gray-200">
                <div class="form-field">
                    <label class="field-label H5 font-semibold">드레스룸 모양</label>
                    <div class="field-input">
                        <div class="flex flex-wrap gap-6">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="stopper_shape" value="l_shape" class="w-4 h-4 accent-[var(--main-brown01)]" />
                                <span class="H6 font-medium text-gray-700">ㄷ자 형태</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="stopper_shape" value="reversed_l" class="w-4 h-4 accent-[var(--main-brown01)]" />
                                <span class="H6 font-medium text-gray-700">ㄱ자 형태</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="stopper_shape" value="u_shape" class="w-4 h-4 accent-[var(--main-brown01)]" />
                                <span class="H6 font-medium text-gray-700">ㅡ자 형태</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="stopper_shape" value="custom" class="w-4 h-4 accent-[var(--main-brown01)]" />
                                <span class="H6 font-medium text-gray-700">기타(상담 후 결정)</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 선반 색상 -->
            <div class="form-row">
                <div class="form-field">
                    <label class="field-label H5 font-semibold">선반 색상</label>
                    <div class="field-input">
                        <div class="flex flex-wrap gap-12 max-md:grid max-md:grid-cols-4 max-md:gap-4">
                            <!-- 화이트마블 -->
                            <label class="flex flex-col items-center gap-3 cursor-pointer max-md:gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/color/white-marble.svg" alt="화이트마블" class="w-24 h-24 rounded-full object-cover border border-white shadow-lg max-md:w-[60px] max-md:h-[60px]" />
                                <div class="flex items-center gap-2 max-md:flex-col max-md:gap-1">
                                    <input type="radio" name="shelf_color" value="white_marble" class="w-5 h-5 accent-[var(--main-brown01)] max-md:w-4 max-md:h-4" />
                                    <span class="text-sm font-medium max-md:text-xs max-md:text-center">화이트마블</span>
                                </div>
                            </label>

                            <!-- 화이트 -->
                            <label class="flex flex-col items-center gap-3 cursor-pointer max-md:gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/color/white.svg" alt="화이트" class="w-24 h-24 rounded-full object-cover border border-white shadow-lg max-md:w-[60px] max-md:h-[60px]" />
                                <div class="flex items-center gap-2 max-md:flex-col max-md:gap-1">
                                    <input type="radio" name="shelf_color" value="white" class="w-5 h-5 accent-[var(--main-brown01)] max-md:w-4 max-md:h-4" />
                                    <span class="text-sm font-medium max-md:text-xs max-md:text-center">화이트</span>
                                </div>
                            </label>

                            <!-- 월그레이 -->
                            <label class="flex flex-col items-center gap-3 cursor-pointer max-md:gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/color/warm-gray.svg" alt="월그레이" class="w-24 h-24 rounded-full object-cover border border-white shadow-lg max-md:w-[60px] max-md:h-[60px]" />
                                <div class="flex items-center gap-2 max-md:flex-col max-md:gap-1">
                                    <input type="radio" name="shelf_color" value="warm_gray" class="w-5 h-5 accent-[var(--main-brown01)] max-md:w-4 max-md:h-4" />
                                    <span class="text-sm font-medium max-md:text-xs max-md:text-center">웜그레이</span>
                                </div>
                            </label>

                            <!-- 오크 -->
                            <label class="flex flex-col items-center gap-3 cursor-pointer max-md:gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/color/oak.svg" alt="오크" class="w-24 h-24 rounded-full object-cover border border-white shadow-lg max-md:w-[60px] max-md:h-[60px]" />
                                <div class="flex items-center gap-2 max-md:flex-col max-md:gap-1">
                                    <input type="radio" name="shelf_color" value="oak" class="w-5 h-5 accent-[var(--main-brown01)] max-md:w-4 max-md:h-4" />
                                    <span class="text-sm font-medium max-md:text-xs max-md:text-center">오크</span>
                                </div>
                            </label>

                            <!-- 멀바우 -->
                            <label class="flex flex-col items-center gap-3 cursor-pointer max-md:gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/color/amber.svg" alt="멀바우" class="w-24 h-24 rounded-full object-cover border border-white shadow-lg max-md:w-[60px] max-md:h-[60px]" />
                                <div class="flex items-center gap-2 max-md:flex-col max-md:gap-1">
                                    <input type="radio" name="shelf_color" value="amber" class="w-5 h-5 accent-[var(--main-brown01)] max-md:w-4 max-md:h-4" />
                                    <span class="text-sm font-medium max-md:text-xs max-md:text-center">멀바우</span>
                                </div>
                            </label>

                            <!-- 라이트스톤 -->
                            <label class="flex flex-col items-center gap-3 cursor-pointer max-md:gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/color/light-stone.svg" alt="라이트스톤" class="w-24 h-24 rounded-full object-cover border border-white shadow-lg max-md:w-[60px] max-md:h-[60px]" />
                                <div class="flex items-center gap-2 max-md:flex-col max-md:gap-1">
                                    <input type="radio" name="shelf_color" value="light_smoke" class="w-5 h-5 accent-[var(--main-brown01)] max-md:w-4 max-md:h-4" />
                                    <span class="text-sm font-medium max-md:text-xs max-md:text-center">라이트스톤</span>
                                </div>
                            </label>

                            <!-- 다크스톤 -->
                            <label class="flex flex-col items-center gap-3 cursor-pointer max-md:gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/color/dark-stone.svg" alt="다크스톤" class="w-24 h-24 rounded-full object-cover border border-white shadow-lg max-md:w-[60px] max-md:h-[60px]" />
                                <div class="flex items-center gap-2 max-md:flex-col max-md:gap-1">
                                    <input type="radio" name="shelf_color" value="dark_smoke" class="w-5 h-5 accent-[var(--main-brown01)] max-md:w-4 max-md:h-4" />
                                    <span class="text-sm font-medium max-md:text-xs max-md:text-center">다크스톤</span>
                                </div>
                            </label>

                            <!-- 상담 후 결정 -->
                            <label class="flex flex-col items-center gap-3 cursor-pointer max-md:gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/color/consult.svg" alt="상담 후 결정" class="w-24 h-24 rounded-full object-cover border border-white shadow-lg max-md:w-[60px] max-md:h-[60px]" />
                                <div class="flex items-center gap-2 max-md:flex-col max-md:gap-1">
                                    <input type="radio" name="shelf_color" value="consult" class="w-5 h-5 accent-[var(--main-brown01)] max-md:w-4 max-md:h-4" />
                                    <span class="text-sm font-medium max-md:text-xs max-md:text-center">상담 후 결정</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 기둥 색상 -->
            <div class="form-row">
                <div class="form-field">
                    <label class="field-label H5 font-semibold">기둥 색상</label>
                    <div class="field-input">
                        <div class="flex flex-wrap gap-12 max-md:grid max-md:grid-cols-4 max-md:gap-4">
                            <!-- 실버 -->
                            <label class="flex flex-col items-center gap-3 cursor-pointer max-md:gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/color/silver.svg" alt="실버" class="w-24 h-24 rounded-full object-cover border border-white shadow-lg max-md:w-[60px] max-md:h-[60px]" />
                                <div class="flex items-center gap-2 max-md:flex-col max-md:gap-1">
                                    <input type="radio" name="pillar_color" value="silver" class="w-5 h-5 accent-[var(--main-brown01)] max-md:w-4 max-md:h-4" checked />
                                    <span class="text-sm font-medium max-md:text-xs max-md:text-center">실버</span>
                                </div>
                            </label>

                            <!-- 흑니켈 -->
                            <label class="flex flex-col items-center gap-3 cursor-pointer max-md:gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/color/black-nickel.svg" alt="흑니켈" class="w-24 h-24 rounded-full object-cover border border-white shadow-lg max-md:w-[60px] max-md:h-[60px]" />
                                <div class="flex items-center gap-2 max-md:flex-col max-md:gap-1">
                                    <input type="radio" name="pillar_color" value="black" class="w-5 h-5 accent-[var(--main-brown01)] max-md:w-4 max-md:h-4" />
                                    <span class="text-sm font-medium max-md:text-xs max-md:text-center">흑니켈</span>
                                </div>
                            </label>

                            <!-- 상담 후 결정 -->
                            <label class="flex flex-col items-center gap-3 cursor-pointer max-md:gap-2">
                                <img src="<?php echo G5_THEME_URL?>/img/color/consult.svg" alt="상담 후 결정" class="w-24 h-24 rounded-full object-cover border border-white shadow-lg max-md:w-[60px] max-md:h-[60px]" />
                                <div class="flex items-center gap-2 max-md:flex-col max-md:gap-1">
                                    <input type="radio" name="pillar_color" value="consult" class="w-5 h-5 accent-[var(--main-brown01)] max-md:w-4 max-md:h-4" />
                                    <span class="text-sm font-medium max-md:text-xs max-md:text-center">상담 후 결정</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 문의사항 -->
            <div class="mt-10 md:mt-8 pt-10 md:pt-8 border-t border-gray-200">
                <div class="form-field">
                    <label class="field-label H5 font-semibold">문의사항</label>
                    <div class="field-input">
                        <textarea
                            name="inquiry"
                            rows="6"
                            placeholder="문의 내용을 입력해주세요."
                            class="form-textarea"
                        ></textarea>
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
                    <div class="flex items-center justify-between gap-4">
                        <!-- 체크박스 + 라벨 -->
                        <div class="flex items-center gap-2">
                            <input
                                type="checkbox"
                                name="privacy_agree"
                                id="privacy_agree"
                                required
                                class="w-5 h-5 accent-[var(--main-brown01)]"
                            />
                            <label for="privacy_agree" class="field-label required H5 font-semibold md:text-base">
                                견적 확인을 위한 개인정보 수집에 동의합니다. (필수)
                            </label>
                        </div>

                        <!-- 약관 보기 버튼 -->
                        <button type="button" onclick="togglePrivacyDetail()" class="text-base font-semibold inline-flex items-center gap-1 whitespace-nowrap">
                            약관 보기
                            <svg id="privacyArrow" class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>

                    <!-- 동의 내용 상세 -->
                    <div id="privacyDetail" class="hidden bg-gray-50 p-6 rounded-md text-sm text-gray-700 space-y-2 max-h-[200px] overflow-y-auto">
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
                    문의 작성
                </button>
            </div>
        </form>
    </section>
</main>

<script>
let fileCounter = 2;

// 파일 입력 처리
document.addEventListener('change', function(e) {
    if (e.target.classList.contains('file-input')) {
        const fileName = e.target.files[0]?.name || '선택된 파일 없음';
        const fileNameDisplay = e.target.closest('.file-input-row').querySelector('.file-name');
        if (fileNameDisplay) {
            fileNameDisplay.textContent = fileName;
            fileNameDisplay.classList.toggle('text-gray-500', !e.target.files[0]);
            fileNameDisplay.classList.toggle('text-gray-900', !!e.target.files[0]);
        }
    }
});

// 파일 입력 추가
function addFileInput() {
    fileCounter++;
    const container = document.getElementById('fileInputsContainer');
    const newRow = document.createElement('div');
    newRow.className = 'file-input-row flex items-center gap-3 p-1 bg-white border border-gray-200 rounded-md';
    newRow.innerHTML = `
        <input type="file" name="sketch_file${fileCounter}" accept="image/*" class="hidden file-input" id="file${fileCounter}" />
        <span class="flex-1 text-sm text-gray-500 file-name">선택된 파일 없음</span>
        <label for="file${fileCounter}" class="px-5 py-2 bg-black text-white text-sm rounded-md cursor-pointer hover:bg-gray-800 whitespace-nowrap">
            파일 선택
        </label>
        <button type="button" onclick="removeFileInput(this)" class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-red-500">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 2H14M2 5H18M16 5L15.133 16.142C15.0971 16.6466 14.8713 17.1188 14.5011 17.4636C14.1309 17.8083 13.6439 18 13.138 18H6.862C6.35614 18 5.86907 17.8083 5.49889 17.4636C5.1287 17.1188 4.90292 16.6466 4.867 16.142L4 5M8 9V14M12 9V14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    `;
    container.appendChild(newRow);
}

// 파일 입력 삭제
function removeFileInput(button) {
    const row = button.closest('.file-input-row');
    const container = document.getElementById('fileInputsContainer');

    // 최소 1개는 남겨두기
    if (container.children.length > 1) {
        row.remove();
    } else {
        // 마지막 하나인 경우 파일만 초기화
        const fileInput = row.querySelector('.file-input');
        const fileName = row.querySelector('.file-name');
        fileInput.value = '';
        fileName.textContent = '선택된 파일 없음';
        fileName.classList.add('text-gray-500');
        fileName.classList.remove('text-gray-900');
    }
}

// 개인정보 약관 토글
function togglePrivacyDetail() {
    const detail = document.getElementById('privacyDetail');
    const arrow = document.getElementById('privacyArrow');

    if (detail.classList.contains('hidden')) {
        detail.classList.remove('hidden');
        arrow.style.transform = 'rotate(180deg)';
    } else {
        detail.classList.add('hidden');
        arrow.style.transform = 'rotate(0deg)';
    }
}

// 폼 제출 처리
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();

    // 필수 항목 검증
    const name = this.querySelector('[name="name"]').value;
    const phone = this.querySelector('[name="phone"]').value;
    const password = this.querySelector('[name="password"]').value;
    const privacyAgree = this.querySelector('[name="privacy_agree"]').checked;

    if (!name || !phone || !password) {
        alert('필수 항목을 모두 입력해주세요.');
        return;
    }

    if (!privacyAgree) {
        alert('개인정보 수집 및 이용에 동의해주세요.');
        return;
    }

    // 실제 제출 처리 (서버로 전송)
    alert('견적 문의가 접수되었습니다.\n빠른 시일 내에 연락드리겠습니다.');
    // this.submit(); // 실제 서버 제출
});
</script>

<?php
include_once(G5_PATH.'/tail.php');
?>