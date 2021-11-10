#!/bin/bash
yum install -y php71-mysqlnd

mkdir -p /tmp/layer/
cd /tmp/layer

mkdir -p lib/php/7.1/modules

for lib in mysqli.so mysqlnd.so pdo_mysql.so pdo.so; do
  cp "/usr/lib64/php/7.1/modules/${lib}" lib/php/7.1/modules
done

zip -r /opt/layer/php71_pdo.zip .