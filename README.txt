<-- Cho Tai Nghe -->

Source bao gồm 2 phần code: 
1. phần code php chotainghe chưa hoàn thiện hẳn nhưng đã có thể sử dụng
2. Phần code chính được làm bằng framework Yii2basic

Hướng dẫn sử dụng. 
1. import SQL từ file yii2basic trong thư mục yiibasic/database
2. add đoạn sau vô file xampp/apache/conf/httpd-vhosts.conf

<VirtualHost *:80>
    ServerAdmin webmaster@chotainghe.com
    DocumentRoot "C:/xampp/htdocs/chotainghe/"
    ServerName chotainghe.com
    ErrorLog "logs/chotainghe.com-error.log"
    CustomLog "logs/chotainghe.com-access.log" common
</VirtualHost>

3. add đoạn sau vô file host trong C:\Windows\System32\drivers\etc

127.0.0.1		chotainghe.com

4. Truy cập theo đường dẫn: http://chotainghe.com/Yiibasic/web/index.php

Enjoy it!