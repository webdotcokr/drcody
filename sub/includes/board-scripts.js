/**
 * 게시판 공통 스크립트
 * - 비밀번호 확인 모달
 * - 아코디언 토글 기능
 */

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
