web: php-fpm
worker1: php bin/console messenger:consume kafka -vv
worker2: php bin/console messenger:consume kafka_views -vv
worker3: php bin/console messenger:consume kafka_user_search -vv
