# 點餐系統和官網首頁

這是一個使用PHP為後端，以及Laravel框架的網頁點餐系統，資料庫使用ＭｙＳＱＬ，前端同時也使用ＡＪＡＸ技術，透過MVC架構進行設計，分離了前後端

系統包含了訂單管理，購物車，自動回答客服機器人，會員中心，使用者點餐系統，會員註冊和登入

themes/cms-sample裡面是主要編寫的檔案部分，其他大部分都是系統自動產生的檔案


# October CMS的安裝嚮導

嚮導安裝是為**非技術用戶**推薦的安裝 October 的方法。 它比命令行安裝更簡單，不需要任何特殊技能。

> **注意：**如果您是開發人員，我們建議您改為通過 Composer 安裝：https://octobercms.com/docs/console/commands#console-install-composer

1. 在您的服務器上準備一個空目錄。 它可以是子目錄、域根或子域。
1. [下載安裝包文件](https://github.com/octobercms/install/archive/master.zip)。
1. 將安裝程序存檔解壓到準備好的目錄中。
1. 授予對安裝目錄及其所有子目錄和文件的寫權限。
1. 在您的 Web 瀏覽器中導航到 install.php 腳本。
1. 按照安裝說明進行操作。

## 最低系統要求

October CMS 有一些系統要求：

* PHP 7.2 或更高版本
* PDO PHP 擴展（以及您要連接的數據庫的相關驅動程序）
* cURL PHP 擴展
* OpenSSL PHP 擴展
* Mbstring PHP 擴展
* ZipArchive PHP 擴展
* GD PHP 擴展
* SimpleXML PHP 擴展

某些操作系統發行版可能需要您手動安裝一些必需的 PHP 擴展。

