<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
    <title>index</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/divstyle.css">
    <link rel="stylesheet" href="css/hoverstyle.css">
    <link rel="stylesheet" href="css/buttonstyle.css">
    <link rel="stylesheet" href="css/mediaquery.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
    <script>
      $(window).ready(function() {
        $("#main").css("display","none");
        $("#main").fadeIn(500);
      });
      </script>
  </head>
  <body>
    <header>
      <!-- 제목 및 메뉴와 하위항목 -->
      <div id="all">
      <h1><a href="index.php">HTML</a></h1>
        <nav>
          <div id="List">
            <?php
              $list1 = scandir('./data/item1');
              $i = 0;
              while($i < count($list1)) {
                $splitlist1[$i] = substr($list1[$i], 2);
                $i = $i + 1;
              }

              $list2 = scandir('./data/introductionitems');
              $j = 0;
              while($j < count($list2)) {
                $splitlist2[$j] = substr($list2[$j], 2);
                $j = $j + 1;
              }

              $list3 = scandir('./data/htmlitems');
              $k = 0;
              while($k < count($list3)) {
                $splitlist3[$k] = substr($list3[$k], 2);
                $k = $k + 1;
              }

            echo "<ul id=\"menu\">\n";
            echo "<li id=\"item1\"><a href=\"index.php?id=$list1[2]\">소개</a>\n";
            echo "<ul id=\"item2\">\n";
            echo "<li><a href=\"index.php?id=$list1[2]\">$splitlist1[2]</a></li>\n";

            $i = 2;
            while($i < count($list2)) {
              echo "<li><a href=\"index.php?id=$list2[$i]\">$splitlist2[$i]</a></li>\n";
              $i = $i + 1;
            }

            echo "</ul>\n</li>\n";
            echo "<li id=\"item1\">\n";
            echo "<a href=\"index.php?id=$list1[3]\">사용법</a>\n";
            echo "<ul id=\"item2\">\n";
            echo "<li><a href=\"index.php?id=$list1[3]\">$splitlist1[3]</a></li>\n";

            $i = 2;
            while($i < count($list3)) {
              echo "<li><a href=\"index.php?id=$list3[$i]\">$splitlist3[$i]</a></li>\n";
              $i = $i + 1;
            }

            echo "</ul>\n</li>\n";
            echo "<li id=\"item1\"><a href=\"index.php?id=$list1[4]\">출처</a></li>\n";
            echo "<li id=\"item1\"><a href=\"index.php?id=$list1[5]\">활용해보기</a></li>\n";
            echo "</ul>\n";
          ?>

          </div>
        </nav>
      </div>
    </header>
    <div id="serching">
      <button id="serchingbutton_On" type="button" name="button" onclick="searchingonoff(false); return false;">검색하기</button>
      <div id="search">
        <select id="searchingsite" name="searchingsite">
          <option value="">검색엔진</option>
          <option value="google">구글</option>
          <option value="daum">다음</option>
          <option value="nate">네이트</option>
        </select>
        <!-- <form class="searchform" action="index.html" method="post"> -->
          <input id="searchtext" type="text" placeholder="검색어 입력">
          <button id="searchbutton" onclick="search()">검색</button>
        <!-- </form> -->
        <button id="serchingbutton_Off" onclick="searchingonoff(true); return false;">검색종료</button>
      </div>
    </div>
  <!-- Main -->
    <div id="main">
      <?php
        if(isset($_GET['id'])) {
          if(file_exists("data/item1/".$_GET['id'])) {
            if($_GET['id'] == "1.introduction") {
              echo "<div id=\"" . substr($_GET['id'], 2) . "\">";
              echo file_get_contents("data/item1/".$_GET['id']);
              if(isset($_GET['tip'])) {
                echo "<script>switchgrid('#introduction');</script>";
                echo file_get_contents("data/tip/".$_GET['tip']);
              }
              echo "</div>";
            }
            else {
              echo file_get_contents("data/item1/".$_GET['id']);
            }
          }
          else if(file_exists("data/introductionitems/".$_GET['id'])) {
            echo "<div id=\"" . substr($_GET['id'], 2) . "\">";
            echo file_get_contents("data/introductionitems/".$_GET['id']);
            if(isset($_GET['tip'])) {
              echo "<script>switchgrid('#". substr($_GET['id'], 2) . "');</script>";
              echo file_get_contents("data/tip/".$_GET['tip']);
            }
            echo "</div>";
          }
          else if(file_exists("data/htmlitems/".$_GET['id'])) {
            echo file_get_contents("data/htmlitems/".$_GET['id']);
          }
        }
        else {
          echo "<div id=\"maintext\">\n";
          echo "<div id=\"One\">\n";
          echo "<a href=\"index.php?id=1.introduction\"><span>Introduction</span></a>\n";
          echo "</div>\n";
          echo "<div id=\"Two\">\n";
          echo "<a href=\"index.php?id=2.CSS\"><span>CSS</span></a>\n";
          echo "</div>\n";
          echo "<div id=\"Three\">\n";
          echo "<a href=\"index.php?id=3.JavaScript\"><span>JavaScript</span></a>\n";
          echo "</div>\n";
          echo "<div id=\"Four\">\n";
          echo "<a href=\"index.php?id=2.htmls\"><span>사용법</span></a>\n";
          echo "</div>\n";
          echo "<div id=\"five\">\n";
          echo "<a href=\"index.php?id=4.Use\"><span>사용해보기</span></a>\n";
          echo "</div>\n";
          echo "<div id=\"six\">\n";
          echo "<a href=\"index.php?id=3.Sources\"><span>출처</span></a>\n";
          echo "</div>\n";
          echo "</div>\n";
        }

      ?>
    </div>
    <footer>
      SWEETCANDY1008 / Hankyong university Computer Engineering Kwon Ju Young<br>
      github : <a href="https://github.com/SWEETCANDY1008">https://github.com/SWEETCANDY1008</a>
    </footer>
  </body>
</html>
