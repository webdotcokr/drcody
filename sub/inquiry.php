<?php
include_once('../common.php');
$g5['title'] = "견적문의 신청";
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
            <div class="form-field-grid mb-6">
                <div>
                    <label class="field-label H5 font-semibold block mb-2" required>성함</label>
                    <input
                        type="text"
                        name="name"
                        required
                        placeholder="성명을 입력해주세요"
                        class="form-input"
                    />
                </div>
                <div>
                    <label class="field-label H5 font-semibold block mb-2" required>연락처</label>
                    <input
                        type="tel"
                        name="phone"
                        required
                        placeholder="연락처를 입력해주세요"
                        class="form-input"
                    />
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
                        <p class="text-gray-700 text-base mb-4">간단한 스케치를 첨부해주세요.</p>

                        <!-- 스케치 안내 이미지 -->
                        <div class="bg-white border border-gray-200 p-8 md:p-4 rounded-md">
                            <div class="flex justify-center gap-12 md:flex-col md:gap-6 items-center">
                                <!-- 평면도 예시 -->
                                <div class="flex flex-col items-center">
                                    <img src="<?php echo G5_THEME_URL?>/img/sketch-plan.png" alt="평면도" class="w-[280px] md:w-full h-auto" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                                    <div style="display:none;" class="w-[280px] h-[200px] md:w-full bg-gray-50 border-2 border-dashed border-gray-300 rounded flex items-center justify-center">
                                        <div class="text-center text-gray-400">
                                            <p class="text-sm">평면도 예시</p>
                                            <p class="text-xs mt-1">2850mm x 1460mm</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- 측면도 예시 -->
                                <div class="flex flex-col items-center">
                                    <img src="<?php echo G5_THEME_URL?>/img/sketch-side.png" alt="측면도" class="w-[180px] md:w-full h-auto" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                                    <div style="display:none;" class="w-[180px] h-[200px] md:w-full bg-gray-50 border-2 border-dashed border-gray-300 rounded flex items-center justify-center">
                                        <div class="text-center text-gray-400">
                                            <p class="text-sm">측면도 예시</p>
                                            <p class="text-xs mt-1">2x4 Door</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-6 text-sm text-center text-gray-500">
                                예시 이미지입니다. 아직 간결한 스케치라도 충분합니다.
                            </p>
                        </div>

                        <!-- 파일 첨부 -->
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <p class="text-sm text-gray-700">그림 이미지를 첨부해주세요.</p>
                                <button type="button" onclick="addFileInput()" class="text-sm text-gray-600 hover:text-[var(--main-brown01)] flex items-center gap-1">
                                    + 파일 추가
                                </button>
                            </div>

                            <div id="fileInputsContainer" class="space-y-3">
                                <!-- 파일 입력 1 -->
                                <div class="file-input-row flex items-center gap-3 p-3 border border-gray-200 rounded-md">
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
                                <div class="file-input-row flex items-center gap-3 p-3 border border-gray-200 rounded-md">
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

            <!-- 윤곽 선택 섹션 -->
            <div class="mt-10 md:mt-8 pt-10 md:pt-8 border-t border-gray-200">
                <div class="form-field">
                    <label class="field-label H5 font-semibold">윤곽 선택</label>
                    <div class="field-input">
                        <p class="text-gray-600 text-sm">그림 원산지 이상의 경우 이에 해당 내용을 입력해주세요.</p>

                        <!-- 윤곽 다이어그램 -->
                        <div class="bg-gray-50 p-8 md:p-4 rounded-md">
                            <div class="max-w-[400px] mx-auto relative">
                                <svg viewBox="0 0 400 300" class="w-full">
                                    <!-- 메인 직사각형 -->
                                    <rect x="50" y="50" width="300" height="180" fill="#fff" stroke="#999" stroke-width="2" rx="4"/>

                                    <!-- 좌측 반원 A -->
                                    <path d="M 50 230 Q 30 200 50 170" fill="none" stroke="#999" stroke-width="2"/>
                                    <text x="35" y="205" font-size="20" font-weight="bold" fill="#666">A</text>

                                    <!-- 우측 반원 B -->
                                    <path d="M 350 170 Q 370 200 350 230" fill="none" stroke="#999" stroke-width="2"/>
                                    <text x="365" y="205" font-size="20" font-weight="bold" fill="#666">B</text>

                                    <!-- 화살표 -->
                                    <path d="M 200 260 L 200 280" stroke="#8B4513" stroke-width="3" marker-end="url(#arrowhead)"/>
                                    <polygon points="200,285 195,275 205,275" fill="#8B4513"/>

                                    <!-- 원형 포인트들 -->
                                    <circle cx="150" cy="100" r="12" fill="#F6BC50" stroke="#fff" stroke-width="2"/>
                                    <text x="150" y="105" text-anchor="middle" font-size="12" font-weight="bold" fill="#fff">1</text>

                                    <circle cx="100" cy="180" r="12" fill="#F6BC50" stroke="#fff" stroke-width="2"/>
                                    <text x="100" y="185" text-anchor="middle" font-size="12" font-weight="bold" fill="#fff">2</text>

                                    <circle cx="300" cy="180" r="12" fill="#F6BC50" stroke="#fff" stroke-width="2"/>
                                    <text x="300" y="185" text-anchor="middle" font-size="12" font-weight="bold" fill="#fff">3</text>

                                    <circle cx="200" cy="150" r="12" fill="#F6BC50" stroke="#fff" stroke-width="2"/>
                                    <text x="200" y="155" text-anchor="middle" font-size="12" font-weight="bold" fill="#fff">4</text>
                                </svg>
                            </div>
                        </div>

                        <!-- 치수 입력 그리드 -->
                        <div class="grid grid-cols-2 md:grid-cols-1 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-semibold">1번</label>
                                <div class="flex gap-2">
                                    <input type="number" name="point1" placeholder="0" class="flex-1 px-3 py-2 border border-gray-300 rounded-md text-sm" />
                                    <span class="px-3 py-2 bg-gray-100 rounded-md text-sm">mm</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold">2번</label>
                                <div class="flex gap-2">
                                    <input type="number" name="point2" placeholder="0" class="flex-1 px-3 py-2 border border-gray-300 rounded-md text-sm" />
                                    <span class="px-3 py-2 bg-gray-100 rounded-md text-sm">mm</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold">3번</label>
                                <div class="flex gap-2">
                                    <input type="number" name="point3" placeholder="0" class="flex-1 px-3 py-2 border border-gray-300 rounded-md text-sm" />
                                    <span class="px-3 py-2 bg-gray-100 rounded-md text-sm">mm</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold">4번</label>
                                <div class="flex gap-2">
                                    <input type="number" name="point4" placeholder="0" class="flex-1 px-3 py-2 border border-gray-300 rounded-md text-sm" />
                                    <span class="px-3 py-2 bg-gray-100 rounded-md text-sm">mm</span>
                                </div>
                            </div>
                        </div>

                        <!-- 천장 높이 -->
                        <div class="space-y-2">
                            <label class="text-sm font-semibold">천장 높이</label>
                            <div class="flex gap-2">
                                <input type="number" name="ceiling_height" placeholder="0" class="flex-1 px-3 py-2 border border-gray-300 rounded-md text-sm" />
                                <span class="px-3 py-2 bg-gray-100 rounded-md text-sm">mm</span>
                            </div>
                        </div>

                        <!-- 창문유무 -->
                        <div class="space-y-2">
                            <label class="text-sm font-semibold">창문유무</label>
                            <select name="has_window" class="form-select">
                                <option value="">선택</option>
                                <option value="yes">있음</option>
                                <option value="no">없음</option>
                            </select>
                        </div>

                        <!-- 문 형태유무 -->
                        <div class="space-y-2">
                            <label class="text-sm font-semibold">문 형태유무</label>
                            <select name="door_type" class="form-select">
                                <option value="">선택</option>
                                <option value="sliding">슬라이딩</option>
                                <option value="swing">여닫이</option>
                                <option value="folding">접이식</option>
                                <option value="none">없음</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 도어스토퍼 모양 -->
            <div class="mt-10 md:mt-8 pt-10 md:pt-8 border-t border-gray-200">
                <div class="form-field">
                    <label class="field-label H5 font-semibold">도어스토퍼 모양</label>
                    <div class="field-input">
                        <div class="flex flex-wrap gap-3">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="stopper_shape" value="l_shape" class="w-4 h-4 accent-[var(--main-brown01)]" />
                                <span class="text-sm">ㄱ자 형태</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="stopper_shape" value="reversed_l" class="w-4 h-4 accent-[var(--main-brown01)]" />
                                <span class="text-sm">ㄴ자 형태</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="stopper_shape" value="u_shape" class="w-4 h-4 accent-[var(--main-brown01)]" />
                                <span class="text-sm">ㄷ자 형태</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="stopper_shape" value="custom" class="w-4 h-4 accent-[var(--main-brown01)]" />
                                <span class="text-sm">기타(상담 후 결정)</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 신발 색상 -->
            <div class="mt-10 md:mt-8 pt-10 md:pt-8 border-t border-gray-200">
                <div class="form-field">
                    <label class="field-label H5 font-semibold">신발 색상</label>
                    <div class="field-input">
                        <div class="grid grid-cols-4 md:grid-cols-3 gap-4">
                        <!-- 화이트/화이트 -->
                        <label class="flex flex-col items-center gap-2 cursor-pointer">
                            <input type="radio" name="shoe_color" value="white_white" class="hidden peer" />
                            <div class="w-16 h-16 rounded-full bg-gradient-to-br from-gray-100 to-white border-2 border-gray-200 peer-checked:border-[var(--main-brown01)] peer-checked:border-4 flex items-center justify-center">
                                <div class="w-12 h-12 rounded-full bg-white"></div>
                            </div>
                            <span class="text-xs text-center">화이트/화이트</span>
                        </label>

                        <!-- 화이트 -->
                        <label class="flex flex-col items-center gap-2 cursor-pointer">
                            <input type="radio" name="shoe_color" value="white" class="hidden peer" />
                            <div class="w-16 h-16 rounded-full bg-white border-2 border-gray-200 peer-checked:border-[var(--main-brown01)] peer-checked:border-4"></div>
                            <span class="text-xs text-center">화이트</span>
                        </label>

                        <!-- 블랙그레이 -->
                        <label class="flex flex-col items-center gap-2 cursor-pointer">
                            <input type="radio" name="shoe_color" value="black_gray" class="hidden peer" />
                            <div class="w-16 h-16 rounded-full bg-gray-400 border-2 border-gray-200 peer-checked:border-[var(--main-brown01)] peer-checked:border-4"></div>
                            <span class="text-xs text-center">블랙그레이</span>
                        </label>

                        <!-- 오크 -->
                        <label class="flex flex-col items-center gap-2 cursor-pointer">
                            <input type="radio" name="shoe_color" value="oak" class="hidden peer" />
                            <div class="w-16 h-16 rounded-full bg-[#C19A6B] border-2 border-gray-200 peer-checked:border-[var(--main-brown01)] peer-checked:border-4"></div>
                            <span class="text-xs text-center">오크</span>
                        </label>

                        <!-- 앰버우 -->
                        <label class="flex flex-col items-center gap-2 cursor-pointer">
                            <input type="radio" name="shoe_color" value="amber" class="hidden peer" />
                            <div class="w-16 h-16 rounded-full bg-[#8B4513] border-2 border-gray-200 peer-checked:border-[var(--main-brown01)] peer-checked:border-4"></div>
                            <span class="text-xs text-center">앰버우</span>
                        </label>

                        <!-- 라이트스모크 -->
                        <label class="flex flex-col items-center gap-2 cursor-pointer">
                            <input type="radio" name="shoe_color" value="light_smoke" class="hidden peer" />
                            <div class="w-16 h-16 rounded-full bg-gray-300 border-2 border-gray-200 peer-checked:border-[var(--main-brown01)] peer-checked:border-4"></div>
                            <span class="text-xs text-center">라이트스모크</span>
                        </label>

                        <!-- 다크스모크 -->
                        <label class="flex flex-col items-center gap-2 cursor-pointer">
                            <input type="radio" name="shoe_color" value="dark_smoke" class="hidden peer" />
                            <div class="w-16 h-16 rounded-full bg-gray-600 border-2 border-gray-200 peer-checked:border-[var(--main-brown01)] peer-checked:border-4"></div>
                            <span class="text-xs text-center">다크스모크</span>
                        </label>

                        <!-- 상담 후 결정 -->
                        <label class="flex flex-col items-center gap-2 cursor-pointer">
                            <input type="radio" name="shoe_color" value="consult" class="hidden peer" />
                            <div class="w-16 h-16 rounded-full bg-gray-100 border-2 border-gray-300 border-dashed peer-checked:border-[var(--main-brown01)] peer-checked:border-4 flex items-center justify-center">
                                <span class="text-2xl text-gray-400">?</span>
                            </div>
                            <span class="text-xs text-center">상담 후 결정</span>
                        </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 기둥 색상 -->
            <div class="mt-10 md:mt-8 pt-10 md:pt-8 border-t border-gray-200">
                <div class="form-field">
                    <label class="field-label H5 font-semibold">기둥 색상</label>
                    <div class="field-input">
                        <div class="grid grid-cols-4 md:grid-cols-3 gap-4">
                        <!-- 실버 -->
                        <label class="flex flex-col items-center gap-2 cursor-pointer">
                            <input type="radio" name="pillar_color" value="silver" class="hidden peer" />
                            <div class="w-16 h-16 rounded-full bg-gray-200 border-2 border-gray-200 peer-checked:border-[var(--main-brown01)] peer-checked:border-4"></div>
                            <span class="text-xs text-center">실버</span>
                        </label>

                        <!-- 블랙앤 -->
                        <label class="flex flex-col items-center gap-2 cursor-pointer">
                            <input type="radio" name="pillar_color" value="black" class="hidden peer" />
                            <div class="w-16 h-16 rounded-full bg-gray-700 border-2 border-gray-200 peer-checked:border-[var(--main-brown01)] peer-checked:border-4"></div>
                            <span class="text-xs text-center">블랙앤</span>
                        </label>

                        <!-- 상담 후 결정 -->
                        <label class="flex flex-col items-center gap-2 cursor-pointer">
                            <input type="radio" name="pillar_color" value="consult" class="hidden peer" />
                            <div class="w-16 h-16 rounded-full bg-gray-100 border-2 border-gray-300 border-dashed peer-checked:border-[var(--main-brown01)] peer-checked:border-4 flex items-center justify-center">
                                <span class="text-2xl text-gray-400">?</span>
                            </div>
                            <span class="text-xs text-center">상담 후 결정</span>
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
                <button type="button" onclick="history.back()" class="btn default">
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
    newRow.className = 'file-input-row flex items-center gap-3 p-3 border border-gray-200 rounded-md';
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