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
