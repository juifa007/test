<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Again!!Again!!!</title>
</head>
<body>

<?php
$begin = 16;
$end = 22;

for ($i = $begin; $i <= $end; $i++)
{
    echo "<p style = \"font-size:".$i."pt\">PHP Example</p>";
}

?>


    <h1>Hello World !!! From PHP</h1>
    <H2>再次重頭來，要重複幾百次啊！！ From PHP</H2>
<?php
    echo "This is after Hypertext Preprocessor !!!!!!!!!!"
// 等同底下 html 的內容
?>
    This is after Hypertext Preprocessor !!!!!!!!!!<br>

    <table border="0" cellpadding="0" cellspacing="0" width="1180">
        <tbody>
        <tr>
            <td height="10"></td>
        </tr>
        <tr>
            <td>
                <div class="homebanner" id="BannerSlideShow">
                    <?php
                    $url = ["http://tw.yahoo.com", "http://homestead.app/connectToMySQL.php"];
                    for( $i = 0; $i < 2; $i++)
                    {
                        echo "<a target = '_blank' href=$url[$i]>test<br></a>";
                    }
                    ?>
<!--                    <a target="_blank" href="https://www.lativ.com.tw/OnSale/1p1180" onclick="$.common.statisticClick(0)">-->
<!--                        <img src="https://s4.lativ.com.tw/i/ProductShow/32022_1P1180_1180X557_171031_TW3.jpg" width="1180" height="557"alt="" /></a>-->
<!--                    <a target="_blank" href="https://www.lativ.com.tw/Page/edm20171031ad?pid=171031536" onclick="$.common.statisticClick(0)">-->
<!--                        <img src="https://s1.lativ.com.tw/i/ProductShow/EDM_32027_1180X557_171031_TW.jpg" width="1180" height="557"alt=""style="display:none" /></a>-->
<!--                    <a target="_blank" href="https://www.lativ.com.tw/Page/2017FW_WARM_KNIT" onclick="$.common.statisticClick(0)">-->
<!--                        <img src="https://s2.lativ.com.tw/i/ProductShow/WARMKNIT_1180X557_171101_TW.jpg" width="1180" height="557"alt=""style="display:none" /></a>-->
<!--                    <a target="_blank" href="https://www.lativ.com.tw/OnSale/2P69D" onclick="$.common.statisticClick(0)">-->
<!--                        <img src="https://s3.lativ.com.tw/i/ProductShow/28252_1P69D_1180X557_171030_TW2.jpg" width="1180" height="557"alt=""style="display:none" /></a>-->
<!--                    <a target="_blank" href="https://www.lativ.com.tw/SpecialIssue/outerwear" onclick="$.common.statisticClick(0)">-->
<!--                        <img src="https://s4.lativ.com.tw/i/ProductShow/OUTERWEAR_1180X557_171028_tw.jpg" width="1180" height="557"alt=""style="display:none" /></a>-->
<!--                    <a target="_blank" href="https://www.lativ.com.tw/SpecialIssue/FLEECE" onclick="$.common.statisticClick(0)">-->
<!--                        <img src="https://s1.lativ.com.tw/i/ProductShow/FLEECE_1180X557_171026_TW.jpg" width="1180" height="557"alt=""style="display:none" /></a>-->
<!--                    <a target="_blank" href="https://www.lativ.com.tw/OnSale/1P499" onclick="$.common.statisticClick(0)">-->
<!--                        <img src="https://s2.lativ.com.tw/i/ProductShow/32720_1P499_1180X557_171031_TW.jpg" width="1180" height="557"alt=""style="display:none" /></a>-->
                </div>
                <div class="slide-pager">
                    <a class="pager-first" data-slide-index="0"></a>
                    <a data-slide-index="1"></a>
                    <a data-slide-index="2"></a>
                    <a data-slide-index="3"></a>
                    <a data-slide-index="4"></a>
                    <a data-slide-index="5"></a>
                    <a data-slide-index="6"></a>
                </div>
            </td>
        </tr>
        <tr>
            <td height="10">
                <img src="https://s.lativ.com.tw/i/Page/images/blank.gif" />
            </td>
        </tr>
        <tr>
        </tr>
        </tbody>
    </table>
</body>
</html>