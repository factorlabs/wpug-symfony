cd %~dp0/../
php app/console doctrine:database:drop
php app/console doctrine:database:create
php app/console doctrine:schema:update --force
php app/console doctrine:fixtures:load
timeout 30