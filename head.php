<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
?>

<!-- 기본 헤더 (테마가 없을 때만 사용) -->
<header>헤더</header>