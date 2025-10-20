# 폼 페이지 작성 가이드

이 가이드는 `global.css`에 정의된 공통 폼 클래스를 사용하여 새로운 폼 페이지를 만드는 방법을 설명합니다.

## 기본 구조

### 1. 기본 폼 필드 (label 좌측, input 우측)

```html
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
```

### 2. Textarea 필드

```html
<div class="form-field">
    <label class="field-label H5 font-semibold">내용</label>
    <div class="field-input">
        <textarea
            name="content"
            rows="6"
            placeholder="내용을 입력해주세요"
            class="form-textarea"
        ></textarea>
    </div>
</div>
```

### 3. Select 필드

```html
<div class="form-field">
    <label class="field-label H5 font-semibold" required>카테고리</label>
    <div class="field-input">
        <select name="category" required class="form-select">
            <option value="">선택하세요</option>
            <option value="1">옵션 1</option>
            <option value="2">옵션 2</option>
        </select>
    </div>
</div>
```

### 4. 도움말 텍스트 추가

```html
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
        <p class="form-helper">※ 숫자만 입력해주세요 (하이픈 포함 가능)</p>
    </div>
</div>
```

### 5. 복잡한 입력 필드 (주소 검색 등)

```html
<div class="form-field">
    <label class="field-label H5 font-semibold" required>주소</label>
    <div class="field-input">
        <div class="flex gap-2">
            <input
                type="text"
                name="address"
                required
                placeholder="주소를 검색하세요"
                class="form-input flex-1"
                readonly
            />
            <button
                type="button"
                onclick="searchAddress()"
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
        <p class="form-helper">※ 정확한 주소를 입력해주세요</p>
    </div>
</div>
```

### 6. 제출 버튼

```html
<div class="form-buttons">
    <button type="button" onclick="history.back()" class="btn default">
        취소
    </button>
    <button type="submit" class="btn sub">
        제출하기
    </button>
</div>
```

## 사용 가능한 클래스

### 폼 레이아웃
- `.form-field`: 기본 폼 필드 컨테이너 (label 좌측 120px, input 우측)
- `.field-label`: 라벨 스타일
- `.field-input`: 입력 필드 컨테이너

### 입력 요소
- `.form-input`: 일반 input 필드
- `.form-textarea`: textarea 필드
- `.form-select`: select 드롭다운

### 기타
- `.form-helper`: 도움말 텍스트
- `.form-buttons`: 버튼 그룹 컨테이너

### Required 표시
- `label`에 `required` 속성을 추가하면 자동으로 빨간색 `*`이 표시됩니다

```html
<label class="field-label H5 font-semibold" required>이름</label>
<!-- 자동으로 "이름*" 으로 표시됨 -->
```

## 반응형

- **PC (768px 이상)**: label 좌측(120px), input 우측
- **모바일 (768px 미만)**: label과 input이 세로로 배치됨

모든 스타일은 `global.css`에 정의되어 있으므로 별도의 CSS 작성 없이 클래스만 사용하면 됩니다.

## 전체 예시

```php
<?php
header('Content-Type: text/html; charset=utf-8');
include_once('../common.php');
$g5['title'] = "문의하기";
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/global.css">', 0);
include_once(G5_PATH.'/head.php');
?>

<main>
    <div class="container mx-auto px-4 py-8">
        <h1 class="PageTitleText font-bold">문의하기</h1>
    </div>

    <section class="py-12">
        <div class="container mx-auto px-4">
            <form action="" method="post" class="max-w-4xl mx-auto">

                <!-- 이름 -->
                <div class="form-field">
                    <label class="field-label H5 font-semibold" required>이름</label>
                    <div class="field-input">
                        <input type="text" name="name" required placeholder="이름을 입력해주세요" class="form-input" />
                    </div>
                </div>

                <!-- 연락처 -->
                <div class="form-field">
                    <label class="field-label H5 font-semibold" required>연락처</label>
                    <div class="field-input">
                        <input type="tel" name="phone" required placeholder="연락처를 입력해주세요" class="form-input" />
                    </div>
                </div>

                <!-- 내용 -->
                <div class="form-field">
                    <label class="field-label H5 font-semibold" required>문의내용</label>
                    <div class="field-input">
                        <textarea name="content" rows="6" required placeholder="내용을 입력해주세요" class="form-textarea"></textarea>
                    </div>
                </div>

                <!-- 제출 버튼 -->
                <div class="form-buttons">
                    <button type="button" onclick="history.back()" class="btn default">취소</button>
                    <button type="submit" class="btn sub">제출하기</button>
                </div>
            </form>
        </div>
    </section>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
```

## 참고
- 실제 구현 예시: `/sub/as-inquiry.php`
- CSS 정의: `/css/global.css`
