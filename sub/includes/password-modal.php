<!-- 비밀번호 확인 모달 -->
<div class="password-modal" id="passwordModal">
    <div class="password-modal-content">
        <h3 class="password-modal-title text-center">작성자만 확인할 수 있습니다.</h3>
        <div class="password-input-group">
            <input type="password" class="password-input" id="passwordInput" placeholder="비밀번호를 입력하세요.">
            <p class="password-error" id="passwordError">비밀번호가 일치하지 않습니다.</p>
        </div>
        <div class="password-modal-buttons">
            <button class="password-modal-btn cancel" onclick="closePasswordModal()">취소</button>
            <button class="password-modal-btn confirm" onclick="checkPassword()">확인</button>
        </div>
    </div>
</div>
