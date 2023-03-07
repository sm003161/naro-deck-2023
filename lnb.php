<!-- LNB -->
    <nav class="lnb light-bd-bt">
        <ul>
<?php
    // LNB 메뉴를 배열에 담기
    $urls = array(
        '소개' => '/greeting.php',
        '오시는 길' => '/map.php'
    );

    // LNB 메뉴를 뿌려주기
    foreach ($urls as $name => $urls) {
        print '<li'.(($currentPage === $name) ? ' class="on" ': '').'><a href="'.$urls.'" >'.$name.'</a></li>';
    }
?>
        </ul>
    </nav>